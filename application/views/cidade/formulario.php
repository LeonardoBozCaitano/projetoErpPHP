<div class="container" id="containerPageBody">
    <form action="javascript:void(0)" method="post" id="formulario">
        <?php echo hidden("cd_cidade", $cdCidade)?>
        <fieldset>
            <legend>Geral</legend>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ds_cidade">Descricao</label>
                    <?php echo input("ds_cidade", $dsCidade)?>
                </div>
                <div class="form-group">
                    <label for="cd_estado">Estado</label>
                    <?php echo select('cd_estado', $arrayEstado, $cdEstado); ?>
                </div>
            </div>
        </fieldset>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button class="btn btn-danger">Voltar</button>
    </form>
</div>