<?php
include("koneksi.php");
if(isset($_POST['tambah_pasien'])){
          $kode=$_POST['id'];
          $nama_lengkap=$_POST['nama'];
          $alamat=$_POST['alamat'];
          $jk=$_POST['jk'];
          $no_tlpn=$_POST['no_tlpn'];
          $agama=$_POST['agama'];
          $tanggal_masuk=$_POST['tanggal_masuk'];
          $gejala=$_POST['gejala'];
          $tempat_lahir=$_POST['tempat_lahir'];
          $tanggal_lahir=$_POST['birth'];
          $no_kamar=$_POST['no_kamar'];
   
          $sql = "INSERT INTO  tb_pasien (id,nama, alamat, JK, no_tlpn, agama, tanggal_masuk, gejala,tempat_lahir,tanggal_lahir, no_kamar)
            VALUES ('$kode','$nama_lengkap', '$alamat', '$jk','$no_tlpn','$agama','$tanggal_masuk','$gejala','$tempat_lahir','$tanggal_lahir','$no_kamar')";
          $query=mysqli_query($db, $sql);

          if($query){
                    header('location:pasien.php?status=sukses');
          }else{
                    header('location:pasien.php?status=gagal'); 
          }

}
?>
