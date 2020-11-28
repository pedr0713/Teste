<?php
/**
 * 
 *  @return\PDO
* */
function getConnection(){
    $dsn = 'mysql:host=localhost;dbname=cadastro;charset=utf8';
    $user = "root";
    $pass = '';

    try{
        $pdo = new PDO($dsn, $user, $pass);

        return $pdo;

        echo "<h1>Conexão realizada com sucesso!</h1>";
    }
    catch(PDOException $ex){
        echo '<h1>Erro....Corrija seu código</h1>';
    }
}

?>