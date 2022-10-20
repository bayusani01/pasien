<?php
include("koneksi.php");
?>
<form action="pasien.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
    <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    
</form>
<html>
    <head>
</head>
<body>
    <h1>Data Pasien</h1>
    <h4><a href=index.php>ke halaman utama</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>JK</th>
            <th>no_tlpn</th>
            <th>agama</th>
            <th>tanggal_masuk</th>
            <th>gejala</th>
            <th>tempat_lahir</th>
            <th>tanggal_lahir</th>
            <th>no_kamar</th>
       </tr>


<?php
    include("koneksi.php");
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql="SELECT * FROM tb_pasien  WHERE nama LIKE '%".$cari."%'";
        $query = mysqli_query($db, $sql); 

    }else{
        $sql='SELECT * FROM tb_pasien';
        $query = mysqli_query($db, $sql);
    }

    while($datapasien=mysqli_fetch_array($query)){
        echo "<tr>";
              echo "<td>".$datapasien['id']."</td>";
              echo "<td>".$datapasien['nama']."</td>";
              echo "<td>".$datapasien['alamat']."</td>";
              echo "<td>".$datapasien['JK']."</td>";
              echo "<td>".$datapasien['no_tlpn']."</td>";
              echo "<td>".$datapasien['agama']."</td>";
              echo "<td>".$datapasien['tanggal_masuk']."</td>";
              echo "<td>".$datapasien['gejala']."</td>";
              echo "<td>".$datapasien['tempat_lahir']."</td>";
              echo "<td>".$datapasien['tanggal_lahir']."</td>";
              echo "<td>".$datapasien['no_kamar']."</td>";
              echo "<td>";
              echo "<a href='edit-barang.php?id=".$datapasien['id']."'>Edit</a> |";
              echo "<a href='hapus-barang.php?id=".$datapasien['id']."'>Hapus</a>";
              echo "</td>";
    echo "</tr>";
    
}
   ?>
</table>
</body>
</html>