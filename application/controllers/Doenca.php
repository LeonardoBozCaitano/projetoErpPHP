<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doenca extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('doenca_model');
    }

    public function index() {
        $this->load->view('layout');
    }

    public function busca() {
        $dados = $this->doenca_model->GetAll('cd_doenca');
        
        $this->modelo = "doenca_model";
        $this->tabela($dados);        
    }

    public function add() {
        $dados['cdDoenca'] = "";
        $dados['dsDoenca'] = "";
        
        $this->load->view('doenca/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $campoSelecionado = $this->doenca_model->GetById($cd, "cd_doenca");
        $dados['cdDoenca'] = $campoSelecionado['cd_doenca'];
        $dados['dsDoenca'] = $campoSelecionado['ds_doenca'];
        
        $this->load->view('doenca/formulario', $dados);
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['cd_doenca'] != ""){
            $this->doenca_model->Atualizar($dados['cd_doenca'],'cd_doenca', $dados);
        } else {
            $this->doenca_model->Inserir($dados);
        }
    }
    
    public function excluir() {
        $cd = $this->data['cd'];
        return $this->doenca_model->Excluir($cd ,'cd_doenca');
    }
}
