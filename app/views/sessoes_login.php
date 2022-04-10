<?php
// session_start inicia a sessão
session_start();
// Incluir arquivo de configuração
require_once "../conexao/connection.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];

    if($_POST["nome"] == $nome and $_POST["senha"] == $senha)
    {
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;

            echo "<script>alert('Logado Com Sucesso!');
                top.location.href='pagina_admin.php';
                </script>";
        
    }
    else
    {
        echo "<script>alert('Usuarios Ou Senha Incorretos!');
            top.location.href='http://localhost/sistemalogin/';
            </script>";
    }
?>