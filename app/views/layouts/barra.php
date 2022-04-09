<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="margin-top: -15px;">Sistema Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Disabled</a>
        </li>
        <li class="nav-item nav-link active">
          <p style="margin-left:100px;">Bem Vindo:</p>
        </li>
        <li class="nav-item nav-link active">
          <h5 style="font-size: 15px; color: yellow; margin-left:-8px; margin-top: 3px;"><?php echo $_SESSION['email']; ?></h5>
        </li>
        <li class="nav-item" style="margin-left:600px;">
          <a class="nav-link active" href="../views/logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>