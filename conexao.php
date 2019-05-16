<?php

require_once('model/url_request.php');

$login = $_POST['login'];
$senha = $_POST['senha'] ;

$post = array(
    'login' => $login,
    'senha' => $senha,
);
$retorno =  get_req('https://projav.000webhostapp.com/ws_seed/login.php?a=logar',$post);

session_start();
if($retorno == "true"){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    header('location:index.php');

}else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:login.php');
}

?>