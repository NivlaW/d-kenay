<?php
include "../koneksi.php";
$id_pesanan = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM tbl_pesanan WHERE id_pesanan = '$id_pesanan'");
$row = mysqli_fetch_array($sql);

$menu_query = mysqli_query($con, "SELECT * FROM tbl_menu");
?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" method="POST">
                        <div class="form-group">
                            <label for="">Nama Pemesan</label>
                            <input type="text" class="form-control" name="nm_pelanggan"
                                value="<?php echo $row['nm_pelanggan']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pesanan</label>
                            <input type="date" class="form-control" name="tanggal_pesanan"
                                value="<?php echo $row['tanggal_pesanan']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat"
                                value="<?php echo $row['alamat']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Makanan</label>
                            <select class="form-control" name="makanan" id="makanan">
                                <?php
                                while ($menu = mysqli_fetch_array($menu_query)) {
                                    $selected = $row['makanan'] == $menu['id_menu'] ? 'selected' : '';
                                    echo "<option value='{$menu['id_menu']}' data-price='{$menu['harga_makanan']}' $selected>{$menu['nama_menu']} - Rp.{$menu['harga_makanan']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" name="jml_makanan" id="jml_makanan"
                                value="<?php echo $row['jml_makanan']; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Total</label>
                            <input type="text" class="form-control" name="total" id="total"
                                value="<?php echo $row['total']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select class="form-control" name="status">
                                <option value="">Select Status</option>
                                <?php
                                $status = $row['status']; // assume you have the status value from the database
                                ?>
                                <option value="Diproses" <?php echo ($status == 'Diproses') ? 'selected' : ''; ?>>Diproses</option>
                                <option value="Done" <?php echo ($status == 'Done') ? 'selected' : ''; ?>>Done</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button type="button" onclick="history.back()" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const makananSelect = document.getElementById('makanan');
        const jumlahInput = document.getElementById('jml_makanan');
        const totalInput = document.getElementById('total');

        function updateTotal() {
            const selectedOption = makananSelect.options[makananSelect.selectedIndex];
            const price = parseFloat(selectedOption.getAttribute('data-price')) || 0;
            const quantity = parseInt(jumlahInput.value) || 0;
            const total = price * quantity;
            totalInput.value = total;
        }

        makananSelect.addEventListener('change', updateTotal);
        jumlahInput.addEventListener('input', updateTotal);

        // Initialize total on page load
        updateTotal();
    });
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../koneksi.php";

    $query = mysqli_query($con, "UPDATE tbl_pesanan SET nm_pelanggan='$_POST[nm_pelanggan]', tanggal_pesanan='$_POST[tanggal_pesanan]', alamat='$_POST[alamat]', makanan='$_POST[makanan]', jml_makanan='$_POST[jml_makanan]', total='$_POST[total]', status='$_POST[status]' WHERE id_pesanan = $id_pesanan");

    echo "<script>
                alert('Data Berhasil Diupdate');
                document.location='index.php?page=pesanan';
            </script>";
}
?>
