<?php

class M_EquipVal extends CI_Model {
  
    function __construct() {
        parent::__construct();

        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file')); 
    }

}