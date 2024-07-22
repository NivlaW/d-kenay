<?php
include "../koneksi.php";
$sql = mysqli_query($con, "select * from tbl_menu where id_menu = '$_GET[id]'");
$row = mysqli_fetch_array($sql);
?>


<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                            <input type="text" class="form-control" id="" name="nama_menu" value="<?php echo "$row[nama_menu]"; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" class="form-control" id="" name="harga_makanan" value="<?php echo "$row[harga_makanan]"; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" id="" name="foto" value="<?php echo "$row[foto]"; ?>" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button type="button" onclick="history.back()" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../koneksi.php";

    $nama = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $n_random = rand(1, 9999);
    $nama_baru = $n_random . '-' . $nama;
    $folder = "foto/";


    if (!$file_tmp == "") {

        move_uploaded_file($file_tmp, $folder . $nama_baru);

        $query = mysqli_query($con, "select * from tbl_menu where id_menu = '$_GET[id]'");
        $data_file = $query->fetch_array();
        unlink('foto/' . $data_file['foto']);

        $query = mysqli_query($con, "update tbl_menu set nama_menu='$_POST[nama_menu]', harga_makanan='$_POST[harga_makanan]', foto='$nama_baru' ");

        echo "<script>
                alert('Data Berhasil Diupdate');
                document.location='index.php?page=menu';
            </script>";
    } else {
        $query = mysqli_query($con, "update tbl_menu set nama_menu='$_POST[nama_menu]', harga_makanan='$_POST[harga_makanan]', foto='$nama_baru' ");

        echo "<script>
                alert('Data Gagal Diupdate');
                document.location='index.php?page=menu';
            </script>";
    }

    echo "<script>
                alert('Data Berhasil Disimpan');
                document.location='index.php?page=menu';
            </script>";
};
?>