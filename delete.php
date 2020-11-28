<?php

include './conexao.php';

$conn = getConnection();

$sql = 'DELETE FROM pessoa WHERE id = :id';

$id = $_GET["id"];//Apagará o id número 4

$stmt = $conn -> prepare($sql);
$stmt->bindParam(':id',$id);

if($stmt->execute())
{
    echo 'Excluido com sucesso!';
}
else{
    echo 'Erro ao excluir!';
}

?>