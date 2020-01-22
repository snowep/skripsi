<html>
<head>
    <title></title>
    <?php include 'database.php'; session_start(); $idpel = $_GET['id_pelanggan'] ?>
    <link rel="stylesheet" href="dist/css/semantic.min.css">
</head>

<body>
    <div class="ui container" style="padding-top:14px!important">
        <a href="testingData.php" class="ui success button">Kembali</a>
        <?php
        $query = $db->query("SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'");
        while ($result = $query->fetch()){
//            inisialisasi variable baru diluar looping
            $Daya_WBP_1 = $result['Daya_WBP_1']; $Daya_LWBP_1 = $result['Daya_LWBP_1'];
            $Daya_WBP_2 = $result['Daya_WBP_2']; $Daya_LWBP_2 = $result['Daya_LWBP_2'];
            $Daya_WBP_3 = $result['Daya_WBP_3']; $Daya_LWBP_3 = $result['Daya_LWBP_3'];
            $Daya_WBP_4 = $result['Daya_WBP_4']; $Daya_LWBP_4 = $result['Daya_LWBP_4'];
            $Daya_WBP_5 = $result['Daya_WBP_5']; $Daya_LWBP_5 = $result['Daya_LWBP_5'];
            $Daya_WBP_6 = $result['Daya_WBP_6']; $Daya_LWBP_6 = $result['Daya_LWBP_6'];
            $Daya_WBP_7 = $result['Daya_WBP_7']; $Daya_LWBP_7 = $result['Daya_LWBP_7'];
            $tanggal = date('d F Y');
            ?>
            <table class="ui celled center aligned collapsing small table">
                <thead>
                    <tr>
                        <th colspan="14">Data Testing ID Pelanggan: <?php echo $result[0] ?></th>
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
                    <tr>
                        <?php for ($i=1; $i < 15; $i++) { ?>
                            <td><?php echo number_format($result[$i], 3) ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
            <?php
        }
        ?>
        <?php if ($_SESSION['dbiOpt'] == $_SESSION['DB_training2']) {
            $DC1_mak = 0;
            $DC2_mak = 0;
            $query = $db->query("SELECT * FROM tb_training");
            while ($res = $query->fetch()){
                if($res['C2DC1']>$DC1_mak) $DC1_mak=$res['C2DC1'];
                if($res['C2DC2']>$DC2_mak) $DC2_mak=$res['C2DC2'];
            }
            ?>
            <table class="ui celled center aligned collapsing small table">
                <thead>
                <tr>
                    <th colspan="4">Nilai DC Masksimum</th>
                </tr>
                <tr>
                    <th>DC1</th>
                    <th>DC2</th>
                    <th>DC3</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $DC1_mak ?></td>
                    <td><?php echo $DC2_mak ?></td>
                </tr>
                </tbody>
            </table>
            <?php
            // ambil nilai cluster optimum di tb_centroid | C1
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='3' AND C='C1'");
            while($res = $query->fetch()){
                $C1_Daya_WBP_1 = $res['Daya_WBP_1']; $C1_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C1_Daya_WBP_2 = $res['Daya_WBP_2']; $C1_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C1_Daya_WBP_3 = $res['Daya_WBP_3']; $C1_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C1_Daya_WBP_4 = $res['Daya_WBP_4']; $C1_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C1_Daya_WBP_5 = $res['Daya_WBP_5']; $C1_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C1_Daya_WBP_6 = $res['Daya_WBP_6']; $C1_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C1_Daya_WBP_7 = $res['Daya_WBP_7']; $C1_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C2
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='3' AND C='C2'");
            while($res = $query->fetch()){
                $C2_Daya_WBP_1 = $res['Daya_WBP_1']; $C2_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C2_Daya_WBP_2 = $res['Daya_WBP_2']; $C2_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C2_Daya_WBP_3 = $res['Daya_WBP_3']; $C2_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C2_Daya_WBP_4 = $res['Daya_WBP_4']; $C2_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C2_Daya_WBP_5 = $res['Daya_WBP_5']; $C2_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C2_Daya_WBP_6 = $res['Daya_WBP_6']; $C2_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C2_Daya_WBP_7 = $res['Daya_WBP_7']; $C2_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
                $DC1= sqrt(
                    pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7), 2)
                );
                $DC2= sqrt(
                    pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7), 2)
                );
                echo "<br />Data Testing(Jarak object ke tiap centroid di set cluster 4): <br />";
                echo "DC1: ".number_format($DC1,3)."<br/> DC2: ".number_format($DC2,3)."<br />";
                if($DC1<$DC1_mak || $DC2<$DC2_mak) {
                    $status = 'Penggunaan Daya Normal';
                    echo "PENGGUNAAN DAYA SESUAI POLA / NORMAL<br />";
                } else {
                    $status = 'Penggunaan Daya Tidak Normal ';
                    echo "<b style='color:red; font-size:20px;'>PENGGUNAAN DAYA TIDAK SESUAI POLA / Ketidakwajaran Dalam Penggunaan Daya</B>";
                }

                $querystat=$db->query("UPDATE tb_testing set status='$status' WHERE id_pelanggan='$idpel'");
            }
            ?>
        <?php }
        elseif ($_SESSION['dbiOpt'] == $_SESSION['DB_training3']) {
            $DC1_mak = 0;
            $DC2_mak = 0;
            $DC3_mak = 0;
            $query = $db->query("SELECT * FROM tb_training");
            while ($res = $query->fetch()){
                if($res['C3DC1']>$DC1_mak) $DC1_mak=$res['C3DC1'];
                if($res['C3DC2']>$DC2_mak) $DC2_mak=$res['C3DC2'];
                if($res['C3DC3']>$DC3_mak) $DC3_mak=$res['C3DC3'];
            }
            ?>
            <table class="ui celled center aligned collapsing small table">
                <thead>
                <tr>
                    <th colspan="4">Nilai DC Masksimum</th>
                </tr>
                <tr>
                    <th>DC1</th>
                    <th>DC2</th>
                    <th>DC3</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $DC1_mak ?></td>
                    <td><?php echo $DC2_mak ?></td>
                    <td><?php echo $DC3_mak ?></td>
                </tr>
                </tbody>
            </table>
            <?php
            // ambil nilai cluster optimum di tb_centroid | C1
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='3' AND C='C1'");
            while($res = $query->fetch()){
                $C1_Daya_WBP_1 = $res['Daya_WBP_1']; $C1_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C1_Daya_WBP_2 = $res['Daya_WBP_2']; $C1_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C1_Daya_WBP_3 = $res['Daya_WBP_3']; $C1_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C1_Daya_WBP_4 = $res['Daya_WBP_4']; $C1_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C1_Daya_WBP_5 = $res['Daya_WBP_5']; $C1_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C1_Daya_WBP_6 = $res['Daya_WBP_6']; $C1_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C1_Daya_WBP_7 = $res['Daya_WBP_7']; $C1_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C2
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='3' AND C='C2'");
            while($res = $query->fetch()){
                $C2_Daya_WBP_1 = $res['Daya_WBP_1']; $C2_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C2_Daya_WBP_2 = $res['Daya_WBP_2']; $C2_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C2_Daya_WBP_3 = $res['Daya_WBP_3']; $C2_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C2_Daya_WBP_4 = $res['Daya_WBP_4']; $C2_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C2_Daya_WBP_5 = $res['Daya_WBP_5']; $C2_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C2_Daya_WBP_6 = $res['Daya_WBP_6']; $C2_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C2_Daya_WBP_7 = $res['Daya_WBP_7']; $C2_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C3
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='3' AND C='C3'");
            while($res = $query->fetch()){
                $C3_Daya_WBP_1 = $res['Daya_WBP_1']; $C3_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C3_Daya_WBP_2 = $res['Daya_WBP_2']; $C3_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C3_Daya_WBP_3 = $res['Daya_WBP_3']; $C3_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C3_Daya_WBP_4 = $res['Daya_WBP_4']; $C3_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C3_Daya_WBP_5 = $res['Daya_WBP_5']; $C3_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C3_Daya_WBP_6 = $res['Daya_WBP_6']; $C3_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C3_Daya_WBP_7 = $res['Daya_WBP_7']; $C3_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
                $DC1= sqrt(
                    pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7), 2)
                );
                $DC2= sqrt(
                    pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7), 2)
                );
                $DC3= sqrt(
                    pow(($res['Daya_WBP_1']-$C3_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C3_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C3_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C3_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C3_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C3_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C3_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C3_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C3_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C3_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C3_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C3_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C3_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C3_Daya_LWBP_7), 2)
                );
                echo "<br />Data Testing(Jarak object ke tiap centroid di set cluster 4): <br />";
                echo "DC1: ".number_format($DC1,3)."<br/> DC2: ".number_format($DC2,3)."<br />";
                echo "DC3: ".number_format($DC3,3);
                if($DC1<$DC1_mak || $DC2<$DC2_mak || $DC3<$DC3_mak) {
                    $status = 'Penggunaan Daya Normal';
                    echo "PENGGUNAAN DAYA SESUAI POLA / NORMAL<br />";
                } else {
                    $status = 'Penggunaan Daya Tidak Normal ';
                    echo "<b style='color:red; font-size:20px;'>PENGGUNAAN DAYA TIDAK SESUAI POLA / Ketidakwajaran Dalam Penggunaan Daya</B>";
                }

                $querystat=$db->query("UPDATE tb_testing set status='$status' WHERE id_pelanggan='$idpel'");
            }
            ?>
        <?php }
        elseif ($_SESSION['dbiOpt'] == $_SESSION['DB_training4']) {
            $DC1_mak = 0;
            $DC2_mak = 0;
            $DC3_mak = 0;
            $DC4_mak = 0;
            $query = $db->query("SELECT * FROM tb_training");
            while ($result = $query->fetch()){
                if($result['C4DC1']>$DC1_mak) $DC1_mak=$result['C4DC1'];
                if($result['C4DC2']>$DC2_mak) $DC2_mak=$result['C4DC2'];
                if($result['C4DC3']>$DC3_mak) $DC3_mak=$result['C4DC3'];
                if($result['C4DC4']>$DC4_mak) $DC4_mak=$result['C4DC4'];
            }
        ?>
        <table class="ui celled center aligned collapsing small table">
            <thead>
                <tr>
                    <th colspan="4">Nilai DC Masksimum</th>
                </tr>
                <tr>
                    <th>DC1</th>
                    <th>DC2</th>
                    <th>DC3</th>
                    <th>DC4</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $DC1_mak ?></td>
                    <td><?php echo $DC2_mak ?></td>
                    <td><?php echo $DC3_mak ?></td>
                    <td><?php echo $DC4_mak ?></td>
                </tr>
            </tbody>
        </table>
            <?php
            // ambil nilai cluster optimum di tb_centroid | C1
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='4' AND C='C1'");
            while($res = $query->fetch()){
                $C1_Daya_WBP_1 = $res['Daya_WBP_1']; $C1_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C1_Daya_WBP_2 = $res['Daya_WBP_2']; $C1_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C1_Daya_WBP_3 = $res['Daya_WBP_3']; $C1_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C1_Daya_WBP_4 = $res['Daya_WBP_4']; $C1_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C1_Daya_WBP_5 = $res['Daya_WBP_5']; $C1_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C1_Daya_WBP_6 = $res['Daya_WBP_6']; $C1_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C1_Daya_WBP_7 = $res['Daya_WBP_7']; $C1_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C2
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='4' AND C='C2'");
            while($res = $query->fetch()){
                $C2_Daya_WBP_1 = $res['Daya_WBP_1']; $C2_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C2_Daya_WBP_2 = $res['Daya_WBP_2']; $C2_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C2_Daya_WBP_3 = $res['Daya_WBP_3']; $C2_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C2_Daya_WBP_4 = $res['Daya_WBP_4']; $C2_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C2_Daya_WBP_5 = $res['Daya_WBP_5']; $C2_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C2_Daya_WBP_6 = $res['Daya_WBP_6']; $C2_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C2_Daya_WBP_7 = $res['Daya_WBP_7']; $C2_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C3
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='4' AND C='C3'");
            while($res = $query->fetch()){
                $C3_Daya_WBP_1 = $res['Daya_WBP_1']; $C3_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C3_Daya_WBP_2 = $res['Daya_WBP_2']; $C3_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C3_Daya_WBP_3 = $res['Daya_WBP_3']; $C3_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C3_Daya_WBP_4 = $res['Daya_WBP_4']; $C3_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C3_Daya_WBP_5 = $res['Daya_WBP_5']; $C3_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C3_Daya_WBP_6 = $res['Daya_WBP_6']; $C3_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C3_Daya_WBP_7 = $res['Daya_WBP_7']; $C3_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C4
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='4' AND C='C4'");
            while($res = $query->fetch()){
                $C4_Daya_WBP_1 = $res['Daya_WBP_1']; $C4_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C4_Daya_WBP_2 = $res['Daya_WBP_2']; $C4_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C4_Daya_WBP_3 = $res['Daya_WBP_3']; $C4_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C4_Daya_WBP_4 = $res['Daya_WBP_4']; $C4_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C4_Daya_WBP_5 = $res['Daya_WBP_5']; $C4_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C4_Daya_WBP_6 = $res['Daya_WBP_6']; $C4_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C4_Daya_WBP_7 = $res['Daya_WBP_7']; $C4_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
                $DC1= sqrt(
                    pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7), 2)
                );
                $DC2= sqrt(
                    pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7), 2)
                );
                $DC3= sqrt(
                    pow(($res['Daya_WBP_1']-$C3_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C3_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C3_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C3_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C3_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C3_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C3_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C3_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C3_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C3_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C3_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C3_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C3_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C3_Daya_LWBP_7), 2)
                );
                $DC4= sqrt(
                    pow(($res['Daya_WBP_1']-$C4_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C4_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C4_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C4_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C4_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C4_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C4_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C4_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C4_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C4_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C4_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C4_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C4_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C4_Daya_LWBP_7), 2)
                );
                echo "<br />Data Testing(Jarak object ke tiap centroid di set cluster 4): <br />";
                echo "DC1: ".number_format($DC1,3)."<br/> DC2: ".number_format($DC2,3)."<br />";
                echo "DC3: ".number_format($DC3,3)."<br/> DC4: ".number_format($DC4,3)."<br />";
                if($DC1<$DC1_mak || $DC2<$DC2_mak || $DC3<$DC3_mak || $DC4<$DC4_mak) {
                    $status = 'Penggunaan Daya Normal';
                    echo "PENGGUNAAN DAYA SESUAI POLA / NORMAL<br />";
                } else {
                    $status = 'Penggunaan Daya Tidak Normal ';
                    echo "<b style='color:red; font-size:20px;'>PENGGUNAAN DAYA TIDAK SESUAI POLA / Ketidakwajaran Dalam Penggunaan Daya</B>";
                }

                $querystat=$db->query("UPDATE tb_testing set status='$status' WHERE id_pelanggan='$idpel'");
            }
            ?>
        <?php }
        elseif ($_SESSION['dbiOpt'] == $_SESSION['DB_training5']) {
            $DC1_mak = 0;
            $DC2_mak = 0;
            $DC3_mak = 0;
            $DC4_mak = 0;
            $DC5_mak = 0;
            $query = $db->query("SELECT * FROM tb_training");
            while ($result = $query->fetch()){
                if($result['C5DC1']>$DC1_mak) $DC1_mak=$result['C5DC1'];
                if($result['C5DC2']>$DC2_mak) $DC2_mak=$result['C5DC2'];
                if($result['C5DC3']>$DC3_mak) $DC3_mak=$result['C5DC3'];
                if($result['C5DC4']>$DC4_mak) $DC4_mak=$result['C5DC4'];
                if($result['C5DC5']>$DC5_mak) $DC5_mak=$result['C5DC5'];
            }
            ?>
            <table class="ui celled center aligned collapsing small table">
                <thead>
                <tr>
                    <th colspan="4">Nilai DC Masksimum</th>
                </tr>
                <tr>
                    <th>DC1</th>
                    <th>DC2</th>
                    <th>DC3</th>
                    <th>DC4</th>
                    <th>DC5</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $DC1_mak ?></td>
                    <td><?php echo $DC2_mak ?></td>
                    <td><?php echo $DC3_mak ?></td>
                    <td><?php echo $DC4_mak ?></td>
                    <td><?php echo $DC5_mak ?></td>
                </tr>
                </tbody>
            </table>
            <?php
            // ambil nilai cluster optimum di tb_centroid | C1
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='5' AND C='C1'");
            while($res = $query->fetch()){
                $C1_Daya_WBP_1 = $res['Daya_WBP_1']; $C1_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C1_Daya_WBP_2 = $res['Daya_WBP_2']; $C1_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C1_Daya_WBP_3 = $res['Daya_WBP_3']; $C1_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C1_Daya_WBP_4 = $res['Daya_WBP_4']; $C1_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C1_Daya_WBP_5 = $res['Daya_WBP_5']; $C1_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C1_Daya_WBP_6 = $res['Daya_WBP_6']; $C1_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C1_Daya_WBP_7 = $res['Daya_WBP_7']; $C1_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C2
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='5' AND C='C2'");
            while($res = $query->fetch()){
                $C2_Daya_WBP_1 = $res['Daya_WBP_1']; $C2_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C2_Daya_WBP_2 = $res['Daya_WBP_2']; $C2_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C2_Daya_WBP_3 = $res['Daya_WBP_3']; $C2_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C2_Daya_WBP_4 = $res['Daya_WBP_4']; $C2_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C2_Daya_WBP_5 = $res['Daya_WBP_5']; $C2_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C2_Daya_WBP_6 = $res['Daya_WBP_6']; $C2_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C2_Daya_WBP_7 = $res['Daya_WBP_7']; $C2_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C3
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='5' AND C='C3'");
            while($res = $query->fetch()){
                $C3_Daya_WBP_1 = $res['Daya_WBP_1']; $C3_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C3_Daya_WBP_2 = $res['Daya_WBP_2']; $C3_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C3_Daya_WBP_3 = $res['Daya_WBP_3']; $C3_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C3_Daya_WBP_4 = $res['Daya_WBP_4']; $C3_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C3_Daya_WBP_5 = $res['Daya_WBP_5']; $C3_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C3_Daya_WBP_6 = $res['Daya_WBP_6']; $C3_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C3_Daya_WBP_7 = $res['Daya_WBP_7']; $C3_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C4
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='5' AND C='C4'");
            while($res = $query->fetch()){
                $C4_Daya_WBP_1 = $res['Daya_WBP_1']; $C4_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C4_Daya_WBP_2 = $res['Daya_WBP_2']; $C4_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C4_Daya_WBP_3 = $res['Daya_WBP_3']; $C4_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C4_Daya_WBP_4 = $res['Daya_WBP_4']; $C4_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C4_Daya_WBP_5 = $res['Daya_WBP_5']; $C4_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C4_Daya_WBP_6 = $res['Daya_WBP_6']; $C4_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C4_Daya_WBP_7 = $res['Daya_WBP_7']; $C4_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C5
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='5' AND C='C5'");
            while($res = $query->fetch()){
                $C5_Daya_WBP_1 = $res['Daya_WBP_1']; $C5_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C5_Daya_WBP_2 = $res['Daya_WBP_2']; $C5_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C5_Daya_WBP_3 = $res['Daya_WBP_3']; $C5_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C5_Daya_WBP_4 = $res['Daya_WBP_4']; $C5_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C5_Daya_WBP_5 = $res['Daya_WBP_5']; $C5_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C5_Daya_WBP_6 = $res['Daya_WBP_6']; $C5_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C5_Daya_WBP_7 = $res['Daya_WBP_7']; $C5_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
                $DC1= sqrt(
                    pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7), 2)
                );
                $DC2= sqrt(
                    pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7), 2)
                );
                $DC3= sqrt(
                    pow(($res['Daya_WBP_1']-$C3_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C3_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C3_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C3_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C3_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C3_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C3_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C3_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C3_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C3_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C3_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C3_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C3_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C3_Daya_LWBP_7), 2)
                );
                $DC4= sqrt(
                    pow(($res['Daya_WBP_1']-$C4_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C4_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C4_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C4_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C4_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C4_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C4_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C4_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C4_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C4_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C4_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C4_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C4_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C4_Daya_LWBP_7), 2)
                );
                $DC5= sqrt(
                    pow(($res['Daya_WBP_1']-$C5_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C5_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C5_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C5_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C5_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C5_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C5_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C5_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C5_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C5_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C5_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C5_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C5_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C5_Daya_LWBP_7), 2)
                );
                echo "<br />Data Testing(Jarak object ke tiap centroid di set cluster 4): <br />";
                echo "DC1: ".number_format($DC1,3)."<br/> DC2: ".number_format($DC2,3)."<br />";
                echo "DC3: ".number_format($DC3,3)."<br/> DC4: ".number_format($DC4,3)."<br />"."<br/> DC5: ".number_format($DC5,3)."<br />";
                if($DC1<$DC1_mak || $DC2<$DC2_mak || $DC3<$DC3_mak || $DC4<$DC4_mak || $DC5<$DC5_mak) {
                    $status = 'Penggunaan Daya Normal';
                    echo "PENGGUNAAN DAYA SESUAI POLA / NORMAL<br />";
                } else {
                    $status = 'Penggunaan Daya Tidak Normal ';
                    echo "<b style='color:red; font-size:20px;'>PENGGUNAAN DAYA TIDAK SESUAI POLA / Ketidakwajaran Dalam Penggunaan Daya</B>";
                }

                $querystat=$db->query("UPDATE tb_testing set status='$status' WHERE id_pelanggan='$idpel'");
            }
            ?>
        <?php }
        elseif ($_SESSION['dbiOpt'] == $_SESSION['DB_training6']) {
            $DC1_mak = 0;
            $DC2_mak = 0;
            $DC3_mak = 0;
            $DC4_mak = 0;
            $DC5_mak = 0;
            $DC6_mak = 0;
            $query = $db->query("SELECT * FROM tb_training");
            while ($result = $query->fetch()){
                if($result['C6DC1']>$DC1_mak) $DC1_mak=$result['C6DC1'];
                if($result['C6DC2']>$DC2_mak) $DC2_mak=$result['C6DC2'];
                if($result['C6DC3']>$DC3_mak) $DC3_mak=$result['C6DC3'];
                if($result['C6DC4']>$DC4_mak) $DC4_mak=$result['C6DC4'];
                if($result['C6DC5']>$DC5_mak) $DC5_mak=$result['C6DC5'];
                if($result['C6DC6']>$DC6_mak) $DC6_mak=$result['C6DC6'];
            }
            ?>
            <table class="ui celled center aligned collapsing small table">
                <thead>
                <tr>
                    <th colspan="4">Nilai DC Masksimum</th>
                </tr>
                <tr>
                    <th>DC1</th>
                    <th>DC2</th>
                    <th>DC3</th>
                    <th>DC4</th>
                    <th>DC5</th>
                    <th>DC6</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $DC1_mak ?></td>
                    <td><?php echo $DC2_mak ?></td>
                    <td><?php echo $DC3_mak ?></td>
                    <td><?php echo $DC4_mak ?></td>
                    <td><?php echo $DC5_mak ?></td>
                    <td><?php echo $DC6_mak ?></td>
                </tr>
                </tbody>
            </table>
            <?php
            // ambil nilai cluster optimum di tb_centroid | C1
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='6' AND C='C1'");
            while($res = $query->fetch()){
                $C1_Daya_WBP_1 = $res['Daya_WBP_1']; $C1_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C1_Daya_WBP_2 = $res['Daya_WBP_2']; $C1_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C1_Daya_WBP_3 = $res['Daya_WBP_3']; $C1_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C1_Daya_WBP_4 = $res['Daya_WBP_4']; $C1_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C1_Daya_WBP_5 = $res['Daya_WBP_5']; $C1_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C1_Daya_WBP_6 = $res['Daya_WBP_6']; $C1_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C1_Daya_WBP_7 = $res['Daya_WBP_7']; $C1_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C2
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='6' AND C='C2'");
            while($res = $query->fetch()){
                $C2_Daya_WBP_1 = $res['Daya_WBP_1']; $C2_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C2_Daya_WBP_2 = $res['Daya_WBP_2']; $C2_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C2_Daya_WBP_3 = $res['Daya_WBP_3']; $C2_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C2_Daya_WBP_4 = $res['Daya_WBP_4']; $C2_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C2_Daya_WBP_5 = $res['Daya_WBP_5']; $C2_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C2_Daya_WBP_6 = $res['Daya_WBP_6']; $C2_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C2_Daya_WBP_7 = $res['Daya_WBP_7']; $C2_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C3
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='6' AND C='C3'");
            while($res = $query->fetch()){
                $C3_Daya_WBP_1 = $res['Daya_WBP_1']; $C3_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C3_Daya_WBP_2 = $res['Daya_WBP_2']; $C3_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C3_Daya_WBP_3 = $res['Daya_WBP_3']; $C3_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C3_Daya_WBP_4 = $res['Daya_WBP_4']; $C3_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C3_Daya_WBP_5 = $res['Daya_WBP_5']; $C3_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C3_Daya_WBP_6 = $res['Daya_WBP_6']; $C3_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C3_Daya_WBP_7 = $res['Daya_WBP_7']; $C3_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C4
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='6' AND C='C4'");
            while($res = $query->fetch()){
                $C4_Daya_WBP_1 = $res['Daya_WBP_1']; $C4_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C4_Daya_WBP_2 = $res['Daya_WBP_2']; $C4_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C4_Daya_WBP_3 = $res['Daya_WBP_3']; $C4_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C4_Daya_WBP_4 = $res['Daya_WBP_4']; $C4_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C4_Daya_WBP_5 = $res['Daya_WBP_5']; $C4_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C4_Daya_WBP_6 = $res['Daya_WBP_6']; $C4_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C4_Daya_WBP_7 = $res['Daya_WBP_7']; $C4_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C5
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='6' AND C='C5'");
            while($res = $query->fetch()){
                $C5_Daya_WBP_1 = $res['Daya_WBP_1']; $C5_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C5_Daya_WBP_2 = $res['Daya_WBP_2']; $C5_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C5_Daya_WBP_3 = $res['Daya_WBP_3']; $C5_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C5_Daya_WBP_4 = $res['Daya_WBP_4']; $C5_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C5_Daya_WBP_5 = $res['Daya_WBP_5']; $C5_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C5_Daya_WBP_6 = $res['Daya_WBP_6']; $C5_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C5_Daya_WBP_7 = $res['Daya_WBP_7']; $C5_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }
            // ambil nilai cluster optimum di tb_centroid | C6
            $query = $db->query("SELECT * FROM tb_centroid WHERE cluster='6' AND C='C6'");
            while($res = $query->fetch()){
                $C6_Daya_WBP_1 = $res['Daya_WBP_1']; $C6_Daya_LWBP_1 = $res['Daya_LWBP_1'];
                $C6_Daya_WBP_2 = $res['Daya_WBP_2']; $C6_Daya_LWBP_2 = $res['Daya_LWBP_2'];
                $C6_Daya_WBP_3 = $res['Daya_WBP_3']; $C6_Daya_LWBP_3 = $res['Daya_LWBP_3'];
                $C6_Daya_WBP_4 = $res['Daya_WBP_4']; $C6_Daya_LWBP_4 = $res['Daya_LWBP_4'];
                $C6_Daya_WBP_5 = $res['Daya_WBP_5']; $C6_Daya_LWBP_5 = $res['Daya_LWBP_5'];
                $C6_Daya_WBP_6 = $res['Daya_WBP_6']; $C6_Daya_LWBP_6 = $res['Daya_LWBP_6'];
                $C6_Daya_WBP_7 = $res['Daya_WBP_7']; $C6_Daya_LWBP_7 = $res['Daya_LWBP_7'];
            }

            $qry="SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'";
            $result=$db->query($qry);
            while($res=$result->fetch()){
                $DC1= sqrt(
                    pow(($res['Daya_WBP_1']-$C1_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C1_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C1_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C1_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C1_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C1_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C1_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C1_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C1_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C1_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C1_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C1_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C1_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C1_Daya_LWBP_7), 2)
                );
                $DC2= sqrt(
                    pow(($res['Daya_WBP_1']-$C2_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C2_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C2_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C2_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C2_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C2_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C2_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C2_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C2_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C2_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C2_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C2_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C2_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C2_Daya_LWBP_7), 2)
                );
                $DC3= sqrt(
                    pow(($res['Daya_WBP_1']-$C3_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C3_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C3_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C3_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C3_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C3_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C3_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C3_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C3_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C3_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C3_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C3_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C3_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C3_Daya_LWBP_7), 2)
                );
                $DC4= sqrt(
                    pow(($res['Daya_WBP_1']-$C4_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C4_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C4_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C4_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C4_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C4_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C4_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C4_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C4_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C4_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C4_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C4_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C4_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C4_Daya_LWBP_7), 2)
                );
                $DC5= sqrt(
                    pow(($res['Daya_WBP_1']-$C5_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C5_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C5_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C5_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C5_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C5_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C5_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C5_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C5_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C5_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C5_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C5_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C5_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C5_Daya_LWBP_7), 2)
                );
                $DC6= sqrt(
                    pow(($res['Daya_WBP_1']-$C6_Daya_WBP_1), 2) +
                    pow(($res['Daya_LWBP_1']-$C6_Daya_LWBP_1), 2) +
                    pow(($res['Daya_WBP_2']-$C6_Daya_WBP_2), 2) +
                    pow(($res['Daya_LWBP_2']-$C6_Daya_LWBP_2), 2) +
                    pow(($res['Daya_WBP_3']-$C6_Daya_WBP_3), 2) +
                    pow(($res['Daya_LWBP_3']-$C6_Daya_LWBP_3), 2) +
                    pow(($res['Daya_WBP_4']-$C6_Daya_WBP_4), 2) +
                    pow(($res['Daya_LWBP_4']-$C6_Daya_LWBP_4), 2) +
                    pow(($res['Daya_WBP_5']-$C6_Daya_WBP_5), 2) +
                    pow(($res['Daya_LWBP_5']-$C6_Daya_LWBP_5), 2) +
                    pow(($res['Daya_WBP_6']-$C6_Daya_WBP_6), 2) +
                    pow(($res['Daya_LWBP_6']-$C6_Daya_LWBP_6), 2) +
                    pow(($res['Daya_WBP_7']-$C6_Daya_WBP_7), 2) +
                    pow(($res['Daya_LWBP_7']-$C6_Daya_LWBP_7), 2)
                );
                echo "<br />Data Testing(Jarak object ke tiap centroid di set cluster 4): <br />";
                echo "DC1: ".number_format($DC1,3)."<br/> DC2: ".number_format($DC2,3)."<br />";
                echo "DC3: ".number_format($DC3,3)."<br/> DC4: ".number_format($DC4,3)."<br/> DC5: ".number_format($DC5,3)."<br />"."<br/> DC5: ".number_format($DC6,3)."<br />";
                if($DC1<$DC1_mak || $DC2<$DC2_mak || $DC3<$DC3_mak || $DC4<$DC4_mak || $DC5<$DC5_mak || $DC6<$DC6_mak) {
                    $status = 'Penggunaan Daya Normal';
                    echo "PENGGUNAAN DAYA SESUAI POLA / NORMAL<br />";
                } else {
                    $status = 'Penggunaan Daya Tidak Normal ';
                    echo "<b style='color:red; font-size:20px;'>PENGGUNAAN DAYA TIDAK SESUAI POLA / Ketidakwajaran Dalam Penggunaan Daya</B>";
                }

                $querystat=$db->query("UPDATE tb_testing set status='$status' WHERE id_pelanggan='$idpel'");
            }
            ?>
        <?php }
        ?>
    </div>
</body>
</html>
