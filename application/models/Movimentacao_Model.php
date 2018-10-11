<?php
    class Movimentacao_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_cidade";            
        }
        
        public $campos = array(
            'cd_cidade' => array(
                'alias' => "Código"
            ),
            
            'ds_cidade' => array(
                'alias' => "Descrição"
            ),
            
            'cd_estado' => array(
                'alias' => "Estado",
                'secondary' => array(
                    'model' => 'estado_model',
                    'descricao' => 'ds_estado'
                    )
            ),
            
            'primary' => 'cd_cidade'
        );
    }
