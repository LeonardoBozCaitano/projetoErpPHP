<?php
    class Estado_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_estado";            
        }
        
        public $campos = array(
            'cd_estado' => array(
                'alias' => "Codigo"
            ),
            
            'ds_estado' => array(
                'alias' => "Descricao"
            ),
            
            'cd_pais' => array(
                'alias' => "Pais",
                'secondary' => array(
                    'model' => 'pais_model',
                    'descricao' => 'ds_pais'
                    )
            ),
            
            'primary' => 'cd_estado'
        );
    }
