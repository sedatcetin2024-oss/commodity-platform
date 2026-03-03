<?php

// Bootstrap file for the Commodity Platform

// Autoload dependencies
require __DIR__ . '/vendor/autoload.php';

// Start the session
session_start();

// Initialize configuration
require __DIR__ . '/config/config.php';

// Load routes
require __DIR__ . '/routes/web.php';

?>