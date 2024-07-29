<?php
<<<<<<< HEAD
include "../koneksi.php";
if(isset($_POST["id_pesanan"])){
    foreach($_POST['id_pesanan'] as $id){

$query = mysqli_query($con, "select * from tbl_pesanan where id_pesanan = $id");
$row = mysqli_fetch_array($query);

unlink('foto/'.$row['foto']);

$delete = "delete from tbl_pesanan where id_pesanan = ? ";
$proses = $con->prepare($delete);
$proses->bind_param("i", $id);
$proses->execute();
=======
include"../koneksi.php";
if(isset($_POST["id_pesanan"])){
    foreach($_POST['id_pesanan']as $id){
        $query = mysqli_query($con, "SELECT * From tbl_pesanan where id_pesanan = $id");
        $row = mysqli_fetch_array($query);

        $delete = "DELETE From tbl_pesanan where id_pesanan = ? ";
        $proses = $con->prepare($delete);
        $proses -> bind_param("i", $id);
        $proses -> execute();
>>>>>>> fb0fc06ba2ce22b50575a59c67411061f57d619c
    }
}

echo"<script language = 'JavaScript'>
<<<<<<< HEAD
        alert('Data Berhasi Dihapus');
        window.location.href = 'index.php?page=pesanan';
=======
    alert ('Data Berhasil Dihapus');
    document.location='index.php?page=pesanan';
>>>>>>> fb0fc06ba2ce22b50575a59c67411061f57d619c
    </script>"
?>