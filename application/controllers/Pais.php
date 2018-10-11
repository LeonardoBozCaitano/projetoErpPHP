<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pais extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('pais_model');
    }

    public function index() {
        $this->load->view('layout');
    }

    public function busca() {
        $dados = $this->pais_model->GetAll('cd_pais');
        
        $this->modelo = "pais_model";
        $this->tabela($dados);        
    }

    public function add() {
        $dados['cdPais'] = "";
        $dados['dsPais'] = "";
        $this->load->view('pais/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $campoSelecionado = $this->pais_model->GetById($cd, "cd_pais");
        
        $dados['cdPais'] = $campoSelecionado['cd_pais'];
        $dados['dsPais'] = $campoSelecionado['ds_pais'];
        
        $this->load->view('pais/formulario', $dados);
        
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['cd_pais'] != ""){
            $this->pais_model->Atualizar($dados['cd_pais'],'cd_pais', $dados);
        } else {
            $this->pais_model->Inserir($dados);
        }
    }
    
    public function excluir() {
        $dado = $this->data['cd'];
        return $this->pais_model->Excluir($dado, 'cd_pais');
    }
}
