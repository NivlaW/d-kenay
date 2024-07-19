<?php
include "../koneksi.php";
$query = mysqli_query($con, "select * from tbl_menu where id_menu = $_GET[id]");
$row = mysqli_fetch_array($query);

mysqli_query($con, "delete from tbl_menu where id_menu = '$_GET[id]'");

unlink('foto/'.$row['foto']);

echo"<script language = 'JavaScript'>
        alert('Data Berhasi Dihapus');
        window.location.href = 'index.php?page=menu';
    </script>"

?>