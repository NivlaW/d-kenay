<?php
include"../koneksi.php";
if(isset($_POST["id_pesanan"])){
    foreach($_POST['id_pesanan']as $id){
        $query = mysqli_query($con, "SELECT * From tbl_pesanan where id_pesanan = $id");
        $row = mysqli_fetch_array($query);

        $delete = "DELETE From tbl_pesanan where id_pesanan = ? ";
        $proses = $con->prepare($delete);
        $proses -> bind_param("i", $id);
        $proses -> execute();
    }
}

echo"<script language = 'JavaScript'>
    alert ('Data Berhasil Dihapus');
    document.location='index.php?page=pesanan';
    </script>"
?>