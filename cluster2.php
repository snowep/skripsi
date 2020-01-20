<!DOCTYPE html>
<?php include 'database.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js"></script>
    <link rel="stylesheet" href="dist/css/semantic.min.css">
  </head>
  <body>
    <div class="ui grid container" style="margin: 40px!important">
      <br>
      <div class="row">
        <h2>Training set Cluster 2</h2>
        <?php
          $query = $db->query("UPDATE tb_training SET C2DC1='0', C2DC2='0', C_before='', C_after='', hasil='0'");
          $query = $db->query("SELECT * FROM tb_training");
          $rowCount = $query->rowCount();
          do {
            $acak_C1 = rand(1, $rowCount);
            $acak_C2 = rand(1, $rowCount);
          } while ($acak_C1 == $acak_C2);
        ?>
      </div>
      <div class="row">
        <div class="fifteen wide column">
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <th>Centeroid</th>
                <?php
                  $title = array('WBP','LBWP');
                  $hari = 1;
                  for ($j=0; $j < 7; $j++) {
                    for ($i=0; $i < count($title); $i++) {
                ?>
                <th><?php echo $title[$i]." ".$hari; ?></th>
                <?php
                    }
                    $hari++;
                  }
                ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cluster 1</td>
                <?php
                  $acak_C1 = 1;
                  $query = $db->query("SELECT Daya_WBP_1, Daya_LWBP_1, Daya_WBP_2, Daya_LWBP_2, Daya_WBP_3, Daya_LWBP_3, Daya_WBP_4, Daya_LWBP_4, Daya_WBP_5, Daya_LWBP_5, Daya_WBP_6, Daya_LWBP_6, Daya_WBP_7, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '$acak_C1'");
                  while ($result = $query->fetch()) {
                    $C1_Daya_WBP_1=$result['Daya_WBP_1']; $C1_Daya_LWBP_1=$result['Daya_LWBP_1'];
                    $C1_Daya_WBP_2=$result['Daya_WBP_2']; $C1_Daya_LWBP_2=$result['Daya_LWBP_2'];
                    $C1_Daya_WBP_3=$result['Daya_WBP_3']; $C1_Daya_LWBP_3=$result['Daya_LWBP_3'];
                    $C1_Daya_WBP_4=$result['Daya_WBP_4']; $C1_Daya_LWBP_4=$result['Daya_LWBP_4'];
                    $C1_Daya_WBP_5=$result['Daya_WBP_5']; $C1_Daya_LWBP_5=$result['Daya_LWBP_5'];
                    $C1_Daya_WBP_6=$result['Daya_WBP_6']; $C1_Daya_LWBP_6=$result['Daya_LWBP_6'];
                    $C1_Daya_WBP_7=$result['Daya_WBP_7']; $C1_Daya_LWBP_7=$result['Daya_LWBP_7'];
                    for ($i=0; $i < 14; $i++) {
                ?>
                <td><?php echo $result[$i] ?></td>
                <?php
                    }
                  }
                  $query = $db->query("SELECT * FROM tb_training");
                  while ($result = $query->fetch()) {
                    $pelanggan = $result['pelanggan'];
                    $DC1 =
                      sqrt(
                        pow(($result['Daya_WBP_1']-$C1_Daya_WBP_1), 2) + pow(($result['Daya_LWBP_1']-$C1_Daya_LWBP_1), 2) +
                        pow(($result['Daya_WBP_2']-$C1_Daya_WBP_2), 2) + pow(($result['Daya_LWBP_2']-$C1_Daya_LWBP_2), 2) +
                        pow(($result['Daya_WBP_3']-$C1_Daya_WBP_3), 2) + pow(($result['Daya_LWBP_3']-$C1_Daya_LWBP_3), 2) +
                        pow(($result['Daya_WBP_4']-$C1_Daya_WBP_4), 2) + pow(($result['Daya_LWBP_4']-$C1_Daya_LWBP_4), 2) +
                        pow(($result['Daya_WBP_5']-$C1_Daya_WBP_5), 2) + pow(($result['Daya_LWBP_5']-$C1_Daya_LWBP_5), 2) +
                        pow(($result['Daya_WBP_6']-$C1_Daya_WBP_6), 2) + pow(($result['Daya_LWBP_6']-$C1_Daya_LWBP_6), 2) +
                        pow(($result['Daya_WBP_7']-$C1_Daya_WBP_7), 2) + pow(($result['Daya_LWBP_7']-$C1_Daya_LWBP_7), 2)
                      );
                  }
                ?>
              </tr>
              <tr>
                <td>Cluster 2</td>
                <?php
                  $acak_C2 = 2;
                  $query = $db->query("SELECT Daya_WBP_1, Daya_LWBP_1, Daya_WBP_2, Daya_LWBP_2, Daya_WBP_3, Daya_LWBP_3, Daya_WBP_4, Daya_LWBP_4, Daya_WBP_5, Daya_LWBP_5, Daya_WBP_6, Daya_LWBP_6, Daya_WBP_7, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '$acak_C2'");
                  while ($result = $query->fetch()) {
                    $C2_Daya_WBP_1=$result['Daya_WBP_1']; $C2_Daya_LWBP_1=$result['Daya_LWBP_1'];
                    $C2_Daya_WBP_2=$result['Daya_WBP_2']; $C2_Daya_LWBP_2=$result['Daya_LWBP_2'];
                    $C2_Daya_WBP_3=$result['Daya_WBP_3']; $C2_Daya_LWBP_3=$result['Daya_LWBP_3'];
                    $C2_Daya_WBP_4=$result['Daya_WBP_4']; $C2_Daya_LWBP_4=$result['Daya_LWBP_4'];
                    $C2_Daya_WBP_5=$result['Daya_WBP_5']; $C2_Daya_LWBP_5=$result['Daya_LWBP_5'];
                    $C2_Daya_WBP_6=$result['Daya_WBP_6']; $C2_Daya_LWBP_6=$result['Daya_LWBP_6'];
                    $C2_Daya_WBP_7=$result['Daya_WBP_7']; $C2_Daya_LWBP_7=$result['Daya_LWBP_7'];
                    for ($i=0; $i < 14; $i++) {
                ?>
                <td><?php echo $result[$i] ?></td>
                <?php
                    }
                  }
                  $query = $db->query("SELECT * FROM tb_training");
                  while ($result = $query->fetch()) {
                    $pelanggan = $result['pelanggan'];
                    $DC2 =
                      sqrt(
                        pow(($result['Daya_WBP_1']-$C2_Daya_WBP_1), 2) + pow(($result['Daya_LWBP_1']-$C2_Daya_LWBP_1), 2) +
                        pow(($result['Daya_WBP_2']-$C2_Daya_WBP_2), 2) + pow(($result['Daya_LWBP_2']-$C2_Daya_LWBP_2), 2) +
                        pow(($result['Daya_WBP_3']-$C2_Daya_WBP_3), 2) + pow(($result['Daya_LWBP_3']-$C2_Daya_LWBP_3), 2) +
                        pow(($result['Daya_WBP_4']-$C2_Daya_WBP_4), 2) + pow(($result['Daya_LWBP_4']-$C2_Daya_LWBP_4), 2) +
                        pow(($result['Daya_WBP_5']-$C2_Daya_WBP_5), 2) + pow(($result['Daya_LWBP_5']-$C2_Daya_LWBP_5), 2) +
                        pow(($result['Daya_WBP_6']-$C2_Daya_WBP_6), 2) + pow(($result['Daya_LWBP_6']-$C2_Daya_LWBP_6), 2) +
                        pow(($result['Daya_WBP_7']-$C2_Daya_WBP_7), 2) + pow(($result['Daya_LWBP_7']-$C2_Daya_LWBP_7), 2)
                      );
                  }
                  if ($DC1 < $DC2) {
                    $C = 'C1';
                  } else {
                    $C = 'C2';
                  }
                  $query = $db->query("UPDATE tb_training SET C2DC1='$DC1', C2DC2='$DC2', C_before='$C' WHERE pelanggan='$pelanggan'");
                ?>
              </tr>
              <tr>
                <td colspan="3">DC1</td>
                <td colspan="12"><?php echo $DC1 ?></td>
              </tr>
              <tr>
                <td colspan="3">DC2</td>
                <td colspan="12"><?php echo $DC2 ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="sixteen wide column">
          <br>
          <?php
            $result = $db->query("SELECT * FROM tb_training");
            while ($res = $result->fetch()) {
              $pelanggan=$res['pelanggan'];
              $DC1 = sqrt(
                      pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1), 2) + pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1), 2) +
                      pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2), 2) + pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2), 2) +
                      pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3), 2) + pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3), 2) +
                      pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4), 2) + pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4), 2) +
                      pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5), 2) + pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5), 2) +
                      pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6), 2) + pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6), 2) +
                      pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7), 2) + pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7), 2)
                    );
              $DC2 = sqrt(
                      pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1), 2) + pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1), 2) +
                      pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2), 2) + pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2), 2) +
                      pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3), 2) + pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3), 2) +
                      pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4), 2) + pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4), 2) +
                      pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5), 2) + pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5), 2) +
                      pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6), 2) + pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6), 2) +
                      pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7), 2) + pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7), 2)
                    );
              if($DC1 < $DC2) {
                $C = 'C1';
              } else {
                $C = 'C2';
              }
              $query = $db->query("UPDATE tb_training SET C2DC1='$DC1', C2DC2='$DC2', C_before='$C' WHERE pelanggan='$pelanggan'");
            }
            $iterasi = 0;
            for ($i = 1; $i <= 103; $i++) {
              $iterasi++;
              // Cari rata-rata C1
              $query = $db->query("SELECT * FROM tb_training WHERE C_before='C1'");
              $C1_Daya_WBP_1_sum=0; $C1_Daya_LWBP_1_sum=0;
              $C1_Daya_WBP_2_sum=0; $C1_Daya_LWBP_2_sum=0;
              $C1_Daya_WBP_3_sum=0; $C1_Daya_LWBP_3_sum=0;
              $C1_Daya_WBP_4_sum=0; $C1_Daya_LWBP_4_sum=0;
              $C1_Daya_WBP_5_sum=0; $C1_Daya_LWBP_5_sum=0;
              $C1_Daya_WBP_6_sum=0; $C1_Daya_LWBP_6_sum=0;
              $C1_Daya_WBP_7_sum=0; $C1_Daya_LWBP_7_sum=0;
              $C1_jml_data=0;

              while($res = $query->fetch()){
                $C1_jml_data++;
                $C1_Daya_WBP_1_sum+=$res['Daya_WBP_1']; $C1_Daya_LWBP_1_sum+=$res['Daya_LWBP_1'];
                $C1_Daya_WBP_2_sum+=$res['Daya_WBP_2']; $C1_Daya_LWBP_2_sum+=$res['Daya_LWBP_2'];
                $C1_Daya_WBP_3_sum+=$res['Daya_WBP_3']; $C1_Daya_LWBP_3_sum+=$res['Daya_LWBP_3'];
                $C1_Daya_WBP_4_sum+=$res['Daya_WBP_4']; $C1_Daya_LWBP_4_sum+=$res['Daya_LWBP_4'];
                $C1_Daya_WBP_5_sum+=$res['Daya_WBP_5']; $C1_Daya_LWBP_5_sum+=$res['Daya_LWBP_5'];
                $C1_Daya_WBP_6_sum+=$res['Daya_WBP_6']; $C1_Daya_LWBP_6_sum+=$res['Daya_LWBP_6'];
                $C1_Daya_WBP_7_sum+=$res['Daya_WBP_7']; $C1_Daya_LWBP_7_sum+=$res['Daya_LWBP_7'];
              }

              $C1_Daya_WBP_1_avg=$C1_Daya_WBP_1_sum/$C1_jml_data; $C1_Daya_LWBP_1_avg=$C1_Daya_LWBP_1_sum/$C1_jml_data;
              $C1_Daya_WBP_2_avg=$C1_Daya_WBP_2_sum/$C1_jml_data; $C1_Daya_LWBP_2_avg=$C1_Daya_LWBP_2_sum/$C1_jml_data;
              $C1_Daya_WBP_3_avg=$C1_Daya_WBP_3_sum/$C1_jml_data; $C1_Daya_LWBP_3_avg=$C1_Daya_LWBP_3_sum/$C1_jml_data;
              $C1_Daya_WBP_4_avg=$C1_Daya_WBP_4_sum/$C1_jml_data; $C1_Daya_LWBP_4_avg=$C1_Daya_LWBP_4_sum/$C1_jml_data;
              $C1_Daya_WBP_5_avg=$C1_Daya_WBP_5_sum/$C1_jml_data; $C1_Daya_LWBP_5_avg=$C1_Daya_LWBP_5_sum/$C1_jml_data;
              $C1_Daya_WBP_6_avg=$C1_Daya_WBP_6_sum/$C1_jml_data; $C1_Daya_LWBP_6_avg=$C1_Daya_LWBP_6_sum/$C1_jml_data;
              $C1_Daya_WBP_7_avg=$C1_Daya_WBP_7_sum/$C1_jml_data; $C1_Daya_LWBP_7_avg=$C1_Daya_LWBP_7_sum/$C1_jml_data;

              // Cari rata-rata C2
              $query = $db->query("SELECT * FROM tb_training WHERE C_before='C2'");
              $C2_Daya_WBP_1_sum=0; $C2_Daya_LWBP_1_sum=0;
              $C2_Daya_WBP_2_sum=0; $C2_Daya_LWBP_2_sum=0;
              $C2_Daya_WBP_3_sum=0; $C2_Daya_LWBP_3_sum=0;
              $C2_Daya_WBP_4_sum=0; $C2_Daya_LWBP_4_sum=0;
              $C2_Daya_WBP_5_sum=0; $C2_Daya_LWBP_5_sum=0;
              $C2_Daya_WBP_6_sum=0; $C2_Daya_LWBP_6_sum=0;
              $C2_Daya_WBP_7_sum=0; $C2_Daya_LWBP_7_sum=0;
              $C2_jml_data=0;

              while($res = $query->fetch()){
                $C2_jml_data++;
                $C2_Daya_WBP_1_sum+=$res['Daya_WBP_1']; $C2_Daya_LWBP_1_sum+=$res['Daya_LWBP_1'];
                $C2_Daya_WBP_2_sum+=$res['Daya_WBP_2']; $C2_Daya_LWBP_2_sum+=$res['Daya_LWBP_2'];
                $C2_Daya_WBP_3_sum+=$res['Daya_WBP_3']; $C2_Daya_LWBP_3_sum+=$res['Daya_LWBP_3'];
                $C2_Daya_WBP_4_sum+=$res['Daya_WBP_4']; $C2_Daya_LWBP_4_sum+=$res['Daya_LWBP_4'];
                $C2_Daya_WBP_5_sum+=$res['Daya_WBP_5']; $C2_Daya_LWBP_5_sum+=$res['Daya_LWBP_5'];
                $C2_Daya_WBP_6_sum+=$res['Daya_WBP_6']; $C2_Daya_LWBP_6_sum+=$res['Daya_LWBP_6'];
                $C2_Daya_WBP_7_sum+=$res['Daya_WBP_7']; $C2_Daya_LWBP_7_sum+=$res['Daya_LWBP_7'];
              }

              $C2_Daya_WBP_1_avg=$C2_Daya_WBP_1_sum/$C2_jml_data; $C2_Daya_LWBP_1_avg=$C2_Daya_LWBP_1_sum/$C2_jml_data;
              $C2_Daya_WBP_2_avg=$C2_Daya_WBP_2_sum/$C2_jml_data; $C2_Daya_LWBP_2_avg=$C2_Daya_LWBP_2_sum/$C2_jml_data;
              $C2_Daya_WBP_3_avg=$C2_Daya_WBP_3_sum/$C2_jml_data; $C2_Daya_LWBP_3_avg=$C2_Daya_LWBP_3_sum/$C2_jml_data;
              $C2_Daya_WBP_4_avg=$C2_Daya_WBP_4_sum/$C2_jml_data; $C2_Daya_LWBP_4_avg=$C2_Daya_LWBP_4_sum/$C2_jml_data;
              $C2_Daya_WBP_5_avg=$C2_Daya_WBP_5_sum/$C2_jml_data; $C2_Daya_LWBP_5_avg=$C2_Daya_LWBP_5_sum/$C2_jml_data;
              $C2_Daya_WBP_6_avg=$C2_Daya_WBP_6_sum/$C2_jml_data; $C2_Daya_LWBP_6_avg=$C2_Daya_LWBP_6_sum/$C2_jml_data;
              $C2_Daya_WBP_7_avg=$C2_Daya_WBP_7_sum/$C2_jml_data; $C2_Daya_LWBP_7_avg=$C2_Daya_LWBP_7_sum/$C2_jml_data;

              $qry="SELECT * FROM tb_training";
              $result = $db->query($qry);
              while($res = $result->fetch()){
              $pelanggan = $res['pelanggan'];
              $DC1 = sqrt(
                pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1_avg), 2) +
                pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2_avg), 2) +
                pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3_avg), 2) +
                pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4_avg), 2) +
                pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5_avg), 2) +
                pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6_avg), 2) +
                pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7_avg), 2)
              );
              $DC2= sqrt(
                pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1_avg), 2) +
                pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2_avg), 2) +
                pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3_avg), 2) +
                pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4_avg), 2) +
                pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5_avg), 2) +
                pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6_avg), 2) +
                pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7_avg), 2)
              );
              if($DC1<$DC2) {
                $C='C1';
                } else {
                  $C='C2';
              }
              $query = $db->query("UPDATE tb_training SET C2DC1='$DC1', C2DC2='$DC2', C_after='$C' WHERE pelanggan='$pelanggan'");
            }
            $query = $db->query("UPDATE tb_training SET hasil='1' WHERE C_before=C_after");
            $query = $db->query("UPDATE tb_training SET C_before=C_after");
          ?>
          <h5>Iterasi ke-<?php echo $iterasi ?> <br> <small>Jumlah data C1: <?php echo $C1_jml_data ?></small> | <small>Jumlah data C2: <?php echo $C2_jml_data ?></small></h5>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <th>Centeroid</th>
                <?php
                  $title = array('WBP','LBWP');
                  $hari = 1;
                  for ($j=0; $j < 7; $j++) {
                    for ($x=0; $x < count($title); $x++) {
                ?>
                <th><?php echo $title[$x]." ".$hari; ?></th>
                <?php
                    }
                    $hari++;
                  }
                ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cluster 1</td>
                <td><?php echo number_format($C1_Daya_WBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_LWBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_WBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_LWBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_WBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_LWBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_WBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_LWBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_WBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_LWBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_WBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_LWBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_WBP_7_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C1_Daya_LWBP_7_avg,3, '.',',') ?></td>
              </tr>
              <tr>
                <td>Cluster 2</td>
                <td><?php echo number_format($C2_Daya_WBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_LWBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_WBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_LWBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_WBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_LWBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_WBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_LWBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_WBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_LWBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_WBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_LWBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_WBP_7_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C2_Daya_LWBP_7_avg,3, '.',',') ?></td>
              </tr>
            </tbody>
          </table>
          <?php
              $cek_exit=0;
              $qry="SELECT * FROM tb_training WHERE hasil='0'";
              $result=$db->query($qry);
              while($res=$result->fetch()){
                $cek_exit++;
              }
              if($cek_exit==0){
                break;
              }
            }
          ?>
          <h2>Iterasi selesai. Proses Cluster berakhir</h2>
          <hr>
          <br>
          <h2>Perhitungan Nilai DBI:</h2>
          <table class="ui celled center aligned collapsing small table">
            <?php
              $query = $db->query("SELECT * FROM tb_training WHERE C_after = 'C1'");
              $S1 = 0;
              $jml_C1 = 0;

              while ($res = $query->fetch()) {
                $jml_C1++;
                $S1 +=
                  pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7_avg), 2);
              }
              $S1 = sqrt($S1 / $jml_C1);

              $query = $db->query("SELECT * FROM tb_training WHERE C_after = 'C2'");
              $S2 = 0;
              $jml_C2 = 0;

              while ($res = $query->fetch()) {
                $jml_C2++;
                $S2 +=
                  pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7_avg), 2);
              }
              $S2 = sqrt($S2 / $jml_C2);

              $M12 =
                sqrt(
                  pow(($C1_Daya_WBP_1_avg-$C2_Daya_WBP_1_avg), 2) + pow(($C1_Daya_LWBP_1_avg-$C2_Daya_LWBP_1_avg), 2) +
                  pow(($C1_Daya_WBP_2_avg-$C2_Daya_WBP_2_avg), 2) + pow(($C1_Daya_LWBP_2_avg-$C2_Daya_LWBP_2_avg), 2) +
                  pow(($C1_Daya_WBP_3_avg-$C2_Daya_WBP_3_avg), 2) + pow(($C1_Daya_LWBP_3_avg-$C2_Daya_LWBP_3_avg), 2) +
                  pow(($C1_Daya_WBP_4_avg-$C2_Daya_WBP_4_avg), 2) + pow(($C1_Daya_LWBP_4_avg-$C2_Daya_LWBP_4_avg), 2) +
                  pow(($C1_Daya_WBP_5_avg-$C2_Daya_WBP_5_avg), 2) + pow(($C1_Daya_LWBP_5_avg-$C2_Daya_LWBP_5_avg), 2) +
                  pow(($C1_Daya_WBP_6_avg-$C2_Daya_WBP_6_avg), 2) + pow(($C1_Daya_LWBP_6_avg-$C2_Daya_LWBP_6_avg), 2) +
                  pow(($C1_Daya_WBP_7_avg-$C2_Daya_WBP_7_avg), 2) + pow(($C1_Daya_LWBP_7_avg-$C2_Daya_LWBP_7_avg), 2)
                );
              $M21 =
                sqrt(
                  pow(($C2_Daya_WBP_1_avg-$C1_Daya_WBP_1_avg), 2) + pow(($C2_Daya_LWBP_1_avg-$C1_Daya_LWBP_1_avg), 2) +
                  pow(($C2_Daya_WBP_2_avg-$C1_Daya_WBP_2_avg), 2) + pow(($C2_Daya_LWBP_2_avg-$C1_Daya_LWBP_2_avg), 2) +
                  pow(($C2_Daya_WBP_3_avg-$C1_Daya_WBP_3_avg), 2) + pow(($C2_Daya_LWBP_3_avg-$C1_Daya_LWBP_3_avg), 2) +
                  pow(($C2_Daya_WBP_4_avg-$C1_Daya_WBP_4_avg), 2) + pow(($C2_Daya_LWBP_4_avg-$C1_Daya_LWBP_4_avg), 2) +
                  pow(($C2_Daya_WBP_5_avg-$C1_Daya_WBP_5_avg), 2) + pow(($C2_Daya_LWBP_5_avg-$C1_Daya_LWBP_5_avg), 2) +
                  pow(($C2_Daya_WBP_6_avg-$C1_Daya_WBP_6_avg), 2) + pow(($C2_Daya_LWBP_6_avg-$C1_Daya_LWBP_6_avg), 2) +
                  pow(($C2_Daya_WBP_7_avg-$C1_Daya_WBP_7_avg), 2) + pow(($C2_Daya_LWBP_7_avg-$C1_Daya_LWBP_7_avg), 2)
                );

              $R12 = ($S1 + $S2) / $M12; $R21 = ($S2 + $S1) / $M21;

              $D1 = max($R12,0);
              $D2 = max($R21,0);

              $DB = ($D1 + $D2) / 2;

              $_SESSION['DB_training2'] = $DB;
              $query = "UPDATE tb_centroid SET
                      Daya_WBP_1=$C1_Daya_WBP_1_avg, Daya_LWBP_1=$C1_Daya_LWBP_1_avg,
                      Daya_WBP_2=$C1_Daya_WBP_2_avg, Daya_LWBP_2=$C1_Daya_LWBP_2_avg,
                      Daya_WBP_3=$C1_Daya_WBP_3_avg, Daya_LWBP_3=$C1_Daya_LWBP_3_avg,
                      Daya_WBP_4=$C1_Daya_WBP_4_avg, Daya_LWBP_4=$C1_Daya_LWBP_4_avg,
                      Daya_WBP_5=$C1_Daya_WBP_5_avg, Daya_LWBP_5=$C1_Daya_LWBP_5_avg,
                      Daya_WBP_6=$C1_Daya_WBP_6_avg, Daya_LWBP_6=$C1_Daya_LWBP_6_avg,
                      Daya_WBP_7=$C1_Daya_WBP_7_avg, Daya_LWBP_7=$C1_Daya_LWBP_7_avg, username='' WHERE cluster='2' AND C='C1'";
              $db->query($query);
              $query = "UPDATE tb_centroid SET
                      Daya_WBP_1=$C2_Daya_WBP_1_avg, Daya_LWBP_1=$C2_Daya_LWBP_1_avg,
                      Daya_WBP_2=$C2_Daya_WBP_2_avg, Daya_LWBP_2=$C2_Daya_LWBP_2_avg,
                      Daya_WBP_3=$C2_Daya_WBP_3_avg, Daya_LWBP_3=$C2_Daya_LWBP_3_avg,
                      Daya_WBP_4=$C2_Daya_WBP_4_avg, Daya_LWBP_4=$C2_Daya_LWBP_4_avg,
                      Daya_WBP_5=$C2_Daya_WBP_5_avg, Daya_LWBP_5=$C2_Daya_LWBP_5_avg,
                      Daya_WBP_6=$C2_Daya_WBP_6_avg, Daya_LWBP_6=$C2_Daya_LWBP_6_avg,
                      Daya_WBP_7=$C2_Daya_WBP_7_avg, Daya_LWBP_7=$C2_Daya_LWBP_7_avg, username=''  WHERE cluster='2' AND C='C2'";
              $db->query($query);
            ?>
            <thead>
              <tr>
                <?php
                  $title = array('S1','S2','M12','M21','R12', 'R21', 'D1','D2','DB');

                  for ($x=0; $x < count($title); $x++) {
                ?>
                <th><?php echo $title[$x]; ?></th>
                <?php
                  }
                ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo number_format($S1, 3) ?></td>
                <td><?php echo number_format($S2, 3) ?></td>
                <td><?php echo number_format($M12, 3) ?></td>
                <td><?php echo number_format($M21, 3) ?></td>
                <td><?php echo number_format($R12, 3) ?></td>
                <td><?php echo number_format($R21, 3) ?></td>
                <td><?php echo number_format($D1, 3) ?></td>
                <td><?php echo number_format($D2, 3) ?></td>
                <td><?php echo number_format($DB, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <?php
            $sumbu_x="'WBP Minggu', 'LWBP Minggu', 'WBP Senin', 'LWBP Senin', 'WBP Selasa', 'LWBP Selasa', 'WBP Rabu', 'LWBP Rabu', 'WBP Kamis', 'LWBP Kamis', 'WBP Jumat', 'LWBP Jumat', 'WBP Sabtu', 'LWBP Sabtu'";

            $qry="SELECT * FROM tb_centroid WHERE cluster='2' AND C='C1'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
              $sumbu_y = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_centroid WHERE cluster='2' AND C='C2'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
              $sumbu_y1 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
            }
          ?>

        <script language="javascript" type="text/javascript">

           var chart;
           $(document).ready(function(){
               chart = new Highcharts.Chart({
                   //Type: line / bar / column
             chart: {renderTo: 'container', type: 'line'},
                   title: {text: <?php echo "'GRAFIK CLUSTER 2'"; ?>},
                   xAxis: {categories: [<?php echo $sumbu_x; ?>]},
                   yAxis: {title: {text: '<?php echo 'Daya'; ?>'}, plotLines: [{ value: 0, width: 1, color: '#808080'}]},
                   //fungsi tooltip untuk menampikan data di titik tertentu
             tooltip: {formatter: function() {return 'Informasi	: <b>'+ '</b><br/>'+ this.series.name + ' ' + this.x + ' = <b>'+ this.y  +'</b>volt';}},
             //isi datanya
                   series: [{name: 'C1', data: [<?php echo $sumbu_y; ?>]},
                 {name: 'C2', data: [<?php echo $sumbu_y1; ?>]},
           ]});
           });

     </script>
        <div id="container"></div>
        </div>

        <a href="cluster2.php" class="ui disabled button">Training set Cluster 2</a>
        <a href="cluster3.php" class="ui primary button">Training set Cluster 3</a>
        <a href="cluster4.php" class="ui primary button">Training set Cluster 4</a>
        <a href="cluster5.php" class="ui primary button">Training set Cluster 5</a>
        <a href="cluster6.php" class="ui primary button">Training set Cluster 6</a>
      </div>
    </div>
  </body>
</html>
