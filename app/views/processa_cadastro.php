<?php
// Incluir arquivo de configuração
require_once "../conexao/connection.php";
 
// Defina variáveis e inicialize com valores vazios
$nome =  $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$senha = $_POST['senha'];
$erro = 0;
    
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
            $param_senha = $senha; // Creates a password hash
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página de login
                echo "<script>alert('Cadastro realizado com sucesso!');
                top.location.href='http://localhost/sistemalogin/';
                </script>";
            } else{
                echo "<script>alert('Não foi possivel realizar o cadastro!');
                top.location.href='http://localhost/sistemalogin/';
                </script>";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);