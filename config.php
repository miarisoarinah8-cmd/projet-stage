<?php
// Configuration des accès à MySQL (XAMPP)
$host = "localhost";
$dbname = "gestion_presence";
$username = "root";
$password = ""; // Par défaut sur XAMPP, pas de mot de passe pour root

try {
    // Connexion sécurisée avec l'outil PDO de PHP
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Activer le mode d'erreur pour voir les bugs s'il y en a
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Si la connexion échoue, on arrête le script et on affiche l'erreur
    die("❌ Échec de la connexion à phpMyAdmin : " . $e->getMessage());
}
?>
