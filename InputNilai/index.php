
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
          font-size: 18px;
          border: 1px;
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
        <h1>Input Data Nilai Mahasiswa</h1>
      <center>
      <form method="POST" action="view.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Mahasiswa</label>
          <input type="text" name="nama_mhs" />
        </div>
        <div>
         <label>Npm:</label>
         <input type="text" name="nim"  />
        </div>
        <div>
          <label>Nilai UAS</label>
         <input type="text" name="nilai_UAS" />
        </div>
         <div>
          <label>Nilai UTS</label>
         <input type="text" name="nilai_UTS" />
        </div>
         <div>
          <label>Nilai Tugas</label>
         <input type="text" name="nilai_TUGAS" />
        </div>
         <div>
          <label>Jumlah Pertemuan</label>
       <select name="pertemuan" size="10px" class="form-control">
      <optgroup label="Pertemuan ke">
    <option value='0'>0</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    <option value='6'>6</option>
    <option value='7'>7</option>
    <option value='8'>8</option>
    <option value='9'>9</option>
    <option value='10'>10</option>
    <option value='11'>11</option>
    <option value='12'>12</option>
    <option value='13'>13</option>
    <option value='14'>14</option>
  </optgroup>
    </select>
        </div>
        <div>
         <button type="submit" name="submit">Proses</button>
        </div>
        </section>
      </form>
       <h1><a href="data_nilai.php" >Lihat Data</a></h1>
  </body>
</html>