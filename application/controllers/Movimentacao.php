<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Movimentacao extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('movimentacao_model');
        $this->load->model('item_model');
        
        $this->controllerConfig = array(
            "addOff" => 1
        );
    }

    public function index() {
        $this->load->view('layout');
    }
    
    public function busca() {
        
        $dados = $this->item_model->getAll('cd_item');
        
        $arrayItem = array();
        
        foreach($dados as $k => $dado){
            
            $arrayItem[$k] = $dado['ds_item'];
            
        }
        
        $retorno['arrayItem'] = $arrayItem;
        
        $this->load->view('movimentacao/formulario', $retorno);
        
    }
    
    public function addItemMovimentacao(){
        
        pr($this->data, 1);
        
    }
}
