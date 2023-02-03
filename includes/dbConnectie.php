<?php
// als er een fout is, geef dan een foutmelding
ini_set('display_errors', 1);
error_reporting(E_ALL);

// database inloggegevens
$host = "localhost"; // '127.0.0.1' of 'localhost'
$username = "u155066p145881_Peter";
$password = "Pe_phpMyAdmin_64";
$dbname = "u155066p145881_peterzoetekouw";

// maak de database connectie
$mysqli = new mysqli($host, $username, $password, $dbname);

// als de verbinding niet lukt, geef dan een foutmelding
if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection";
    exit;
}

