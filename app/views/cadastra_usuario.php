<?php
// Incluir arquivo de configuração
require "../conexao/connection.php";
?>
<?php include "../partials/header.php"; ?>

<style>
.form-cadastra{
    margin-top: 250px;
    margin-left: 600px;
    background: white;
    width: 400px;
    height: 300px;
    border-radius: 15%;
    box-shadow: 10px 5px 5px rgba(31, 10, 10, 0.363);
}

body {
    background-image: radial-gradient(circle at 100% -50.71%, #ade5ff 0, #7dcefb 25%, #3cb5f2 50%, #009ce9 75%, #0085e0 100%);
    background-repeat: no-repeat;
    height: 800px;
}

.title-login {
    text-align: center;
}

</style>
<form class="form-cadastra" action="processa_cadastro.php" method="post">
      <h5 class="title-login">Cadastra Usuario</h5>
      <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Nome:</label>
          <div class="col-sm-10">
          <input type="text" name="nome" id="staticEmail" placeholder="Ex: João da Silva" class="col-10">
          </div>
          <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
          <input type="email" name="email" id="staticEmail" placeholder="Ex: email@example.com" class="col-10">
          </div>
          <label for="staticEmail" class="col-sm-2 col-form-label">Idade:</label>
          <div class="col-sm-10">
          <input type="text" name="idade" id="staticEmail" placeholder="Ex:33" class="col-10">
          </div>
          <label for="inputPassword" class="col-sm-2 col-form-label">Senha:</label>
          <div class="col-sm-10">
          <input type="password" name="senha" id="inputPassword" class="col-10">
          </div>
      </div>
      <div class="mb-3 row">
          <div class="d-grid gap-2 col-9 mx-auto" style="margin-top: 10px;">
          <button type="submit" class="btn btn-info">Cadastar</button>
          </div>
          <div class="d-grid gap-2 col-10 mx-auto" style="margin-top: 10px;">
          <p>Deseja Sair? <a href="http://localhost/sistemalogin/" class="link-info">Sair</a></p>
          </div>
      </div>
</form>

  <?php include "../partials/footer.php"; 

  ?>