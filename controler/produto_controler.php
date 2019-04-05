<?php

require_once ("/Apache24/htdocs/brainSeed/model/classBancoDados.php");


class produto_controler{

    function Insert(){

        $ServidorMySQL = "localhost";
        $bd = new classBancoDados($ServidorMySQL);


        if(!$bd->AbrirConexao()){
            echo "<h3>Erro na conexão com o banco!!<br>".$bd->MensagemErro()."</h3>";
        }else{

            $Valores["nome"]=$_POST["nome"];
            $Valores["descricao"] =$_POST["descricao"];
            $Valores["valor_compra"]=$_POST["valor_compra"];
            $Valores["valor_venda"] =$_POST["valor_venda"];
            $Valores["imagem"]=$_POST["imagem"];




            $bd -> SetINSERT($Valores,"produto");

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
            $bd -> SetSELECT("*","produto");
            $bd -> ExecSELECT();
            $DataSet = $bd->GetDataSet();

            return $DataSet;
        }
        return FALSE;
    }
}
