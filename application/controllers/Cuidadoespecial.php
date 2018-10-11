<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cuidadoespecial extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('cuidadoespecial_model');
    }

    public function index() {
        $this->load->view('layout');
    }

    public function busca() {
        $dados = $this->cuidadoespecial_model->GetAll('cd_cuidado_especial');
        
        $this->modelo = "cuidadoespecial_model";
        $this->tabela($dados);        
    }

    public function add() {
        $dados['cdCuidadoEspecial'] = "";
        $dados['dsCuidadoEspecial'] = "";
        
        $this->load->view('cuidadoespecial/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $campoSelecionado = $this->cuidadoespecial_model->GetById($cd, "cd_cuidado_especial");
        $dados['cdCuidadoEspecial'] = $campoSelecionado['cd_cuidado_especial'];
        $dados['dsCuidadoEspecial'] = $campoSelecionado['ds_cuidado_especial'];
        
        $this->load->view('cuidadoespecial/formulario', $dados);
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['cd_remedio'] != ""){
            $this->cuidadoespecial_model->Atualizar($dados['cd_cuidado_especial'],'cd_cuidado_especial', $dados);
        } else {
            $this->cuidadoespecial_model->Inserir($dados);
        }
    }
    
    public function excluir() {
        $cd = $this->data['cd'];
        return $this->cuidadoespecial_model->Excluir($cd ,'cd_cuidado_especial');
    }
}
