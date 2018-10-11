<?php
    class Cliente_Remedio_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_cliente_remedio";            
        }
        
        public $campos = array(
            'cd_cliente_remedio' => array(
                'alias' => "Código"
            ),
            
            'cd_cliente' => array(
                'alias' => "Cliente",
                'secondary' => array(
                    'model' => 'cliente_model',
                    'descricao' => 'ds_cliente'
                    )
            ),
            
            'cd_remedio' => array(
                'alias' => "Remedio",
                'secondary' => array(
                    'model' => 'remedio_model',
                    'descricao' => 'ds_remedio'
                    )
            ),
            
            'primary' => 'cd_cliente_remedio'
        );
    }
