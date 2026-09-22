<?php
// Configuration des accès à la base de données XAMPP
$host = "localhost";
$dbname = "gestion_presence_spat"; 
$username = "root";
$password = ""; 

try {
    // Connexion sécurisée avec le moteur PDO de PHP
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Activer la gestion des erreurs SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("❌ Échec de la connexion réseau à phpMyAdmin : " . $e->getMessage());
}
?>
