<div class="container" id="containerPageBody">
    <form id="formulario" method="post" action="javascript:void(0); ">
        <?php echo hidden('cd_cliente', $cdCliente) ?>
        <?php echo hidden('dt_cadastro', date('d/m/y')) ?>

        <div class="col-md-6">
            <fieldset>
                <legend>Geral</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ds_cliente">Nome</label>
                        <?php echo input("ds_cliente", $dsCliente) ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_cpf">CPF</label>
                        <?php echo input("ds_cpf", $dsCpf) ?>
                    </div>
                    <div class="form-group">
                        <label for="dt_nascimento">Data Nascimento</label>
                        <?php echo input("dt_nascimento", $dtNascimento) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cd_cidade">Profissao</label>
                        <?php echo select('cd_profissao', $arrayProfissao, $cdProfissao); ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_cpf">Local de Trabalho</label>
                        <?php echo input("ds_local_trabalho", $dsLocalTrabalho) ?>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-md-6">
            <fieldset>
                <legend>Endereco</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ds_cep">CEP</label>
                        <?php echo input("ds_cep", $dsCep) ?>
                    </div>
                    <div class="form-group">
                        <label for="cd_cidade">Cidade</label>
                        <?php echo select('cd_cidade', $arrayCidade, $cdCidade); ?>
                    </div>
                    <div class="form-group">
                        <label for="cd_estado">Estado</label>
                        <?php echo select('cd_estado', $arrayEstado, $cdEstado); ?>
                    </div>
                    <div class="form-group">
                        <label for="cd_pais">Pais</label>
                        <?php echo select('cd_pais', $arrayPais, $cdPais); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ds_bairro">Endereco</label>
                        <?php echo input("ds_endereco", $dsEndereco) ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_bairro">Bairro</label>
                        <?php echo input("ds_bairro", $dsBairro) ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_bairro">Complemento</label>
                        <?php echo input("ds_bairro", $dsBairro) ?>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-md-6">
            <fieldset>
                <legend>Contato</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ds_email">Email</label><br>
                        <?php echo input("ds_email", $dsEmail) ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_telefone_cel">Celular</label><br>
                        <?php echo input("ds_telefone_cel", $dsTelefoneCel) ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_telefone_res">Residencial</label><br>
                        <?php echo input("ds_telefone_res", $dsTelefoneRes) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ds_nome_responsavel">Nome Responsavel</label>
                        <?php echo input("ds_nome_responsavel", $dsNomeResponsavel) ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_numero_emergencia">Numero Emergencia</label>
                        <?php echo input("ds_numero_emergencia", $nrEmergencia) ?>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-md-6">
            <fieldset>
                <legend>Filiacao</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ds_nome_pai">Nome Pai</label><br>
                        <?php echo input("ds_nome_pai", $dsNomePai) ?>
                    </div>
                    <div class="form-group">
                        <label for="ds_nome_mae">Nome Mae</label><br>
                        <?php echo input("ds_nome_mae", $dsNomeMae) ?>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-md-12">
            <fieldset>
                <legend>Pessoais</legend>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ds_tipo_sangue">Tipo Sanguineo</label>
                        <?php
                        echo select('ds_tipo_sangue', array(
                            "-" => " -- ",
                            "A-" => "A-",
                            "A" => "A",
                            "B-" => "B-",
                            "B" => "B",
                            "O-" => "O-",
                            "O" => "O",
                            "AB-" => "AB-",
                            "AB" => "AB"
                                ), $dsTipoSangue);
                        ?><br>
                        <label for="fl_visita_dentista">Visita Dentista</label>
                        <?php
                        echo select('fl_visita_dentista', array(
                            "-" => " -- ",
                            "0" => "Nunca",
                            "O" => "Ocasionalmente",
                            "1" => "1x Ano",
                            "2" => "2x Ano",
                            "3" => "3x Ano"
                                ), $flVisitaDentista);
                        ?><br>

                        <?php echo checkbox("fl_primeira_consulta", $flPrimeiraConsulta) ?>
                        <label for="fl_primeira_consulta">Primeira Consulta</label><br>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>

                        <?php echo checkbox("fl_sensibilidade_anestesia", $flSensibilidadeAnestesia) ?>
                        <label for="fl_sensibilidade_anestesia">Sensibilidade a Anestesia</label><br>

                        <?php echo checkbox("fl_hepatite", $flHepatite) ?>
                        <label for="fl_hepatite">Hepatite</label><br>

                        <?php echo checkbox("fl_cardiaco", $flCardiaco) ?>
                        <label for="fl_cardiaco">Cardiaco</label><br>

                        <?php echo checkbox("fl_diabetico", $flDiabetico) ?>
                        <label for="fl_diabetico">Diabetico</label><br>

                        <?php echo checkbox("fl_epilepsia", $flEpilepsia) ?>
                        <label for="fl_epilepsia">Epilepsia</label><br>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>

                        <?php echo checkbox("fl_alergia", $flAlergia) ?>
                        <label for="fl_alergia">Alergia</label><br>

                        <?php echo checkbox("fl_gravidez", $flGravidez) ?>
                        <label for="fl_gravidez">Gravidez</label><br>

                        <?php echo checkbox("fl_febre_reumatica", $flFebreReumatica) ?>
                        <label for="fl_febre_reumatica">Febre Reumatica</label><br>

                        <?php echo checkbox("fl_aids", $flAids) ?>
                        <label for="fl_aids">Aids</label><br>

                        <?php echo checkbox("fl_hemorragia", $flHemorragia) ?>
                        <label for="fl_hemorragia">Hemorragia</label><br>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>

                        <?php echo checkbox("fl_sangramento_gengival", $flSangramentoGengival) ?>
                        <label for="fl_sangramento_gengival">Sangramento Gengival</label><br>

                        <?php echo checkbox("fl_habito_fio_dental", $flHabitoFioDental) ?>
                        <label for="fl_habito_fio_dental">Habito Fio Dental</label><br>

                        <?php echo checkbox("fl_comer_entre_refeicao", $flComerEntreRefeicao) ?>
                        <label for="fl_comer_entre_refeicao">Habito comer entre refeicao</label><br>

                    </div>
                </div>
            </fieldset>
        </div>

        <div class="clearfix"></div>

        <hr>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button class="btn btn-danger">Voltar</button>
    </form>
</div>