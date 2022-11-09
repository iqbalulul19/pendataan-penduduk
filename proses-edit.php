<?php
include("koneksi.php");

if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $agama=$_POST['agama'];

    $sql = "UPDATE tb_penduduk SET nik='$nik' , nama='$nama' , agama='$agama' WHERE id=$kode";
    $query = mysqli_query($koneksi,$sql);

    if($query){
        header('Location:tampil.php');
    }else{
        die ("gagal mengedit");
    } 
}
?>