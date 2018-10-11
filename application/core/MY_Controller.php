<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_controller extends CI_Controller {

    public $baseUrl = "";
    public $controller = "";
    public $method = "";
    public $modelo = "";
    public $controllerConfig = array();
    public $data = array();
    public $sessao = array();

    public function __construct() {
        parent::__construct();

        $this->controller = $this->router->fetch_class();
        $this->baseUrl = base_url();
        $this->method = $this->router->fetch_method();
        $this->data = $this->input->post(NULL, TRUE);

        $this->load->helper("html");
        $this->load->helper("functions");

        date_default_timezone_set('America/Sao_Paulo');
        
        if ($this->controller == "") {
            $this->controller = "Pages";
        }
        
        $sessao = $this->session->userdata('loggedErp');
        $this->sessao = $sessao;
        
        if ($this->controller == "Usuario" && $this->method == "login") {
            if ($sessao['logged'] == 1) {
                redirect();
            }
        } else if($this->controller == "Usuario" && $this->method == "logar"){
            if ($sessao['logged'] == 1) {
                redirect();
            }
        }else {
            if ($sessao['logged'] == 1) {
                
            } else {
                redirect('Usuario/login');
            }
            
        }
    }

    /*
     * Cria TabelaGenerica.
     * 
     */

    public function tabela($dados) {

        if ($dados == '') {
            die();
        }

        $tableHead = array();
        $tableBody = array();

        foreach ($dados as $k => $arrayDados) {
            foreach ($arrayDados as $campo => $valor) {

                if (!in_array($campo, $tableHead)) {
                    $tableHead[] = $campo;
                }
                $tableBody[$k][$campo] = $valor;
            }
        }

        $retornoHtml = "<div class='container' id='containerPageBody'>";
        $retornoHtml .= "<fieldset>";
        $retornoHtml .= "<legend> Busca: " . $this->controller . "</legend>";
        $retornoHtml .= "<table class='table table-striped'>";
        $retornoHtml .= "<thead class='thead-inverse'>";
        $retornoHtml .= "<tr>";
        $retornoHtml .= "<th class='col-md-1'>";
        $retornoHtml .= "<label>";
        $retornoHtml .= "<b>";
        $retornoHtml .= "Opcoes";
        $retornoHtml .= "</b>";
        $retornoHtml .= "</label>";
        $retornoHtml .= "</th>";

        foreach ($tableHead as $k => $campo) {
            if (isset($this->{$this->modelo}->campos[$campo]['alias'])) {
                $retornoHtml .= "<th>";
                $retornoHtml .= "<label>";
                $retornoHtml .= "<b>";
                $retornoHtml .= $this->{$this->modelo}->campos[$campo]['alias'];
                $retornoHtml .= "</b>";
                $retornoHtml .= "</label>";
                $retornoHtml .= "</th>";
            }
        }
        $retornoHtml .= "</tr>";
        $retornoHtml .= "</thead>";
        $retornoHtml .= "<tbody>";
        // tabela    
        foreach ($tableBody as $k => $arrayValores) {
            foreach ($arrayValores as $campo => $valor) {
                if (!isset($this->{$this->modelo}->campos[$campo]['alias'])) {
                    unset($tableBody[$k][$campo]);
                    unset($arrayValores[$campo]);
                }
            }

            $retornoHtml .= "<tr cd=" . $tableBody[$k][$this->{$this->modelo}->campos['primary']] . ">";

            $retornoHtml .= "<td class='col-md-1'>";
            $retornoHtml .= "<a id='edit'><span class='fa fa-pencil-square-o' title='Editar'></span></a>";
            $retornoHtml .= "<a id='excluir'><span class='fa fa-times-circle' title='Excluir'></span></a>";
            $retornoHtml .= "<a id='log'><span class='fa fa-file' title='Exibir Log'></span></a>";
            $retornoHtml .= "</td>";

            foreach ($arrayValores as $campo => $valor) {
                if (isset($this->{$this->modelo}->campos[$campo]['secondary'])) {
                    $model = $this->{$this->modelo}->campos[$campo]['secondary']['model'];
                    $descricao = $this->{$this->modelo}->campos[$campo]['secondary']['descricao'];
                    $dadoSecundario = $this->{$model}->GetById($valor, $campo);
                    $tableBody[$k][$campo] = $dadoSecundario[$descricao];
                }

                $retornoHtml .= "<td><label>";
                $retornoHtml .= $tableBody[$k][$campo];
                $retornoHtml .= "</label></td>";
            }

            $retornoHtml .= "</tr>";
            $retornoHtml .= "</tbody>";

            $retornoHtml .= "<tfoot>";
            $retornoHtml .= "</tfoot>";
        }
        $retornoHtml .= "</table>";
        $retornoHtml .= "<div class='container'>";
        $retornoHtml .= "<div class='row'>";
        $retornoHtml .= "<div class='col-md-offset-10 col-md-2'>";
        $retornoHtml .= "<a id='log'><span class='fa fa-file-excel-o' title='CSV'></span></a>";
        $retornoHtml .= "<a id='log'><span class='fa fa-file-pdf-o' title='PDF'></span></a>";
        $retornoHtml .= "<a id='log'><span class='fa fa-file-image-o' title='Grafico'></span></a>";
        $retornoHtml .= "</div>";
        $retornoHtml .= "</div>";
        $retornoHtml .= "</div>";

        //icones de pdf e csv grafico.
//        $retornoHtml .= "<div class='row'>";
//        $retornoHtml .= "<hr>";
//        $retornoHtml .=     "<div class='right'>";
//        $retornoHtml .=         "<i class='fa fa-file-excel-o'></i>";
//        $retornoHtml .=         "<i class='fa fa-file-pdf-o'></i>";
//        $retornoHtml .=     "</div>";
//        $retornoHtml .= "</div>";


        $retornoHtml .= "</fieldset>";
        $retornoHtml .= "</div>";

        echo $retornoHtml;
    }

}
