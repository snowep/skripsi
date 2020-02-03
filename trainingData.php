<!DOCTYPE html>
<?php include 'database.php'; session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/css/semantic.min.css">
  </head>
  <body>
    <?php include 'comp/menu.php'; ?>
    <div class="ui container" style="padding-top:14px!important">
      <table class="ui celled center aligned collapsing small table">
        <thead>
          <tr>
            <th rowspan="2">IdPel</th>
            <th colspan="14">Daya</th>
            <th rowspan="2">Aksi</th>
          </tr>
          <tr>
            <?php
            $th = array('WBP', 'LWBP');
            $hari = 1;
            for ($i=0; $i < 7; $i++) {
              for ($j=0; $j < count($th); $j++) {
            ?>
            <th><?php echo $th[$j]." ".$hari; ?></th>
            <?php
              }
              $hari++;
            }
            ?>
          </tr>
        </thead>
        <tbody>
          <?php $query = $db->query("SELECT * FROM tb_training");
          while ($result = $query->fetch()) {
          ?>
          <tr>
            <td><?php echo $result[0] ?></td>
            <?php for ($i=1; $i < 15; $i++) { ?>
            <td><?php echo number_format($result[$i], 3) ?></td>
            <?php } ?>
            <td> <a href="deleteTraning.php?id_pelanggan=<?php echo $result[0]?>">Hapus</a> </td>
          </tr>
          <?php
          } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
