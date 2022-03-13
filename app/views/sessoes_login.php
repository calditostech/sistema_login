<?php
// session_start inicia a sessão
session_start();
// Incluir arquivo de configuração
require_once "../conexao/connection.php";

$sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";
$login = $pdo->prepare($sql);

    $login->bindParam(":email", $_POST['email'],PDO::PARAM_STR);
    $login->bindParam(":senha", md5($_POST['senha'],PDO::PARAM_STR));
    $login->execute();

     // Definir parâmetros
     $param_email = $email;
     $param_senha = $senha;

    if($login->rowCount() == 1)
    {
        while($ln = $login->fetch(PDO::FETCH_ASSOC))
        {
            $_SESSION['email'] = $ln['email'];
            $_SESSION['senha'] = $ln['senha'];

            echo "<script>alert('Logado Com Sucesso!');
                top.location.href='pagina_admin.php';
                </script>";
        };
      }
    else
    {
        echo "<script>alert('Usuarios Ou Senha Incorretos!');
            top.location.href='http://localhost/sistemalogin/';
            </script>";
    }
?>