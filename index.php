<?php include "app/partials/header.php"; ?>
<body>
  <div class="form">
      <h5 class="title-login">Sistema Login</h5>
      <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
          <input type="text" id="staticEmail" placeholder="email@example.com" class="col-10">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
          <div class="col-sm-10">
          <input type="password" id="inputPassword" class="col-10">
          </div>
          <div class="d-grid gap-2 col-10 mx-auto" style="margin-top: 10px;">
          <button type="button" class="btn btn-info">Enter</button>
          </div>
          <div class="d-grid gap-2 col-10 mx-auto" style="margin-top: 10px;">
          <p>Não possui conta? <a href="./app/views/cadastra_usuario.php" class="link-info">Cadastra-se aqui</a></p>
          </div>
      </div>
  </div>

<?php include "app/partials/footer.php"; ?>