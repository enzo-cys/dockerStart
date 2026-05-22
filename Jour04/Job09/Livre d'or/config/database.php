<?php
// Configuration centrale de la base de données. Ajustez les identifiants si nécessaire.
try {
    $db = new PDO('mysql:host=localhost;dbname=livreor', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En production, loggez l'erreur au lieu de l'afficher
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

// Fournit aussi un alias $pdo pour compatibilité
$pdo = $db;

// Expose un chemin pratique vers le dossier database pour les imports/migrations
define('DATABASE_DIR', __DIR__ . '/../database');
