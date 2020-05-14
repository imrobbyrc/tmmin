<?php

class Report extends CI_Controller {  
 
    function __construct() {
        parent::__construct();
        $this->load->model('M_EquipDef');
        $this->load->model('M_EquipVal');

        $this->jumlah_data = 720; //total data untuk 1 jam dengan interval 5 detik


        // check login nanti disini
        // if (!$this->session->userdata('login')) {
        //      redirect('backend/cmsauth');
        // } 
    }


    public function index()
    {

        for($i = 7; $i <= 19; $i++){
            $array[$i]['Fce Combustion'] = 'abc';
            $array[$i]['Fce Outlet Sand'] = 'abc';
            $array[$i]['Fce Inlet Sand'] = 'abc';
            $array[$i]['Top Temp. Fce'] = 'abc';
            $array[$i]['PressureBlank'] = '';
            $array[$i]['Damper Open'] = 'abc';
            $array[$i]['Damper Open'] = 'abc';
            $array[$i]['Pressure'] = 'abc';
            $array[$i]['Damper Open'] = 'abc';
            $array[$i]['Pressure'] = 'abc';
            $array[$i]['Damper Open'] = 'abc';
            $array[$i]['Speed Screw Feeder'] = 'abc';
            $array[$i]['Pressure'] = 'abc';
            $array[$i]['Damper Open'] = 'abc';
            $array[$i]['Pressure'] = 'abc';
            $array[$i]['Damper Open'] = 'abc';
            $array[$i]['Nozzle No. 1'] = 'abc';
            $array[$i]['Nozzle No. 2'] = 'abc';
            $array[$i]['Nozzle No. 3'] = 'abc';
            $array[$i]['Temp. No. 1'] = 'abc';
            $array[$i]['Temp. No. 2'] = 'abc';
            $array[$i]['Damper Open'] = 'abc';
            $array[$i]['DC Inlet Temp. (T10b)'] = 'abc';
        }

        print_r($array);
        exit;


        $data['clock'] = $array;
        $data['arrayMaster'] = $clock;

        $this->load->view('reporting/index',$data);
    }

    public function daily_report()
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

          
        
            $datas = $this->db->query("SELECT ed.equipDesc, ev.equipId, SUM(ev.value)/$this->jumlah_data AS temp, left(ev.timestamp,13) as clock
                                        FROM equipval ev JOIN equipdef ed on ed.equipId = ev.equipId  
                                        WHERE $queryTime GROUP BY ev.equipId, left(ev.timestamp,13), ed.equipDesc")->result();


            $dataku = [];
            foreach($clock as $row){
                $dataSatuan = [];

                $dataSatuan['Clock'] = $row;
                $dataSatuan['Fce Combustion'] = '';
                $dataSatuan['Fce Outlet Sand'] = '';
                $dataSatuan['Fce Inlet Sand'] = '';
                $dataSatuan['Top Temp. Fce'] = '';
                $dataSatuan['PressureBlank'] = '';
                $dataSatuan['Damper Open'] = '';
                $dataSatuan['Damper Open'] = '';
                $dataSatuan['Pressure'] = '';
                $dataSatuan['Damper Open'] = '';
                $dataSatuan['Pressure'] = '';
                $dataSatuan['Damper Open'] = '';
                $dataSatuan['Speed Screw Feeder'] = '';
                $dataSatuan['Pressure'] = '';
                $dataSatuan['Damper Open'] = '';
                $dataSatuan['Pressure'] = '';
                $dataSatuan['Damper Open'] = '';
                $dataSatuan['Nozzle No. 1'] = '';
                $dataSatuan['Nozzle No. 2'] = '';
                $dataSatuan['Nozzle No. 3'] = '';
                $dataSatuan['Temp. No. 1'] = '';
                $dataSatuan['Temp. No. 2'] = '';
                $dataSatuan['Damper Open'] = '';
                $dataSatuan['DC Inlet Temp. (T10b)'] = '';

                foreach($datas as $data){

                    if(substr($data->clock,11,2) == $row){

                        if($data->equipDesc == 'Fce Combustion Temperature Sensor'){
                            $dataSatuan['Fce Combustion'] = $data->temp;

                        }elseif($data->equipDesc == 'Fce Outlet Sand Temperature Sensor'){
                            
                            $dataSatuan['Fce Outlet Sand'] = $data->temp;
                        }

                    } 
            
                    
                }

                $dataku[] = $dataSatuan;

            }
            print_r($dataku);

            //print_r($datas);
            
            //exit;
            //$data['clock'] = $array;
            $lepar['arrayMaster'] = $dataku;
    
            $this->load->view('reporting/index',$lepar);

        }

    }

}