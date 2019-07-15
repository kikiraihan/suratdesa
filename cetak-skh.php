<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
include "koneksi.php";
$id_skh  =  mysqli_escape_string($config,$_GET['id_skh']);
$query   =  mysqli_query($config, " SELECT * FROM tbl_skh JOIN tbl_pegawai ON tbl_skh.id_pg = tbl_pegawai.id_pg WHERE tbl_skh.id_skh='$id_skh'");
$data         =  mysqli_fetch_array($query);
$id_skh       = $data['id_skh'];
$nama         = $data['nama'];
$jabatan      = $data['jabatan'];
$alamat_pg    = $data['alamat_pg'];
$no_surat_skh = $data['no_surat_skh'];
$ket          = $data['ket'];
?>
<html xmlns="Sistem Informasi Surat Menyurat"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link rel="stylesheet" href="css/surat.css">
</head>
<body>
<?php

function getRomawi($bln){
                switch ($bln){
                    case 1:
                        return "I";
                        break;
                    case 2:
                        return "II";
                        break;
                    case 3:
                        return "III";
                        break;
                    case 4:
                        return "IV";
                        break;
                    case 5:
                        return "V";
                        break;
                    case 6:
                        return "VI";
                        break;
                    case 7:
                        return "VII";
                        break;
                    case 8:
                        return "VIII";
                        break;
                    case 9:
                        return "IX";
                        break;
                    case 10:
                        return "X";
                        break;
                    case 11:
                        return "XI";
                        break;
                    case 12:
                        return "XII";
                        break;
                }
}


function bln($b){
                switch ($b){
                    case 1:
                        return "Januari";
                        break;
                    case 2:
                        return "Februari";
                        break;
                    case 3:
                        return "Maret";
                        break;
                    case 4:
                        return "April";
                        break;
                    case 5:
                        return "Mei";
                        break;
                    case 6:
                        return "Juni";
                        break;
                    case 7:
                        return "Juli";
                        break;
                    case 8:
                        return "Agustus";
                        break;
                    case 9:
                        return "September";
                        break;
                    case 10:
                        return "Oktober";
                        break;
                    case 11:
                        return "November";
                        break;
                    case 12:
                        return "Desember";
                        break;
                }
}

$bulan = date('n');
$romawi = getRomawi($bulan);
$tahun = date ('Y');
$nomor = "NO:".$no_surat_skh."/474/D.PIL/".$romawi."/".$tahun;

date_default_timezone_set('Asia/Jakarta');
$tgl   = date('d');
$bulan = date('n');
$tahun = date ('Y');
$ubahangkakestring = bln($bulan);
$bulanstring = $tgl. "  " .$ubahangkakestring . "  " .$tahun;


echo "<br><br><br>";
// <img width='700' src='logodesa/kopsurat.png'>
echo "<table align='center' border='0'>
        <tr>
            <td>
                <img src=\"logodesa/logodesa.png\" style=\"height:70px;width:70px;margin-right:50px\">
            </td>
            <td align='center'>
                <h3 class=\"reset\" style=\"font-:arial\">PEMERINTAH KABUPATEN GORONTALO</h3>
                <h3 class=\"reset\" id=\"margin-surat\">KECAMATAN TELAGA</h3>
                <h3 class=\"reset\" id=\"margin-surat\"><b>DESA PILOHAYANGA BARAT</h3></b>
                <h3 class=\"reset\">Jln.Abdul Gandi Payuhi  Kode Pos 96181</h3>
            </td>
            <td style=\"width:120px\"></td>
        </tr>

        <tr>
          <td colspan='3'> <hr style='border: 0; border-top: 4px double #000000;'> </td>
        </tr>
    </table>";

echo "<table align='center' border='0'>
        <tr>
            <td align='center'>
                <u style='font-size:20px; font-weight:bold;' align='center'>SURAT KETERANGAN HILANG</u>
            </td>
        </tr>
        <tr>
          <td align='center'><b style='font-size:20px;' align='center'>$nomor</b></td>
        </tr>
      </table>";
echo "<br><br><table border='0'>
          <tr>
            <td><label style='font-family:times; font-size:16px;'>Yang bertanda tangan dibawah ini :</label></td>
          </tr>
      </table>";
echo  "<br>
      <br>
      <table border='0' style='margin-left:60px;'>
            <tr>
                <td>
                    <label style='font-family:times; font-size:16px;'>Nama</label>
                </td>
                <td>
                    <label style='font-family:times; font-size:16px;'>:</label></td>
                <td>
                    <label style='font-family:times; font-size:16px;'><b>".$nama."</b></label>
                </td>
            </tr>

              <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Jabatan</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$jabatan."</label>
                  </td>
              </tr>

              <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Alamat</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$alamat_pg."</label>
                  </td>
                </tr>
            </table>";

    echo "<table style='margin-left:60px;'>
                <tr>
                  <td colspan='3'><br><br>
                      <label style='font-size:16px;'>".$ket."</label>
                  </td>
                </tr>
          </table>";

   echo "<table style='margin-left:90px;'>
                <tr>
                  <td colspan='3'><br><br>
                      <label style='font-size:16px;'>Demikian surat keterangan hilang ini dibuat dan diberikan kepada yang bersangkutan</label>
                  </td>
                </tr>
          </table>";

   echo "<table style='margin-left:60px;'>
                <tr>
                  <td colspan='3'>
                      <label style='font-size:16px;'>untuk dipergunakan seperlunya.</label>
                  </td>
                </tr>
          </table>";

   echo "<br><br><br><br><br>
          <table align='right' border='0'>
                <tr>
                  <td colspan='3' align='right'>
                      <label style='font-size:16px;'>".$nama_desa.", ".$bulanstring."</label><br>
                      <label style='font-size:16px;'>".$jabatan."</label><br><br><br><br>
                       <label style='font-size:16px;'><b><u>".$nama."</u></b></label>
                  </td>
                </tr>
          </table>";

   echo "</body>
        </html>";
}
mysqli_free_result($query);
mysqli_close($config);
?>
</body>
</html>
