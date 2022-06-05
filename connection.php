<?php
//Conexão com o Banco de dados
function connection(){
    $servername = getenv('Host');
    $username = getenv('Username');
    $password = getenv('Password');
    $database = getenv('Database');

try {
$conn =  new PDO("mysql:host=$servername;database=$database;charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;

} catch (PDOException $e) {
    echo "Conexão falhou! error: " . $e->getMessage();
}

}

?>