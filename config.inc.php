<?php
  //estabelecer conexão com servidor (servidor, usuário, senha)
  $conn = mysqli_connect("localhost","root","");

  //selecionar bd
  $bd = mysqli_select_db($conn,"projeto_php");

  //

  //verificar conexão
  if($conn){
    echo "Conexão com servidor estabelecida com sucesso.";
  }else{
    echo "Erro ao estabelecer conexão.";
  }

?>