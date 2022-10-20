<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $JK=$_POST['jk'];
    $no_tlpn=$_POST['no_tlpn'];
    $agama=$_POST['agama'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $gejala=$_POST['gejala'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $no_kamar=$_POST['no_kamar'];

    $sql = "UPDATE tb_pasien SET nama='$nama', alamat='$alamat', JK='$JK', no_tlpn='$no_tlpn', agama='$agama', tanggal_masuk='$tanggal_masuk', gejala='$gejala', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', no_kamar='$no_kamar' WHERE id=$kode";
    $query= mysqli_query($db,$sql);

    if($query){
        header('Location:proses_edit.php');
    }else{ 
        die ("gagal mengedit");
    }}
    else{
        die ("akses dilarang");
    }
?>