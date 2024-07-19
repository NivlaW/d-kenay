<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel Menu</h4>
          <a href="index.php?page=menu_add" class="btn btn-outline-primary btn-fw"> <i class="fa fa-plus-square-o"></i> Tambah Data</a>
          <a href="" class="btn btn-outline-danger btn-fw"> <i class="fa fa-trash-o"></i> Hapus Data</a>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Menu</th>
                  <th>Harga</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              <?php
              include '../koneksi.php';

              $no = 1;
              $ambilData = mysqli_query($con, "select * from tbl_menu");
              while ($data = mysqli_fetch_array($ambilData)) {
                echo "<tr>";
                echo "<td>$no.</td>";
                echo "<td>$data[nama_menu]</td>";
                echo "<td>$data[harga_makanan]</td>";
                echo "<td><img src='foto/".$data['foto']."' alt='foto' width='60' height='60'></td>";
                // echo "<td> <img src='foto/{$data['foto']}' alt='foto' height='60' width='60'> </td>";
                echo "<td><a href='index.php?page=menu_edit&&id=" . $data['id_menu'] . " ' class='btn btn-warning'>Edit</a> <a href='index.php?page=menu_delete&&id=" . $data['id_menu'] . "' onclick='javascript: return confirm(`apakah anda ingin menghapus data ini..?`)' class='btn btn-danger'>Delete</a></td>";

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