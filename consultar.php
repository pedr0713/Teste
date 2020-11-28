<?php
include './conexao.php';

$conn = getConnection();

$sql = 'SELECT * FROM pessoa where id = :id';

$id = $_GET["id"];

$stmt = $conn->prepare ($sql);
$stmt -> bindValue(':id', $id);

$stmt -> execute();
    
$result = $stmt -> fetchAll();

foreach($result as $value)
{
    echo 'Pessoa: '.$value['nome'].'<br/> E-mail: '.$value['email'].'<br/> Telefone: '.$value['telefone'].'<br/>';
   
}
?>