<footer>
    <div class="col-md-4 col-xs-4">
        <p class="text-left">Sistema Boz - <a target="_blank" href="http://www.simerge.com.br/">Simerge</a></p>
    </div>
    <div class="col-md-4 col-xs-4">
        <p class="text-center"><?php 
        
        $greeting = "";
        
        if(date('H') <= '12'){
            $greeting = "Bom dia ";
        } else if(date('H') >= '12' && date('H') <= "19"){
            $greeting = "Boa tarde ";
        } else if(date('H') > '19'){
            $greeting = "Boa noite ";
        }
        
        echo $greeting.$this->sessao['ds_login']."!"; ?>
        </p>
    </div>
    <div class="col-md-4 col-xs-4">
        <p class="text-right"><?php echo date('d/m/Y - H:i:s', time()); ?></p> 
    </div>   
</footer>


<script>
    var controller = "<?php echo $this->controller ?>";
    var app_controller = "<?php echo base_url() . "index.php/" . $this->controller ?>";
</script>

<script src="<?php echo base_url('/assets/js/jquery-2.1.0.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/default.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/app.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/' . $this->controller . '.js'); ?>"></script>
</body>
</html>