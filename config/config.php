<?php 
try {
    // Define constants
    if (!defined("HOST")) define("HOST", "localhost");
    if (!defined("DBNAME")) define("DBNAME", "wooxtravel");
    if (!defined("USER")) define("USER", "root");
    if (!defined("PASS")) define("PASS", "Sushma_@12345");
    if (!defined("ADMINURL")) define("ADMINURL", "http://localhost/wooxtravel/admin-panel/");


    // Create connection (adjust port if needed: 3306 or 3307)
    $conn = new PDO("mysql:host=" . HOST . ";port=3306;dbname=" . DBNAME, USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $Exception) {
    echo "Connection failed: " . $Exception->getMessage();
}
