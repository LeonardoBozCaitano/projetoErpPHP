<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SistemaBoz - <?= $this->controller ?></title>
        <link rel="icon" type="image/png"  href="imagens/favicon.png">

        <link href="<?= base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('/assets/css/login.css'); ?>" rel="stylesheet" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class = "container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form id="form-login" method="post" action="<?php echo base_url('Usuario/logar'); ?>">

                        <img src="<?php echo base_url('imagens/logo.png'); ?>" class="img-responsive">
                        <input type="text" class="form-control" name="ds_login" placeholder="Login" required="" autofocus="" />
                        <input type="password" class="form-control" name="ds_senha" placeholder="Senha" required=""/>     		  

                        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Entrar</button>  			
                    </form>	
                </div>
                <div class="col-md-4"></div>		
            </div>
        </div>

        <footer>
            <div class="col-md-4">
                <p class="text-left">Simerge - Sistema Boz</p>
            </div>
            <div class="col-md-4">
                <p class="text-center"></p>
            </div>
            <div class="col-md-4">
                <p class="text-right"><?php echo date("F j, Y, g:i a"); ?></p> 
            </div>   
        </footer>


        <script>
            var controller = "<?php echo $this->controller ?>";
            var app_controller = "<?php echo base_url() . "index.php/" . $this->controller ?>";
        </script>

        <script src="<?php echo base_url('/assets/js/jquery-2.1.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/js/bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/js/login.js'); ?>"></script>

    </body>
</html>
