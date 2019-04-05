<?php

require_once ("/Apache24/htdocs/brainSeed/model/classBancoDados.php");
require_once ("/Apache24/htdocs/brainSeed/model/funcoes_diversas.php");


$nome = $_REQUEST["nome"];
$descricao = $_REQUEST["descricao"];
$valor_compra = $_REQUEST["valor_compra"];
$valor_venda = $_REQUEST["valor_venda"];
$imagem = $_REQUEST["imagem"];


$ErroDados = FALSE;
$MensagemErro = "";

/*
if(trim($cnpj) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=cnpj]{border-color: red;}</style>";
}

if(trim($razao) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=razao]{border-color: red;}</style>";
}


if(trim($cep) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=cep]{border-color: red;}</style>";
}

if(trim($endereco) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=endereco]{border-color: red;}</style>";
}

if(trim($numero) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=numero]{border-color: red;}</style>";
}

if(trim($bairro) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=bairro]{border-color: red;}</style>";
}

if(trim($complemento) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=complemento]{border-color: red;}</style>";
}

if(trim($cidade) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=cidade]{border-color: red;}</style>";
}

if(trim($uf) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=uf]{border-color: red;}</style>";
}


if(trim($email) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=email]{border-color: red;}</style>";
}

if(trim($telefone) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=telefone]{border-color: red;}</style>";
}

if(trim($ramo) === ""){
    $ErroDados = TRUE;
    echo "<style>input[id=ramo]{border-color: red;}</style>";
}


if($ErroDados == TRUE){
    echo"<script>alert('Campos em vermelho são obrigatórios!');</script>";
}

*/

if(!$ErroDados){

    $conexao_bd = new classBancoDados("localhost");

    if(!$conexao_bd->AbrirConexao()){
        echo "<h3>Erro na conexão com o banco!!<br>"
            .$conexao_bd->MensagemErro(). "</h3>";
    } else {
		
        $Valores["nome"]= CampoTexto($nome);
        $Valores["descricao"] = CampoTexto($descricao);
        $Valores["valor_compra"] =CampoTexto($valor_compra);
        $Valores["valor_venda"]= CampoTexto($valor_venda);
        $Valores["imagem"] = CampoTexto($imagem);


        $conexao_bd->SetINSERT($Valores, "produto");

        if(!$conexao_bd->ExecINSERT()){


            echo "<h4 class='mensagem-erro'>Erro ao inserir os dados!!</h4>";

        }else{
            echo "<script>alert('Dados inseridos com sucesso!');</script>";
            echo "<script>setTimeout(location.href = 'Produto.php', 1000);</script>";

            //echo "<script>$('.myModal').modal('hide');</script>";
        }
    }

    $conexao_bd->FecharConexao();

} else{
    echo $MensagemErro;
}