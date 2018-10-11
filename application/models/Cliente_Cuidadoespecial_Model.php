<?php
    class Cliente_Cuidadoespecial_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_cliente_cuidado_especial";            
        }
        
        public $campos = array(
            'cd_cliente_cuidado_especial' => array(
                'alias' => "Código"
            ),
            
            'cd_cliente' => array(
                'alias' => "Cliente",
                'secondary' => array(
                    'model' => 'cliente_model',
                    'descricao' => 'ds_cliente'
                    )
            ),
            
            'cd_cuidado_especial' => array(
                'alias' => "Cuidado Especial",
                'secondary' => array(
                    'model' => 'Cuidadoespecial_model',
                    'descricao' => 'ds_cuidado_especial'
                    )
            ),
            
            'primary' => 'cd_cliente_cuidado_especial'
        );
    }
