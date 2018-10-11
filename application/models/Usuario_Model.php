<?php

class Usuario_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table = "tb_usuario";
    }

    public $campos = array(
        'cd_usuario' => array(
            'alias' => "Código"
        ),
        'cd_colaborador' => array(
            'alias' => "Pessoa",
            'secondary' => array(
                'model' => 'colaborador_model',
                'descricao' => 'ds_colaborador'
                )
        ),
        'ds_login' => array(
            'alias' => "login"
        ),
        'dt_cadastro' => array(
            'alias' => "Data Cadastro"
        ),
        
        'primary' => 'cd_usuario'
    );
    
    function validalogin($dsLogin, $dsSenha) {
        $this->db->select('ds_login, ds_senha');

        $this->db->where('ds_login', $dsLogin);
        $this->db->where('ds_senha', $dsSenha);

        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

}
