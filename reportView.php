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
        <p>Tindakan: <br>
          <ol>
            <li>
              Segera lakukan pemeriksaan di lokasi pelanggan.
            </li>
            <li>
              Jika pelanggan terbukti melakukan kecurangan:
              <ul>
                <li>
                  Undang pelanggan ke kantor PLN untuk dibicarakan lebih lanjut.
                </li>
                <li>
                  Lakukan pemutusan sementara terhadap pelanggan. Pemutusan dilakukan hingga pelanggan datang memenuhi undangan PLN
                </li>
              </ul>
            </li>
            <li>
              Jika pelanggan tidak terbukti melakukan kecurangan:
              <ul>
                <li>Periksa segel di AMR.</li>
                <li>Periksa kembali load profile pelanggan yang bersangkutan.</li>
                <li>Periksa meter log pelanggan.</li>
                <li>Lakukan koreksi pada AMR.</li>
              </ul>
            </li>
          </ol>
      <?php
      }
      ?>
    </div>
  </body>
</html>
