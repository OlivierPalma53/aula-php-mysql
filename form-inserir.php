<?php
  require_once 'includes/header.php';
?>
<div class="container">
  <div class="jumbotron">
    <form action="inserir.php" method="post">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control"/>
      </div>

      <div class="form-group">
        <label for="profissao">Profissão</label>
        <input type="text" name="profissao" class="form-control" />
      </div>

      <div class="form-group">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" class="form-control" />
      </div>

      <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" class="form-control" />
      </div>

      <div class="form-group">
        <label for="peso">Peso</label>
        <input type="text" name="peso" class="form-control" />
      </div>

      <div class="form-group">
        <label for="altura">Altura</label>
        <input type="text" name="altura" class="form-control" />
      </div>

      <div class="form-group">
        <label for="nacionalidade">Nacionalidade</label>
        <input type="text" name="nacionalidade"  class="form-control" />
      </div>

      <input type="submit" value="Cadastrar" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
