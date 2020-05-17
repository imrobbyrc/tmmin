<?php

class Report extends CI_Controller {  
 
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
        $this->load->view('reporting/index');
    }

    public function dailyReport()
    {

        if($_POST)
        {
            $result = array();

            $shift = $this->input->post('shift');
            $color = $this->input->post('color');
            $datetime = $this->input->post('datetime');

            $queryTime = 'left(ev.timestamp,13) >= "' . $datetime . ' 07" and  left(ev.timestamp,13) <= "' . $datetime . ' 19"';
            $clock = [7,8,9,10,11,12,13,14,15,16,17,18,19];
            if($shift == 'malam'){
                $queryTime = 'left(ev.timestamp,13) >= "' . $datetime . ' 20" and  left(ev.timestamp,13) <= "' . $datetime . ' 06"';
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
    
                if(!in_array($paramId,$stdExec)){
                    $stdExec[] = $paramId;
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

            //Send To View
            $reportData['tanggal'] = $datetime;
            $reportData['shift'] = $shift;
            $reportData['color'] = $color;
            $reportData['standardValue'] = $stdResult;
            $reportData['arrayMaster'] = $dataku;
            $this->load->view('reporting/report_pdf',$reportData);

        }

    }

}