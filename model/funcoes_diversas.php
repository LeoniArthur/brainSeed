<?php

require_once ("classBancoDados.php");

//funcão para máscara de cpf, cnpj, data
function mask($val, $mask)
{
    $maskared = '';
    $k = 0;
    for($i = 0; $i<=strlen($mask)-1; $i++)
    {
        if($mask[$i] == '#')
        {
            if(isset($val[$k]))
                $maskared .= $val[$k++];
        }
        else
        {
            if(isset($mask[$i]))
                $maskared .= $mask[$i];
        }
    }
    return $maskared;
}

/* exemplo de uso:
$cnpj = "11222333000199";
$cpf = "00100200300";
$cep = "08665110";
$data = "10102010";

echo mask($cnpj,'##.###.###/####-##');
echo mask($cpf,'###.###.###-##');
echo mask($cep,'#####-###');
echo mask($data,'##/##/####');
*/


function SoDigito($Valor){

    $Tamanho = strlen($Valor);
    $NovoValor = "";

    for($Contador = 0; $Contador < $Tamanho; $Contador++){
        $Digito = $Valor[$Contador];

        if((ord($Digito) >= 48) && (ord($Digito) <= 57 )){
            $NovoValor .= $Digito;
        }
    };

    return trim($NovoValor);
}


//funcão para validar um CPF
function ValidaCPF($NumeroCPF){

    $CPF = SoDigito($NumeroCPF);

    if($CPF === ""){
        $Retorno = FALSE;
    }else{
        if(strlen($CPF) == 11){
            $Soma = 0;

            for($Contador = 0; $Contador < 9; $Contador++){
                $Calculo = $CPF[8 - $Contador] * ($Contador + 2);
                $Soma += $Calculo;
            }

            $Digito1 = 11 - ($Soma % 11);

            if($Digito1 > 9){
                $Digito1 = 0;
            }

            $CPFNovo = substr($CPF, 0, 9);
            $CPFNovo .= $Digito1;
            $Soma = 0;

            for($Contador = 0; $Contador < 10; $Contador++){
                $Calculo = $CPFNovo[9 - $Contador] * ($Contador + 2);
                $Soma += $Calculo;
            }

            $Digito2 = 11 - ($Soma % 11);

            if($Digito2 > 9){
                $Digito2 = 0;
            }

            $Retorno = ($Digito1 == ((int) $CPF[9])) && ($Digito2 == ((int)$CPF[10]));
        }else
            $Retorno = FALSE;

    }
    return $Retorno;
}


function CampoTexto($Valor) {
    return "'".$Valor."'";
}


//função para validação de CEP números somente
function ValidaCEP($CEP) {
    $NovoCEP = SoDigito($CEP);

    if(strlen($NovoCEP) < 8) {
        $Retorno = FALSE;
    }
    else {
        $Retorno = ereg("^([0-9]){5}-?([0-9]){3}$",$CEP);
    }
    return $Retorno;
}


//FUNÇÃO PARA RECUPERAR OS DADOS DO CADASTRO


function Recuperar_Dados($CodigoUsuario){
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

