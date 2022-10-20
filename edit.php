<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:pasien.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_pasien WHERE id=$kode";
$query = mysqli_query($koneksi,$sql);
$pasien = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <form action="proses_edit.php" method="POST">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $datapasien['id']?>" />
                <p>
        <label for="nama"> Nama Lengkap : </label>
        <input type="text" name="nama" value="<?php echo $datapasien['nama']?>" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <textarea name="alamat" row="5" value="<?php echo $datapasien['alamat']?>" ></textarea>
    </p>
    <p>
        <label for="jk"> Jenis Kelamin : </label>
        <label><input type="radio" name="JK" value="laki-laki" value="<?php echo $datapasien['JK']?>" />Laki-Laki </label>
        <label><input type="radio" name="JK" value="perempuan" value="<?php echo $datapasien['JK']?>" />Perempuan </label>
    </p>
    <p>
        <label for="no_tlpn"> No Telepon : </label>
        <input type="number" name="no_tlpn" value="<?php echo $datapasien['no_tlpn']?>"/>
    </p>
    <p>
        <label for="agama"> Agama : </label>
        <select name="agama" value="<?php echo $datapasien['agama']?>">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen </option>
        <option value="katolik">Katolik </option>
        <option value="buddha">Buddha </option>
        <option value="hindu">Hindu </option>
        <option value="konghucu">konghucu</option>
        </select> 
    </p>
    <p>
        <label for="tanggal_masuk"> Tanggal Masuk : </label>
        <input type="date" name="tanggal_masuk" value="<?php echo $datapasien['tanggal_masuk']?>"/>
    </p>
    <p>
        <label for="gejala"> Gejala : </label>
        <input type="text" name="gejala" value="<?php echo $datapasien['gejala']?>"/>
    </p>
    <p>
        <label for="tempat_lahir"> Tempat Lahir : </label>
        <input type="text" name="tempat_lahir" value="<?php echo $datapasien['tempat_lahir']?>"/>
    </p>
    <p>
        <label for="tanggal_lahir"> Tanggal Lahir : </label>
        <input type="date" name="tanggal_lahir" value="<?php echo $datapasien['tanggal_lahir']?>"/>
    <p>
       <label for="no_kamar"> No Kamar : </label>
       <input type="number" name="no_kamar" value="<?php echo $datapasien['no_kamar']?>"/>
    </p>
<p>
<input type="submit" value="Edit" name="edit" /> 
</p>
</fieldset>
</form>
</body>
</html>