<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'metida');
$id = $_GET['id']; // User-provided input
$q = "SELECT * FROM items WHERE id = $id";
$res = $mysqli->query($q);

while ($row = $res->fetch_assoc()) {
  var_dump($row);
}

$mysqli->close();