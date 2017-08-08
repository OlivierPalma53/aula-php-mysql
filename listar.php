<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
  require_once 'includes/header.php';
?>
<div class="container">
  <div class="page-header">
    <h1>Listar Alunos</h1>
  </div>
  <div class="jumbotron">
    <table class="table table-bordered table-striped table-hover table-responsive">
      <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Profissão</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Nacionalidade</th>
        <th>Editar</th>
        <th>Excluir</th>
      </thead>
      <?php

        $conn = new mysqli("localhost", "root", "root", "cadastro");

        if($conn->connect_error){
          echo 'Erro: '.$conn->connect_error;
        }

        $sql = "SELECT * FROM gafanhotos";

        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()){
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['nome']."</td>";
          echo "<td>".$row['profissao']."</td>";
          echo "<td>".$row['nascimento']."</td>";
          echo "<td>".$row['sexo']."</td>";
          echo "<td>".$row['peso']."</td>";
          echo "<td>".$row['altura']."</td>";
          echo "<td>".$row['nacionalidade']."</td>";
          echo "<td><a href='form-edit.php?id=".$row['id']."'><button class='btn btn-warning'>Editar</button></a></td>";
          echo "<td><a href='excluir.php?id='".$row['id']."><button class='btn btn-danger'>Excluir</button></a></td>";
          echo "</tr>";
        }

        $conn->close();
      ?>
    </table>
  </div>
</div>
