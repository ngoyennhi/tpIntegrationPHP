<!-- PHP Data Objects -->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
//nom de la base de donnees
$dbname = "commentaire";  

try {
  //On se connecte a la BDD
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  //Le script s'arrete (die) et un message d'erreur apparait.
  die();
}

// // Close the Connection
// //il vaut mieux la laisser ouverte, puisque PHP s'occupe de le fermer la connexion à la fin du script, tout seul.
// $conn = null;

?>