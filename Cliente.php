<!DOCTYPE html>
<html lang="en">
<head>
    <?php

    session_start();

    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
    }

    $logado = $_SESSION['login'];
    ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabela de clientes</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


    <script language="JavaScript">
        function fechar_formulario() {
            location.href="Cliente.php";
        }
    </script>
	
	<script> function carregar(pagina){$(".btnEditar btn btn-info btn-lg").load(pagina);}</script>
	
	<script language="JavaScript">
		function show(){
			
		}
		</script>


</head>

<body id="page-top">

<?php  include ("view/partial_topMenu.php"); ?>

<div id="wrapper">


    <?php  include ("view/partial_sideBar.php"); ?>





    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Clientes</li>
            </ol>

            <!-- Page Content -->
            <h1>Cadastro de clientes</h1>
            <hr>
            <script src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


            <!-- CADASTRAR -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                    data-target="#myModal" name="cadastrar" value="">Cadastrar</button>

            <?php
            include ("view/partial_Cliente.php");

            require_once('model/url_request.php');
            $clientes =  get_req('https://projav.000webhostapp.com/ws_seed/Webservice.php?a=selectClientes');
            $clientes = explode(";", $clientes);
            echo $logado;
            ?>

            <div class="modal-footer">
                <button type="button" value="btnCadastrar" class="btn btn-default" name="btnCadastrar"
                        id="btnCadastrar">Gravar</button>

                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="fechar_formulario()">Fechar</button>
            </div>

       </div>
    </div>
</div>
</html>


<br><br>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Tabela de clientes</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>CNPJ</th>
                    <th>Razão</th>
                    <th>Ramo</th>
                    <th>Telefone</th>
					<th>ID</th>					
                    <th>Ação</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>CNPJ</th>
                    <th>Razão</th>
                    <th>Ramo</th>
                    <th>Telefone</th>     
					<th>ID</th> 					
                    <th>Ação</th>
                </tr>
                </tfoot>
                <tbody>
                <?php

                $count = 0;
                error_reporting(0);
                while($count <=  count($clientes, COUNT_RECURSIVE)-14) {

                    echo "<tr>";
                    echo "<td>". $clientes[$count+1] . "</td>";
                    echo "<td>". $clientes[$count+2] . "</td>";
                    echo "<td>". $clientes[$count+12]. "</td>";
                    echo "<td>". $clientes[$count+11] . "</td>";
                    echo "<td>". $clientes[$count+0] . "</td>";
                    $count = $count+14;
                    echo "<td><button type=\"button\" class=\"btnEditar btn btn-info btn-lg\"
                       value=\"\" id=\"btnEditar\" data-target=\"#myModal\" data-toggle=\"modal\" onclick=\"\">Editar</button></td>";
                    echo "</tr>";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted"></div>
</div>

<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>

