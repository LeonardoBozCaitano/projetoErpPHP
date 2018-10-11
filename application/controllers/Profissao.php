<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profissao extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('profissao_model');
    }

    public function index() {
        $this->load->view('layout');
    }

    public function busca() {
        $dados = $this->profissao_model->GetAll('cd_profissao');
        
        $this->modelo = "profissao_model";
        $this->tabela($dados);        
    }

    public function add() {
        
        $dados['cdProfissao'] = "";
        $dados['dsProfissao'] = "";
        
        $this->load->view('profissao/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $campoSelecionado = $this->profissao_model->GetById($cd, "cd_profissao");
        
        $dados['cdProfissao'] = $campoSelecionado['cd_profissao'];
        $dados['dsProfissao'] = $campoSelecionado['ds_profissao'];
        
        $this->load->view('profissao/formulario', $dados);
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['cd_profissao'] != ""){
            $this->profissao_model->Atualizar($dados['cd_profissao'],'cd_profissao', $dados);
        } else {
            $this->profissao_model->Inserir($dados);
        }
    }
    
    public function excluir() {
        $cd = $this->data['cd'];
        return $this->profissao_model->Excluir($cd ,'cd_profissao');
    }
}
