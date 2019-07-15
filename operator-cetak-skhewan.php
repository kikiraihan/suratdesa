<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
include "koneksi.php";
$id_s_ket_hewan   =  mysqli_escape_string($config,$_GET['id_s_ket_hewan']);
$query            =  mysqli_query($config, " SELECT * FROM tbl_s_ket_hewan JOIN tbl_pegawai JOIN tbl_penduduk ON tbl_s_ket_hewan.id_pg = tbl_pegawai.id_pg AND tbl_s_ket_hewan.NIK=tbl_penduduk.NIK WHERE tbl_s_ket_hewan.id_s_ket_hewan='$id_s_ket_hewan'");
while($data       =  mysqli_fetch_array($query)){                   
$id_s_ket_hewan   = $data['id_s_ket_hewan'];
$no_surat_skhewan = $data['no_surat_skhewan'];
$nama             = $data['nama'];
$jabatan          = $data['jabatan'];
$alamat_pg        = $data['alamat_pg'];
$nama_p           = $data['nama_p'];
$tempat_lahir     = $data['tempat_lahir'];
$tgl_lahir        = $data['tgl_lahir'];
$pekerjaan        = $data['pekerjaan'];
$alamat           = $data['alamat'];
$ket              = $data['ket'];
$ciri_ciri        = $data['ciri_ciri'];
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
$nomor = "NO:145/BGM-TKBL/".$no_surat_skhewan."/".$romawi."/".$tahun;

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
                <u style='font-size:20px; font-weight:bold;' align='center'>SURAT KETERANGAN HEWAN</u>
            </td>
        </tr>
        <tr>
          <td align='center'><b style='font-size:20px;' align='center'>$nomor</b></td>
        </tr>
      </table>";
echo "<br><table border='0' align='center' width='100%' height='100%'>
          <tr>
            <td><label style='font-family:times; font-size:16px;'>Yang bertanda tangan dibawah ini :</label></td>
          </tr>
      </table>";
echo  "<table border='0' style='margin-left:60px;' width='100%' height='100%'>
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
    
     echo "<br><table width='100%' height='100%'>
                <tr>
                  <td colspan='3'>
                      <label style='font-size:16px;'>Dengan ini  menerangkan kepada :</label>
                  </td>
                </tr>
          </table>";

    echo "<br><table border='0' style='margin-left:60px;' width='100%' height='100%'>
            <tr>
                <td>
                    <label style='font-family:times; font-size:16px;'>Nama</label>
                </td>
                <td>
                    <label style='font-family:times; font-size:16px;'>:</label></td>
                <td>
                    <label style='font-family:times; font-size:16px;'><b>".$nama_p."</b></label>
                </td>
            </tr>

              <tr>
                  <td>
                      <label style='font-family:times; font-size:16px;'>Tempat & Tanggal Lahir</label>
                  </td>
                  <td>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td>
                      <label style='font-family:times; font-size:16px;'>".$tempat_lahir.", ".$tgl_lahir."</label>
                  </td>
              </tr>

              <tr>
                  <td>
                      <label style='font-family:times; font-size:16px;'>Pekerjaan</label>
                  </td>
                  <td>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td>
                      <label style='font-family:times; font-size:16px;'>".$pekerjaan."</label>
                  </td>
                </tr>

               <tr>
                  <td>
                      <label style='font-family:times; font-size:16px;'>Alamat</label>
                  </td>
                  <td>
                      <label style='font-family:times; font-size:16px;'>:</label></td>
                  <td>
                      <label style='font-family:times; font-size:16px;'>".$alamat."</label>
                  </td>
                </tr>
            </table>";

    echo "<table width='100%' height='100%'>
                <tr>
                  <td colspan='3'><br>
                      <label style='font-size:16px;'>".$ket."</label>
                  </td>
                </tr>
          </table>";

      echo "<table width='100%' height='100%'>
                <tr>
                  <td colspan='3'><br>
                      <label style='font-size:16px;'><b>Ciri-ciri hewan tersebut :</b></label>
                  </td>
                </tr>

                 <tr>
                  <td>
                      <table>
                        <tr>
                            <td>".nl2br($ciri_ciri)."</td>
                        </tr>
                      </table>
                  </td>
                </tr>
          </table>";

   echo "<table style='margin-left:60px;' width='100%' height='100%'>
                <tr>
                  <td colspan='3'><br>
                      <label style='font-size:16px;'>Demikian surat keterangan hewan  ini dibuat dengan benar dan dapat digunakan </label>
                  </td>
                </tr>
          </table>";

   echo "<table width='100%' height='100%'>
                <tr>
                  <td colspan='3'>
                      <label style='font-size:16px;'>seperlunya.</label>
                  </td>
                </tr>
          </table>";

   echo "<br><br>
          <table align='right' border='0' width='100%' height='100%'>
                <tr>
                  <td colspan='3' align='right'>
                      <label style='font-size:16px;'>".$nama_desa.", ".$bulanstring."</label><br>
                      <label style='font-size:16px;'>".$jabatan."</label><br><br><br><br>
                       <label style='font-size:16px;'><b><u>".$nama."<u></b></label>
                  </td>
                </tr>
          </table>";
}
mysqli_free_result($query);
mysqli_close($config);
?>
</body>
</html>
