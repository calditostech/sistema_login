<?php include "../partials/header.php"; ?>

<div class="form-cadastra">
      <h5 class="title-login">Cadastra Usuario</h5>
      <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Nome:</label>
          <div class="col-sm-10">
          <input type="text" id="staticEmail" placeholder="Ex: João da Silva" class="col-10">
          </div>
          <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
          <input type="email" id="staticEmail" placeholder="Ex: email@example.com" class="col-10">
          </div>
          <label for="staticEmail" class="col-sm-2 col-form-label">Idade:</label>
          <div class="col-sm-10">
          <input type="text" id="staticEmail" placeholder="Ex:33" class="col-10">
          </div>
          <label for="inputPassword" class="col-sm-2 col-form-label">Senha:</label>
          <div class="col-sm-10">
          <input type="password" id="inputPassword" class="col-10">
          </div>
      </div>
      <div class="mb-3 row">
          <div class="d-grid gap-2 col-9 mx-auto" style="margin-top: 10px;">
          <button type="button" class="btn btn-info">Cadastar</button>
          </div>
          <div class="d-grid gap-2 col-10 mx-auto" style="margin-top: 10px;">
          <p>Deseja Sair? <a href="http://localhost/sistemalogin/" class="link-info">Sair</a></p>
          </div>
      </div>
  </div>

  <?php include "../partials/footer.php"; 

  ?>