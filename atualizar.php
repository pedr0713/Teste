<?php

    include './conexao.php';

    $conn = getConnection();

    $sql = 'UPDATE pessoa SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id';

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];
    $id = $_GET["id"];

    $stmt = $conn ->prepare($sql);
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':telefone',$telefone);
    $stmt->bindParam(':id',$id);

    if($stmt->execute()){
        echo 'Atualizado com sucesso!';
    }
    else{
        echo 'Erro ao atualizar!';
    }

?>