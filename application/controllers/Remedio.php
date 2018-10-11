<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Remedio extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('remedio_model');
    }

    public function index() {
        $this->load->view('layout');
    }

    public function busca() {
        $dados = $this->remedio_model->GetAll('cd_remedio');
        
        $this->modelo = "remedio_model";
        $this->tabela($dados);        
    }

    public function add() {
        $dados['cdRemedio'] = "";
        $dados['dsRemedio'] = "";
        
        $this->load->view('remedio/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $campoSelecionado = $this->doenca_model->GetById($cd, "cd_remedio");
        $dados['cdRemedio'] = $campoSelecionado['cd_remedio'];
        $dados['dsRemedio'] = $campoSelecionado['ds_remedio'];
        
        $this->load->view('remedio/formulario', $dados);
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['cd_remedio'] != ""){
            $this->remedio_model->Atualizar($dados['cd_remedio'],'cd_remedio', $dados);
        } else {
            $this->remedio_model->Inserir($dados);
        }
    }
    
    public function excluir() {
        $cd = $this->data['cd'];
        return $this->remedio_model->Excluir($cd ,'cd_remedio');
    }
}
