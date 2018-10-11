<?php
    class Remedio_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_remedio";            
        }
        
        public $campos = array(
            'cd_remedio' => array(
                'alias' => "Código"
            ),
            
            'ds_remedio' => array(
                'alias' => "Descrição"
            ),
            
            'primary' => 'cd_remedio'
        );
    }
