<?php

  require_once 'includes/header.php';

  if(isset($_POST['nome'])){

    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $profissao = isset($_POST['profissao']) ? $_POST['profissao']: null;
    $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento']: null;
    $sexo = isset($_POST['sexo']) ? $_POST['sexo']: null;
    $peso = isset($_POST['peso']) ? $_POST['peso']: null;
    $altura = isset($_POST['altura']) ? $_POST['altura']: null;
    $nacionalidade = isset($_POST['nacionalidade']) ? $_POST['nacionalidade']: null;

    $conn = new mysqli("localhost","root","root","cadastro");

    if($conn->connect_error){
      echo 'Erro: '.$conn->connect_error;
    }

    $stmt = $conn->prepare("INSERT INTO gafanhotos (nome, profissao, nascimento, sexo, peso, altura, nacionalidade) values (?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssdds", $nome, $profissao, $nascimento, $sexo, $peso, $altura, $nacionalidade);

    if($stmt->execute()){
      echo '<div class="alert alert-success">Cadastro Inserido com sucesso.</div>';
    } else {
      echo '<div class="alert alert-danger">Erro ao cadastrar aluno.</div>';
    }

    $conn->close();

  } else {
    header('Location: form-inserir.php?erro=1');
  }


?>
