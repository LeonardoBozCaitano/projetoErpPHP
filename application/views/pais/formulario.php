<div class="container" id="containerPageBody">
    <form action="javascript:void(0)" method="post" id="formulario">
        <?php echo hidden("cd_pais", $cdPais)?>
        <fieldset>
            <legend>Geral</legend>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ds_pais">Nome</label>
                    <?php echo input("ds_pais", $dsPais)?>
                </div>
            </div>
        </fieldset>
        <hr>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button id="voltar" class="btn btn-danger">Voltar</button>
    </form>
</div>