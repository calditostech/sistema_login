<?php
// session_start inicia a sessão
session_start();
// Incluir arquivo de configuração
require_once "../conexao/connection.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

    if("SELECT * FROM usuarios WHERE email = $email and senha = $senha")
    {
            $_SESSION['email'] = $email;
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