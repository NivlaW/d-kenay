<?php
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
    }
}

echo"<script language = 'JavaScript'>
        alert('Data Berhasi Dihapus');
        window.location.href = 'index.php?page=pesanan';
    </script>"
?>