<?php
// Configuration des paramètres de la base de données
$host = "localhost";
$db_name = "gestion_academique";
$username = "root";
$password = "";

try {
    // Connexion via l'extension PDO pour plus de sécurité
    $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
} catch(PDOException $exception) {
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
}
?>
