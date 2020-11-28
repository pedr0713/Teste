<?php
include './conexao.php';

$conn = getConnection();

$sql = 'INSERT INTO pessoa (nome, email, telefone) VALUES(:nome, :email,:telefone)';

/*$id = $_GET ['id'];*/
$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];

$stmt = $conn->prepare ($sql);
/*$stmt -> bindParam(':id', $id);//campo*/
$stmt -> bindParam(':nome',$nome);//quantidade
$stmt -> bindParam(':email',$email);//valor
$stmt -> bindParam(':telefone', $telefone);//campo

if($stmt -> execute()){
    echo '<h1>Salvo com Sucesso!</h1>';
}
else{
    echo '<h1>Erro ao salvar</h1>';
}
?>