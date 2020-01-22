<!DOCTYPE html>
<?php include 'database.php'; session_start(); ?>
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
      <h1>Report</h1>
      <table class="ui celled center aligned small table">
        <thead>
          <tr>
            <th>IdPel</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $query = $db->query("SELECT * FROM tb_testing");
          while ($result = $query->fetch()) {
          ?>
          <tr>
            <td><?php echo $result[0] ?></td>
            <td><?php echo $result['tanggal'] ?></td>
            <td><?php echo $result['status'] ?></td>
            <td><a href="reportView.php?id_pelanggan=<?php echo $result['id_pelanggan'] ?>"><?php if ($result['status'] == 'Penggunaan Daya Tidak Normal ') {
              echo "Laporan Penugasan";
            } ?></a> </td>
          </tr>
          <?php
          } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
