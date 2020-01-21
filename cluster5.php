<!DOCTYPE html>
<?php include 'database.php'; session_start(); ?>
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
        <h2>Training set Cluster 5</h2>
        <?php
          $query = $db->query("UPDATE tb_training SET C5DC1='0', C5DC2='0', C5DC3='0', C5DC4='0', C5DC5='0', C_before='', C_after='', hasil='0'");
          $query = $db->query("SELECT * FROM tb_training");
          $rowCount = $query->rowCount();
          do {
            $acak_C1 = rand(1, $rowCount);
            $acak_C2 = rand(1, $rowCount);
            $acak_C3 = rand(1, $rowCount);
            $acak_C4 = rand(1, $rowCount);
            $acak_C5 = rand(1, $rowCount);
          } while ($acak_C1==$acak_C2 && $acak_C1==$acak_C3 && $acak_C1==$acak_C4 && $acak_C1==$acak_C5 && $acak_C2==$acak_C3 && $acak_C2==$acak_C4 && $acak_C2==$acak_C5 && $acak_C3==$acak_C4 && $acak_C3==$acak_C5 && $acak_C4==$acak_C5);
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
                ?>
              </tr>
              <tr>
                <td>Cluster 3</td>
                <?php
                  $acak_C3 = 3;
                  $query = $db->query("SELECT Daya_WBP_1, Daya_LWBP_1, Daya_WBP_2, Daya_LWBP_2, Daya_WBP_3, Daya_LWBP_3, Daya_WBP_4, Daya_LWBP_4, Daya_WBP_5, Daya_LWBP_5, Daya_WBP_6, Daya_LWBP_6, Daya_WBP_7, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '$acak_C3'");
                  while ($result = $query->fetch()) {
                    $C3_Daya_WBP_1=$result['Daya_WBP_1']; $C3_Daya_LWBP_1=$result['Daya_LWBP_1'];
                    $C3_Daya_WBP_2=$result['Daya_WBP_2']; $C3_Daya_LWBP_2=$result['Daya_LWBP_2'];
                    $C3_Daya_WBP_3=$result['Daya_WBP_3']; $C3_Daya_LWBP_3=$result['Daya_LWBP_3'];
                    $C3_Daya_WBP_4=$result['Daya_WBP_4']; $C3_Daya_LWBP_4=$result['Daya_LWBP_4'];
                    $C3_Daya_WBP_5=$result['Daya_WBP_5']; $C3_Daya_LWBP_5=$result['Daya_LWBP_5'];
                    $C3_Daya_WBP_6=$result['Daya_WBP_6']; $C3_Daya_LWBP_6=$result['Daya_LWBP_6'];
                    $C3_Daya_WBP_7=$result['Daya_WBP_7']; $C3_Daya_LWBP_7=$result['Daya_LWBP_7'];
                    for ($i=0; $i < 14; $i++) {
                ?>
                <td><?php echo $result[$i] ?></td>
                <?php
                    }
                  }
                ?>
              </tr>
              <tr>
                <td>Cluster 4</td>
                <?php
                  $acak_C4 = 4;
                  $query = $db->query("SELECT Daya_WBP_1, Daya_LWBP_1, Daya_WBP_2, Daya_LWBP_2, Daya_WBP_3, Daya_LWBP_3, Daya_WBP_4, Daya_LWBP_4, Daya_WBP_5, Daya_LWBP_5, Daya_WBP_6, Daya_LWBP_6, Daya_WBP_7, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '$acak_C4'");
                  while ($result = $query->fetch()) {
                    $C4_Daya_WBP_1=$result['Daya_WBP_1']; $C4_Daya_LWBP_1=$result['Daya_LWBP_1'];
                    $C4_Daya_WBP_2=$result['Daya_WBP_2']; $C4_Daya_LWBP_2=$result['Daya_LWBP_2'];
                    $C4_Daya_WBP_3=$result['Daya_WBP_3']; $C4_Daya_LWBP_3=$result['Daya_LWBP_3'];
                    $C4_Daya_WBP_4=$result['Daya_WBP_4']; $C4_Daya_LWBP_4=$result['Daya_LWBP_4'];
                    $C4_Daya_WBP_5=$result['Daya_WBP_5']; $C4_Daya_LWBP_5=$result['Daya_LWBP_5'];
                    $C4_Daya_WBP_6=$result['Daya_WBP_6']; $C4_Daya_LWBP_6=$result['Daya_LWBP_6'];
                    $C4_Daya_WBP_7=$result['Daya_WBP_7']; $C4_Daya_LWBP_7=$result['Daya_LWBP_7'];
                    for ($i=0; $i < 14; $i++) {
                ?>
                <td><?php echo $result[$i] ?></td>
                <?php
                    }
                  }
                ?>
              </tr>
              <tr>
                <td>Cluster 5</td>
                <?php
                  $acak_C5 = 5;
                  $query = $db->query("SELECT Daya_WBP_1, Daya_LWBP_1, Daya_WBP_2, Daya_LWBP_2, Daya_WBP_3, Daya_LWBP_3, Daya_WBP_4, Daya_LWBP_4, Daya_WBP_5, Daya_LWBP_5, Daya_WBP_6, Daya_LWBP_6, Daya_WBP_7, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '$acak_C5'");
                  while ($result = $query->fetch()) {
                    $C5_Daya_WBP_1=$result['Daya_WBP_1']; $C5_Daya_LWBP_1=$result['Daya_LWBP_1'];
                    $C5_Daya_WBP_2=$result['Daya_WBP_2']; $C5_Daya_LWBP_2=$result['Daya_LWBP_2'];
                    $C5_Daya_WBP_3=$result['Daya_WBP_3']; $C5_Daya_LWBP_3=$result['Daya_LWBP_3'];
                    $C5_Daya_WBP_4=$result['Daya_WBP_4']; $C5_Daya_LWBP_4=$result['Daya_LWBP_4'];
                    $C5_Daya_WBP_5=$result['Daya_WBP_5']; $C5_Daya_LWBP_5=$result['Daya_LWBP_5'];
                    $C5_Daya_WBP_6=$result['Daya_WBP_6']; $C5_Daya_LWBP_6=$result['Daya_LWBP_6'];
                    $C5_Daya_WBP_7=$result['Daya_WBP_7']; $C5_Daya_LWBP_7=$result['Daya_LWBP_7'];
                    for ($i=0; $i < 14; $i++) {
                ?>
                <td><?php echo $result[$i] ?></td>
                <?php
                    }
                  }
                ?>
              </tr>
              <tr>
                <?php
                  $q=$db->query("SELECT * FROM tb_training");
                  while ($result=$q->fetch()) {
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
                      $DC3 =
                        sqrt(
                          pow(($result['Daya_WBP_1']-$C3_Daya_WBP_1), 2) + pow(($result['Daya_LWBP_1']-$C3_Daya_LWBP_1), 2) +
                          pow(($result['Daya_WBP_2']-$C3_Daya_WBP_2), 2) + pow(($result['Daya_LWBP_2']-$C3_Daya_LWBP_2), 2) +
                          pow(($result['Daya_WBP_3']-$C3_Daya_WBP_3), 2) + pow(($result['Daya_LWBP_3']-$C3_Daya_LWBP_3), 2) +
                          pow(($result['Daya_WBP_4']-$C3_Daya_WBP_4), 2) + pow(($result['Daya_LWBP_4']-$C3_Daya_LWBP_4), 2) +
                          pow(($result['Daya_WBP_5']-$C3_Daya_WBP_5), 2) + pow(($result['Daya_LWBP_5']-$C3_Daya_LWBP_5), 2) +
                          pow(($result['Daya_WBP_6']-$C3_Daya_WBP_6), 2) + pow(($result['Daya_LWBP_6']-$C3_Daya_LWBP_6), 2) +
                          pow(($result['Daya_WBP_7']-$C3_Daya_WBP_7), 2) + pow(($result['Daya_LWBP_7']-$C3_Daya_LWBP_7), 2)
                        );
                      $DC4 =
                        sqrt(
                          pow(($result['Daya_WBP_1']-$C4_Daya_WBP_1), 2) + pow(($result['Daya_LWBP_1']-$C4_Daya_LWBP_1), 2) +
                          pow(($result['Daya_WBP_2']-$C4_Daya_WBP_2), 2) + pow(($result['Daya_LWBP_2']-$C4_Daya_LWBP_2), 2) +
                          pow(($result['Daya_WBP_3']-$C4_Daya_WBP_3), 2) + pow(($result['Daya_LWBP_3']-$C4_Daya_LWBP_3), 2) +
                          pow(($result['Daya_WBP_4']-$C4_Daya_WBP_4), 2) + pow(($result['Daya_LWBP_4']-$C4_Daya_LWBP_4), 2) +
                          pow(($result['Daya_WBP_5']-$C4_Daya_WBP_5), 2) + pow(($result['Daya_LWBP_5']-$C4_Daya_LWBP_5), 2) +
                          pow(($result['Daya_WBP_6']-$C4_Daya_WBP_6), 2) + pow(($result['Daya_LWBP_6']-$C4_Daya_LWBP_6), 2) +
                          pow(($result['Daya_WBP_7']-$C4_Daya_WBP_7), 2) + pow(($result['Daya_LWBP_7']-$C4_Daya_LWBP_7), 2)
                        );
                      $DC5 =
                        sqrt(
                          pow(($result['Daya_WBP_1']-$C5_Daya_WBP_1), 2) + pow(($result['Daya_LWBP_1']-$C5_Daya_LWBP_1), 2) +
                          pow(($result['Daya_WBP_2']-$C5_Daya_WBP_2), 2) + pow(($result['Daya_LWBP_2']-$C5_Daya_LWBP_2), 2) +
                          pow(($result['Daya_WBP_3']-$C5_Daya_WBP_3), 2) + pow(($result['Daya_LWBP_3']-$C5_Daya_LWBP_3), 2) +
                          pow(($result['Daya_WBP_4']-$C5_Daya_WBP_4), 2) + pow(($result['Daya_LWBP_4']-$C5_Daya_LWBP_4), 2) +
                          pow(($result['Daya_WBP_5']-$C5_Daya_WBP_5), 2) + pow(($result['Daya_LWBP_5']-$C5_Daya_LWBP_5), 2) +
                          pow(($result['Daya_WBP_6']-$C5_Daya_WBP_6), 2) + pow(($result['Daya_LWBP_6']-$C5_Daya_LWBP_6), 2) +
                          pow(($result['Daya_WBP_7']-$C5_Daya_WBP_7), 2) + pow(($result['Daya_LWBP_7']-$C5_Daya_LWBP_7), 2)
                        );

                      if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC1) {
                        $C='C1';
                      } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC2) {
                        $C='C2';
                      } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC3) {
                        $C='C3';
                      } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC4) {
                        $C='C4';
                      } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC5) {
                        $C='C5';
                      }
                          $query = $db->query("UPDATE tb_training SET C5DC1='$DC1', C5DC2='$DC2', C5DC3='$DC3', C5DC4='$DC4', C5DC5='$DC5', C_before='$C' WHERE pelanggan='$pelanggan'");
                  }
                ?>
                <td colspan="3">DC1</td>
                <td colspan="12"><?php echo $DC1 ?></td>
              </tr>
              <tr>
                <td colspan="3">DC2</td>
                <td colspan="12"><?php echo $DC2 ?></td>
              </tr>
              <tr>
                <td colspan="3">DC3</td>
                <td colspan="12"><?php echo $DC3 ?></td>
              </tr>
              <tr>
                <td colspan="3">DC4</td>
                <td colspan="12"><?php echo $DC4 ?></td>
              </tr>
              <tr>
                <td colspan="3">DC5</td>
                <td colspan="12"><?php echo $DC5 ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="sixteen wide column">
          <br>
          <?php
            $iterasi = 0;
            for ($i = 1; $i <= 2; $i++) {
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

              $C2_Daya_WBP_1_avg=$C2_Daya_WBP_1_sum/$C2_jml_data; $C2_Daya_LWBP_1_avg=$C2_Daya_LWBP_1_sum/$C2_jml_data; //mulai error division by zero
              $C2_Daya_WBP_2_avg=$C2_Daya_WBP_2_sum/$C2_jml_data; $C2_Daya_LWBP_2_avg=$C2_Daya_LWBP_2_sum/$C2_jml_data;
              $C2_Daya_WBP_3_avg=$C2_Daya_WBP_3_sum/$C2_jml_data; $C2_Daya_LWBP_3_avg=$C2_Daya_LWBP_3_sum/$C2_jml_data;
              $C2_Daya_WBP_4_avg=$C2_Daya_WBP_4_sum/$C2_jml_data; $C2_Daya_LWBP_4_avg=$C2_Daya_LWBP_4_sum/$C2_jml_data;
              $C2_Daya_WBP_5_avg=$C2_Daya_WBP_5_sum/$C2_jml_data; $C2_Daya_LWBP_5_avg=$C2_Daya_LWBP_5_sum/$C2_jml_data;
              $C2_Daya_WBP_6_avg=$C2_Daya_WBP_6_sum/$C2_jml_data; $C2_Daya_LWBP_6_avg=$C2_Daya_LWBP_6_sum/$C2_jml_data;
              $C2_Daya_WBP_7_avg=$C2_Daya_WBP_7_sum/$C2_jml_data; $C2_Daya_LWBP_7_avg=$C2_Daya_LWBP_7_sum/$C2_jml_data;

              // Cari rata-rata C3
              $query = $db->query("SELECT * FROM tb_training WHERE C_before='C3'");
              $C3_Daya_WBP_1_sum=0; $C3_Daya_LWBP_1_sum=0;
              $C3_Daya_WBP_2_sum=0; $C3_Daya_LWBP_2_sum=0;
              $C3_Daya_WBP_3_sum=0; $C3_Daya_LWBP_3_sum=0;
              $C3_Daya_WBP_4_sum=0; $C3_Daya_LWBP_4_sum=0;
              $C3_Daya_WBP_5_sum=0; $C3_Daya_LWBP_5_sum=0;
              $C3_Daya_WBP_6_sum=0; $C3_Daya_LWBP_6_sum=0;
              $C3_Daya_WBP_7_sum=0; $C3_Daya_LWBP_7_sum=0;
              $C3_jml_data=0;

              while($res = $query->fetch()){
                $C3_jml_data++;
                $C3_Daya_WBP_1_sum+=$res['Daya_WBP_1']; $C3_Daya_LWBP_1_sum+=$res['Daya_LWBP_1'];
                $C3_Daya_WBP_2_sum+=$res['Daya_WBP_2']; $C3_Daya_LWBP_2_sum+=$res['Daya_LWBP_2'];
                $C3_Daya_WBP_3_sum+=$res['Daya_WBP_3']; $C3_Daya_LWBP_3_sum+=$res['Daya_LWBP_3'];
                $C3_Daya_WBP_4_sum+=$res['Daya_WBP_4']; $C3_Daya_LWBP_4_sum+=$res['Daya_LWBP_4'];
                $C3_Daya_WBP_5_sum+=$res['Daya_WBP_5']; $C3_Daya_LWBP_5_sum+=$res['Daya_LWBP_5'];
                $C3_Daya_WBP_6_sum+=$res['Daya_WBP_6']; $C3_Daya_LWBP_6_sum+=$res['Daya_LWBP_6'];
                $C3_Daya_WBP_7_sum+=$res['Daya_WBP_7']; $C3_Daya_LWBP_7_sum+=$res['Daya_LWBP_7'];
              }

              $C3_Daya_WBP_1_avg=$C3_Daya_WBP_1_sum/$C3_jml_data; $C3_Daya_LWBP_1_avg=$C3_Daya_LWBP_1_sum/$C3_jml_data;
              $C3_Daya_WBP_2_avg=$C3_Daya_WBP_2_sum/$C3_jml_data; $C3_Daya_LWBP_2_avg=$C3_Daya_LWBP_2_sum/$C3_jml_data;
              $C3_Daya_WBP_3_avg=$C3_Daya_WBP_3_sum/$C3_jml_data; $C3_Daya_LWBP_3_avg=$C3_Daya_LWBP_3_sum/$C3_jml_data;
              $C3_Daya_WBP_4_avg=$C3_Daya_WBP_4_sum/$C3_jml_data; $C3_Daya_LWBP_4_avg=$C3_Daya_LWBP_4_sum/$C3_jml_data;
              $C3_Daya_WBP_5_avg=$C3_Daya_WBP_5_sum/$C3_jml_data; $C3_Daya_LWBP_5_avg=$C3_Daya_LWBP_5_sum/$C3_jml_data;
              $C3_Daya_WBP_6_avg=$C3_Daya_WBP_6_sum/$C3_jml_data; $C3_Daya_LWBP_6_avg=$C3_Daya_LWBP_6_sum/$C3_jml_data;
              $C3_Daya_WBP_7_avg=$C3_Daya_WBP_7_sum/$C3_jml_data; $C3_Daya_LWBP_7_avg=$C3_Daya_LWBP_7_sum/$C3_jml_data;

              // Cari rata-rata C4
              $query = $db->query("SELECT * FROM tb_training WHERE C_before='C4'");
              $C4_Daya_WBP_1_sum=0; $C4_Daya_LWBP_1_sum=0;
              $C4_Daya_WBP_2_sum=0; $C4_Daya_LWBP_2_sum=0;
              $C4_Daya_WBP_3_sum=0; $C4_Daya_LWBP_3_sum=0;
              $C4_Daya_WBP_4_sum=0; $C4_Daya_LWBP_4_sum=0;
              $C4_Daya_WBP_5_sum=0; $C4_Daya_LWBP_5_sum=0;
              $C4_Daya_WBP_6_sum=0; $C4_Daya_LWBP_6_sum=0;
              $C4_Daya_WBP_7_sum=0; $C4_Daya_LWBP_7_sum=0;
              $C4_jml_data=0;

              while($res = $query->fetch()){
                $C4_jml_data++;
                $C4_Daya_WBP_1_sum+=$res['Daya_WBP_1']; $C4_Daya_LWBP_1_sum+=$res['Daya_LWBP_1'];
                $C4_Daya_WBP_2_sum+=$res['Daya_WBP_2']; $C4_Daya_LWBP_2_sum+=$res['Daya_LWBP_2'];
                $C4_Daya_WBP_3_sum+=$res['Daya_WBP_3']; $C4_Daya_LWBP_3_sum+=$res['Daya_LWBP_3'];
                $C4_Daya_WBP_4_sum+=$res['Daya_WBP_4']; $C4_Daya_LWBP_4_sum+=$res['Daya_LWBP_4'];
                $C4_Daya_WBP_5_sum+=$res['Daya_WBP_5']; $C4_Daya_LWBP_5_sum+=$res['Daya_LWBP_5'];
                $C4_Daya_WBP_6_sum+=$res['Daya_WBP_6']; $C4_Daya_LWBP_6_sum+=$res['Daya_LWBP_6'];
                $C4_Daya_WBP_7_sum+=$res['Daya_WBP_7']; $C4_Daya_LWBP_7_sum+=$res['Daya_LWBP_7'];
              }

              $C4_Daya_WBP_1_avg=$C4_Daya_WBP_1_sum/$C4_jml_data; $C4_Daya_LWBP_1_avg=$C4_Daya_LWBP_1_sum/$C4_jml_data;
              $C4_Daya_WBP_2_avg=$C4_Daya_WBP_2_sum/$C4_jml_data; $C4_Daya_LWBP_2_avg=$C4_Daya_LWBP_2_sum/$C4_jml_data;
              $C4_Daya_WBP_3_avg=$C4_Daya_WBP_3_sum/$C4_jml_data; $C4_Daya_LWBP_3_avg=$C4_Daya_LWBP_3_sum/$C4_jml_data;
              $C4_Daya_WBP_4_avg=$C4_Daya_WBP_4_sum/$C4_jml_data; $C4_Daya_LWBP_4_avg=$C4_Daya_LWBP_4_sum/$C4_jml_data;
              $C4_Daya_WBP_5_avg=$C4_Daya_WBP_5_sum/$C4_jml_data; $C4_Daya_LWBP_5_avg=$C4_Daya_LWBP_5_sum/$C4_jml_data;
              $C4_Daya_WBP_6_avg=$C4_Daya_WBP_6_sum/$C4_jml_data; $C4_Daya_LWBP_6_avg=$C4_Daya_LWBP_6_sum/$C4_jml_data;
              $C4_Daya_WBP_7_avg=$C4_Daya_WBP_7_sum/$C4_jml_data; $C4_Daya_LWBP_7_avg=$C4_Daya_LWBP_7_sum/$C4_jml_data;

              // Cari rata-rata C5
              $query = $db->query("SELECT * FROM tb_training WHERE C_before='C5'");
              $C5_Daya_WBP_1_sum=0; $C5_Daya_LWBP_1_sum=0;
              $C5_Daya_WBP_2_sum=0; $C5_Daya_LWBP_2_sum=0;
              $C5_Daya_WBP_3_sum=0; $C5_Daya_LWBP_3_sum=0;
              $C5_Daya_WBP_4_sum=0; $C5_Daya_LWBP_4_sum=0;
              $C5_Daya_WBP_5_sum=0; $C5_Daya_LWBP_5_sum=0;
              $C5_Daya_WBP_6_sum=0; $C5_Daya_LWBP_6_sum=0;
              $C5_Daya_WBP_7_sum=0; $C5_Daya_LWBP_7_sum=0;
              $C5_jml_data=0;

              while($res = $query->fetch()){
                $C5_jml_data++;
                $C5_Daya_WBP_1_sum+=$res['Daya_WBP_1']; $C5_Daya_LWBP_1_sum+=$res['Daya_LWBP_1'];
                $C5_Daya_WBP_2_sum+=$res['Daya_WBP_2']; $C5_Daya_LWBP_2_sum+=$res['Daya_LWBP_2'];
                $C5_Daya_WBP_3_sum+=$res['Daya_WBP_3']; $C5_Daya_LWBP_3_sum+=$res['Daya_LWBP_3'];
                $C5_Daya_WBP_4_sum+=$res['Daya_WBP_4']; $C5_Daya_LWBP_4_sum+=$res['Daya_LWBP_4'];
                $C5_Daya_WBP_5_sum+=$res['Daya_WBP_5']; $C5_Daya_LWBP_5_sum+=$res['Daya_LWBP_5'];
                $C5_Daya_WBP_6_sum+=$res['Daya_WBP_6']; $C5_Daya_LWBP_6_sum+=$res['Daya_LWBP_6'];
                $C5_Daya_WBP_7_sum+=$res['Daya_WBP_7']; $C5_Daya_LWBP_7_sum+=$res['Daya_LWBP_7'];
              }

              $C5_Daya_WBP_1_avg=$C5_Daya_WBP_1_sum/$C5_jml_data; $C5_Daya_LWBP_1_avg=$C5_Daya_LWBP_1_sum/$C5_jml_data;
              $C5_Daya_WBP_2_avg=$C5_Daya_WBP_2_sum/$C5_jml_data; $C5_Daya_LWBP_2_avg=$C5_Daya_LWBP_2_sum/$C5_jml_data;
              $C5_Daya_WBP_3_avg=$C5_Daya_WBP_3_sum/$C5_jml_data; $C5_Daya_LWBP_3_avg=$C5_Daya_LWBP_3_sum/$C5_jml_data;
              $C5_Daya_WBP_4_avg=$C5_Daya_WBP_4_sum/$C5_jml_data; $C5_Daya_LWBP_4_avg=$C5_Daya_LWBP_4_sum/$C5_jml_data;
              $C5_Daya_WBP_5_avg=$C5_Daya_WBP_5_sum/$C5_jml_data; $C5_Daya_LWBP_5_avg=$C5_Daya_LWBP_5_sum/$C5_jml_data;
              $C5_Daya_WBP_6_avg=$C5_Daya_WBP_6_sum/$C5_jml_data; $C5_Daya_LWBP_6_avg=$C5_Daya_LWBP_6_sum/$C5_jml_data;
              $C5_Daya_WBP_7_avg=$C5_Daya_WBP_7_sum/$C5_jml_data; $C5_Daya_LWBP_7_avg=$C5_Daya_LWBP_7_sum/$C5_jml_data;

              //hitung ulang
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
                $DC2 = sqrt(
                  pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7_avg), 2)
                );
                $DC3 = sqrt(
                  pow(($res['Daya_WBP_1']-$C3_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C3_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C3_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C3_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C3_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C3_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C3_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C3_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C3_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C3_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C3_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C3_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C3_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C3_Daya_LWBP_7_avg), 2)
                );
                $DC4 = sqrt(
                  pow(($res['Daya_WBP_1']-$C4_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C4_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C4_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C4_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C4_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C4_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C4_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C4_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C4_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C4_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C4_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C4_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C4_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C4_Daya_LWBP_7_avg), 2)
                );
                $DC5 = sqrt(
                  pow(($res['Daya_WBP_1']-$C5_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C5_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C5_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C5_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C5_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C5_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C5_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C5_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C5_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C5_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C5_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C5_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C5_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C5_Daya_LWBP_7_avg), 2)
                );
                if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC1) {
                  $C='C1';
                } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC2) {
                  $C='C2';
                } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC3) {
                  $C='C3';
                } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC4) {
                  $C='C4';
                } else if(min($DC1,$DC2,$DC3,$DC4,$DC5)==$DC5) {
                  $C='C5';
                }
                $query = $db->query("UPDATE tb_training SET C5DC1='$DC1', C5DC2='$DC2', C5DC3='$DC3', C5DC4='$DC4', C5DC5='$DC5', C_after='$C' WHERE pelanggan='$pelanggan'");
              }
              $query = $db->query("UPDATE tb_training SET hasil='1' WHERE C_before=C_after");
              $query = $db->query("UPDATE tb_training SET C_before=C_after");
          ?>
          <h5>Iterasi ke-<?php echo $iterasi ?> <br> <small>Jumlah data C1: <?php echo $C1_jml_data ?></small> | <small>Jumlah data C2: <?php echo $C2_jml_data ?></small> | <small>Jumlah data C3: <?php echo $C3_jml_data ?></small> | <small>Jumlah data C4: <?php echo $C4_jml_data ?></small> | <small>Jumlah data C5: <?php echo $C5_jml_data ?></small></h5>

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
              <tr>
                <td>Cluster 3</td>
                <td><?php echo number_format($C3_Daya_WBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_LWBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_WBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_LWBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_WBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_LWBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_WBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_LWBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_WBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_LWBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_WBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_LWBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_WBP_7_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C3_Daya_LWBP_7_avg,3, '.',',') ?></td>
              </tr>
              <tr>
                <td>Cluster 4</td>
                <td><?php echo number_format($C4_Daya_WBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_LWBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_WBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_LWBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_WBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_LWBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_WBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_LWBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_WBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_LWBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_WBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_LWBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_WBP_7_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C4_Daya_LWBP_7_avg,3, '.',',') ?></td>
              </tr>
              <tr>
                <td>Cluster 5</td>
                <td><?php echo number_format($C5_Daya_WBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_LWBP_1_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_WBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_LWBP_2_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_WBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_LWBP_3_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_WBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_LWBP_4_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_WBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_LWBP_5_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_WBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_LWBP_6_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_WBP_7_avg,3, '.',',') ?></td>
                <td><?php echo number_format($C5_Daya_LWBP_7_avg,3, '.',',') ?></td>
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

              $query = $db->query("SELECT * FROM tb_training WHERE C_after = 'C3'");
              $S3 = 0;
              $jml_C3 = 0;
              while($res = $query->fetch()){
                $jml_C3++;
                $S3 +=
                  pow(($res['Daya_WBP_1']-$C3_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C3_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C3_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C3_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C3_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C3_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C3_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C3_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C3_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C3_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C3_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C3_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C3_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C3_Daya_LWBP_7_avg), 2);
              }
              $S3 = sqrt($S3/$jml_C3);

              $query = $db->query("SELECT * FROM tb_training WHERE C_after = 'C4'");
              $S4 = 0;
              $jml_C4 = 0;
              while($res = $query->fetch()){
                $jml_C4++;
                $S4 +=
                  pow(($res['Daya_WBP_1']-$C4_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C4_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C4_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C4_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C4_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C4_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C4_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C4_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C4_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C4_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C4_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C4_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C4_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C4_Daya_LWBP_7_avg), 2);
              }
              $S4 = sqrt($S4/$jml_C4);

              $query = $db->query("SELECT * FROM tb_training WHERE C_after = 'C5'");
              $S5 = 0;
              $jml_C5 = 0;
              while($res = $query->fetch()){
                $jml_C5++;
                $S5 +=
                  pow(($res['Daya_WBP_1']-$C5_Daya_WBP_1_avg), 2) + pow(($res['Daya_LWBP_1']-$C5_Daya_LWBP_1_avg), 2) +
                  pow(($res['Daya_WBP_2']-$C5_Daya_WBP_2_avg), 2) + pow(($res['Daya_LWBP_2']-$C5_Daya_LWBP_2_avg), 2) +
                  pow(($res['Daya_WBP_3']-$C5_Daya_WBP_3_avg), 2) + pow(($res['Daya_LWBP_3']-$C5_Daya_LWBP_3_avg), 2) +
                  pow(($res['Daya_WBP_4']-$C5_Daya_WBP_4_avg), 2) + pow(($res['Daya_LWBP_4']-$C5_Daya_LWBP_4_avg), 2) +
                  pow(($res['Daya_WBP_5']-$C5_Daya_WBP_5_avg), 2) + pow(($res['Daya_LWBP_5']-$C5_Daya_LWBP_5_avg), 2) +
                  pow(($res['Daya_WBP_6']-$C5_Daya_WBP_6_avg), 2) + pow(($res['Daya_LWBP_6']-$C5_Daya_LWBP_6_avg), 2) +
                  pow(($res['Daya_WBP_7']-$C5_Daya_WBP_7_avg), 2) + pow(($res['Daya_LWBP_7']-$C5_Daya_LWBP_7_avg), 2);
              }
              $S5 = sqrt($S5/$jml_C5);

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
              $M13 =
                sqrt(
                  pow(($C1_Daya_WBP_1_avg-$C3_Daya_WBP_1_avg), 2) + pow(($C1_Daya_LWBP_1_avg-$C3_Daya_LWBP_1_avg), 2) +
                  pow(($C1_Daya_WBP_2_avg-$C3_Daya_WBP_2_avg), 2) + pow(($C1_Daya_LWBP_2_avg-$C3_Daya_LWBP_2_avg), 2) +
                  pow(($C1_Daya_WBP_3_avg-$C3_Daya_WBP_3_avg), 2) + pow(($C1_Daya_LWBP_3_avg-$C3_Daya_LWBP_3_avg), 2) +
                  pow(($C1_Daya_WBP_4_avg-$C3_Daya_WBP_4_avg), 2) + pow(($C1_Daya_LWBP_4_avg-$C3_Daya_LWBP_4_avg), 2) +
                  pow(($C1_Daya_WBP_5_avg-$C3_Daya_WBP_5_avg), 2) + pow(($C1_Daya_LWBP_5_avg-$C3_Daya_LWBP_5_avg), 2) +
                  pow(($C1_Daya_WBP_6_avg-$C3_Daya_WBP_6_avg), 2) + pow(($C1_Daya_LWBP_6_avg-$C3_Daya_LWBP_6_avg), 2) +
                  pow(($C1_Daya_WBP_7_avg-$C3_Daya_WBP_7_avg), 2) + pow(($C1_Daya_LWBP_7_avg-$C3_Daya_LWBP_7_avg), 2)
                );
              $M14 =
                sqrt(
                  pow(($C1_Daya_WBP_1_avg-$C4_Daya_WBP_1_avg), 2) + pow(($C1_Daya_LWBP_1_avg-$C4_Daya_LWBP_1_avg), 2) +
                  pow(($C1_Daya_WBP_2_avg-$C4_Daya_WBP_2_avg), 2) + pow(($C1_Daya_LWBP_2_avg-$C4_Daya_LWBP_2_avg), 2) +
                  pow(($C1_Daya_WBP_3_avg-$C4_Daya_WBP_3_avg), 2) + pow(($C1_Daya_LWBP_3_avg-$C4_Daya_LWBP_3_avg), 2) +
                  pow(($C1_Daya_WBP_4_avg-$C4_Daya_WBP_4_avg), 2) + pow(($C1_Daya_LWBP_4_avg-$C4_Daya_LWBP_4_avg), 2) +
                  pow(($C1_Daya_WBP_5_avg-$C4_Daya_WBP_5_avg), 2) + pow(($C1_Daya_LWBP_5_avg-$C4_Daya_LWBP_5_avg), 2) +
                  pow(($C1_Daya_WBP_6_avg-$C4_Daya_WBP_6_avg), 2) + pow(($C1_Daya_LWBP_6_avg-$C4_Daya_LWBP_6_avg), 2) +
                  pow(($C1_Daya_WBP_7_avg-$C4_Daya_WBP_7_avg), 2) + pow(($C1_Daya_LWBP_7_avg-$C4_Daya_LWBP_7_avg), 2)
                );
              $M15 =
                sqrt(
                  pow(($C1_Daya_WBP_1_avg-$C5_Daya_WBP_1_avg), 2) + pow(($C1_Daya_LWBP_1_avg-$C5_Daya_LWBP_1_avg), 2) +
                  pow(($C1_Daya_WBP_2_avg-$C5_Daya_WBP_2_avg), 2) + pow(($C1_Daya_LWBP_2_avg-$C5_Daya_LWBP_2_avg), 2) +
                  pow(($C1_Daya_WBP_3_avg-$C5_Daya_WBP_3_avg), 2) + pow(($C1_Daya_LWBP_3_avg-$C5_Daya_LWBP_3_avg), 2) +
                  pow(($C1_Daya_WBP_4_avg-$C5_Daya_WBP_4_avg), 2) + pow(($C1_Daya_LWBP_4_avg-$C5_Daya_LWBP_4_avg), 2) +
                  pow(($C1_Daya_WBP_5_avg-$C5_Daya_WBP_5_avg), 2) + pow(($C1_Daya_LWBP_5_avg-$C5_Daya_LWBP_5_avg), 2) +
                  pow(($C1_Daya_WBP_6_avg-$C5_Daya_WBP_6_avg), 2) + pow(($C1_Daya_LWBP_6_avg-$C5_Daya_LWBP_6_avg), 2) +
                  pow(($C1_Daya_WBP_7_avg-$C5_Daya_WBP_7_avg), 2) + pow(($C1_Daya_LWBP_7_avg-$C5_Daya_LWBP_7_avg), 2)
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
              $M23 =
                sqrt(
                  pow(($C2_Daya_WBP_1_avg-$C3_Daya_WBP_1_avg), 2) + pow(($C2_Daya_LWBP_1_avg-$C3_Daya_LWBP_1_avg), 2) +
                  pow(($C2_Daya_WBP_2_avg-$C3_Daya_WBP_2_avg), 2) + pow(($C2_Daya_LWBP_2_avg-$C3_Daya_LWBP_2_avg), 2) +
                  pow(($C2_Daya_WBP_3_avg-$C3_Daya_WBP_3_avg), 2) + pow(($C2_Daya_LWBP_3_avg-$C3_Daya_LWBP_3_avg), 2) +
                  pow(($C2_Daya_WBP_4_avg-$C3_Daya_WBP_4_avg), 2) + pow(($C2_Daya_LWBP_4_avg-$C3_Daya_LWBP_4_avg), 2) +
                  pow(($C2_Daya_WBP_5_avg-$C3_Daya_WBP_5_avg), 2) + pow(($C2_Daya_LWBP_5_avg-$C3_Daya_LWBP_5_avg), 2) +
                  pow(($C2_Daya_WBP_6_avg-$C3_Daya_WBP_6_avg), 2) + pow(($C2_Daya_LWBP_6_avg-$C3_Daya_LWBP_6_avg), 2) +
                  pow(($C2_Daya_WBP_7_avg-$C3_Daya_WBP_7_avg), 2) + pow(($C2_Daya_LWBP_7_avg-$C3_Daya_LWBP_7_avg), 2)
                );
              $M24 =
                sqrt(
                  pow(($C2_Daya_WBP_1_avg-$C4_Daya_WBP_1_avg), 2) + pow(($C2_Daya_LWBP_1_avg-$C4_Daya_LWBP_1_avg), 2) +
                  pow(($C2_Daya_WBP_2_avg-$C4_Daya_WBP_2_avg), 2) + pow(($C2_Daya_LWBP_2_avg-$C4_Daya_LWBP_2_avg), 2) +
                  pow(($C2_Daya_WBP_3_avg-$C4_Daya_WBP_3_avg), 2) + pow(($C2_Daya_LWBP_3_avg-$C4_Daya_LWBP_3_avg), 2) +
                  pow(($C2_Daya_WBP_4_avg-$C4_Daya_WBP_4_avg), 2) + pow(($C2_Daya_LWBP_4_avg-$C4_Daya_LWBP_4_avg), 2) +
                  pow(($C2_Daya_WBP_5_avg-$C4_Daya_WBP_5_avg), 2) + pow(($C2_Daya_LWBP_5_avg-$C4_Daya_LWBP_5_avg), 2) +
                  pow(($C2_Daya_WBP_6_avg-$C4_Daya_WBP_6_avg), 2) + pow(($C2_Daya_LWBP_6_avg-$C4_Daya_LWBP_6_avg), 2) +
                  pow(($C2_Daya_WBP_7_avg-$C4_Daya_WBP_7_avg), 2) + pow(($C2_Daya_LWBP_7_avg-$C4_Daya_LWBP_7_avg), 2)
                );
              $M25 =
                sqrt(
                  pow(($C2_Daya_WBP_1_avg-$C5_Daya_WBP_1_avg), 2) + pow(($C2_Daya_LWBP_1_avg-$C5_Daya_LWBP_1_avg), 2) +
                  pow(($C2_Daya_WBP_2_avg-$C5_Daya_WBP_2_avg), 2) + pow(($C2_Daya_LWBP_2_avg-$C5_Daya_LWBP_2_avg), 2) +
                  pow(($C2_Daya_WBP_3_avg-$C5_Daya_WBP_3_avg), 2) + pow(($C2_Daya_LWBP_3_avg-$C5_Daya_LWBP_3_avg), 2) +
                  pow(($C2_Daya_WBP_4_avg-$C5_Daya_WBP_4_avg), 2) + pow(($C2_Daya_LWBP_4_avg-$C5_Daya_LWBP_4_avg), 2) +
                  pow(($C2_Daya_WBP_5_avg-$C5_Daya_WBP_5_avg), 2) + pow(($C2_Daya_LWBP_5_avg-$C5_Daya_LWBP_5_avg), 2) +
                  pow(($C2_Daya_WBP_6_avg-$C5_Daya_WBP_6_avg), 2) + pow(($C2_Daya_LWBP_6_avg-$C5_Daya_LWBP_6_avg), 2) +
                  pow(($C2_Daya_WBP_7_avg-$C5_Daya_WBP_7_avg), 2) + pow(($C2_Daya_LWBP_7_avg-$C5_Daya_LWBP_7_avg), 2)
                );
              $M31 =
                sqrt(
                  pow(($C3_Daya_WBP_1_avg-$C1_Daya_WBP_1_avg), 2) + pow(($C3_Daya_LWBP_1_avg-$C1_Daya_LWBP_1_avg), 2) +
                  pow(($C3_Daya_WBP_2_avg-$C1_Daya_WBP_2_avg), 2) + pow(($C3_Daya_LWBP_2_avg-$C1_Daya_LWBP_2_avg), 2) +
                  pow(($C3_Daya_WBP_3_avg-$C1_Daya_WBP_3_avg), 2) + pow(($C3_Daya_LWBP_3_avg-$C1_Daya_LWBP_3_avg), 2) +
                  pow(($C3_Daya_WBP_4_avg-$C1_Daya_WBP_4_avg), 2) + pow(($C3_Daya_LWBP_4_avg-$C1_Daya_LWBP_4_avg), 2) +
                  pow(($C3_Daya_WBP_5_avg-$C1_Daya_WBP_5_avg), 2) + pow(($C3_Daya_LWBP_5_avg-$C1_Daya_LWBP_5_avg), 2) +
                  pow(($C3_Daya_WBP_6_avg-$C1_Daya_WBP_6_avg), 2) + pow(($C3_Daya_LWBP_6_avg-$C1_Daya_LWBP_6_avg), 2) +
                  pow(($C3_Daya_WBP_7_avg-$C1_Daya_WBP_7_avg), 2) + pow(($C3_Daya_LWBP_7_avg-$C1_Daya_LWBP_7_avg), 2)
                );
              $M32 =
                sqrt(
                  pow(($C3_Daya_WBP_1_avg-$C2_Daya_WBP_1_avg), 2) + pow(($C3_Daya_LWBP_1_avg-$C2_Daya_LWBP_1_avg), 2) +
                  pow(($C3_Daya_WBP_2_avg-$C2_Daya_WBP_2_avg), 2) + pow(($C3_Daya_LWBP_2_avg-$C2_Daya_LWBP_2_avg), 2) +
                  pow(($C3_Daya_WBP_3_avg-$C2_Daya_WBP_3_avg), 2) + pow(($C3_Daya_LWBP_3_avg-$C2_Daya_LWBP_3_avg), 2) +
                  pow(($C3_Daya_WBP_4_avg-$C2_Daya_WBP_4_avg), 2) + pow(($C3_Daya_LWBP_4_avg-$C2_Daya_LWBP_4_avg), 2) +
                  pow(($C3_Daya_WBP_5_avg-$C2_Daya_WBP_5_avg), 2) + pow(($C3_Daya_LWBP_5_avg-$C2_Daya_LWBP_5_avg), 2) +
                  pow(($C3_Daya_WBP_6_avg-$C2_Daya_WBP_6_avg), 2) + pow(($C3_Daya_LWBP_6_avg-$C2_Daya_LWBP_6_avg), 2) +
                  pow(($C3_Daya_WBP_7_avg-$C2_Daya_WBP_7_avg), 2) + pow(($C3_Daya_LWBP_7_avg-$C2_Daya_LWBP_7_avg), 2)
                );
              $M34 =
                sqrt(
                  pow(($C3_Daya_WBP_1_avg-$C4_Daya_WBP_1_avg), 2) + pow(($C3_Daya_LWBP_1_avg-$C4_Daya_LWBP_1_avg), 2) +
                  pow(($C3_Daya_WBP_2_avg-$C4_Daya_WBP_2_avg), 2) + pow(($C3_Daya_LWBP_2_avg-$C4_Daya_LWBP_2_avg), 2) +
                  pow(($C3_Daya_WBP_3_avg-$C4_Daya_WBP_3_avg), 2) + pow(($C3_Daya_LWBP_3_avg-$C4_Daya_LWBP_3_avg), 2) +
                  pow(($C3_Daya_WBP_4_avg-$C4_Daya_WBP_4_avg), 2) + pow(($C3_Daya_LWBP_4_avg-$C4_Daya_LWBP_4_avg), 2) +
                  pow(($C3_Daya_WBP_5_avg-$C4_Daya_WBP_5_avg), 2) + pow(($C3_Daya_LWBP_5_avg-$C4_Daya_LWBP_5_avg), 2) +
                  pow(($C3_Daya_WBP_6_avg-$C4_Daya_WBP_6_avg), 2) + pow(($C3_Daya_LWBP_6_avg-$C4_Daya_LWBP_6_avg), 2) +
                  pow(($C3_Daya_WBP_7_avg-$C4_Daya_WBP_7_avg), 2) + pow(($C3_Daya_LWBP_7_avg-$C4_Daya_LWBP_7_avg), 2)
                );
              $M35 =
                sqrt(
                  pow(($C3_Daya_WBP_1_avg-$C5_Daya_WBP_1_avg), 2) + pow(($C3_Daya_LWBP_1_avg-$C5_Daya_LWBP_1_avg), 2) +
                  pow(($C3_Daya_WBP_2_avg-$C5_Daya_WBP_2_avg), 2) + pow(($C3_Daya_LWBP_2_avg-$C5_Daya_LWBP_2_avg), 2) +
                  pow(($C3_Daya_WBP_3_avg-$C5_Daya_WBP_3_avg), 2) + pow(($C3_Daya_LWBP_3_avg-$C5_Daya_LWBP_3_avg), 2) +
                  pow(($C3_Daya_WBP_4_avg-$C5_Daya_WBP_4_avg), 2) + pow(($C3_Daya_LWBP_4_avg-$C5_Daya_LWBP_4_avg), 2) +
                  pow(($C3_Daya_WBP_5_avg-$C5_Daya_WBP_5_avg), 2) + pow(($C3_Daya_LWBP_5_avg-$C5_Daya_LWBP_5_avg), 2) +
                  pow(($C3_Daya_WBP_6_avg-$C5_Daya_WBP_6_avg), 2) + pow(($C3_Daya_LWBP_6_avg-$C5_Daya_LWBP_6_avg), 2) +
                  pow(($C3_Daya_WBP_7_avg-$C5_Daya_WBP_7_avg), 2) + pow(($C3_Daya_LWBP_7_avg-$C5_Daya_LWBP_7_avg), 2)
                );
              $M41 =
                sqrt(
                  pow(($C4_Daya_WBP_1_avg-$C1_Daya_WBP_1_avg), 2) + pow(($C4_Daya_LWBP_1_avg-$C1_Daya_LWBP_1_avg), 2) +
                  pow(($C4_Daya_WBP_2_avg-$C1_Daya_WBP_2_avg), 2) + pow(($C4_Daya_LWBP_2_avg-$C1_Daya_LWBP_2_avg), 2) +
                  pow(($C4_Daya_WBP_3_avg-$C1_Daya_WBP_3_avg), 2) + pow(($C4_Daya_LWBP_3_avg-$C1_Daya_LWBP_3_avg), 2) +
                  pow(($C4_Daya_WBP_4_avg-$C1_Daya_WBP_4_avg), 2) + pow(($C4_Daya_LWBP_4_avg-$C1_Daya_LWBP_4_avg), 2) +
                  pow(($C4_Daya_WBP_5_avg-$C1_Daya_WBP_5_avg), 2) + pow(($C4_Daya_LWBP_5_avg-$C1_Daya_LWBP_5_avg), 2) +
                  pow(($C4_Daya_WBP_6_avg-$C1_Daya_WBP_6_avg), 2) + pow(($C4_Daya_LWBP_6_avg-$C1_Daya_LWBP_6_avg), 2) +
                  pow(($C4_Daya_WBP_7_avg-$C1_Daya_WBP_7_avg), 2) + pow(($C4_Daya_LWBP_7_avg-$C1_Daya_LWBP_7_avg), 2)
                );
              $M42 =
                sqrt(
                  pow(($C4_Daya_WBP_1_avg-$C2_Daya_WBP_1_avg), 2) + pow(($C4_Daya_LWBP_1_avg-$C2_Daya_LWBP_1_avg), 2) +
                  pow(($C4_Daya_WBP_2_avg-$C2_Daya_WBP_2_avg), 2) + pow(($C4_Daya_LWBP_2_avg-$C2_Daya_LWBP_2_avg), 2) +
                  pow(($C4_Daya_WBP_3_avg-$C2_Daya_WBP_3_avg), 2) + pow(($C4_Daya_LWBP_3_avg-$C2_Daya_LWBP_3_avg), 2) +
                  pow(($C4_Daya_WBP_4_avg-$C2_Daya_WBP_4_avg), 2) + pow(($C4_Daya_LWBP_4_avg-$C2_Daya_LWBP_4_avg), 2) +
                  pow(($C4_Daya_WBP_5_avg-$C2_Daya_WBP_5_avg), 2) + pow(($C4_Daya_LWBP_5_avg-$C2_Daya_LWBP_5_avg), 2) +
                  pow(($C4_Daya_WBP_6_avg-$C2_Daya_WBP_6_avg), 2) + pow(($C4_Daya_LWBP_6_avg-$C2_Daya_LWBP_6_avg), 2) +
                  pow(($C4_Daya_WBP_7_avg-$C2_Daya_WBP_7_avg), 2) + pow(($C4_Daya_LWBP_7_avg-$C2_Daya_LWBP_7_avg), 2)
                );
              $M43 =
                sqrt(
                  pow(($C4_Daya_WBP_1_avg-$C3_Daya_WBP_1_avg), 2) + pow(($C4_Daya_LWBP_1_avg-$C3_Daya_LWBP_1_avg), 2) +
                  pow(($C4_Daya_WBP_2_avg-$C3_Daya_WBP_2_avg), 2) + pow(($C4_Daya_LWBP_2_avg-$C3_Daya_LWBP_2_avg), 2) +
                  pow(($C4_Daya_WBP_3_avg-$C3_Daya_WBP_3_avg), 2) + pow(($C4_Daya_LWBP_3_avg-$C3_Daya_LWBP_3_avg), 2) +
                  pow(($C4_Daya_WBP_4_avg-$C3_Daya_WBP_4_avg), 2) + pow(($C4_Daya_LWBP_4_avg-$C3_Daya_LWBP_4_avg), 2) +
                  pow(($C4_Daya_WBP_5_avg-$C3_Daya_WBP_5_avg), 2) + pow(($C4_Daya_LWBP_5_avg-$C3_Daya_LWBP_5_avg), 2) +
                  pow(($C4_Daya_WBP_6_avg-$C3_Daya_WBP_6_avg), 2) + pow(($C4_Daya_LWBP_6_avg-$C3_Daya_LWBP_6_avg), 2) +
                  pow(($C4_Daya_WBP_7_avg-$C3_Daya_WBP_7_avg), 2) + pow(($C4_Daya_LWBP_7_avg-$C3_Daya_LWBP_7_avg), 2)
                );
              $M45 =
                sqrt(
                  pow(($C4_Daya_WBP_1_avg-$C5_Daya_WBP_1_avg), 2) + pow(($C4_Daya_LWBP_1_avg-$C5_Daya_LWBP_1_avg), 2) +
                  pow(($C4_Daya_WBP_2_avg-$C5_Daya_WBP_2_avg), 2) + pow(($C4_Daya_LWBP_2_avg-$C5_Daya_LWBP_2_avg), 2) +
                  pow(($C4_Daya_WBP_3_avg-$C5_Daya_WBP_3_avg), 2) + pow(($C4_Daya_LWBP_3_avg-$C5_Daya_LWBP_3_avg), 2) +
                  pow(($C4_Daya_WBP_4_avg-$C5_Daya_WBP_4_avg), 2) + pow(($C4_Daya_LWBP_4_avg-$C5_Daya_LWBP_4_avg), 2) +
                  pow(($C4_Daya_WBP_5_avg-$C5_Daya_WBP_5_avg), 2) + pow(($C4_Daya_LWBP_5_avg-$C5_Daya_LWBP_5_avg), 2) +
                  pow(($C4_Daya_WBP_6_avg-$C5_Daya_WBP_6_avg), 2) + pow(($C4_Daya_LWBP_6_avg-$C5_Daya_LWBP_6_avg), 2) +
                  pow(($C4_Daya_WBP_7_avg-$C5_Daya_WBP_7_avg), 2) + pow(($C4_Daya_LWBP_7_avg-$C5_Daya_LWBP_7_avg), 2)
                );
              $M51 =
                sqrt(
                  pow(($C5_Daya_WBP_1_avg-$C1_Daya_WBP_1_avg), 2) + pow(($C5_Daya_LWBP_1_avg-$C1_Daya_LWBP_1_avg), 2) +
                  pow(($C5_Daya_WBP_2_avg-$C1_Daya_WBP_2_avg), 2) + pow(($C5_Daya_LWBP_2_avg-$C1_Daya_LWBP_2_avg), 2) +
                  pow(($C5_Daya_WBP_3_avg-$C1_Daya_WBP_3_avg), 2) + pow(($C5_Daya_LWBP_3_avg-$C1_Daya_LWBP_3_avg), 2) +
                  pow(($C5_Daya_WBP_4_avg-$C1_Daya_WBP_4_avg), 2) + pow(($C5_Daya_LWBP_4_avg-$C1_Daya_LWBP_4_avg), 2) +
                  pow(($C5_Daya_WBP_5_avg-$C1_Daya_WBP_5_avg), 2) + pow(($C5_Daya_LWBP_5_avg-$C1_Daya_LWBP_5_avg), 2) +
                  pow(($C5_Daya_WBP_6_avg-$C1_Daya_WBP_6_avg), 2) + pow(($C5_Daya_LWBP_6_avg-$C1_Daya_LWBP_6_avg), 2) +
                  pow(($C5_Daya_WBP_7_avg-$C1_Daya_WBP_7_avg), 2) + pow(($C5_Daya_LWBP_7_avg-$C1_Daya_LWBP_7_avg), 2)
                );
              $M52 =
                sqrt(
                  pow(($C5_Daya_WBP_1_avg-$C2_Daya_WBP_1_avg), 2) + pow(($C5_Daya_LWBP_1_avg-$C2_Daya_LWBP_1_avg), 2) +
                  pow(($C5_Daya_WBP_2_avg-$C2_Daya_WBP_2_avg), 2) + pow(($C5_Daya_LWBP_2_avg-$C2_Daya_LWBP_2_avg), 2) +
                  pow(($C5_Daya_WBP_3_avg-$C2_Daya_WBP_3_avg), 2) + pow(($C5_Daya_LWBP_3_avg-$C2_Daya_LWBP_3_avg), 2) +
                  pow(($C5_Daya_WBP_4_avg-$C2_Daya_WBP_4_avg), 2) + pow(($C5_Daya_LWBP_4_avg-$C2_Daya_LWBP_4_avg), 2) +
                  pow(($C5_Daya_WBP_5_avg-$C2_Daya_WBP_5_avg), 2) + pow(($C5_Daya_LWBP_5_avg-$C2_Daya_LWBP_5_avg), 2) +
                  pow(($C5_Daya_WBP_6_avg-$C2_Daya_WBP_6_avg), 2) + pow(($C5_Daya_LWBP_6_avg-$C2_Daya_LWBP_6_avg), 2) +
                  pow(($C5_Daya_WBP_7_avg-$C2_Daya_WBP_7_avg), 2) + pow(($C5_Daya_LWBP_7_avg-$C2_Daya_LWBP_7_avg), 2)
                );
              $M53 =
                sqrt(
                  pow(($C5_Daya_WBP_1_avg-$C3_Daya_WBP_1_avg), 2) + pow(($C5_Daya_LWBP_1_avg-$C3_Daya_LWBP_1_avg), 2) +
                  pow(($C5_Daya_WBP_2_avg-$C3_Daya_WBP_2_avg), 2) + pow(($C5_Daya_LWBP_2_avg-$C3_Daya_LWBP_2_avg), 2) +
                  pow(($C5_Daya_WBP_3_avg-$C3_Daya_WBP_3_avg), 2) + pow(($C5_Daya_LWBP_3_avg-$C3_Daya_LWBP_3_avg), 2) +
                  pow(($C5_Daya_WBP_4_avg-$C3_Daya_WBP_4_avg), 2) + pow(($C5_Daya_LWBP_4_avg-$C3_Daya_LWBP_4_avg), 2) +
                  pow(($C5_Daya_WBP_5_avg-$C3_Daya_WBP_5_avg), 2) + pow(($C5_Daya_LWBP_5_avg-$C3_Daya_LWBP_5_avg), 2) +
                  pow(($C5_Daya_WBP_6_avg-$C3_Daya_WBP_6_avg), 2) + pow(($C5_Daya_LWBP_6_avg-$C3_Daya_LWBP_6_avg), 2) +
                  pow(($C5_Daya_WBP_7_avg-$C3_Daya_WBP_7_avg), 2) + pow(($C5_Daya_LWBP_7_avg-$C3_Daya_LWBP_7_avg), 2)
                );
              $M54 =
                sqrt(
                  pow(($C5_Daya_WBP_1_avg-$C4_Daya_WBP_1_avg), 2) + pow(($C5_Daya_LWBP_1_avg-$C4_Daya_LWBP_1_avg), 2) +
                  pow(($C5_Daya_WBP_2_avg-$C4_Daya_WBP_2_avg), 2) + pow(($C5_Daya_LWBP_2_avg-$C4_Daya_LWBP_2_avg), 2) +
                  pow(($C5_Daya_WBP_3_avg-$C4_Daya_WBP_3_avg), 2) + pow(($C5_Daya_LWBP_3_avg-$C4_Daya_LWBP_3_avg), 2) +
                  pow(($C5_Daya_WBP_4_avg-$C4_Daya_WBP_4_avg), 2) + pow(($C5_Daya_LWBP_4_avg-$C4_Daya_LWBP_4_avg), 2) +
                  pow(($C5_Daya_WBP_5_avg-$C4_Daya_WBP_5_avg), 2) + pow(($C5_Daya_LWBP_5_avg-$C4_Daya_LWBP_5_avg), 2) +
                  pow(($C5_Daya_WBP_6_avg-$C4_Daya_WBP_6_avg), 2) + pow(($C5_Daya_LWBP_6_avg-$C4_Daya_LWBP_6_avg), 2) +
                  pow(($C5_Daya_WBP_7_avg-$C4_Daya_WBP_7_avg), 2) + pow(($C5_Daya_LWBP_7_avg-$C4_Daya_LWBP_7_avg), 2)
                );

              $R12 = ($S1 + $S2) / $M12; $R13 = ($S1 + $S3) / $M13; $R14 = ($S1 + $S4) / $M14; $R15 = ($S1 + $S5) / $M15;
              $R21 = ($S2 + $S1) / $M21; $R23 = ($S2 + $S3) / $M23; $R24 = ($S2 + $S4) / $M24; $R25 = ($S2 + $S5) / $M25;
              $R31 = ($S3 + $S1) / $M31; $R32 = ($S3 + $S2) / $M32; $R34 = ($S3 + $S4) / $M34; $R35 = ($S3 + $S5) / $M35;
              $R41 = ($S4 + $S1) / $M41; $R42 = ($S4 + $S2) / $M42; $R43 = ($S4 + $S3) / $M43; $R45 = ($S4 + $S5) / $M45;
              $R51 = ($S5 + $S1) / $M51; $R52 = ($S5 + $S2) / $M52; $R53 = ($S5 + $S3) / $M53; $R54 = ($S5 + $S4) / $M54;

              $D1 = max($R12, $R13, $R14, $R15);
              $D2 = max($R21, $R23, $R24, $R25);
              $D3 = max($R31, $R32, $R34, $R35);
              $D4 = max($R41, $R42, $R43, $R45);
              $D5 = max($R51, $R52, $R53, $R54);

              $DB = ($D1 + $D2 + $D3 + $D4 + $D5) / 5;

              $_SESSION['DB_training5'] = $DB;
              $query = "UPDATE tb_centroid SET
                Daya_WBP_1=$C1_Daya_WBP_1_avg, Daya_LWBP_1=$C1_Daya_LWBP_1_avg,
                Daya_WBP_2=$C1_Daya_WBP_2_avg, Daya_LWBP_2=$C1_Daya_LWBP_2_avg,
                Daya_WBP_3=$C1_Daya_WBP_3_avg, Daya_LWBP_3=$C1_Daya_LWBP_3_avg,
                Daya_WBP_4=$C1_Daya_WBP_4_avg, Daya_LWBP_4=$C1_Daya_LWBP_4_avg,
                Daya_WBP_5=$C1_Daya_WBP_5_avg, Daya_LWBP_5=$C1_Daya_LWBP_5_avg,
                Daya_WBP_6=$C1_Daya_WBP_6_avg, Daya_LWBP_6=$C1_Daya_LWBP_6_avg,
                Daya_WBP_7=$C1_Daya_WBP_7_avg, Daya_LWBP_7=$C1_Daya_LWBP_7_avg,
                username='' WHERE cluster='5' AND C='C1'";
              $db->query($query);
              $query = "UPDATE tb_centroid SET
                Daya_WBP_1=$C2_Daya_WBP_1_avg, Daya_LWBP_1=$C2_Daya_LWBP_1_avg,
                Daya_WBP_2=$C2_Daya_WBP_2_avg, Daya_LWBP_2=$C2_Daya_LWBP_2_avg,
                Daya_WBP_3=$C2_Daya_WBP_3_avg, Daya_LWBP_3=$C2_Daya_LWBP_3_avg,
                Daya_WBP_4=$C2_Daya_WBP_4_avg, Daya_LWBP_4=$C2_Daya_LWBP_4_avg,
                Daya_WBP_5=$C2_Daya_WBP_5_avg, Daya_LWBP_5=$C2_Daya_LWBP_5_avg,
                Daya_WBP_6=$C2_Daya_WBP_6_avg, Daya_LWBP_6=$C2_Daya_LWBP_6_avg,
                Daya_WBP_7=$C2_Daya_WBP_7_avg, Daya_LWBP_7=$C2_Daya_LWBP_7_avg,
                username='' WHERE cluster='5' AND C='C2'";
              $db->query($query);
              $query = "UPDATE tb_centroid SET
                Daya_WBP_1=$C3_Daya_WBP_1_avg, Daya_LWBP_1=$C3_Daya_LWBP_1_avg,
                Daya_WBP_2=$C3_Daya_WBP_2_avg, Daya_LWBP_2=$C3_Daya_LWBP_2_avg,
                Daya_WBP_3=$C3_Daya_WBP_3_avg, Daya_LWBP_3=$C3_Daya_LWBP_3_avg,
                Daya_WBP_4=$C3_Daya_WBP_4_avg, Daya_LWBP_4=$C3_Daya_LWBP_4_avg,
                Daya_WBP_5=$C3_Daya_WBP_5_avg, Daya_LWBP_5=$C3_Daya_LWBP_5_avg,
                Daya_WBP_6=$C3_Daya_WBP_6_avg, Daya_LWBP_6=$C3_Daya_LWBP_6_avg,
                Daya_WBP_7=$C3_Daya_WBP_7_avg, Daya_LWBP_7=$C3_Daya_LWBP_7_avg,
                username='' WHERE cluster='5' AND C='C3'";
              $db->query($query);
              $query = "UPDATE tb_centroid SET
                Daya_WBP_1=$C4_Daya_WBP_1_avg, Daya_LWBP_1=$C4_Daya_LWBP_1_avg,
                Daya_WBP_2=$C4_Daya_WBP_2_avg, Daya_LWBP_2=$C4_Daya_LWBP_2_avg,
                Daya_WBP_3=$C4_Daya_WBP_3_avg, Daya_LWBP_3=$C4_Daya_LWBP_3_avg,
                Daya_WBP_4=$C4_Daya_WBP_4_avg, Daya_LWBP_4=$C4_Daya_LWBP_4_avg,
                Daya_WBP_5=$C4_Daya_WBP_5_avg, Daya_LWBP_5=$C4_Daya_LWBP_5_avg,
                Daya_WBP_6=$C4_Daya_WBP_6_avg, Daya_LWBP_6=$C4_Daya_LWBP_6_avg,
                Daya_WBP_7=$C4_Daya_WBP_7_avg, Daya_LWBP_7=$C4_Daya_LWBP_7_avg,
                username='' WHERE cluster='5' AND C='C4'";
              $db->query($query);
              $query = "UPDATE tb_centroid SET
                Daya_WBP_1=$C5_Daya_WBP_1_avg, Daya_LWBP_1=$C5_Daya_LWBP_1_avg,
                Daya_WBP_2=$C5_Daya_WBP_2_avg, Daya_LWBP_2=$C5_Daya_LWBP_2_avg,
                Daya_WBP_3=$C5_Daya_WBP_3_avg, Daya_LWBP_3=$C5_Daya_LWBP_3_avg,
                Daya_WBP_4=$C5_Daya_WBP_4_avg, Daya_LWBP_4=$C5_Daya_LWBP_4_avg,
                Daya_WBP_5=$C5_Daya_WBP_5_avg, Daya_LWBP_5=$C5_Daya_LWBP_5_avg,
                Daya_WBP_6=$C5_Daya_WBP_6_avg, Daya_LWBP_6=$C5_Daya_LWBP_6_avg,
                Daya_WBP_7=$C5_Daya_WBP_7_avg, Daya_LWBP_7=$C5_Daya_LWBP_7_avg,
                username='' WHERE cluster='5' AND C='C5'";
              $db->query($query);
            ?>
            <thead>
              <tr>
                <?php
                  $title = array('S1','S2','S3','S4','S5');

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
                <td><?php echo number_format($S3, 3) ?></td>
                <td><?php echo number_format($S4, 3) ?></td>
                <td><?php echo number_format($S5, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('M12','M13','M14','M15');

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
                <td><?php echo number_format($M12, 3) ?></td>
                <td><?php echo number_format($M13, 3) ?></td>
                <td><?php echo number_format($M14, 3) ?></td>
                <td><?php echo number_format($M15, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('M21','M23','M24','M25');

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
                <td><?php echo number_format($M21, 3) ?></td>
                <td><?php echo number_format($M23, 3) ?></td>
                <td><?php echo number_format($M24, 3) ?></td>
                <td><?php echo number_format($M25, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('M31','M32','M34','M35');

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
                <td><?php echo number_format($M31, 3) ?></td>
                <td><?php echo number_format($M32, 3) ?></td>
                <td><?php echo number_format($M34, 3) ?></td>
                <td><?php echo number_format($M35, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('M41','M42','M43','M45');

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
                <td><?php echo number_format($M41, 3) ?></td>
                <td><?php echo number_format($M42, 3) ?></td>
                <td><?php echo number_format($M43, 3) ?></td>
                <td><?php echo number_format($M45, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('M51','M52','M53','M54');

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
                <td><?php echo number_format($M51, 3) ?></td>
                <td><?php echo number_format($M52, 3) ?></td>
                <td><?php echo number_format($M53, 3) ?></td>
                <td><?php echo number_format($M54, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('R12','R13','R14','R15');

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
                <td><?php echo number_format($R12, 3) ?></td>
                <td><?php echo number_format($R13, 3) ?></td>
                <td><?php echo number_format($R14, 3) ?></td>
                <td><?php echo number_format($R15, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('R21','R23','R24','R25');

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
                <td><?php echo number_format($R21, 3) ?></td>
                <td><?php echo number_format($R23, 3) ?></td>
                <td><?php echo number_format($R24, 3) ?></td>
                <td><?php echo number_format($R25, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('R31','R32','R34','R35');

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
                <td><?php echo number_format($R31, 3) ?></td>
                <td><?php echo number_format($R32, 3) ?></td>
                <td><?php echo number_format($R34, 3) ?></td>
                <td><?php echo number_format($R35, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('R41','R42','R43','R45');

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
                <td><?php echo number_format($R41, 3) ?></td>
                <td><?php echo number_format($R42, 3) ?></td>
                <td><?php echo number_format($R43, 3) ?></td>
                <td><?php echo number_format($R45, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <table class="ui celled center aligned collapsing small table">
            <thead>
              <tr>
                <?php
                  $title = array('D1','D2','D3','D4','D5','DB');

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
                <td><?php echo number_format($D1, 3) ?></td>
                <td><?php echo number_format($D2, 3) ?></td>
                <td><?php echo number_format($D3, 3) ?></td>
                <td><?php echo number_format($D4, 3) ?></td>
                <td><?php echo number_format($D5, 3) ?></td>
                <td><?php echo number_format($DB, 3) ?></td>
              </tr>
            </tbody>
          </table>
          <?php
            $sumbu_x="'WBP Minggu', 'LWBP Minggu', 'WBP Senin', 'LWBP Senin', 'WBP Selasa', 'LWBP Selasa', 'WBP Rabu', 'LWBP Rabu', 'WBP Kamis', 'LWBP Kamis', 'WBP Jumat', 'LWBP Jumat', 'WBP Sabtu', 'LWBP Sabtu'";

            $qry="SELECT * FROM tb_centroid WHERE cluster='5' AND C='C1'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
              $sumbu_y = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_centroid WHERE cluster='5' AND C='C2'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
              $sumbu_y1 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_centroid WHERE cluster='5' AND C='C3'";
          	$result=$db->query($qry);
          	while($res=$result->fetch()){
          		$sumbu_y2 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
          	}

            $qry="SELECT * FROM tb_centroid WHERE cluster='5' AND C='C4'";
          	$result=$db->query($qry);
          	while($res=$result->fetch()){
          		$sumbu_y3 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
          	}

            $qry="SELECT * FROM tb_centroid WHERE cluster='5' AND C='C5'";
          	$result=$db->query($qry);
          	while($res=$result->fetch()){
          		$sumbu_y4 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
          	}
          ?>

        <script language="javascript" type="text/javascript">

           var chart;
           $(document).ready(function(){
               chart = new Highcharts.Chart({
                   //Type: line / bar / column
             chart: {renderTo: 'container', type: 'line'},
                   title: {text: <?php echo "'GRAFIK CLUSTER 5'"; ?>},
                   xAxis: {categories: [<?php echo $sumbu_x; ?>]},
                   yAxis: {title: {text: '<?php echo 'Daya'; ?>'}, plotLines: [{ value: 0, width: 1, color: '#808080'}]},
                   //fungsi tooltip untuk menampikan data di titik tertentu
             tooltip: {formatter: function() {return 'Informasi	: <b>'+ '</b><br/>'+ this.series.name + ' ' + this.x + ' = <b>'+ this.y  +'</b>volt';}},
             //isi datanya
                   series: [{name: 'C1', data: [<?php echo $sumbu_y; ?>]},
                 {name: 'C2', data: [<?php echo $sumbu_y1; ?>]},
               {name: 'C3', data: [<?php echo $sumbu_y2; ?>]},
             {name: 'C4', data: [<?php echo $sumbu_y3; ?>]},
           {name: 'C5', data: [<?php echo $sumbu_y4; ?>]},
           ]});
           });

     </script>
        <div id="container"></div>
        </div>
        <a href="cluster2.php" class="ui primary button">Training set Cluster 2</a>
        <a href="cluster3.php" class="ui primary button">Training set Cluster 3</a>
        <a href="cluster4.php" class="ui primary button">Training set Cluster 4</a>
        <a href="cluster5.php" class="ui disabled button">Training set Cluster 5</a>
        <a href="cluster6.php" class="ui primary button">Training set Cluster 6</a>
      </div>
    </div>
  </body>
</html>
