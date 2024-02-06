<?php
include "connect.php";  
$mhs          = $_POST['nama_mhs'];
$nim          = $_POST['nim'];
$uas          = $_POST['nilai_UAS'];
$uts          = $_POST['nilai_UTS'];
$tugas        = $_POST['nilai_TUGAS'];
$pertemuan    = $_POST['pertemuan'];
$hasil        = $_POST['hasil_nilai_akhir'];
$grade        = $_POST['grade'];
$keterangan   = $_POST['keterangan'];
$varString    = $mhs;
$varLength         = strlen($varString);
$cekName           = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_nilai WHERE nama_mhs= '$mhs'"));
if($cekName>0){
  echo"<script>alert('username tidak boleh sama');window.location.href='index.php';</script>";
}
else if($varLength>90){
  echo"<script>alert('username terlalu panjang');window.location.href='index.php';</script>";
}
else{
  $hasil  = mysqli_query($koneksi,"INSERT INTO tb_nilai(nama_mhs,nim,nilai_UAS,nilai_UTS,nilai_TUGAS,pertemuan,hasil_nilai_akhir,grade,keterangan) VALUES ('$mhs','$nim','$uas','$uts','$tugas','$pertemuan','$hasil','$grade
    ','$keterangan')");
  if(!$hasil){
    die("gagal menyimpan");
  }else{
    echo "<script>alert('Berhasil disimpan'); window.location=('data_nilai.php')</script>";
  }
}
?>


