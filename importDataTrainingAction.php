<?php
 if(!empty($_FILES["excel_file"])){
   $connect = new PDO("mysql:host=localhost;dbname=amr_kmeans","root","");

   $file_array = explode(".", $_FILES["excel_file"]["name"]);
   if($file_array[1] == "xlsx") {
     include("PHPExcel/IOFactory.php");

     $object = PHPExcel_IOFactory::load($_FILES["excel_file"]["tmp_name"]);
     foreach($object->getWorksheetIterator() as $worksheet) {
       $highestRow = $worksheet->getHighestRow();
       for($row=2; $row<=$highestRow; $row++) {
         $Da_WBP_1 = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
         $D_LWBP_1 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
         $D_WBP_2 = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
         $D_LWBP_2 = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
         $D_WBP_3 = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
         $D_LWBP_3 = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
         $D_WBP_4 = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
         $D_LWBP_4 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
         $D_WBP_5 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
         $D_LWBP_5 = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
         $D_WBP_6 = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
         $D_LWBP_6 = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
         $D_WBP_7 = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
         $D_LWBP_7 = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
         $tgl = date('d F Y');
         ini_set('max_execution_time', 300);
         $query = $connect->query("SELECT * FROM tb_testing");
         $rowCount = $query->rowCount();
         echo $rowCount;
         $idpel = $rowCount + 1;

             $query = $connect->query("INSERT INTO tb_testing(
               id_pelanggan,
               Daya_WBP_1,
               Daya_LWBP_1,
               Daya_WBP_2,
               Daya_LWBP_2,
               Daya_WBP_3,
               Daya_LWBP_3,
               Daya_WBP_4,
               Daya_LWBP_4,
               Daya_WBP_5,
               Daya_LWBP_5,
               Daya_WBP_6,
               Daya_LWBP_6,
               Daya_WBP_7,
               Daya_LWBP_7,
               tanggal, username, status
             )
             VALUES (
               '$idpel',
               '$Da_WBP_1',
               '$D_LWBP_1',
               '$D_WBP_2',
               '$D_LWBP_2',
               '$D_WBP_3',
               '$D_LWBP_3',
               '$D_WBP_4',
               '$D_LWBP_4',
               '$D_WBP_5',
               '$D_LWBP_5',
               '$D_WBP_6',
               '$D_LWBP_6',
               '$D_WBP_7',
               '$D_LWBP_7','$tgl','','')");
         // header("location:testingData.php");
       }
     }
   }
   else {
     echo '<label class="text-danger">Invalid File</label>';
   }
 }
?>
