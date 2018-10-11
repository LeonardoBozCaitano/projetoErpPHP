<?php
$this->load->view('template/header');

if ($this->controller != 'Pages') {
    ?>
    <div class="container" id="containerPage">
        <div class="col-lg-12 busca-simples-header">
            <h3 class="text-left"><?= $this->controller ?></h3>
        </div>
        <div class="busca_simples">
            <form id="busca-simples" action="javascript:void(0)" method="post">
                <?php $this->load->view($this->controller . "/busca_simples"); ?>
                <?php if(!isset($this->controllerConfig['addOff'])){ ?>
                <button class="btn btn-success" id="add">Adicionar</button>    
                <?php } ?>
            </form>
        </div>
        <div class="busca_avancada">
            
        </div>
    </div>
    <div id="formulario">
       
    </div>
    <?php
} else {
    $this->load->view($this->controller . "/" . $this->pagina);
}

$this->load->view('template/footer');
