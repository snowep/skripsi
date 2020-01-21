<!DOCTYPE HTML>
<html>
<?php include 'database.php'; session_start(); ?>
<head>

  <script src="js/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/highcharts.js"></script>
  <link rel="stylesheet" href="dist/css/semantic.min.css">
</head>
<body>
  <div class="ui container" style="margin-top:40px">
    <h3>HASIL SET CLUSTER OPTIMUM</h3>
    <?php
    echo "<br />Nilai DBI : <br />";
    echo "Set Cluster 2 : ".number_format($_SESSION['DB_training2'],3)."<br />";
    echo "Set Cluster 3 : ".number_format($_SESSION['DB_training3'],3)."<br />";
    echo "Set Cluster 4 : ".number_format($_SESSION['DB_training4'],3)."<br />";
    echo "Set Cluster 5 : ".number_format($_SESSION['DB_training5'],3)."<br />";
    echo "Set Cluster 6 : ".number_format($_SESSION['DB_training6'],3)."<br /><br /><hr/>";
    $dbi_optimum=min($_SESSION['DB_training2'],$_SESSION['DB_training3'],$_SESSION['DB_training4'],$_SESSION['DB_training5'],$_SESSION['DB_training6']);
    $_SESSION['dbiOpt'] = $dbi_optimum;
    echo "Set Cluster Terbaik adalah : ";
    echo number_format($dbi_optimum,3)." - ";
    if($dbi_optimum==$_SESSION['DB_training2']) {
      $_SESSION['grafik']='cluster2';
      echo "Set Cluster 2 <br /><hr/>";
      echo "<br />";
      echo '<a href="testing2.php"><i class="fa fa fa-cogs"></i> Data Testing Set Cluster 2</a>';
      echo "<br />";
      ////////////////////////////////////////// Grafik 2
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
          series: [
            {name: 'C1', data: [<?php echo $sumbu_y; ?>]},
            {name: 'C2', data: [<?php echo $sumbu_y1; ?>]},
          ]
        });
      });
      </script>
      <?php
      ////////////////////////////////////////// Grafik 2 END
    } else if($dbi_optimum==$_SESSION['DB_training3']) {
      $_SESSION['grafik']='cluster3';
      echo "Set Cluster 3 <br /><hr/>";
      echo "<br />";
      echo '<a href="testing3.php"><i class="fa fa fa-cogs"></i> Data Testing Set Cluster 3</a>';
      echo "<br />";
      echo '<a href="grafik3.php"><i class="fa fa-bar-chart"></i> Grafik Testing Set Cluster 3</a>';
      ////////////////////////////////////////// Grafik 3
      $sumbu_x="'WBP Minggu', 'LWBP Minggu', 'WBP Senin', 'LWBP Senin', 'WBP Selasa', 'LWBP Selasa', 'WBP Rabu', 'LWBP Rabu', 'WBP Kamis', 'LWBP Kamis', 'WBP Jumat', 'LWBP Jumat', 'WBP Sabtu', 'LWBP Sabtu'";

      $qry="SELECT * FROM tb_centroid WHERE cluster='3' AND C='C1'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='3' AND C='C2'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y1 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='3' AND C='C3'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y2 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }
      ?>
      <script language="javascript" type="text/javascript">
      var chart;
      $(document).ready(function(){
        chart = new Highcharts.Chart({
          //Type: line / bar / column
          chart: {renderTo: 'container', type: 'line'},
          title: {text: <?php echo "'GRAFIK CLUSTER 3'"; ?>},
          xAxis: {categories: [<?php echo $sumbu_x; ?>]},
          yAxis: {title: {text: '<?php echo 'Daya'; ?>'}, plotLines: [{ value: 0, width: 1, color: '#808080'}]},
          //fungsi tooltip untuk menampikan data di titik tertentu
          tooltip: {formatter: function() {return 'Informasi	: <b>'+ '</b><br/>'+ this.series.name + ' ' + this.x + ' = <b>'+ this.y  +'</b>volt';}},
          //isi datanya
          series: [{name: 'C1', data: [<?php echo $sumbu_y; ?>]},
          {name: 'C2', data: [<?php echo $sumbu_y1; ?>]},
          {name: 'C3', data: [<?php echo $sumbu_y2; ?>]},
        ]});
      });
      </script>
      <?php
      ////////////////////////////////////////// Grafik 3 END
    } else if($dbi_optimum==$_SESSION['DB_training4']) {
      $_SESSION['grafik']='cluster4';
      echo "Set Cluster 4 <br /><hr/>";
      echo "<br />";
      echo '<a href="testing4.php"><i class="fa fa fa-cogs"></i> Data Testing Set Cluster 4</a>';
      echo "<br />";
      ////////////////////////////////////////// Grafik 4
      $sumbu_x="'WBP Minggu', 'LWBP Minggu', 'WBP Senin', 'LWBP Senin', 'WBP Selasa', 'LWBP Selasa', 'WBP Rabu', 'LWBP Rabu', 'WBP Kamis', 'LWBP Kamis', 'WBP Jumat', 'LWBP Jumat', 'WBP Sabtu', 'LWBP Sabtu'";

      $qry="SELECT * FROM tb_centroid WHERE cluster='4' AND C='C1'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='4' AND C='C2'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y1 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='4' AND C='C3'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y2 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='4' AND C='C4'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y3 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }
      ?>
      <script language="javascript" type="text/javascript">

      var chart;
      $(document).ready(function(){
        chart = new Highcharts.Chart({
          //Type: line / bar / column
          chart: {renderTo: 'container', type: 'line'},
          title: {text: <?php echo "'GRAFIK CLUSTER 4'"; ?>},
          xAxis: {categories: [<?php echo $sumbu_x; ?>]},
          yAxis: {title: {text: '<?php echo 'Daya'; ?>'}, plotLines: [{ value: 0, width: 1, color: '#808080'}]},
          //fungsi tooltip untuk menampikan data di titik tertentu
          tooltip: {formatter: function() {return 'Informasi	: <b>'+ '</b><br/>'+ this.series.name + ' ' + this.x + ' = <b>'+ this.y  +'</b>volt';}},
          //isi datanya
          series: [{name: 'C1', data: [<?php echo $sumbu_y; ?>]},
          {name: 'C2', data: [<?php echo $sumbu_y1; ?>]},
          {name: 'C3', data: [<?php echo $sumbu_y2; ?>]},
          {name: 'C4', data: [<?php echo $sumbu_y3; ?>]},
        ]});
      });

      </script>
      <?php
      ////////////////////////////////////////// Grafik 4 END
    } else if($dbi_optimum==$_SESSION['DB_training5']) {
      $_SESSION['grafik']='cluster5';
      echo "Set Cluster 5 <br /><hr/>";
      echo "<br />";
      echo '<a href="testing5.php"><i class="fa fa fa-cogs"></i> Data Testing Set Cluster 5</a>';
      echo "<br />";
      echo '<a href="grafik5.php"><i class="fa fa-bar-chart"></i> Grafik Testing Set Cluster 5</a>';
      ////////////////////////////////////////// Grafik 5
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
      <?php
      ////////////////////////////////////////// Grafik 5 END
    } else if($dbi_optimum==$_SESSION['DB_training6']) {
      $_SESSION['grafik']='cluster6';
      echo "Set Cluster 6 <br /><hr/>";
      echo "<br />";
      echo '<a href="testing6.php"><i class="fa fa fa-cogs"></i> Data Testing Set Cluster 6</a>';
      echo "<br />";
      echo '<a href="grafik6.php"><i class="fa fa-bar-chart"></i> Grafik Testing Set Cluster 6</a>';


      $sumbu_x="'WBP Minggu', 'LWBP Minggu', 'WBP Senin', 'LWBP Senin', 'WBP Selasa', 'LWBP Selasa', 'WBP Rabu', 'LWBP Rabu', 'WBP Kamis', 'LWBP Kamis', 'WBP Jumat', 'LWBP Jumat', 'WBP Sabtu', 'LWBP Sabtu'";

      $qry="SELECT * FROM tb_centroid WHERE cluster='6' AND C='C1'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='6' AND C='C2'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y1 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='6' AND C='C3'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y2 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='6' AND C='C4'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y3 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }

      $qry="SELECT * FROM tb_centroid WHERE cluster='6' AND C='C5'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y4 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
      }
      $qry="SELECT * FROM tb_centroid WHERE cluster='6' AND C='C6'";
      $result=$db->query($qry);
      while($res=$result->fetch()){
        $sumbu_y5 = $res['Daya_WBP_1'].",".$res['Daya_LWBP_1'].",".$res['Daya_WBP_2'].",".$res['Daya_LWBP_2'].",".$res['Daya_WBP_3'].",".$res['Daya_LWBP_3'].",".$res['Daya_WBP_4'].",".$res['Daya_LWBP_4'].",".$res['Daya_WBP_5'].",".$res['Daya_LWBP_5'].",".$res['Daya_WBP_6'].",".$res['Daya_LWBP_6'].",".$res['Daya_WBP_7'].",".$res['Daya_LWBP_7'];
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
          {name: 'C6', data: [<?php echo $sumbu_y5; ?>]},
        ]});
      });

    </script>
    <?php
  }
  ?>
  <div id="container"></div>
</div>
</div>

</body>
</html>
