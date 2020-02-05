<?php

  include 'fpdf.php';
  include 'database.php';

class PDF extends FPDF
{
  protected $B = 0;
  protected $I = 0;
  protected $U = 0;
  protected $HREF = '';

  function WriteHTML($html)
  {
      // HTML parser
      $html = str_replace("\n",' ',$html);
      $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
      foreach($a as $i=>$e)
      {
          if($i%2==0)
          {
              // Text
              if($this->HREF)
                  $this->PutLink($this->HREF,$e);
              else
                  $this->Write(5,$e);
          }
          else
          {
              // Tag
              if($e[0]=='/')
                  $this->CloseTag(strtoupper(substr($e,1)));
              else
              {
                  // Extract attributes
                  $a2 = explode(' ',$e);
                  $tag = strtoupper(array_shift($a2));
                  $attr = array();
                  foreach($a2 as $v)
                  {
                      if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                          $attr[strtoupper($a3[1])] = $a3[2];
                  }
                  $this->OpenTag($tag,$attr);
              }
          }
      }
  }

  function OpenTag($tag, $attr)
  {
      // Opening tag
      if($tag=='B' || $tag=='I' || $tag=='U')
          $this->SetStyle($tag,true);
      if($tag=='A')
          $this->HREF = $attr['HREF'];
      if($tag=='BR')
          $this->Ln(5);
  }

  function CloseTag($tag)
  {
      // Closing tag
      if($tag=='B' || $tag=='I' || $tag=='U')
          $this->SetStyle($tag,false);
      if($tag=='A')
          $this->HREF = '';
  }

  function SetStyle($tag, $enable)
  {
      // Modify style and select corresponding font
      $this->$tag += ($enable ? 1 : -1);
      $style = '';
      foreach(array('B', 'I', 'U') as $s)
      {
          if($this->$s>0)
              $style .= $s;
      }
      $this->SetFont('',$style);
  }

  function PutLink($URL, $txt)
  {
      // Put a hyperlink
      $this->SetTextColor(0,0,255);
      $this->SetStyle('U',true);
      $this->Write(5,$txt,$URL);
      $this->SetStyle('U',false);
      $this->SetTextColor(0);
  }
  }

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
// Instanciation of inherited class
$pdf = new PDF();



$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
// ------------------------------------
          // Move to the right
          $pdf->Cell(80);
          // Title
          $pdf->Cell(50,10,'SURAT TUGAS','B',1,'C');

          $pdf->Cell(80);
          $pdf->SetFont('Arial','B',16);
          $pdf->Cell(50,10,'Nomor:         .STg/SDM.03.01/060500/2020',0,1,'C');
          $pdf->SetFont('Arial','',11);
          $pdf->Cell(0,5);
          $pdf->Write(5,'Manager PT PLN (Persero) Unit Induk Distribusi Jakarta Raya UP3 Cengkareng dengan ini memberi tugas kepada:');
          $pdf->Ln(5);
          $pdf->Cell(80);
          $pdf->Cell(50,7,'Nama          : A. Desmond',0,1,'L');
          $pdf->Cell(80);
          $pdf->Cell(50,7,'No. Induk    : 3410310MK',0,1,'L');
          $pdf->Cell(80);
          $pdf->Cell(50,7,'Jabatan      : SPV Pembacaan Meter',0,1,'L');
          $pdf->Cell(0,5);
          $html = 'Untuk melaksanakan Penertiban Pemakaian Tenaga Listrik (P2TL) pada pelanggan - pelanggan PLN dengan pengukuran langsung / tak langsung Tegangan Rendah / Menengah dan Non Pelanggan pada tanggal <b>01 Maret 2020 s/d 31 Maret 2020</b> mulai jam 08.00 s/d selesai di Wilayah kerja PT PLN (Persero) Unit Induk Distribusi Jakarta Raya UP3 Cengkareng, dengan ketentuan sebagai berikut:<br>';
          $pdf->WriteHTML($html);
          $pdf->Cell(0,5);
          $pdf->Write(5,'1. Melakukan permeriksaan terhadap Jaringan Tenaga Listrik (JTL), Saluran Listrik (SL), Alat Pembatas dan Pengukuran (APP), perlengkapan serta instalasi pelanggan dalam rangka menerbitkan pemakaian tenaga listrik.');
          $pdf->Cell(0,5);
          $pdf->Write(5,'2. Melakukan pemutusan sementara untuk pelanggan yang harus dikenakan tindakan pemutusan sementara.');
          $pdf->Cell(0,5);
          $pdf->Write(5,'3. Melakukan pemutusan sambungan langsung.');
          $pdf->Cell(0,5);
          $pdf->Write(5,'4. Melakukan pengembalian peralatan / alat yang digunakan untuk sambungan langsung.');
          $pdf->Cell(0,5);
          $pdf->Write(5,'5. Melakukan pengambilan segel atau tanda tera, APP / perlengkapan APP yang kedapatan rusak atau diduga tidak berfungsi sebagaimana mestinya untuk dilakukan pemeriksaan lebih lanjut.');
          $pdf->Cell(0,5);
          $pdf->Write(5,'6. Melakukan pemeriksaan atas pemanfaat tenaga listrik.');
          $pdf->Cell(0,5);
          $pdf->Write(5,'7. Membuat Berita Acara pemeriksaan sesuai hasil pemeriksaan.');
          $html = '<br><br>Dalam melaksanakan tugas P2TL tersebut di atas harus mengikuti ketentuan tentang Penertiban Pemakaian Tenaga LIstrik di PT PLN (Persero).
          <br>';
          $pdf->WriteHTML($html);
          $pdf->Cell(0,5);
          $pdf->Write(5,'Apabila tugas P2TL dimaksud telah selesai dilaksanakan, maka Petugas yang bersangkutan wajib segera melapokan pelaksanaan tugas tersebut kepada PT PLN (Persero) Unit Induk Distribusi Jakarta Raya UP3 Cengkareng C/Q MAN II TRANSAKSI ENERGI LISTRIK.');
          $pdf->Cell(0,5);
          $pdf->Write(5,'Demikian surat tugas ini diterbitkan untuk dilaksanakan sebagaimana mestinya dan penuh tanggung jawab');
          // Line break
          $pdf->Ln(10);
          // Title
          $pdf->Cell(130,10);
          $pdf->Cell(50,10,'Jakarta,      Februari 2020','',0,'C');
          $pdf->Ln(10);
          $pdf->Cell(25,10);
          $pdf->Cell(50,10,'Penerima Tugas,','',0,'C');
          $pdf->Cell(50,10);
          $pdf->Cell(50,10,'Manager','',0,'C');
          $pdf->Ln(30);
          $pdf->Cell(25,10);
          $pdf->Cell(50,10,'A. Desmond,','',0,'C');
          $pdf->Cell(50,10);
          $pdf->Cell(50,10,'R. Yudha, ST','',0,'C');
          $pdf->Ln(30);
// -----------------------------------
$pdf->Output();
 ?>
