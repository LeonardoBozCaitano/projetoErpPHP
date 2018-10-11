<div class="container" id="containerPageBody">
    <form action="javascript:void(0)" method="post" id="formulario">
        <?php echo hidden("cd_estado", $cdEstado)?>
        <fieldset>
            <legend>Geral</legend>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ds_estado">Descricao</label>
                    <?php echo input("ds_estado", $dsEstado)?>
                </div>
                <div class="form-group">
                    <label for="cd_pais">Pais</label>
                    <?php echo select('cd_pais', $arrayPais, $cdPais); ?>
                </div>
            </div>
        </fieldset>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button class="btn btn-danger">Voltar</button>
    </form>
</div>