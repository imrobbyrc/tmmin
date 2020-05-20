<?php

class Report extends Public_Controller {  
 
    function __construct() {
        parent::__construct();
        $this->load->model('M_EquipDef');
        $this->load->model('M_EquipVal');
        $this->load->library('Pdf'); 
        
        // check login nanti disini
        // if (!$this->session->userdata('login')) {
        //      redirect('backend/cmsauth');
        // } 
        
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

		if($this->agent->is_mobile()){
			$this->load->view('template/header', $this->data_header);
            $this->load->view('reporting/index');
			$this->load->view('template/footer', $this->data_footer);
		}else{
			$this->load->view('template/header', $this->data_header);
            $this->load->view('reporting/index');
			$this->load->view('template/footer', $this->data_footer);
		} 
    }

    public function dailyReport()
    {

        if($_POST)
        {
            $result = array();

            $shift = strtolower($this->security->xss_clean($this->input->post('shift')));
            $color = strtolower($this->security->xss_clean($this->input->post('color')));
            $datetime = $this->security->xss_clean($this->input->post('datetime'));

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
            $dataku = [];
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
                                $dataSatuan[$key] = round($valueFix,3);
    
                            }
    
                        } 
                    
                    }

                }

                $dataku[] = $dataSatuan;

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
    
                // if(!in_array($paramId,$stdExec)){
                //     $stdExec[] = $paramId;
                //     $stdResult[$key] = $value; 
                // }

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



            $alarmResult = array();
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

            //Send To View
            $reportData['tanggal'] = $datetime;
            $reportData['shift'] = $shift;
            $reportData['color'] = $color;
            $reportData['standardValue'] = $stdResult;
            $reportData['arrayMaster'] = $dataku;
            $reportData['alarm'] = $alarmResult;  

            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->filename = "report-automation.pdf";
            // $this->load->view('reporting/report_pdf'); 
            $this->pdf->load_view('reporting/report_pdf', $reportData); 

        }

    }

    private function getDuration($start,$end){

        $diff = abs(strtotime($end) - strtotime($start));
        $years   = floor($diff / (365*60*60*24)); 
        $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
        $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
        $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
        $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 

        $duration = $hours .' Jam '. $minuts . ' Menit';
        return $duration;
        //printf("%d years, %d months, %d days, %d hours, %d minuts\n, %d seconds\n", $years, $months, $days, $hours, $minuts, $seconds);
    }

    
}