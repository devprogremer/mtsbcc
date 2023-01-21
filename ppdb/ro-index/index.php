

<?php 
include('../ro-includes/head-ppdb.php'); 
include('../ro-includes/css-ppdb.php'); 
include('../ro-includes/navi-ppdb.php');
?>
   
<?php
//main page
$page=(isset($_GET['halaman']))?$_GET['halaman']:"main";
switch($page) {
case'tutup':include"ro-tutup-pendaftaran.php";break;
case'pengumuman':include"ro-tutup-pengumuman.php";break;
case 'daftar':include"ro-daftar.php";break;
case 'bukti-pendaftaran':include"ro-print-pendaftaran.php";break;
case 'kartu-peserta':include"ro-print-kartu.php";break;
case 'pengumuman-kelulusan':include"ro-print-pengumuman.php";break;
case'beranda':include"ro-depan.php";break;

case 'main':
default:include"ro-depan.php";
}
?>

<?php
include('../ro-includes/footer-ppdb.php'); 
 ?>

   