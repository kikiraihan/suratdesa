<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
include "koneksi.php";
$id_s_kelahiran  =  mysqli_escape_string($config,$_GET['id_s_kelahiran']);
$query           =  mysqli_query($config, " SELECT * FROM tbl_s_kelahiran JOIN tbl_pegawai JOIN tbl_penduduk ON tbl_s_kelahiran.id_pg = tbl_pegawai.id_pg AND tbl_s_kelahiran.nama_ibu=tbl_penduduk.NIK  WHERE tbl_s_kelahiran.id_s_kelahiran='$id_s_kelahiran'");

$query2          =  mysqli_query($config , " SELECT * FROM tbl_s_kelahiran JOIN tbl_penduduk ON tbl_s_kelahiran.nama_ayah=tbl_penduduk.NIK WHERE tbl_s_kelahiran.id_s_kelahiran='$id_s_kelahiran'");

while ($data2  = mysqli_fetch_array($query2)) {
  $nama_ayah      = $data2['nama_p'];
}

while($data    =  mysqli_fetch_array($query)){                   
$id_s_kelahiran       = $data['id_s_kelahiran'];
$no_surat_kelahiran   = $data['no_surat_kelahiran'];
$hari                 = $data['hari'];
$tanggal              = $data['tanggal'];
$jk_anak              = $data['jk_anak'];
$nama_yg_lahir        = $data['nama_yg_lahir'];
$nama_p               = $data['nama_p'];
$nama_p               = $data['nama_p'];
$alamat               = $data['alamat'];
$nama                 = $data['nama'];
$jabatan              = $data['jabatan'];
}
?>
<html xmlns="Sistem Informasi Surat Menyurat"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
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
$nomor = "NO:474.4/BGM-TKBL/".$no_surat_kelahiran."/".$romawi."/".$tahun;

date_default_timezone_set('Asia/Jakarta');
$tgl   = date('d');
$bulan = date('n');
$tahun = date ('Y');
$ubahangkakestring = bln($bulan);
$bulanstring = $tgl. "  " .$ubahangkakestring . "  " .$tahun;


echo "<br>";
echo "<table align='center' border='0' width='100%' height='100%'>
        <tr>
            <td align='center'>
                <img width='700' src='logodesa/kopsurat.png'>
            </td>
        </tr>

        <tr>
            <td colspan='2'> <hr style='border: 0; border-top: 4px double #000000;'> </td>
        </tr>
    </table>";

echo "<table align='center' border='0' width='100%' height='100%'>
        <tr>
            <td align='center'>
                <u style='font-size:20px; font-weight:bold;' align='center'>SURAT KETERANGAN KELAHIRAN</u>
            </td>
        </tr>
        <tr>
          <td align='center'><b style='font-size:20px;' align='center'>$nomor</b></td>
        </tr>
      </table>";
echo "<br><table border='0' align='center' width='100%' height='100%'>
          <tr>
            <td><label style='font-family:times; font-size:16px;'>Yang bertanda tangan dibawah ini membenarkan bahwa pada :</label></td>
          </tr>
      </table>";
echo  "<br><table border='0' style='margin-left:60px;' width='100%' height='100%'>
            <tr>
                <td>
                    <label style='font-family:times; font-size:16px;'>Hari</label>
                </td>
                <td>
                    <label style='font-family:times; font-size:16px;'>:</label></td>
                <td>
                    <label style='font-family:times; font-size:16px;'>".$hari."</label>
                </td>
            </tr>

              <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Tanggal</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$tanggal."</label>
                  </td>
              </tr>

              <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Telah Lahir Seorang Anak</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$jk_anak."</label>
                  </td>
                </tr>

                 <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Bernama</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$nama_yg_lahir."</label>
                  </td>
                </tr>

                 <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Dari seorang ibu bernama</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$nama_p."</label>
                  </td>
                </tr>

                 <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Istri dari</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$nama_ayah."</label>
                  </td>
                </tr>

                 <tr>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>Alamat</label>
                  </td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td><br>
                      <label style='font-family:times; font-size:16px;'>".$alamat."</label>
                  </td>
                </tr>

            </table>";

   echo "<table style='margin-left:60px;' width='100%' height='100%'>
                <tr>
                  <td colspan='3'><br>
                      <label style='font-size:16px;'>Demikian surat keterangan lahir ini dibuat atas dasar yang sebenarnya dan dapat </label>
                  </td>
                </tr>
          </table>";

   echo "<table width='100%' height='100%'>
                <tr>
                  <td colspan='3'>
                      <label style='font-size:16px;'>digunakan dimana perlu.</label>
                  </td>
                </tr>
          </table>";

   echo "<br><br>
          <table align='right' border='0' width='100%' height='100%'>
                <tr>
                  <td colspan='3' align='right'>
                      <label style='font-size:16px;'>".$nama_desa.", ".$bulanstring."</label><br>
                      <label style='font-size:16px;'>".$jabatan."</label><br><br><br><br>
                       <label style='font-size:16px;'><b><u>".$nama."</u></b></label>
                  </td>
                </tr>
          </table>";
}
mysqli_free_result($query);
mysqli_close($config);
?>
</body>
</html>
