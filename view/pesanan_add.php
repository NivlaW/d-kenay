<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <p class="card-description"> Basic form layout </p>
        <form class="forms-sample" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Pemesan</label>
                <input type="text" class="form-control" id="" name="nm_pelanggan" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Tanggal Pesanan</label>
                <input type="date" class="form-control" id="" name="tanggal_pesanan" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" id="" name="alamat" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Makanan</label>
                <input type="text" class="form-control" id="" name="makanan" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Jumlah</label>
                <input type="text" class="form-control" id="" name="jml_makanan" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Total</label>
                <input type="text" class="form-control" id="" name="total" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../koneksi.php";

    $query = mysqli_query($con, "insert into tbl_pesanan (nm_pelanggan, tanggal_pesanan, alamat, makanan, jml_makanan, total) values ('$_POST[nm_pelanggan]', '$_POST[tanggal_pesanan]', '$_POST[alamat]', '$_POST[makanan]', '$_POST[jml_makanan]', '$_POST[total]' )");

    echo "<script>
            alert('Data Berhasil Disimpan');
            document.location='index.php?page=pesanan';
        </script>";
};
?>