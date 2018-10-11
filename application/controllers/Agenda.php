<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('cliente_model');
    }

    public function index() {
        $this->load->view('layout');
    }

    public function busca() {
        $dados = $this->agenda_model->GetAll('cd_agenda');
        
        $this->modelo = "agenda_model";
        $this->tabela($dados);        
    }

    public function add() {
        
        $dadosEstado = $this->estado_model->GetAll('ds_estado');
        
        $dados['cdCidade'] = "";
        $dados['dsCidade'] = "";
        $dados['cdEstado'] = "";
        
        foreach($dadosEstado as $k => $array){
            $dados['arrayEstado'][$array['cd_estado']] = $array['ds_estado'];
        }
        
        $this->load->view('cidade/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $campoSelecionado = $this->cidade_model->GetById($cd, "cd_cidade");
        $dadosEstado = $this->estado_model->GetAll('ds_estado');
        
        $dados['cdCidade'] = $campoSelecionado['cd_cidade'];
        $dados['dsCidade'] = $campoSelecionado['ds_cidade'];
        $dados['cdEstado'] = $campoSelecionado['cd_estado'];
        
        foreach($dadosEstado as $k => $array){
            $dados['arrayEstado'][$array['cd_estado']] = $array['ds_estado'];
        }
        
        $this->load->view('cidade/formulario', $dados);
        ;
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['cd_cidade'] != ""){
            $this->cidade_model->Atualizar($dados['cd_cidade'],'cd_cidade', $dados);
        } else {
            $this->cidade_model->Inserir($dados);
        }
    }
    
    public function excluir() {
        $cd = $this->data['cd'];
        return $this->cidade_model->Excluir($cd ,'cd_cidade');
    }
}
