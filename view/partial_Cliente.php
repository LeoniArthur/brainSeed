<<<<<<< HEAD
<?php

//Para Local
//require_once ("/brainSeed/model/cliente.php");
//require_once ("/brainSeed/controler/cliente_controler.php");
//require_once ("/brainSeed/model/funcoes_diversas.php");

require_once ("C:/Apache24/htdocs/brainSeed/model/cliente.php");
require_once ("C:/Apache24/htdocs/brainSeed/controler/cliente_controler.php");
require_once ("C:/Apache24/htdocs/brainSeed/model/funcoes_diversas.php");

?>


=======
>>>>>>> a30feac6c88a1a32a336ae09f9f60e7ed1a46176
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/../brainSeed/css/estilo.css">
</head>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="width:100%;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                 <h4 class="modal-title">Fechar</h4>-->
            </div>

            <div class="modal-body">

                <form action="https://projav.000webhostapp.com/ws_seed/Webservice.php?a=insertCliente" method="post">

                    <div class="row">
                        <!-- <div class="col-md-42"> -->
                        <div class="form-group col-md-4" style="margin: 0;">
                            <div class="form-group text-center">

                                <!-- CODIGO USUÁRIO -->
                                <input name="CodigoUsuario" value="" type="hidden">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" class="form-control" maxlength="14" name="cnpj" id="cnpj"
                                       value="" placeholder="" required>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center razao-validate">
                                <label for="razao">Razão</label>
                                <input type="text" class="form-control" maxlength="40"
                                       name="razao" id="razao"  placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center responsavel">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" name="cep" id="cep"
                                       placeholder="" maxlength="9" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- <div class="col-md-42"> -->
                        <div class="col-md-4">
                            <div class="form-group text-center responsavel">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" name="endereco"
                                       maxlength="40" id="endereco"  placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="numero">Número</label>
                                <input type="text" class="form-control" maxlength="5"
                                       name="numero"  id="numero" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" maxlength="20"
                                       name="bairro" id="bairro" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <!-- <div class="col-md-42"> -->
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento"
                                       maxlength="20" id="complemento" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center ">
                                <label for="cidade">Cidade</label>
                                <input type="text" maxlength="30" class="form-control"
                                       name="cidade" id="cidade" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center telefone">
                                <label for="uf">UF</label>
                                <input type="text" maxlength="2" id="uf" class="form-control" name="uf" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-center telefone">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" maxlength="40" name="email" id="email" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group text-center telefone">
                                <label for="ramo">Ramo</label>
                                <input type="text" maxlength="20" class="form-control" name="ramo" id="ramo" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group text-center">
                                <label for="telefone">Telefone</label> <br>
                                <input type="tel" class="form-control" maxlength="11" name="telefone" id="telefone" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <!--        BOTAO GRAVAR            -->
                    <input type="submit" class="btn btn-default" value="Gravar"/>
                </form>
            </div>
<<<<<<< HEAD
			



            <!--BUTTON SAVE FORM -->
            <div class="modal-footer">



           <!--     <button type="button" value="btnCadastrar" class="btn btn-default" name="btnCadastrar"
                        id="btnCadastrar">Gravar</button>

                <!--<button type="button" value="btnEditar" class="btn btn-default" name="btnEditar"
                        id="btnEditar">edit</button>-->

                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="fechar_formulario()">Fechar</button>
            </div>
=======
>>>>>>> a30feac6c88a1a32a336ae09f9f60e7ed1a46176


<!--BUTTON SAVE FORM -->
<div class="modal-footer">
</div>
</html>