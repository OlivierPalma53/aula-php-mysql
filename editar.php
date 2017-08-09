<?php

  require_once 'includes/header.php';

  if(isset($_POST['id'])){

    $id = isset($_POST['id'])? $_POST['id'] : null;
    $nome = isset($_POST['nome'])? $_POST['nome'] : null;
    $profissao = isset($_POST['profissao'])? $_POST['profissao'] : null;
    $nascimento = isset($_POST['nascimento'])? $_POST['nascimento'] : null;
    $sexo = isset($_POST['sexo'])? $_POST['sexo'] : null;
    $peso = isset($_POST['peso'])? $_POST['peso'] : null;
    $altura = isset($_POST['altura'])? $_POST['altura'] : null;
    $nacionalidade = isset($_POST['nacionalidade'])? $_POST['nacionalidade'] : null;

    $conn = new mysqli("localhost", "root", "root", "cadastro");

    if($conn->connect_error){
      echo "Erro ao conectar ao banco: ".$conn->connect_error;
    }

    $stmt = $conn->prepare("UPDATE gafanhotos SET nome = ?, profissao = ?,
      nascimento = ?, sexo = ?, peso = ?, altura = ?, nacionalidade = ? WHERE id = ?");
    $stmt->bind_param("ssssddsi", $nome, $profissao, $nascimento, $sexo, $peso, $altura, $nacionalidade, $id);

    if($stmt->execute() == true){
      echo "<div class='alert alert-success'>Editado com sucesso</div>";
    } else {
      echo "Erro ao cadastrar";
    }

    $conn->close();
  } else {
    header("Location: index.php");
  }

?>
