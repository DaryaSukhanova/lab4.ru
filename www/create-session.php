<?php
   require 'configDB.php';
   session_start();
   $query = $pdo->query('SELECT * FROM `users`');
   $row = $query->fetch(PDO::FETCH_OBJ);
   $_SESSION["user_id"] = $row->user_id;
   $user_id = $_SESSION["user_id"];
   // print_r($_SESSION);
   header("Location: good.php");
?>