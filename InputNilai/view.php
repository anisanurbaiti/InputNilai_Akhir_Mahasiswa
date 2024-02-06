
<!DOCTYPE html>
<html>
  <head>
    <title>Form Input Nilai</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>View Nilai Mahasiswa</h1>
      <center>
      <form method="POST" action="simpan.php" enctype="multipart/form-data" >
    <?php
	$namamhs = $_POST['nama_mhs'];
	$npm     = $_POST['nim'];
	$uts     = $_POST['nilai_UAS'];
	$uas     = $_POST['nilai_UTS'];
	$tugas   = $_POST['nilai_TUGAS'];
	$pertemuan   = $_POST['pertemuan'];
$nilaitotal=($uts*25)/100+($uas*30)/100+($tugas*25)/100+($pertemuan*20)/100;
if ($nilaitotal>=80)
$grade=("A") and $ket=("LULUS");
else
if ($nilaitotal>=65)
$grade=("B") and $ket=("LULUS");
else
if ($nilaitotal>=50)
$grade=("C") and $ket=("LULUS");
else
if ($nilaitotal>=30)
$grade=("D") and $ket=("TIDAK LULUS");
else
if ($nilaitotal>=0)
$grade=("E") and $ket=("TIDAK LULUS");
?>
      <section class="base">
        <div>
          <label>Nama Mahasiswa</label>
          <input type="text" name="nama_mhs" value="<?php echo $namamhs;?>" readonly/>
        </div>
        <div>
         <label>Npm:</label>
         <input type="text" name="nim" value="<?php echo $npm;?>" readonly/>
        </div>
        <div>
          <label>Nilai UAS</label>
         <input type="text" name="nilai_UAS" value="<?php echo $uas;?>" readonly/>
        </div>
         <div>
          <label>Nilai UTS</label>
         <input type="text" name="nilai_UTS" value="<?php echo $uts;?>"  readonly/>
        </div>
         <div>
          <label>Nilai Tugas</label>
         <input type="text" name="nilai_TUGAS" value="<?php echo $tugas;?>" readonly/>
        </div>
         <div>
          <label>Jumlah Pertemuan</label>
         <input type="text" name="pertemuan" value="<?php echo $pertemuan;?>" readonly/>
        </div>
         <div>
          <label>Hasil Nilai Akhir</label>
         <input type="text" name="hasil_nilai_akhir" value="<?php echo $nilaitotal;?>" readonly/>
        </div>
         <div>
          <label>Grade</label>
         <input type="text" name="grade" value="<?php echo $grade;?>" readonly/>
        </div>
         <div>
          <label>Maka Mahasiswa Dinyatakan :</label>
         <input type="text" name="keterangan" value="<?php echo $ket;?>" readonly/>
        </div>
         <button type="submit" name="submit">SIMPAN DATA</button>
        </div>
        </section>
      </form>
  </body>
</html>