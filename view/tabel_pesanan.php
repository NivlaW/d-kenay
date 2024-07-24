<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel Pesanan</h4>

          <form method="POST" action="">
            <div class="form-row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Tanggal Awal</label>
                  <input type="date" name="awal" class="form-control" value="<?php echo isset($_POST['awal']) ? $_POST['awal'] : ''; ?>">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Tanggal Akhir</label>
                  <input type="date" name="akhir" class="form-control" value="<?php echo isset($_POST['akhir']) ? $_POST['akhir'] : ''; ?>">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">&nbsp;</label><br>
                  <input type="submit" name="cari" class="btn btn-success" value="Cari Data">
                </div>
              </div>
            </div>
          </form>

          <div class="d-flex gap-2">
            <!-- <a href="index.php?page=pesanan_add" class="btn btn-outline-primary btn-fw"> <i class="fa fa-plus-square-o"></i> Tambah Data</a> -->
            <a href="" class="btn btn-outline-danger btn-fw"> <i class="fa fa-trash-o"></i> Hapus Data</a>
            <a target="_blank" href="export_excel.php" class="btn btn-success"><i class="fa fa-file-o"></i> Export to Excel</a>
            <a href="laporan_pesanan.php?awal=<?php echo isset($_POST['awal']) ? $_POST['awal'] : ''; ?>&akhir=<?php echo isset($_POST['akhir']) ? $_POST['akhir'] : ''; ?>" target="_blank" class="btn btn-info"><i class="fas fa-plus"></i> Cetak Data</a>
          </div>

          <?php
          include '../koneksi.php';
          $no = 1;

          if (isset($_POST['cari'])) {
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];
            $ambilData = mysqli_query($con, "select * from tbl_pesanan where tanggal_pesanan BETWEEN '$awal' AND '$akhir' ");
          } else {
            $ambilData = mysqli_query($con, "select * from tbl_pesanan");
          }
          ?>

          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th class="text-center">No.</th>
                  <th class="text-center">Nama Pemesan</th>
                  <th class="text-center">Tanggal Pesanan</th>
                  <th class="text-center">Alamat Pemesan</th>
                  <th class="text-center">Makanan</th>
                  <th class="text-center">Jumlah Pesanan</th>
                  <th class="text-center">Total</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($ambilData)) {
                  echo "<tr>";
                  echo "<td><input type=checkbox name=id_pesanan[] value=$data[id_pesanan]></td>";
                  echo "<td style ='text-align: center;'>$no</td>";
                  echo "<td style ='text-align: center;'>" . $data['nm_pelanggan'] . "</td>";
                  echo "<td style ='text-align: center;'>" . $data['tanggal_pesanan'] . "</td>";
                  echo "<td style ='text-align: center;'>" . $data['alamat'] . "</td>";
                  $data_makanan = mysqli_query($con, "SELECT * FROM tbl_menu where id_menu='$data[makanan]'");
                  $data_food = mysqli_fetch_array($data_makanan);
                  echo "<td style ='text-align: center;'>" . ($data_food['nama_menu'] ?? "") . "</td>";
                  echo "<td style ='text-align: center;'>" . $data['jml_makanan'] . "</td>";
                  echo "<td style ='text-align: center;'>" . $data['total'] . "</td>";
                  if ($data['status'] == 'Diproses') {
                    echo "<td style='text-align: center;'><span class='badge badge-info'>" . $data['status'] . "</span></td>";
                  } elseif ($data['status'] == 'Done') {
                    echo "<td style='text-align: center;'><span class='badge badge-success'>" . $data['status'] . "</span></td>";
                  } else {
                    echo "<td style='text-align: center;'>" . $data['status'] . "</td>";
                  }
                  echo "<td class='d-flex gap-3 justify-content-center'>
                          <a href=\"index.php?page=pesanan_edit&&id=$data[id_pesanan]\" class=\"btn btn-warning\">edit</a>
                          <a href=\"index.php?page=pesanan_delete&&id=$data[id_pesanan]\" class=\"btn btn-danger\" onclick=\"javascript:return confirm ('apakah anda ingin menghapus data ini...?')\">hapus</a>
                        </td>";
                  echo "</tr>";
                  $no++;
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
