<?php
    class Cliente_Model extends MY_Model {
     
        function __construct() {
            parent::__construct();
            $this->table = "tb_cliente";            
        }
        
        public $campos = array(
            'cd_cliente' => array(
                'alias' => "Código"
            ),
            'ds_cliente' => array(
                'alias' => "Nome"
            ),
//            'ds_cpf' => array(
//                'alias' => "CPF"
//            ),
//            'ds_cep' => array(
//                'alias' => "CEP"
//            ),
            'ds_endereco' => array(
                'alias' => "Endereco"
            ),
            'cd_cidade' => array(
                'alias' => "Cidade",
                'secondary' => array(
                    'model' => 'cidade_model',
                    'descricao' => 'ds_cidade'
                    )
            ),
//            'cd_estado' => array(
//                'alias' => "Estado",
//                'secondary' => array(
//                    'model' => 'estado_model',
//                    'descricao' => 'ds_estado'
//                    )
//            ),
//            'cd_pais' => array(
//                'alias' => "Pais",
//                'secondary' => array(
//                    'model' => 'pais_model',
//                    'descricao' => 'ds_pais'
//                    )
//            ),
            'cd_profissao' => array(
                'alias' => "Profissao",
                'secondary' => array(
                    'model' => 'profissao_model',
                    'descricao' => 'ds_profissao'
                    )
            ),
//            'ds_local_trabalho' => array(
//                'alias' => "Local Trabalho"
//            ),
            'ds_telefone_cel' => array(
                'alias' => "Celular"
            ),
            'ds_telefone_res' => array(
                'alias' => "Residencial"
            ),
            'dt_nascimento' => array(
                'alias' => "Nascimento"
            ),
//            'ds_nome_pai' => array(
//                'alias' => "Pai"
//            ),
//            'ds_nome_mae' => array(
//                'alias' => "Mae"
//            ),
//            'fl_primeira_consulta' => array(
//                'alias' => "Primeira Consulta"
//            ),
//            'ds_nome_responsavel' => array(
//                'alias' => "Responsavel"
//            ),
//            'ds_numero_emergencia' => array(
//                'alias' => "Numero Emergencia"
//            ),
            'ds_tipo_sangue' => array(
                'alias' => "Tipo Sanguineo"
            ),
//            'fl_sensibilidade_anestesia' => array(
//                'alias' => "Sensibilidade Anestesia"
//            ),
//            'fl_hepatite' => array(
//                'alias' => "Hepatite"
//            ),
//            'fl_cardiaco' => array(
//                'alias' => "Cardiaco"
//            ),
//            'fl_diabetico' => array(
//                'alias' => "Diabetico"
//            ),
//            'fl_gravidez' => array(
//                'alias' => "Gravidez"
//            ),
//            'fl_febre_reumatica' => array(
//                'alias' => "Febre Reumatica"
//            ),
//            'fl_aids' => array(
//                'alias' => "Aids"
//            ),
//            'fl_hemorragia' => array(
//                'alias' => "Hemorragia"
//            ),
//            'fl_epilepsia' => array(
//                'alias' => "Epilepsia"
//            ),
//            'fl_alergia' => array(
//                'alias' => "Alergia"
//            ),
//            'fl_habito_fio_dental' => array(
//                'alias' => "Habito Fio Dental"
//            ),
//            'fl_sangramento_gengival' => array(
//                'alias' => "Sangramento Gengival"
//            ),
//            'fl_comer_entre_refeicao' => array(
//                'alias' => "Comer Entre Refeicao"
//            ),
//            'fl_visita_dentista' => array(
//                'alias' => "Visitas Dentista"
//            ),
//            
//            'dt_cadastro' => array(
//                'alias' => "Cadastro"
//            ),
//            'dt_modificacao' => array(
//                'alias' => "Modificacao"
//            ),
//            'fl_desativado' => array(
//                'alias' => "Desativado"
//            ),
            'primary' => 'cd_cliente'
        );
    }
