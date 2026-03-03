<?php
// bootstrap.php

// Start session
session_start();

// Error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
try {
    $pdo = new PDO('mysql:host=hostname;dbname=database_name', 'username', 'password');
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Autoload classes
spl_autoload_register(function ($class_name) {
    include 'path/to/classes/' . $class_name . '.php';
});
?>