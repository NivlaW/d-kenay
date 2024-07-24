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
                    <div
                      class="tab-pane fade show active"
                      id="overview"
                      role="tabpanel"
                      aria-labelledby="overview"
                    >
                      <div class="row">
                        <div class="col-sm-12">
                          <div
                            class="statistics-details d-flex align-items-center justify-content-between"
                          >
                            <div>
                              <p class="statistics-title">Bounce Rate</p>
                              <h3 class="rate-percentage">32.53%</h3>
                              <p class="text-danger d-flex">
                                <i class="mdi mdi-menu-down"></i
                                ><span>-0.5%</span>
                              </p>
                            </div>
                            <div>
                              <p class="statistics-title">Page Views</p>
                              <h3 class="rate-percentage">7,682</h3>
                              <p class="text-success d-flex">
                                <i class="mdi mdi-menu-up"></i
                                ><span>+0.1%</span>
                              </p>
                            </div>
                            <div>
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex">
                                <i class="mdi mdi-menu-down"></i
                                ><span>68.8</span>
                              </p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex">
                                <i class="mdi mdi-menu-down"></i
                                ><span>+0.8%</span>
                              </p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex">
                                <i class="mdi mdi-menu-down"></i
                                ><span>68.8</span>
                              </p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex">
                                <i class="mdi mdi-menu-down"></i
                                ><span>+0.8%</span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 d-flex flex-column">
                          <div class="row flex-grow">
                            <div
                              class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card"
                            >
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div
                                    class="d-sm-flex justify-content-between align-items-start"
                                  >
                                    <div>
                                      <h4 class="card-title card-title-dash">
                                        Grafik Penghasilan Per Bulan
                                      </h4>
                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <div class="chartjs-wrapper mt-4">
                                    <canvas
                                      id="GrafikPenghasilan"
                                      width=""
                                    ></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                          <div class="row flex-grow">
                            <div
                              class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card"
                            >
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div
                                    class="d-sm-flex justify-content-between align-items-start"
                                  >
                                    <div>
                                      <h4 class="card-title card-title-dash">
                                        Grafik Transaksi Per Bulan
                                      </h4>
                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <div class="chartjs-wrapper mt-4">
                                    <canvas
                                      id="JumlahTransaksi"
                                      width=""
                                    ></canvas>
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

            <script type="text/javascript" >
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