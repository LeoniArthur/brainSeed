<?php

require_once ("/Apache24/htdocs/brainSeed/model/classBancoDados.php");


class cliente_controler{

    function Insert(){

        $ServidorMySQL = "localhost";
        $bd = new classBancoDados($ServidorMySQL);


        if(!$bd->AbrirConexao()){
            echo "<h3>Erro na conexão com o banco!!<br>".$bd->MensagemErro()."</h3>";
        }else{

            $Valores["cnpj"]=$_POST["cnpj"];
            $Valores["razao"] =$_POST["razao"];
            $Valores["nome_fantasia"]=$_POST["nome_fantasia"];
            $Valores["cep"] =$_POST["cep"];
            $Valores["endereco"]=$_POST["endereco"];
            $Valores["numero"] =$_POST["numero"];
            $Valores["bairro"] =$_POST["bairro"];
            $Valores["complemento"]=$_POST["complemento"];
            $Valores["cidade"]=$_POST["cidade"];
            $Valores["uf"] =$_POST["uf"];
            $Valores["nome"] =$_POST["nome"];
            $Valores["email"] =$_POST["email"];
            $Valores["telefone"]=$_POST["telefone"];
            $Valores["ramo"]=$_POST["ramo"];
            $Valores["status"]=$_POST["status"];



            $bd -> SetINSERT($Valores,"cliente");

            if(!$bd -> ExecINSERT()){
                echo "<h3>Erro na inserção !!</h3>";
            }else{
                echo "<h3>Inserido!<br>";
                $bd -> FecharConexao();
            }
            //  exit('<script>location.href = "http://www.nossobelolar.com.br/proj/Cliente.php"</script>');
        }
    }

    function Select_cliente(){

        $ServidorMySQL = "localhost";
        $bd = new classBancoDados($ServidorMySQL);
        if(!$bd->AbrirConexao()){
            echo "<h3>Erro na conexão com o banco!!<br>".$bd->MensagemErro()."</h3>";
        }else {
            $bd -> SetSELECT("*","cliente");
            $bd -> ExecSELECT();
            $DataSet = $bd->GetDataSet();

            return $DataSet;
        }
        return FALSE;
    }
}
