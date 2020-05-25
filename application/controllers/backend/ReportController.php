<?php

class ReportController extends Public_Controller {  
 
    function __construct() {
        parent::__construct();
        $this->load->model('M_EquipDef');
        $this->load->model('M_EquipVal');
        $this->load->library('Pdf'); 

        $this->fces = ["Fce Combustion", "Fce Outlet Sand",	"Fce Inlet Sand", "Top Temp. Fce",
        "Pressure",	"Damper Open",	"Damper Open", "Pressure",	"Damper Open", "Pressure",	
        "Damper Open", "Pressure", "Damper Open","Pressure", "Damper Open", "Nozzle No. 1",	
        "Nozzle No. 2",	"Nozzle No. 3",	"Temp. No. 1", "Temp. No. 2", "Damper Open", "DC Inlet Temp. <br><span class='pt-3'>(T10b)</span>", 
        "Conveying", "ACCUM"]; 

        $this->codes = ["(T1/S1)", "(T2/S2)", "(T3/S3)", "(T4/S4)", "", "MOT2", "MOT3", "PT4", "MOT4",
            "PT6", "MOT6", "INV1", "PT5", "MOT5", "PT7", "MOT7", "Tc2", "Tc3", "Tc4", "Tc5", "Tc6", "MOT8", "T10b", "", ""];

        $this->units = ["°C","°C","°C","°C","mmAq","%","%","mmAq","%","mmAq","%","%","mmAq","%","mmAq"
        ,"%","°C","°C","°C","°C","°C","%","°C","",""];

        // check login nanti disini
        // if (!$this->session->userdata('login')) {
        //      redirect('backend/cmsauth');
        // } 
        
    }

    private function getData($shift,$datetime){

        $queryTime = 'left(ev.timestamp,13) >= "' . $datetime . ' 07" and  left(ev.timestamp,13) <= "' . $datetime . ' 19"';
        $queryAlarm = 'left(ah.starttime,13) >="' . $datetime . ' 07" and left(ah.endtime,13) <= "'. $datetime . ' 19"'; 
        $clock = [7,8,9,10,11,12,13,14,15,16,17,18,19];

        if($shift == 'malam'){
            $nextDay = date('Y-m-d', strtotime($datetime. "+1 days"));
            $queryTime = 'left(ev.timestamp,13) >= "' . $datetime . ' 20" and  left(ev.timestamp,13) <= "' . $nextDay . ' 06"';
            $queryAlarm = 'left(ah.starttime,13) >="' . $datetime . ' 20" and left(ah.endtime,13) <= "'. $nextDay . ' 06"';
            $clock = [20,21,22,23,24,01,02,03,04,05,06];
        }

        $getParam = $this->db->query("SELECT params_uid FROM furnace_param_definition ")->result();
    
        $datas = $this->db->query("SELECT ed.params_uid, ev.param_id, SUM(ev.value)
                                AS temp, count(ev.id) as total_data ,left(ev.timestamp,13) AS clock
                                FROM furnace_field_value ev JOIN furnace_param_definition ed on  ev.param_id  = ed.id
                                WHERE $queryTime GROUP BY ev.param_id, left(ev.timestamp,13), ed.params_uid")->result();
                         
        //Repot Data
        foreach($clock as $row){
            $dataSatuan = [];

            $dataSatuan['Clock'] = $row;
            $dataSatuan['Self'] = '';

            foreach($getParam as $value ){ //parsing params_uid
                $dataSatuan[$value->params_uid] = '';
            }

            foreach($dataSatuan as $key => $val){

                foreach($datas as $data){
                    $valueFix = $data->temp / $data->total_data; //data penjumlahan data dibagi banyak data
                    if(substr($data->clock,11,2) == $row){

                        if($data->params_uid == $key){
                            $dataSatuan[$key] = round($valueFix,2);

                        }

                    } 
                
                }

            }

            $dataResult[] = $dataSatuan;

        }

            
        //Standart Value
        $std = $this->db->query("SELECT param_id, lowval, highval, timestamp FROM furnace_std_val ev WHERE $queryTime")->result_array();

        if(count($std) == 0){ //jika tidak ada std untuk tanggal tersebut, ambil std tanggal terbaru

            $std = $this->db->query("SELECT param_id, lowval, highval,timestamp FROM furnace_std_val ev ORDER BY timestamp DESC ")->result_array();

        }

        $stdExec = array();
        $stdResult = array();
        foreach($std as $key => $value){ //remove duplicate
            $paramId = $value['param_id'];

            if (!isset($stdExec[$paramId])) { 
                
                $stdExec[$paramId] = $paramId;
                $stdResult[$key] = $value; 
                
            }
        
        }
        usort($stdResult, function($a, $b) { //sort array berdasarkan urutan param_id
                return $a['param_id'] - $b['param_id'];
            });
        $inserted = array( 
            array(
                'param_id' => '' ,
                'lowval' => '',
                'highval' => '',
                'timestamp' => ''
            )
        );
        array_splice( $stdResult, 4, 0, $inserted ); //insert array kosong untuk pressure



        //alarm report
        $alarm = $this->db->query("SELECT ed.params_uid, am.alarm_msg, ah.field_val, ah.starttime, ah.endtime  
                                    FROM furnace_alarm_history ah JOIN furnace_alarm_msg am ON ah.msg_id = am.id JOIN furnace_param_definition ed ON ed.id = am.params_id
                                    WHERE $queryAlarm")->result();

        foreach ($alarm as $key => $val) {
            $data   = new \stdClass();

            //Field
            $field = array('params_uid','alarm_msg','field_val','starttime','endtime');
            foreach ($field as $val_field) {
                $data->$val_field = $val->$val_field;
            }
            
            $duration = $this->getDuration($val->starttime,$val->endtime);
        
            if(isset($duration))
            {
                $data->duration = $duration;
            }
            else
            {
                $data->duration = null;
            }
            

            $alarmResult[] = $data;
        }

        $result = array();
        $result['alarm'] = $alarmResult;
        $result['standardValue'] = $stdResult;
        $result['dataDB'] = $dataResult;

        return $result;

    }

    private function getDuration($start,$end){

        $diff = abs(strtotime($end) - strtotime($start));
        $years   = floor($diff / (365*60*60*24)); 
        $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
        $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
        $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
        $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 

        $duration = $hours .'j '. $minuts . 'm';
        return $duration;
        //printf("%d years, %d months, %d days, %d hours, %d minuts\n, %d seconds\n", $years, $months, $days, $hours, $minuts, $seconds);
    }


    public function index()
    {
        // Meta Desc
		$this->data_header['browser_title'] =  ucwords('Home') . ' | Report Automation';
		$this->data_header['meta_description'] = ucwords('Home') . ' | Report Automation';
		$this->data_header['meta_image'] = base_url('assets/files/logo.jpg');
		$this->data_header['stylesheets'][] = 'report';
		$this->data_header['stylesheets'][] = 'jquery-ui';

		// Footer 
		$this->data_footer['scripts'][] = 'report';
        $this->data_footer['scripts'][] = 'jquery-ui.min';

        $shift = strtolower($this->security->xss_clean($this->input->post('shift')));
        $color = strtolower($this->security->xss_clean($this->input->post('color')));
        $datetime = $this->security->xss_clean($this->input->post('datetime'));

        $stdResult = array();
        $alarmResult = array();
        $dbResult = array();

        if($_POST)
        {
            
            $dbData = $this->getData($shift,$datetime);
            $stdResult = $dbData['standardValue'];
            $alarmResult = $dbData['alarm'];
            $dbResult = $dbData['dataDB'];

            if($datetime.$shift == $this->input->post('old_date') ){
                //$this->cache->delete($datetime.$shift);
                $this->cache->save($datetime.$shift,json_encode($_POST)); //save data to cache with key date
            }
            
            
        }
        
        //temp data
        $tempFile = $this->cache->get($datetime.$shift); //then get data for view
        $tempFile = json_decode($tempFile,true);
    
        $reportData['datetime'] = isset($datetime) ? $datetime : '';
        $reportData['shift'] = isset($shift) ? $shift : '';
        $reportData['color'] = isset($color) ? $color : '';
        $reportData['standardValue'] = $stdResult;
        $reportData['arrayMaster'] = $dbResult;
        $reportData['alarm'] = $alarmResult;
        $reportData['fces'] = $this->fces;
        $reportData['codes'] = $this->codes;
        $reportData['units'] = $this->units;

        // static content
        $reportData['pic_name'] = isset($tempFile['pic_name']) ? $tempFile['pic_name'] : '';
        $reportData['stdlow'] = isset($tempFile['stdlow']) ? $tempFile['stdlow'] : '';
        $reportData['stdhigh'] = isset($tempFile['stdhigh']) ? $tempFile['stdhigh'] : '';
        $reportData['conveying'] = isset($tempFile['conveying']) ? $tempFile['conveying'] : array();
        $reportData['accum'] = isset($tempFile['accum']) ? $tempFile['accum'] :  array();
        $reportData['lng'] = isset($tempFile['lng']) ? $tempFile['lng'] :  array();
        $reportData['air'] = isset($tempFile['air']) ? $tempFile['air'] :  array();
        $reportData['time_prod'] = isset($tempFile['time_prod']) ? $tempFile['time_prod'] :  array();
        $reportData['alarm_mslh'] = isset($tempFile['alarm_mslh']) ? $tempFile['alarm_mslh'] : '';
        $reportData['alarm_solve'] = isset($tempFile['alarm_solve']) ? $tempFile['alarm_solve'] : '';
        $reportData['alarm_pic'] = isset($tempFile['alarm_pic']) ? $tempFile['alarm_pic'] : '';
        $reportData['alarm_hasil'] = isset($tempFile['alarm_hasil']) ? $tempFile['alarm_hasil'] : '';
        $reportData['line_stop'] = isset($tempFile['line_stop']) ? $tempFile['line_stop'] : '';
        $reportData['efficiency'] = isset($tempFile['efficiency']) ? $tempFile['efficiency'] : '';
        $reportData['std_il'] = isset($tempFile['std_il']) ? $tempFile['std_il'] : '';
        $reportData['siang_jam'] = isset($tempFile['siang_jam']) ? $tempFile['siang_jam'] : '';
        $reportData['siang_il'] = isset($tempFile['siang_il']) ? $tempFile['siang_il'] : '';
        $reportData['siang_avg'] = isset($tempFile['siang_avg']) ? $tempFile['siang_avg'] : '';
        $reportData['malam_jam'] = isset($tempFile['malam_jam']) ? $tempFile['malam_jam'] : '';
        $reportData['malam_il'] = isset($tempFile['malam_il']) ? $tempFile['malam_il'] : '';
        $reportData['malam_avg'] = isset($tempFile['malam_avg']) ? $tempFile['malam_avg'] : '';

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "report-automation.pdf";

        //$this->load->view('reporting/rpdf', $reportData); 
        
        if($this->agent->is_mobile()){
			$this->load->view('template/header', $this->data_header);
            $this->load->view('reporting/indexpdf',$reportData);
			
		}else{
			$this->load->view('template/header', $this->data_header);
            $this->load->view('reporting/indexpdf',$reportData);
			
		} 

    }
    
}