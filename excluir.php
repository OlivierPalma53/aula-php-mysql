<?php

  require_once 'includes/header.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "root", "cadastro");

    if($conn->connect_error){
      echo "Erro: $conn->connect_error";
    }

    $sql = "DELETE FROM gafanhotos WHERE id = '$id'";

    if($conn->query($sql)){
      echo "<div class='alert alert-success'>
      Excluido com sucesso
      </div>";
    } else {
      echo "Erro ao excluir: $conn->error";
    }


  } else {
    header("Location: index.php");
  }

?>
