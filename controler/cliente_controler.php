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



    function RecuperaDados($CodigoUsuario){
        $Cliente = new cliente();

        $conexao_bd = new classBancoDados($GLOBALS["localhost"]);

        if(!$conexao_bd->AbrirConexao()){

            echo"<h2 class='mensagem-erro'>Não foi possível conectar com o banco!</h2><br>";
            echo $conexao_bd->CodigoErro() ." -> " .$conexao_bd->MensagemErro();

        } else{
            $conexao_bd->SetSELECT("*", "cliente");
            $conexao_bd->SetWHERE("id = $CodigoUsuario");

            if($conexao_bd->ExecSELECT()){
                $NumeroRegistros = $conexao_bd->TotalRegistros();
                $DataSet = $conexao_bd->GetDataSet();

                if($NumeroRegistros > 0){

                    $Registros = $DataSet->fetch_assoc();

                    $Cliente->setCnpj($Registros["cnpj"]);
                    $Cliente->setRazao($Registros["razao"]);
                    $Cliente->setCep($Registros["cep"]);
                    $Cliente->setEndereço($Registros["endereco"]);
                    $Cliente->setNumero($Registros["numero"]);
                    $Cliente->setBairro($Registros["bairro"]);
                    $Cliente->setComplemento($Registros["complemento"]);
                    $Cliente->setCidade($Registros["cidade"]);
                    $Cliente->setUf($Registros["uf"]);
                    $Cliente->setEmail($Registros["email"]);
                    $Cliente->setTelefone($Registros["telefone"]);
                    $Cliente->setRamo($Registros["ramo"]);
                }
            } else{
                echo "<h2 class='mensagem-erro'>Erro na execução do comando select...</h2>";
            }

        }
        $conexao_bd->FecharConexao();

        return $Cliente;
    }



}
