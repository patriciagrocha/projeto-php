<?php 

  $nome = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
  $subject = $_REQUEST['subject'];
  
  echo "<h2> Olá, $nome, mensagem recebida com sucesso!</h2>";
  
?>