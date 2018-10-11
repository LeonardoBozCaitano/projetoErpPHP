<div class="container" id="containerPageBody">
    <form action="javascript:void(0)" method="post" id="formulario">
        <?php echo hidden("cd_usuario", $cdUsuario)?>
        <?php echo hidden("dt_cadastro", $dtCadastro)?>
        <?php echo hidden("dt_modificacao", $dtModificacao)?>
        <fieldset>
            <legend>Geral</legend>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="cd_estado">Colaborador</label>
                    <?php echo select('cd_colaborador', $arrayColaborador, $cdColaborador); ?>
                </div>
                <div class="form-group">
                    <label for="ds_usuario">Login</label>
                    <?php echo input("ds_login", $dsUsuario)?>
                </div>
                <div class="form-group">
                    <label for="cd_estado">Senha</label>
                    <?php echo input('ds_senha', $dsSenha, array('type' => "password")); ?>
                </div>
                <div class="form-group">
                    <label for="cd_estado">Confirma Senha</label>
                    <?php echo input('ds_confirma_senha', null, array('type' => "password")); ?>
                </div>
            </div>
        </fieldset>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button class="btn btn-danger">Voltar</button>
    </form>
</div>