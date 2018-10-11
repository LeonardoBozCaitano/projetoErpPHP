<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estado extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('estado_model');
        $this->load->model('pais_model');
    }

    public function index() {
        $this->load->view('layout');
    }

    public function busca() {
        $dados = $this->estado_model->GetAll('cd_estado');
        $this->modelo = "estado_model";
        $this->tabela($dados);        
    }

    public function add() {
        
        $dadosPais = $this->pais_model->GetAll('ds_pais');
        
        $dados['cdEstado'] = "";
        $dados['dsEstado'] = "";
        $dados['cdPais'] = "";
        
        foreach($dadosPais as $k => $array){
            $dados['arrayPais'][$array['cd_pais']] = $array['ds_pais'];
        }
        
        $this->load->view('estado/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $campoSelecionado = $this->estado_model->GetById($cd, "cd_estado");
        $dadosPais = $this->pais_model->GetAll('ds_pais');
        
        $dados['cdEstado'] = $campoSelecionado['cd_estado'];
        $dados['dsEstado'] = $campoSelecionado['ds_estado'];
        $dados['cdPais'] = $campoSelecionado['cd_pais'];
        
        foreach($dadosPais as $k => $array){
            $dados['arrayPais'][$array['cd_pais']] = $array['ds_pais'];
        }
        
        $this->load->view('estado/formulario', $dados);
        
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['cd_estado'] != ""){
            $this->estado_model->Atualizar($dados['cd_estado'],'cd_estado', $dados);
        } else {
            $this->estado_model->Inserir($dados);
        }
    }
    
    public function excluir() {
        $dado = $this->data['cd'];
        return $this->estado_model->Excluir($dado, 'cd_estado');
    }
}
