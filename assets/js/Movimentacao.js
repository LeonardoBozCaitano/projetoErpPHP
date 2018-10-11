
jQuery(document).ready(function () {
    jQuery("html").on('click', "#adiciona-item-movimentacao", function (event) {
        event.preventDefault();

        var dados = jQuery('#fomulario-movimentacao').serialize();

        console.log(dados);

        jQuery.ajax({
            url: app_controller + "/addItemMovimentacao",
            type: "post",
            data: dados
        }).done(function (retorno) {
            jQuery('#tbody-movimento').html(retorno);
        });
    });
});