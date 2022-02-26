<?php
// Incluir arquivo de configuração
require_once "../conexao/connection.php";
 
// Defina variáveis e inicialize com valores vazios
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$senha = $_POST['senha'];

//var_dump($senha);
//$username = $password = $confirm_password = "";
//$username_err = $password_err = $confirm_password_err = "";
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(!empty($nome) && !empty($senha) && !empty($idade) && !empty($senha)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO usuarios (nome, email, idade, senha) VALUES (:nome, :email, :idade, :senha)";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":nome", $param_nome, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":idade", $param_idade, PDO::PARAM_STR);
            $stmt->bindParam(":senha", $param_senha, PDO::PARAM_STR);

            // Definir parâmetros
            $param_nome = $nome;
            $param_email = $email;
            $param_idade = $idade;
            $param_senha = password_hash($senha, PASSWORD_DEFAULT); // Creates a password hash
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página de login
                header("location: cadastra_usuario.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);