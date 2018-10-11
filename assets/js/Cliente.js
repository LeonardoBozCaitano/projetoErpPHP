    /**
     * Executa o Submit do formulario de clientes.
     */
    jQuery("#submit_form_cliente").on("click", function (event) {

        var data = jQuery(event.target).serialize();
        
        jQuery.ajax({
            url: app_controller + "/salvar",
            type: "post",
            data: data,
            success: function () {
                alert("Registro Salvo!");
            }
        });
    });
    
     /**
     * Executa o Submit do formulario da doencas dos clientes.
     */
    jQuery("#submit_form_doenca").on("click", function (event) {

        var data = jQuery(event.target).serialize();
        
        jQuery.ajax({
            url: app_controller + "/salvarDoencaCliente",
            type: "post",
            data: data,
            success: function () {
                alert("Registro Salvo!");
            }
        });
    });
    
     /**
     * Executa o Submit do formulario dos cuidados especiais dos clientes.
     */
    jQuery("#submit_form_cuidado_especial").on("click", function (event) {

        var data = jQuery(event.target).serialize();
        
        jQuery.ajax({
            url: app_controller + "/salvarCuidadoEspecialCliente",
            type: "post",
            data: data,
            success: function () {
                alert("Registro Salvo!");
            }
        });
    });
    
     /**
     * Executa o Submit do formulario dos remedios dos clientes.
     */
    jQuery("#submit_form_remedio").on("click", function (event) {

        var data = jQuery(event.target).serialize();
        
        jQuery.ajax({
            url: app_controller + "/salvarRemedioCliente",
            type: "post",
            data: data,
            success: function () {
                alert("Registro Salvo!");
            }
        });
    });

