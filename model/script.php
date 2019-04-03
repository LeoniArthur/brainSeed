<?php
//require_once('conn.php');

  $servidor = 'br946.hostgator.com.br';
  $banco = 'nossobel_proj';
  $usuario = 'nossobel_arthur';
  $senha = 'a1r2t3h4';


$acao = $_GET['a'] ? $_GET['a'] : '';

 $cliente_id =  $_POST['$cliente_id'];
 $cliente_cnpj = $_POST['$cliente_cnpj'];
 $cliente_nome = $_POST['$cliente_nome'];
 $cliente_razao = $_POST['$cliente_razao'];
 $cliente_nome_fantasia = $_POST['$cliente_nome_fantasia'];
 $cliente_cep = $_POST['$cliente_cep'];
 $cliente_endereço = $_POST['$cliente_endereço'];
 $cliente_numero = $_POST['$cliente_numero'];
 $cliente_bairro = $_POST['$cliente_bairro'];
 $cliente_complemento = $_POST['$cliente_complemento'];
 $cliente_cidade = $_POST['$cliente_cidade'];
 $cliente_uf = $_POST['$cliente_uf']; 
 $cliente_contato_nome = $_POST['$cliente_contato_nome']; 
 $cliente_email = $_POST['$cliente_email']; 
 $cliente_telefone = $_POST['$cliente_telefone']; 
 $cliente_ramo = $_POST['$cliente_ramo']; 
 $cliente_status_cliente = $_POST['$cliente_status_cliente']; 
 
cliente class{ 
   // declaração de propriedade
    public $var = 'um valor padrão';

    // declaração de método
    public function inserirCliente() {
        echo $this->var;
    }


}


if($acao == 'testeConexao') {
      echo "aew!";
    echo true;

} if($acao == 'selectClientes') {



// Create connection
$conn = mysqli_connect($servidor, $usuario, $senha,$banco);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql ="SELECT id, nome, sobrenome, cnpj, email, telefone FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

                     echo $row['id'] . ";" . $row['nome'] . ";" . $row['sobrenome'] . ";". $row['cnpj'] . ";"  . $row['email'] . ";" . $row['telefone'] . ";";
                     //  $string;

    }

 }else {
    echo "0 results";
}
$conn->close();


}else if($acao == 'inserirCliente') {


  // $cliente_nome = $_POST['nome'];
  // $cliente_nome = mysql_real_escape_string($cliente_nome);

    //############# CONNETCTION ###############
    // Create connection
    $conn = mysqli_connect($servidor, $usuario, $senha,$banco);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //############# CONNETCTION ###############


  //$sql = "INSERT INTO `clientes`(`nome`, `sobrenome`, `cnpj`, `email`, `telefone`) VALUES ( '$cliente_nome','$cliente_sobrenome','$cliente_cnpj','$cliente_email','$cliente_telefone')";

   $sql = "INSERT INTO `cliente`(`cnpj`, `nome`, `razão`, `nome_fantasia`, `cep`, `endereço`, `numero`, `bairro`, `complemento`, `cidade`, `uf`, `contato_nome`, `email`, `telefone`, `ramo`, `status_cliente`) VALUES ('$cliente_cnpj','$cliente_nome','$cliente_razao','$cliente_nome_fantasia','$cliente_cep','$cliente_endereço','$cliente_numero','$cliente_bairro','$cliente_complemento','$cliente_cidade','$cliente_uf','$cliente_contato_nome','$cliente_email','$cliente_telefone','$cliente_ramo','$cliente_status_cliente')"

  if (mysqli_query($conn, $sql)) {
    echo "Cliente Cadastrado";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);





} else if($acao == 'BuscarCliente') {

      // $cliente_nome = $_POST['nome'];
      // $cliente_nome = mysql_real_escape_string($cliente_nome);

        //############# CONNETCTION ###############
        // Create connection
        $conn = mysqli_connect($servidor, $usuario, $senha,$banco);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //############# CONNETCTION ###############


      $sql = "SELECT id, nome, sobrenome, cnpj, email, telefone FROM `clientes` WHERE cnpj = '$cliente_cnpj'";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row

          while($row = $result->fetch_assoc()) {

                           echo $row['id'] . ";" . $row['nome'] . ";" . $row['sobrenome']. ";" . $row['cnpj'] . ";" . $row['email'] . ";" . $row['telefone'] . ";";
      // echo "<br>";
                          //  $string;

          }

       }else {
          echo "0 results";
      }
      $conn->close();


    }else if($acao == 'UpdateCliente') {

          // $cliente_nome = $_POST['nome'];
          // $cliente_nome = mysql_real_escape_string($cliente_nome);

            //############# CONNETCTION ###############
            // Create connection
            $conn = mysqli_connect($servidor, $usuario, $senha,$banco);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            //############# CONNETCTION ###############




          $sql = "UPDATE `clientes` SET nome='$cliente_nome',sobrenome='$cliente_sobrenome',cnpj='$cliente_cnpj',email='$cliente_email',telefone='$cliente_telefone' WHERE cnpj='$cliente_cnpj'";





      if (mysqli_query($conn, $sql)) {
        echo "Cliente Atualizado";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);




        }else if($acao == 'DeletarCliente') {

      // $cliente_nome = $_POST['nome'];
      // $cliente_nome = mysql_real_escape_string($cliente_nome);

        //############# CONNETCTION ###############
        // Create connection
        $conn = mysqli_connect($servidor, $usuario, $senha,$banco);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //############# CONNETCTION ###############

      $sql = "DELETE FROM `clientes` WHERE cnpj = '$cliente_cnpj'";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row

    

       }else {
          echo "0 results";
      }
      $conn->close();


    }
		
		
		
		
		
		
		else {
        echo "erro 2";
        echo "$cliente_nome";
    }


	
	
	
	
	

// SELECIONAR POR ID



//UPDATE id


//DELETE POR ID





































?>
