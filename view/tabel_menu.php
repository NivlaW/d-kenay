<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel Menu</h4>
          <form method="POST" action="index.php?page=multi_delete_menu">
            <a href="index.php?page=menu_add" class="btn btn-outline-primary btn-fw"> <i class="fa fa-plus-square-o"></i> Tambah Data</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th style='text-align: center;'>No.</th>
                    <th style='text-align: center;'>Nama Menu</th>
                    <th style='text-align: center;'>Harga</th>
                    <th style='text-align: center;'>Foto</th>
                    <th style='text-align: center;'>Best Seller</th>
                    <th style='text-align: center;'>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  include '../koneksi.php';

                  $no = 1;
                  $ambilData = mysqli_query($con, "select * from tbl_menu");
                  while ($data = mysqli_fetch_array($ambilData)) {
                    echo "<tr>";
                    echo "<td style ='text-align: center;'>$no.</td>";
                    echo "<td style ='text-align: center;'>$data[nama_menu]</td>";
                    echo "<td style ='text-align: center;'>Rp. $data[harga_makanan]</td>";
                    echo "<td style ='text-align: center;'><img src='foto/" . $data['foto'] . "' alt='foto' width='60' height='60'></td>";
                    echo "<td style ='text-align: center;'>$data[best_seller]</td>";
                    // echo "<td> <img src='foto/{$data['foto']}' alt='foto' height='60' width='60'> </td>";
                    echo "<td class='d-flex justify-content-center gap-3'><a href='index.php?page=menu_edit&&id=" . $data['id_menu'] . " ' class='btn btn-warning'>Edit</a> <a href='index.php?page=menu_delete&&id=" . $data['id_menu'] . "' onclick='javascript: return confirm(`apakah anda ingin menghapus data ini..?`)' class='btn btn-danger'>Delete</a></td>";

                    $no++;
                  }
                  ?>

                </tbody>

              </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>