<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'metida');

$title = "zxczxc'; DROP TABLE some; --";
$q = "SELECT * FROM items WHERE title = '$title'";

$res = $mysqli->query($q);

while ($row = $res->fetch_assoc()) {
  echo "ID: " . $row["id"] . " - Title: " . $row["title"] . "<br>";
}

$mysqli->close();

// $mysqli = new mysqli('localhost', 'root', 'root', 'metida');
// $title = "zxczxc'; DROP TABLE some; --";

// // Enabling multiple statements
// $mysqli->set_charset("utf8");  // Ensuring utf8 for safety
// $mysqli->multi_query("SELECT * FROM items WHERE title = '$title'");

// do {
//     /* store the first result set */
//     if ($res = $mysqli->store_result()) {
//         while ($row = $res->fetch_assoc()) {
//             echo "ID: " . $row["id"] . " - Title: " . $row["title"] . "<br>";
//         }
//         $res->free();
//     }
// } while ($mysqli->more_results() && $mysqli->next_result());

// $mysqli->close();