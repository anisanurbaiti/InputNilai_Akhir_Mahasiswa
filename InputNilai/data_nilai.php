<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: salmon;
  color: white;
}
</style>
</head>
<body>

<center><h2>  Hasil Nilai Akhir Mahasiswa</h2></center>
   <h3><center><a href="index.php" >Input Nilai</a></h3></center><br>
 <table class="table" width="100%"> 
  <tr>
    <th>NO</th>
    <th>NAMA MHS</th>
    <th>NIM</th>
        <th>NILAI UAS</th>
            <th>NILAI UTS</th>
                <th>NILAI TUGAS</th>
                    <th>PERTEMUAN</th>
                    <th>NILAI AKHIR</th>
                        <th>GRADE</th>
                            <th>KETERANGAN</th>
  </tr>
   <?php       
      include "connect.php";         
           $query = "SELECT * FROM tb_nilai ORDER BY id desc";
        $result = mysqli_query($koneksi, $query);
        $rows = mysqli_num_rows($result);
    $xx=1; 
        while ($VarData = mysqli_fetch_array($result)) { 
      ?>
  <tr>
    <td><?php echo $xx++; ?></td> 
                        <td><?php echo $VarData ['nama_mhs']; ?></td> 
                        <td><?php echo $VarData ['nim']; ?></td> 
                        <td><?php echo $VarData ['nilai_UAS']; ?></td> 
                        <td><?php echo $VarData ['nilai_UTS']; ?></td> 
                        <td><?php echo $VarData ['nilai_TUGAS']; ?></td> 
                        <td><?php echo $VarData ['pertemuan']; ?></td> 
                        <td><?php echo $VarData ['hasil_nilai_akhir']; ?></td> 
                        <td><?php echo $VarData ['grade']; ?></td> 
                        <td><?php echo $VarData ['keterangan']; ?></td> 
                        <?php
}
?>
  </tr>
</table>

</body></html>