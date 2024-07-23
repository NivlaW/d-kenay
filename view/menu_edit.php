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
                            <label for="">Apakah Menu Ini Best Seller</label>
                            <select class="form-control" id="" name="best_seller" required>
                                <option value="Y" <?php echo $row['best_seller'] == 'Y' ? 'selected' : ''; ?>>Iyaa</option>
                                <option value="N" <?php echo $row['best_seller'] == 'N' ? 'selected' : ''; ?>>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <a href="<?php echo"foto/$row[foto]";?>" target="_Blank"><?php echo"$row[foto]";?>
                            <input type="file" name="foto" class="form-control">
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
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "../koneksi.php";

    $name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $n_random = rand(1,9999);
    $nama_baru = $n_random . '-' . $name;
    $folder = "foto/";

    if(!$file_tmp==""){
        move_uploaded_file($file_tmp, $folder . $nama_baru);
        $query = mysqli_query($con,"SELECT * From tbl_menu Where id_menu = '$_GET[id]'");
        $data_file = $query->fetch_array();
        unlink('foto/' .$data_file['foto']);
        $query = mysqli_query($con, "UPDATE tbl_menu set nama_menu = '$_POST[nama_menu]', harga_makanan='$_POST[harga_makanan]', best_seller='$_POST[best_seller]',foto='$nama_baru' where id_menu = $_GET[id]");
    }
    else {
        $query = mysqli_query($con, "UPDATE tbl_menu set nama_menu = '$_POST[nama_menu]', harga_makanan='$_POST[harga_makanan]', best_seller='$_POST[best_seller]' where id_menu = $_GET[id]");
    }

    if ($query) {
        echo "<script language='JavaScript'>
            alert('Data Berhasil disimpan');
            document.location= 'index.php?page=menu';
          </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Gagal menyimpan data');
            document.location= 'index.php?page=menu_edit';
          </script>";
    }
}
?>