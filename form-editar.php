<?php
  require_once 'includes/header.php';
  if(isset($_GET['id'])){
    $id = isset($_GET['id'])? $_GET['id'] : null;

    $conn = new mysqli("localhost", "root", "root", "cadastro");

    $sql = "SELECT * FROM gafanhotos WHERE id = '$id'";

    $result = $conn->query($sql);

    $user = $result->fetch_assoc();

    $conn->close();
  } else {
    header("Location: index.php");
  }
?>

<div class="container">
  <div class="jumbotron">
    <form action="editar.php" method="post">
      <input type="hidden" name="id" value="<?=$user['id']?>" />
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?=$user['nome']?>"/>
      </div>

      <div class="form-group">
        <label for="profissao">Profissão</label>
        <input type="text" name="profissao" class="form-control" value="<?=$user['profissao']?>" />
      </div>

      <div class="form-group">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" class="form-control" value="<?=$user['nascimento']?>" />
      </div>

      <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" class="form-control" value="<?=$user['sexo']?>" />
      </div>

      <div class="form-group">
        <label for="peso">Peso</label>
        <input type="text" name="peso" class="form-control" value="<?=$user['peso']?>" />
      </div>

      <div class="form-group">
        <label for="altura">Altura</label>
        <input type="text" name="altura" class="form-control" value="<?=$user['altura']?>" />
      </div>

      <div class="form-group">
        <label for="nacionalidade">Nacionalidade</label>
        <input type="text" name="nacionalidade"  class="form-control" value="<?=$user['nacionalidade']?>" />
      </div>

      <input type="submit" value="Editar" class="btn btn-block btn-warning" />
    </form>
  </div>
</div>
