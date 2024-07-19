          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Pesanan</h4>
                    <a href="index.php?page=pesanan_add" class="btn btn-outline-primary btn-fw"> <i class="fa fa-plus-square-o"></i> Tambah Data</a>
                    <a href="" class="btn btn-outline-danger btn-fw"> <i class="fa fa-trash-o"></i> Hapus Data</a>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th></th>
                            <th>No.</th>
                            <th>Nama Pemesan</th>
                            <th>Tanggal Pesanan</th>
                            <th>Alamat Pemesan</th>
                            <th>Makanan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Total</th> 
                            <th>Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include("../koneksi.php");
                          $ambil_data = mysqli_query($con, "SELECT * FROM tbl_pesanan");
                          $no = 1;
                          while ($data = mysqli_fetch_array($ambil_data)) {
                            echo "<tr>";
                            echo "<td><input type=checkbox name=id_pesanan[] value=$data[id_pesanan]></td>";
                            echo "<td>$no</td>";
                            echo "<td>" . $data['nm_pelanggan'] . "</td>";
                            echo "<td>" . $data['tanggal_pesanan'] . "</td>";
                            echo "<td>" . $data['alamat'] . "</td>";
                            echo "<td>" . $data['makanan'] . "</td>";
                            echo "<td>" . $data['jml_makanan'] . "</td>";
                            echo "<td>" . $data['total'] . "</td>";
                            echo "<td>
                        <a href=\"index.php?page=edit_pesanan&&id=$data[id_pesanan]\"class=\"btn btn-primary\">edit</a>
                        <a href=\"index.php?page=hapus_pesanan&&id=$data[id_pesanan]\" class=\"btn btn-danger\" onclick=\"javascript:return confirm ('apakah anda ingin menghapus data ini...?')\">hapus</a>;
                            </td>";
                            echo "</tr>";
                            $no++;
                          } ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>