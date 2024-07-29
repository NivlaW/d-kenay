<?php
include "../koneksi.php";
if(isset($_POST["id_menu"])){
    foreach($_POST['id_menu'] as $id){

$query = mysqli_query($con, "select * from tbl_menu where id_menu = $id");
$row = mysqli_fetch_array($query);

unlink('foto/'.$row['foto']);

$delete = "delete from tbl_menu where id_menu = ? ";
$proses = $con->prepare($delete);
$proses->bind_param("i", $id);
$proses->execute();
    }
}

echo"<script language = 'JavaScript'>
        alert('Data Berhasi Dihapus');
        window.location.href = 'index.php?page=menu';
    </script>"
?>