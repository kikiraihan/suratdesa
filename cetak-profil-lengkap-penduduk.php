<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
include 'koneksi.php';
?>
<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Profil Lengkap Penduduk</title>
<br><br>
<table border="0" width=100% height='100%'>
<tr>
    <td align="center" rowspan='3' width='88px'><img width='85px''></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center><img width='700' src='logodesa/kopsurat.png'></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>  <br> </p></td>
</tr> 
</table>
<hr style='border:2px solid #000'>

<table width=100% height='100%'>
<tr>
    <td align="center"><h3 style='margin-left:50px;' align=center>PROFIL LENGKAP PENDUDUK</h3></td>
</tr> 
</table>
</br>
<table align="center" width='100%' height='100%' style="border:1px solid;">
<?php
include 'koneksi.php';
$NIK   = $_GET['NIK'];
$query = mysqli_query($config, " SELECT * FROM  tbl_penduduk WHERE NIK='$NIK'");

if(mysqli_num_rows($query) == 0) {
         echo '<tr><td colspan="7" align="center"><p class="p1">Data Kosong!</p></td></tr>';
       }else{

  $data=mysqli_fetch_assoc($query);

  echo "<tr>"; 
      echo "<td> NIK </td>";  echo '<td>:</td><td>'.$data['NIK'].'</center></td>';
  echo "</tr>";

  echo "<tr>"; 
      echo "<td> NAMA </td>";  echo '<td>:</td><td>'.$data['nama_p'].'</center></td>';
  echo "</tr>";

  echo "<tr>"; 
      echo "<td> TEMPAT LAHIR </td>";  echo '<td>:</td><td>'.$data['tempat_lahir'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> TANGGAL LAHIR </td>";  echo '<td>:</td><td>'.$data['tgl_lahir'].'</center></td>';
  echo "</tr>";

  echo "<tr>"; 
      echo "<td> JENIS KELAMIN </td>";  echo '<td>:</td><td>'.$data['jenkel'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> ALAMAT </td>";  echo '<td>:</td><td>'.$data['alamat'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> RT / RW </td>";  echo '<td>:</td><td>'.$data['dusun'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> KELURAHAN / DESA </td>";  echo '<td>:</td><td>'.$data['kel_desa'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> KECAMANATAN </td>";  echo '<td>:</td><td>'.$data['kecamatan'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> AGAMA </td>";  echo '<td>:</td><td>'.$data['agama'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> STATUS KAWIN </td>";  echo '<td>:</td><td>'.$data['s_nikah'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> WARGA NEGARA </td>";  echo '<td>:</td><td>'.$data['warga_negara'].'</center></td>';
  echo "</tr>";

   echo "<tr>"; 
      echo "<td> PEKERJAAN </td>";  echo '<td>:</td><td>'.$data['pekerjaan'].'</center></td>';
  echo "</tr>";
}
?>
</table>

<p>Demikian surat keterangan profil lengkap penduduk ini dibuat dan diberikan kepada yang bersangkutan untuk dipergunakan seperlunya.</p>



<br>
<table width=100% height='100%'>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>

    <td >
        <table width='100%' height='100%'>
            <tr><td width="130px">Dikeluarkan di </td><td>: Gorontalo</td></tr>
            <tr><td>Pada Tanggal </td><td>: <?php echo date("d-m-y"); ?></td></tr>
        </table><br>
        <center>
          YANG BERSANGKUTAN<br><br><br><br><br>

          <u><?php echo $data['nama_p']; ?></u><br>
         
        </center>
    </td>
  </tr>
</table> 
</body>
</html>
<?php
mysqli_free_result($query);
mysqli_close($config);
}
?>