<?php
  include 'database.php';

  $idpel = $_GET['id_pelanggan'];

  $query = $db->query("DELETE FROM tb_testing WHERE id_pelanggan = '$idpel'");

  header("location:testingData.php");
?>
