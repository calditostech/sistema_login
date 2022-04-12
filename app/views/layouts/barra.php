<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="margin-top: -15px;">Mouse Foot Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <!--
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tela Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Documentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Relatorios</a>
        </li>
        -->
        <li class="nav-item nav-link active">
          <p style="margin-left:200px;">Bem Vindo:</p>
        </li>
        <li class="nav-item nav-link active">
          <h5 style="font-size: 15px; color: yellow; margin-left:-8px; margin-top: 3px;"><?php echo $_SESSION['nome']; ?></h5>
        </li>
        <li class="nav-item" style="margin-left:900px;">
          <a class="nav-link active" href="../views/logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<ul id="nav" style="background-color: gray; color: white; width: 200px; height: 700px;">
    <li><a href="#" style="color: white;">Home</a></li>
    <li><a href="#" style="color: white;" >Documentos</a></li>
    <!--
    <li><a href="#">O que Fazemos?</a>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Hospedagem</a></li>
        <li><a href="#">SEO</a></li>
        <li><a href="#">Sistemas</a></li>
      </ul>
    </li>
  -->
    <li><a href="#" style="color: white;">Relatórios</a></li>
    <li><a href="#" style="color: white;">Transportadoras</a></li>
  </ul>

  <script type="text/javascript" src="../../assets/js/sub_menu.js"></script>