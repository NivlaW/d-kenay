<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <p class="card-description"> Basic form layout </p>
        <form class="forms-sample" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Menu</label>
                <input type="text" class="form-control" id="" name="nama_menu" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" class="form-control" id="" name="harga_makanan" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Foto Menu</label>
                <input type="file" class="form-control" id="" name="foto" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "../koneksi.php";

    $name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $n_random = rand(1,9999);
    $nama_baru = $n_random . '-' . $name;
    $folder = "foto/";

    move_uploaded_file($file_tmp, $folder . $nama_baru);

    $query = mysqli_query($con, "INSERT INTO tbl_menu (nama_menu, harga_makanan, foto) VALUES ('$_POST[nama_menu]', '$_POST[harga_makanan]', '$nama_baru')");

    if ($query) {
        echo "<script language='JavaScript'>
            alert('Data Berhasil disimpan');
            document.location= 'index.php?page=menu';
          </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Gagal menyimpan data');
            document.location= 'index.php?page=menu_add';
          </script>";
    }
}
?>