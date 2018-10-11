/*
 * FUNCOES PADRÃO 
 */

jQuery(document).ready(function () {

    /**
     * Abre a busca simples
     */
    jQuery("#busca-simples").on("submit", function (e) {
        e.preventDefault();
        
        var data = jQuery('#busca-simples').serialize();
        
        jQuery.ajax({
            url: app_controller + "/busca",
            type: "post",
            data: data,
        }).done(function (retorno) {
            jQuery("#formulario").html(retorno);
            jQuery('#formulario').attr('style', 'display: block');
        });
    });

    /**
     * Abre o formulario para adicionar
     */
    jQuery("#add").on("click", function (e) {
        e.preventDefault();

        jQuery.ajax({
            url: app_controller + "/add",
            type: "post"
        }).done(function (retorno) {
            jQuery('#formulario').html(retorno);
            jQuery('#formulario').removeClass('style');
        });
    });

    /**
     * Executa o Submit do formulario.
     */
    jQuery("#formulario").on("submit", function (event) {

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
     * Excluir Padrão
     */
    jQuery("html").on('click', "#excluir", function (event) {
        event.preventDefault();

        var data = jQuery(event.target).parent().parent().parent().attr('cd');
        var confirma = confirm("Deseja mesmo excluir?");

        if (confirma == true) {
            jQuery.ajax({
                url: app_controller + "/excluir",
                type: "post",
                data: "cd=" + data,
            }).done(function () {
                alert("registro excluido!");
                jQuery(event.target).parent().parent().parent().remove();
            });
        } else {
        }
    });

    /**
     * Editar Padrão.
     */
    jQuery("html").on('click', "#edit", function (event) {
        event.preventDefault();

        var data = jQuery(event.target).parent().parent().parent().attr('cd');

        jQuery.ajax({
            url: app_controller + "/edit",
            type: "post",
            data: "cd=" + data,
        }).done(function (retorno) {
            jQuery('#formulario').html(retorno);
            jQuery('#formulario').removeClass('style');
        });
    });
});