<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends MY_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('cliente_model');
        $this->load->model('profissao_model');
        
        $this->load->model('doenca_model');
        $this->load->model('cuidadoespecial_model');
        $this->load->model('remedio_model');
        
        $this->load->model('cliente_doenca_model');
        $this->load->model('cliente_cuidadoespecial_model');
        $this->load->model('cliente_remedio_model');
        
        $this->load->model('cidade_model');
        $this->load->model('estado_model');
        $this->load->model('pais_model');
    }

    public function index()
    {      
        $this->load->view('layout'); 
    }

    public function busca()
    {
        $dados = $this->cliente_model->GetAll('cd_cliente');
        $this->modelo = "cliente_model";
        $this->tabela($dados);  
    }

    public function add()
    {
        $dados = array();
        $dados['arrayCidade'] = $this->cidade_model->GetListagem();
        $dados['arrayEstado'] = $this->estado_model->GetListagem();
        $dados['arrayPais'] = $this->pais_model->GetListagem();
        $dados['arrayProfissao'] = $this->profissao_model->GetListagem();
        $dados['arrayDoenca'] = $this->doenca_model->GetListagem();
        $dados['arrayRemedio'] = $this->remedio_model->GetListagem();
        $dados['arrayCuidadoEspecial'] = $this->cuidadoespecial_model->GetListagem();
        
        $dados['cdCliente'] = "";//
        $dados['dsCliente'] = "";//
        $dados['dsCpf'] = "";//
        $dados['dsCep'] = "";//
        $dados['dsEndereco'] = "";//
        $dados['dsBairro'] = "";//
        $dados['dsComplemento'] = "";//
        $dados['cdCidade'] = "";//
        $dados['cdEstado'] = "";//
        $dados['cdPais'] = "";//
        $dados['cdProfissao'] = "";//
        $dados['dsLocalTrabalho'] = "";//
        $dados['dsEmail'] = "";//
        $dados['dsTelefoneCel'] = "";//
        $dados['dsTelefoneRes'] = "";//
        $dados['dtNascimento'] = "";//
        $dados['dsNomePai'] = "";//
        $dados['dsNomeMae'] = "";//
        $dados['flPrimeiraConsulta'] = "0";//
        $dados['dsNomeResponsavel'] = "";//
        $dados['nrEmergencia'] = "";//
        $dados['dsTipoSangue'] = "";//
        $dados['flSensibilidadeAnestesia'] = "";//
        $dados['flHepatite'] = "";//
        $dados['flCardiaco'] = "";//
        $dados['flDiabetico'] = "";//
        $dados['flGravidez'] = "";//
        $dados['flFebreReumatica'] = "";//
        $dados['flAids'] = "";//
        $dados['flHemorragia'] = "";//
        $dados['flEpilepsia'] = "";//
        $dados['flAlergia'] = "";//
        $dados['flHabitoFioDental'] = "";//
        $dados['flSangramentoGengival'] = "";//
        $dados['flComerEntreRefeicao'] = "";//
        $dados['flVisitaDentista'] = "";//
        $dados['dtCadastro'] = "";
//        $dados['dtModificacao'] = "";
        $dados['dtDesativado'] = "";
        
        $this->load->view('cliente/formulario', $dados);
    }
    
    public function edit(){
        $cd = $this->data['cd'];
        $campoSelecionado = $this->cliente_model->GetById($cd, "cd_cliente");
        
        $dados = array();
        $dados['arrayCidade'] = $this->cidade_model->GetListagem();
        $dados['arrayEstado'] = $this->estado_model->GetListagem();
        $dados['arrayPais'] = $this->pais_model->GetListagem();
        $dados['arrayProfissao'] = $this->profissao_model->GetListagem();
        $dados['arrayDoenca'] = $this->doenca_model->GetListagem();
        $dados['arrayRemedio'] = $this->remedio_model->GetListagem();
        $dados['arrayCuidadoEspecial'] = $this->cuidadoespecial_model->GetListagem();
        
        $dados['cdCliente'] = $campoSelecionado['cd_cliente'];
        $dados['dsCliente'] = $campoSelecionado['ds_cliente'];
        $dados['dsCpf'] = $campoSelecionado['ds_cpf'];
        $dados['dsCep'] = $campoSelecionado['ds_cep'];
        $dados['dsEndereco'] = $campoSelecionado['ds_endereco'];
        $dados['dsBairro'] = $campoSelecionado['ds_bairro'];
        $dados['dsComplemento'] = $campoSelecionado['ds_complemento'];
        $dados['cdCidade'] = $campoSelecionado['cd_cidade'];
        $dados['cdEstado'] = $campoSelecionado['cd_estado'];
        $dados['cdPais'] = $campoSelecionado['cd_pais'];
        $dados['cdProfissao'] = $campoSelecionado['cd_profissao'];
        $dados['dsLocalTrabalho'] = $campoSelecionado['ds_local_trabalho'];
        $dados['dsEmail'] = $campoSelecionado['ds_email'];
        $dados['dsTelefoneCel'] = $campoSelecionado['ds_telefone_cel'];
        $dados['dsTelefoneRes'] = $campoSelecionado['ds_telefone_res'];
        $dados['dtNascimento'] = $campoSelecionado['dt_nascimento'];
        $dados['dsNomePai'] = $campoSelecionado['ds_nome_pai'];
        $dados['dsNomeMae'] = $campoSelecionado['ds_nome_mae'];
        $dados['flPrimeiraConsulta'] = $campoSelecionado['fl_primeira_consulta'];
        $dados['dsNomeResponsavel'] = $campoSelecionado['ds_nome_responsavel'];
        $dados['nrEmergencia'] = $campoSelecionado['ds_numero_emergencia'];
        $dados['dsTipoSangue'] = $campoSelecionado['ds_tipo_sangue'];
        $dados['flSensibilidadeAnestesia'] = $campoSelecionado['fl_sensibilidade_anestesia'];
        $dados['flHepatite'] = $campoSelecionado['fl_hepatite'];
        $dados['flCardiaco'] = $campoSelecionado['fl_cardiaco'];
        $dados['flDiabetico'] = $campoSelecionado['fl_diabetico'];
        $dados['flGravidez'] = $campoSelecionado['fl_gravidez'];
        $dados['flFebreReumatica'] = $campoSelecionado['fl_febre_reumatica'];
        $dados['flAids'] = $campoSelecionado['fl_aids'];
        $dados['flHemorragia'] = $campoSelecionado['fl_hemorragia'];
        $dados['flEpilepsia'] = $campoSelecionado['fl_epilepsia'];
        $dados['flAlergia'] = $campoSelecionado['fl_alergia'];
        $dados['flHabitoFioDental'] = $campoSelecionado['fl_habito_fio_dental'];
        $dados['flSangramentoGengival'] = $campoSelecionado['fl_sangramento_gengival'];
        $dados['flComerEntreRefeicao'] = $campoSelecionado['fl_comer_entre_refeicao'];
        $dados['flVisitaDentista'] = $campoSelecionado['fl_visita_dentista'];
        $dados['dtCadastro'] = $campoSelecionado['dt_cadastro'];
        
        $this->load->view('cliente/formulario', $dados);
    }
    
    public function salvar()
    {
        $dados = $this->clienteCriterio($this->data);
        
        if($dados['cd_cliente'] != ""){
            $this->cliente_model->Atualizar($dados['cd_cliente'],'cd_cliente', $dados);
        } else {
            $this->cliente_model->Inserir($dados);
        }
    }
        
    public function clienteCriterio($dados){
        
        if(!isset($dados['fl_comer_entre_refeicao'])){
            $dados['fl_comer_entre_refeicao'] = "0";
        }
        
        if(!isset($dados['fl_sangramento_gengival'])){
            $dados['fl_sangramento_gengival'] = "0";
        }
        
        if(!isset($dados['fl_habito_fio_dental'])){
            $dados['fl_habito_fio_dental'] = "0";
        }
        
        if(!isset($dados['fl_alergia'])){
            $dados['fl_alergia'] = "0";
        }
        
        if(!isset($dados['fl_epilepsia'])){
            $dados['fl_epilepsia'] = "0";
        }
        
        if(!isset($dados['fl_hemorragia'])){
            $dados['fl_hemorragia'] = "0";
        }
        
        if(!isset($dados['fl_aids'])){
            $dados['fl_aids'] = "0";
        }
        
        if(!isset($dados['fl_febre_reumatica'])){
            $dados['fl_febre_reumatica'] = "0";
        }
        
        if(!isset($dados['fl_gravidez'])){
            $dados['fl_gravidez'] = "0";
        }
        
        if(!isset($dados['fl_diabetico'])){
            $dados['fl_diabetico'] = "0";
        }
        
        if(!isset($dados['fl_cardiaco'])){
            $dados['fl_cardiaco'] = "0";
        }
        
        if(!isset($dados['fl_hepatite'])){
            $dados['fl_hepatite'] = "0";
        }
        
        if(!isset($dados['fl_sensibilidade_anestesia'])){
            $dados['fl_sensibilidade_anestesia'] = "0";
        }
        
        if(!isset($dados['fl_primeira_consulta'])){
            $dados['fl_primeira_consulta'] = "0";
        }
        
        return $dados;
    }
    
    public function excluir() {
        $dado = $this->data['cd'];
        return $this->cliente_model->Excluir($dado, 'cd_cliente');
    }
}
