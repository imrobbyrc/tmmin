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

    public function daily_report()
    {

        if($_POST)
        {
            $result = array();

            $shift = $this->input->post('shift');
            $color = $this->input->post('color');
            $datetime = $this->input->post('datetime');

            $queryTime = 'left(ev.timestamp,13) >= "' . $datetime . ' 07" and  left(ev.timestamp,13) <= "' . $datetime . ' 19"';
            $result['hour'] = [7,8,9,10,11,12,13,14,15,16,17,18,19];
            if($shift == 'malam'){
                $queryTime = 'left(ev.timestamp,13) >= "' . $datetime . ' 20" and  left(ev.timestamp,13) <= "' . $datetime . ' 06"';
                $result['hour'] = [20,21,22,23,24,01,02,03,04,05,06];
            }

        
            $datas = $this->db->query("SELECT ed.equipDesc, ev.equipId, SUM(ev.value)/$this->jumlah_data AS temp, left(ev.timestamp,13) 
                                        FROM equipval ev JOIN equipdef ed on ed.equipId = ev.equipId  
                                        WHERE $queryTime GROUP BY ev.equipId, left(ev.timestamp,13)")->result();


            foreach($datas as $data){
                print_r($data);
            }

            
            

        }

    }

}