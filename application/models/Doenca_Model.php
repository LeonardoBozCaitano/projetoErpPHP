<?php
    class Doenca_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_doenca";            
        }
        
        public $campos = array(
            'cd_doenca' => array(
                'alias' => "Código"
            ),
            
            'ds_doenca' => array(
                'alias' => "Descrição"
            ),
            
            'primary' => 'cd_doenca'
        );
    }
