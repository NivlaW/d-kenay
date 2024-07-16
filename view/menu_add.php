<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <p class="card-description"> Basic form layout </p>
        <form class="forms-sample">
            <div class="form-group">
                <label for="">Nama Menu</label>
                <input type="text" class="form-control" id="" name="namaMenu" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="email" class="form-control" id="" name="harga" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" class="form-control" id="" name="foto" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../koneksi.php";

    $nama = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $n_random = rand(1, 9999);
    $nama_baru = $n_random . '-' . $nama;
    $folder = "foto/";

    move_uploaded_file($file_tmp, $folder . $nama_baru);

    $query = mysqli_query($con, "insert into tbl_menu (nama)")
}
?>