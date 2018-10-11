<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SistemaBoz - <?php 
        
        if($this->controller == 'Pages'){ echo "Home";} else { echo $this->controller;} ?></title>

        <link href="<?= base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('/assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('/assets/css/default.css'); ?>" rel="stylesheet" type="text/css">
        
        <?php if(file_exists(base_url('/assets/css/'.$this->controller.'.css'))){ ?>
            <link href="<?= base_url('/assets/css/'.$this->controller.'.css'); ?>" rel="stylesheet" type="text/css">
        <?php } ?>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="center-block page">
                    <div class="navbar-header">
                        <a class="menu" href="<?php echo base_url('/'); ?>"><img class="img-responsive iconHeader" src="imagens/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse drop_menu" id="content_details">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
<<<<<<< HEAD
                                <a href="<?php echo base_url('Agenda'); ?>">
                                    Agenda
                                 </a>
=======
                                <a href="<?php echo base_url('Movimentacao'); ?>">
                                    Fluxo de Caixa
                                 </a>
                                
>>>>>>> master
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Pessoas</li>
                                    <li><a href="<?php echo base_url('Cliente'); ?>">Cliente</a></li>
                                    <li><a href="<?php echo base_url('Profissao'); ?>">Profissao</a></li>
                                    <li><a href="<?php echo base_url('Remedio'); ?>">Remedio</a></li>
                                    <li><a href="<?php echo base_url('Doenca'); ?>">Doenca</a></li>
                                    <li><a href="<?php echo base_url('CuidadoEspecial'); ?>">Cuidados especiais</a></li>
                                    <hr>
                                    <li class="dropdown-header">Locais</li>
                                    <li><a href="<?php echo base_url('Cidade'); ?>">Cidade</a></li>
                                    <li><a href="<?php echo base_url('Estado'); ?>">Estado</a></li>
                                    <li><a href="<?php echo base_url('Pais'); ?>">Pais</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">RH
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url('/Colaborador'); ?>">Colaborador</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Configurações <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url('Usuario'); ?>">Usuario</a></li>
                                    <li><a href="<?php echo base_url('CategoriaUsuario'); ?>">Categoria Usuario</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Olá <?php echo $this->sessao['ds_login']; ?>!   <i class="fa fa-user-circle" aria-hidden="true"></i>

                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url('/'); ?>"><i class="fa fa-fw fa-cog"></i> Trocar Senha</a></li>
                                    <li><a href="<?php echo base_url('/Usuario/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
