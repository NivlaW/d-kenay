<?php
include "../koneksi.php";
$sql = mysqli_query($con, "select * from tbl_pesanan where id_pesanan = '$_GET[id]'");
$row = mysqli_fetch_array($sql);
?>


<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <p class="card-description"> Basic form layout </p>
        <form class="forms-sample" method="POST" >
            <div class="form-group">
                <label for="">Nama Pemesan</label>
                <input type="text" class="form-control" id="" name="nm_pelanggan" value="<?php echo "$row[nm_pelanggan]"; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Tanggal Pesanan</label>
                <input type="date" class="form-control" id="" name="tanggal_pesanan" value="<?php echo "$row[tanggal_pesanan]"; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" id="" name="alamat" value="<?php echo "$row[alamat]"; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Makanan</label>
                <input type="text" class="form-control" id="" name="makanan" value="<?php echo "$row[makanan]"; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Jumlah</label>
                <input type="text" class="form-control" id="" name="jml_makanan" value="<?php echo "$row[jml_makanan]"; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Total</label>
                <input type="text" class="form-control" id="" name="total" value="<?php echo "$row[total]"; ?>" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../koneksi.php";
    
        $query = mysqli_query($con, "update tbl_pesanan set nm_pelanggan='$_POST[nm_pelanggan]', tanggal_pesanan='$_POST[tanggal_pesanan]', alamat='$_POST[alamat]', makanan='$_POST[makanan]', jml_makanan='$_POST[jml_makanan]', total='$_POST[total]'");
    
        echo "<script>
                alert('Data Berhasil Diupdate');
                document.location='index.php?page=pesanan';
            </script>";
}
?>