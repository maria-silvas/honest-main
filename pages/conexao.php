<?php
$server   = "localhost";
$user     = "root";
$password = "";
$database = "database_honest";

try {
    $conexao = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    // Configuração para lançar exceções em caso de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>


