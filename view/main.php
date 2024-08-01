<?php
$thn_skr = date('Y');
include "../koneksi.php";

$year = date('Y');

$total_penghasilan = [];
for ($i = 1; $i <= 12; $i++) {
  $query = "SELECT SUM(total) as total FROM tbl_pesanan WHERE MONTH(tanggal_pesanan) = $i AND YEAR(tanggal_pesanan) = $year";
  $data = mysqli_query($con, $query);
  $total = mysqli_fetch_array($data);
  $total_penghasilan[] = $total['total'];
}
$jumlah_transaksi = [];
for ($i = 1; $i <= 12; $i++) {
  $query = "SELECT COUNT(*) as total FROM tbl_pesanan WHERE MONTH(tanggal_pesanan) = $i AND YEAR(tanggal_pesanan) = $year";
  $data = mysqli_query($con, $query);
  $total = mysqli_fetch_array($data);
  $jumlah_transaksi[] = $total['total'];
}
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-12">
      <div class="home-tab">
      </div>
    </div>
    <div class="tab-content tab-content-basic">
      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
        <div class="row">
          <div class="col-sm-12">
            <div class="statistics-details d-flex align-items-center justify-content-between py-2">
              <div class="col d-flex">
                <div>
                  <p class="statistics-title">Dashboard</p>
                  <h3 class="rate-percentage">Graphic Statistic</h3>

                </div>
              </div>
              <div class="col d-flex align-items-center justify-content-evenly">
                <div>
                  <p class="statistics-title">Total Menu</p>
                  <h3 class="rate-percentage">32.53 Items</h3>
                </div>
                <div>
                  <p class="statistics-title">Total Pesanan</p>
                  <h3 class="rate-percentage">7,682</h3>
                </div>
                <div>
                  <p class="statistics-title">Total Penjualan</p>
                  <h3 class="rate-percentage">Rp. 22222222222</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 d-flex flex-column">
            <div class="row flex-grow">
              <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                  <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                      <div>
                        <h4 class="card-title card-title-dash">
                          Grafik Penghasilan Per Bulan
                        </h4>
                      </div>
                      <div id="performanceLine-legend"></div>
                    </div>
                    <div class="chartjs-wrapper mt-4">
                      <canvas id="GrafikPenghasilan" width=""></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex flex-column">
            <div class="row flex-grow">
              <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                  <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                      <div>
                        <h4 class="card-title card-title-dash">
                          Grafik Transaksi Per Bulan
                        </h4>
                      </div>
                      <div id="performanceLine-legend"></div>
                    </div>
                    <div class="chartjs-wrapper mt-4">
                      <canvas id="JumlahTransaksi" width=""></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<script type="text/javascript">
  // Line Chart
  var ctx = document.getElementById("GrafikPenghasilan").getContext("2d");
  var data = {
    labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
    datasets: [{
      label: 'Penghasilan Bulanan',
      data: <?php echo json_encode($total_penghasilan); ?>,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      fill: false
    }]
  };

  var options = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };

  var GrafikPenghasilan = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
  });
  // Bar Chart
  var ctx = document.getElementById("JumlahTransaksi").getContext("2d");
  var data = {
    labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
    datasets: [{
      label: 'Transaksi Bulanan',
      data: <?php echo json_encode($jumlah_transaksi); ?>,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      fill: false
    }]
  };

  var options = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };

  var JumlahTransaksi = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
</script>