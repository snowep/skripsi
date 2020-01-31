<?php
  include 'database.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = $db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
  $rowCount = $query->rowCount();

  if ($rowCount > 0) {
    header('location: clusterOptimum.php');
  } else {
    header('location: index.php');
  }
?>
