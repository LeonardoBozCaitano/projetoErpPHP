<?php
    class Pais_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_pais";            
        }
        
        public $campos = array(
            'cd_pais' => array(
                'alias' => "Código"
            ),
            
            'ds_pais' => array(
                'alias' => "Descricao"
            ),
            
            'primary' => 'cd_pais'
        );
    }
