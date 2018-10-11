<div class="container" id="containerPageBody">
    <div class="col-md-7">
        <fieldset>
            <legend>Itens Movimentacao</legend>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Item
                        </th>
                        <th>
                            Valor Unitario
                        </th>
                        <th>
                            Quantidade
                        </th>
                        <th>
                            Valor total
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody id="tbody-movimento">

                </tbody>
                <tfooter id="tfooter-movimento">

                </tfooter>
            </table>
        </fieldset>
    </div>
    <div class="col-md-5">
        <form action="javascript:void(0)" method="post" id="fomulario-movimentacao">
            <fieldset>
                <legend>Adicionar item</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cd_item">Item</label>
                        <?php echo select("cd_item", $arrayItem) ?>
                    </div>  
                    <div class="form-group">
                        <label for="vl_unitario">Valor Unitario</label>
                        <?php echo input("vl_unitario") ?>
                    </div> 
                    <br>
                    <button id="adiciona-item-movimentacao" class="btn btn-success">Adicionar</button>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="qt_item">Quantidade</label>
                        <?php echo input("qt_item") ?>
                    </div>
                    <div class="form-group">
                        <label for="vl_total">Total</label>
                        <?php echo input("vl_total") ?>
                    </div>
                </div>
            </fieldset>
    </div>
    <hr>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button id="voltar" class="btn btn-danger">Voltar</button>
</form>
</div>