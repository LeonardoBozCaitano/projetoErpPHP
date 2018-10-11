<?php
    class Profissao_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_profissao";            
        }
        
        public $campos = array(
            'cd_profissao' => array(
                'alias' => "Código"
            ),
            
            'ds_profissao' => array(
                'alias' => "Descrição"
            ),
            
            'primary' => 'cd_profissao'
        );
    }
