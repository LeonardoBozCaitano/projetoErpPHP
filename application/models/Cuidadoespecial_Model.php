<?php
    class Cuidadoespecial_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_cuidado_especial";            
        }
        
        public $campos = array(
            'cd_cuidado_especial' => array(
                'alias' => "Código"
            ),
            
            'ds_cuidado_especial' => array(
                'alias' => "Descrição"
            ),
            
            'primary' => 'cd_cuidado_especial'
        );
    }
