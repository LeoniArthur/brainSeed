<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#btnCadastrar").click(function() {

                var nome = $("input[name=nome]").val();
                var descricao = $("input[name=descricao]").val();
                var valor_compra = $("input[name=valor_compra]").val();
                var valor_venda = $("input[name=valor_venda]").val();
                var imagem = $("input[name=imagem]").val();



                $.ajax({
                    dataType: "html",
                    url:  "controler/incluir_produto.php",
                    data:{
                        nome: nome,
                        descricao: descricao,
                        valor_compra: valor_compra,
                        valor_venda: valor_venda,
                        imagem: imagem,

						
                    success: function (response) {
                        $("div#retorno").html(response);
                    }
                });
            });
        });
    </script>

    <link rel="stylesheet" type="text/css" href="/../brainSeed/css/estilo.css"

</head>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="width:100%;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Fechar</h4>-->
            </div>
            <div class="modal-body">

                <form action="" method="post">

                    <div class="row">
                        <!-- <div class="col-md-42"> -->
                        <div class="form-group col-md-4" style="margin: 0;">
                            <div class="form-group text-center">
                                <label for="cnpj">Nome</label>
                                <input type="text" class="form-control" maxlength="18" name="nome" id="nome" placeholder="" required>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center razao-validate">
                                <label for="razao">Descrição</label>
                                <input type="text" class="form-control" maxlength="40" name="descricao" id="descricao"  placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center responsavel">
                                <label for="cep">Valor Compra</label>
                                <input type="text" class="form-control" name="valor_compra" id="valor_compra"  placeholder="" maxlength="9" required>
                            </div>
                        </div>
                    </div>
					

                    <div class="row">
                        <!-- <div class="col-md-42"> -->                       
                        <div class="col-md-4">
                            <div class="form-group text-center responsavel">
                                <label for="endereco">Valor Venda</label>
                                <input type="text" class="form-control" name="valor_venda"
                                       maxlength="40" id="valor_venda"  placeholder="" required>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
			
			

            <!--BUTTON SAVE FORM -->
            <div class="modal-footer">
                <button type="button" value="btnCadastrar" class="btn btn-default" name="btnCadastrar"
                        id="btnCadastrar">Gravar</button>

                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="fechar_formulario()">Fechar</button>
            </div>

            <div align="center" class="mensagem-erro" id="retorno">

            </div>