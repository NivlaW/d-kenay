          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Pesanan</h4>
                    <a href="index.php?page=pesanan_add" class="btn btn-outline-primary btn-fw"> <i class="fa fa-plus-square-o"></i> Tambah Data</a>
                    <a href="" class="btn btn-outline-danger btn-fw"> <i class="fa fa-trash-o"></i> Hapus Data</a>
                    <a target="_blank" href="export_excel.php" class="btn btn-success"><i class="fas fa-plus"></i> Export to Excel</a>
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
                            <th>Status</th> 
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
                            echo "<td style ='text-align: center;'>$no</td>";
                            echo "<td style ='text-align: center;'>" . $data['nm_pelanggan'] . "</td>";
                            echo "<td style ='text-align: center;'>" . $data['tanggal_pesanan'] . "</td>";
                            echo "<td style ='text-align: center;'>" . $data['alamat'] . "</td>";
                            echo "<td style ='text-align: center;'>" . $data['makanan'] . "</td>";
                            echo "<td style ='text-align: center;'>" . $data['jml_makanan'] . "</td>";
                            echo "<td style ='text-align: center;'>" . $data['total'] . "</td>";
                            if ($data['status'] == 'Diproses') {
                              echo "<td style='text-align: center;'><span class='badge badge-info'>" . $data['status'] . "</span></td>";
                            } elseif ($data['status'] == 'Done') {
                                echo "<td style='text-align: center;'><span class='badge badge-success'>" . $data['status'] . "</span></td>";
                            } else {
                                echo "<td style='text-align: center;'>" . $data['status'] . "</td>";
                            }
                            echo "<td>
                        <a href=\"index.php?page=pesanan_edit&&id=$data[id_pesanan]\"class=\"btn btn-primary\">edit</a>
                        <a href=\"index.php?page=pesanan_delete&&id=$data[id_pesanan]\" class=\"btn btn-danger\" onclick=\"javascript:return confirm ('apakah anda ingin menghapus data ini...?')\">hapus</a>;
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