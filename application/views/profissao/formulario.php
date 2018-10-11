<div class="container" id="containerPageBody">
    <form action="javascript:void(0)" method="post" id="formulario">
        <?php echo hidden("cd_profissao", $cdProfissao)?>
        <fieldset>
            <legend>Geral</legend>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ds_profissao">Descricao</label>
                    <?php echo input("ds_profissao", $dsProfissao)?>
                </div>
            </div>
        </fieldset>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button class="btn btn-danger">Voltar</button>
    </form>
</div>