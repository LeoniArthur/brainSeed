<?php

require_once ("C:/Apache24/htdocs/brainSeed/model/classBancoDados.php");
require_once ("C:/Apache24/htdocs/brainSeed/model/cliente.php");
require_once ("C:/Apache24/htdocs/brainSeed/model/funcoes_diversas.php");


$CodigoUsuario = $_GET["CodigoUsuario"];
$DadosUsuario = new cliente();
$DadosUsuario = RecuperaDados($CodigoUsuario);



?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#btnEditar").click(function() {

                var id = $(this).val();

                print var id = $(this).val();
                print (id);
                var codigo_usuario = $("input[name=CodigoUsuario]").val();
                var cnpj = $("input[name=cnpj]").val();
                var razao = $("input[name=razao]").val();
                var cep = $("input[name=cep]").val();
                var endereco = $("input[name=endereco]").val();
                var numero = $("input[name=numero]").val();
                var bairro = $("input[name=bairro]").val();
                var complemento = $("input[name=complemento]").val();
                var cidade = $("input[name=cidade]").val();
                var uf = $("input[name=uf]").val();
                var email = $("input[name=email]").val();
                var telefone = $("input[name=telefone]").val();
                var ramo = $("input[name=ramo]").val();


                $.ajax({
                    dataType: "html",
                    url:  "controler/gravar_usuario.php",
                    data:{
                        id: id,
                        CodigoUsuario: codigo_usuario,
                        cnpj: cnpj,
                        razao: razao,
                        cep: cep,
                        endereco: endereco,
                        numero: numero,
                        bairro: bairro,
                        complemento: complemento,
                        cidade: cidade,
                        uf: uf,
                        email: email,
                        telefone: telefone,
                        ramo: ramo },
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

                                <!-- CODIGO USUÁRIO -->
                                <input name="CodigoUsuario" value="<?=$CodigoUsuario;?>" type="hidden">

                                <label for="cnpj">CNPJ</label>
                                <input value="<?=$DadosUsuario->getCnpj();?>" type="text" class="form-control"
                                       maxlength="14" name="cnpj" id="cnpj" placeholder="" required>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center razao-validate">
                                <label for="razao">Razão</label>
                                <input value="<?=$DadosUsuario->getRazao();?>" type="text" class="form-control"
                                       maxlength="40" name="razao" id="razao"  placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center responsavel">
                                <label for="cep">CEP</label>
                                <input value="<?=$DadosUsuario->getCep();?>" type="text" class="form-control"
                                       name="cep" id="cep"  placeholder="" maxlength="9" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <!-- <div class="col-md-42"> -->
                        <div class="col-md-4">
                            <div class="form-group text-center responsavel">
                                <label for="endereco">Endereço</label>
                                <input value="<?=$DadosUsuario->getEndereço();?>" type="text" class="form-control" name="endereco"
                                       maxlength="40" id="endereco"  placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="numero">Número</label>
                                <input value="<?=$DadosUsuario->getNumero();?>" type="text" class="form-control"
                                       maxlength="5" name="numero"  id="numero" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="bairro">Bairro</label>
                                <input value="<?=$DadosUsuario->getBairro();?>" type="text" class="form-control"
                                       maxlength="20" name="bairro" id="bairro" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <!-- <div class="col-md-42"> -->
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="complemento">Complemento</label>
                                <input value="<?=$DadosUsuario->getComplemento();?>" type="text" class="form-control" name="complemento"
                                       maxlength="20" id="complemento" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="cidade">Cidade</label>
                                <input value="<?=$DadosUsuario->getCidade();?>" type="text" maxlength="30" class="form-control"
                                       name="cidade" id="cidade" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center telefone">
                                <label for="uf">UF</label>
                                <input value="<?=$DadosUsuario->getUf();?>" type="text" maxlength="2" id="uf"
                                       class="form-control" name="uf" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-center telefone">
                                <label for="email">E-mail</label>
                                <input value="<?=$DadosUsuario->getEmail();?>" type="email" class="form-control"
                                       maxlength="40" name="email" id="email" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group text-center telefone">
                                <label for="ramo">Ramo</label>
                                <input value="<?=$DadosUsuario->getRamo();?>" type="text" maxlength="20" class="form-control"
                                       name="ramo" id="ramo" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group text-center">
                                <label for="telefone">Telefone</label> <br>
                                <input value="<?=$DadosUsuario->getTelefone();?>" type="tel" class="form-control"
                                       maxlength="11" name="telefone" id="telefone" placeholder="" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <!--BUTTON SAVE FORM -->
            <div class="modal-footer">
                <button type="button" value="btnCadastrar" class="btn btn-default" name="btnCadastrar"
                        id="btnEditar">Gravar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="fechar_formulario()">Fechar</button>
            </div>


            <div align="center" class="mensagem-erro" id="retorno">
            </div>