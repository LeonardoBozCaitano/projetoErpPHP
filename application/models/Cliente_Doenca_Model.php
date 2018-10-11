<?php
    class Cliente_Doenca_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_cliente_doenca";            
        }
        
        public $campos = array(
            'cd_cliente_doenca' => array(
                'alias' => "Código"
            ),
            
            'cd_cliente' => array(
                'alias' => "Cliente",
                'secondary' => array(
                    'model' => 'cliente_model',
                    'descricao' => 'ds_cliente'
                    )
            ),
            
            'cd_doenca' => array(
                'alias' => "Doenca",
                'secondary' => array(
                    'model' => 'doenca_model',
                    'descricao' => 'ds_doenca'
                    )
            ),
            
            'primary' => 'cd_cliente_doenca'
        );
    }
