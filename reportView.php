<!DOCTYPE html>
<?php include 'database.php'; session_start(); $idpel = $_GET['id_pelanggan']; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/css/semantic.min.css">
    <link rel="stylesheet" href="dist/css/component/icon.css">
  </head>
  <body>
    <?php include 'comp/menu.php'; ?>
    <div class="ui container" style="padding-top:50px!important;">
      <h1>Lihat Report</h1>
      <?php
      $query = $db->query("SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'");
      while ($result = $query->fetch()) {
      ?>
        <p>ID Pelanggan: <?php echo $result['id_pelanggan']; ?></p>
        <p>Status Penggunaan: <b><?php echo $result['status']; ?></b></p>
        <p>Tindakan: <br>- <b>Segera Lakukan pengecekkan di lokasi pelanggan.<br>- Lakukan pemutusan sementara jika pelanggan terbukti melakukan pencurian.</b></p>
      <?php
      }
      ?>
    </div>
  </body>
</html>
