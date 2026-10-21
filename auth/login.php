<?php
// Initialisation de la session PHP
session_start();
require_once '../config/database.php';

$erreur = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        // Préparation de la requête pour éviter les injections SQL
        $query = "SELECT * FROM utilisateurs WHERE email = :email LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérification du mot de passe (haché en production)
        if ($user && password_verify($password, $user['mot_de_passe'])) {
            // Stockage des variables de session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nom'] = $user['nom_complet'];
            $_SESSION['user_role'] = $user['role'];
            
            // Redirection vers le tableau de bord principal
            header("Location: ../index.php");
            exit();
        } else {
            $erreur = "Identifiants incorrects ou utilisateur introuvable.";
        }
    } else {
        $erreur = "Veuillez remplir tous les champs.";
    }
}
?>
