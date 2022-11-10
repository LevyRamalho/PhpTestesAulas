<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "aula2109";
 try {
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 } catch(PDOException $e)
 {
 echo "Erro: " . $e->getMessage();
 $conn = null;
 }
?> 