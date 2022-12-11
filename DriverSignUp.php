<?php

    //Valores do banco
    $servidor = '147.182.178.92:3306';
    $user = 'root';
    $pass = '123lws';
    $dbname = 'updown';

    // Dados do motorista
    $nome = $_POST['name'];
    $sobrenome = $_POST['surName'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['phone'];
    $data_nascimento = $_POST['birthDate'];
    $senha = $_POST['password'];

    //Criando conexão
    $conn = new mysqli($servidor, $user, $pass, $dbname);

    // Checando conexão
    if ($conn -> connect_error) {
        die("Falha na Conexão: " . $conn -> connect_error);
    }

    $sql = "INSERT INTO tbl_colaboradores (nome, sobrenome, email, cpf,
        telefone, data_nascimento, senha)
        VALUES ($nome, $sobrenome, $email, $cpf, $telefone, $data_nascimento,
        $senha);";

    if ( $conn -> query($sql) ===TRUE) {
        echo "cadastro realizado com sucesso";
    } else {
        echo "Error: " . $sql . "<br" . $conn->error;
    }

    $conn -> close();

?>