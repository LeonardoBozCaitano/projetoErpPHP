<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('usuario_model');   
        $this->load->model('colaborador_model');      
    }    

    public function index(){
         $this->load->view('layout');
    }
    
    
    public function busca() {
        $dados = $this->usuario_model->GetAll('cd_usuario');
        
        $this->modelo = "usuario_model";
        $this->tabela($dados);        
    }

    public function add() {
        
        $arrayColaborador = $this->colaborador_model->GetAll('cd_colaborador');
        
        foreach($arrayColaborador as $k => $array){
            $dados['arrayColaborador'][$array['cd_colaborador']] = $array['ds_colaborador'];
        }
        
        $dados['cdColaborador'] = "";
        $dados['cdUsuario'] = "";
        $dados['dsLogin'] = "";
        $dados['dsSenha'] = "";
        $dados['dsUsuario'] = "";
        $dados['dtCadastro'] = "";
        $dados['dtModificacao'] = "";
        
        $this->load->view('usuario/formulario', $dados);
    }
    
    public function edit() {
        
        $cd = $this->data['cd'];
        $arrayColaborador = $this->colaborador_model->GetById($cd, 'cd_colaborador');
        
        foreach($arrayColaborador as $k => $array){
            $dados['arrayColaborador'][$array['cd_colaborador']] = $array['ds_colaborador'];
        }
        
        $dados['cdUsuario'] = $campoSelecionado['cd_usuario'];
        $dados['cdColaborador'] = $campoSelecionado['cd_colaborador'];
        $dados['dsLogin'] = $campoSelecionado['ds_login'];
        $dados['dsSenha'] = $campoSelecionado['ds_senha'];
        $dados['dtCadastro'] = $campoSelecionado['dt_cadastro'];
        $dados['dtModificacao'] = $campoSelecionado['dt_modificacao'];
        
        $this->load->view('usuario/formulario', $dados);
        ;
    }

    public function salvar() {

        unset($this->data['sessao']);
        $dados = $this->data;
        
        if($dados['ds_confirma_senha'] == $dados['ds_senha']){
            unset($dados['ds_confirma_senha']);
            
            $dados['dt_cadastro'] = date('d-m-y');
            
            if($dados['cd_usuario'] != ""){
                $this->usuario_model->Atualizar($dados['cd_usuario'],'cd_usuario', $dados);
            } else {
                $this->usuario_model->Inserir($dados);
            }
        } else {
            redirect('usuario/add', $dados);
        }
    }
    
    public function excluir() {
        $cd = $this->data['cd'];
        return $this->usuario_model->Excluir('cd_usuario', $cd);
    }
    
    public function login(){
        $this->load->view('login');
    }
    
    public function logar(){
        $dsLogin = $this->input->post('ds_login');
        $dsSenha = $this->input->post('ds_senha');
        
        if ($dsLogin  != '' | $dsSenha != ''){
            if ($this->usuario_model->validalogin($dsLogin, $dsSenha)){
                
                $dados = $this->usuario_model->GetById($dsLogin, 'ds_login');
                
                $newdata = array(
                        'cd_usuario'  => $dados['cd_usuario'],
                        'ds_login' =>  $dados['ds_login'],
                        'logged' => TRUE
                );
                    
                $this->session->set_userdata('loggedErp', $newdata);                                
                
                redirect('');
                
            }else{
                $this->load->view('login');         
                
            }
        }else{
            $this->load->view('login');    
        }   
    }

    public function logout(){
        $this->session->unset_userdata('loggedErp');
        redirect('Usuario/login');
    }
  
}
