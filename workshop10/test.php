<?php
include "include/db.php";
$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
echo "Er staan " . count($producten) . " producten in de database.";
?>