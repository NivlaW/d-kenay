<?php
header("Content-type: application/vnd ms-excel");
header("Content-Disposition: attachment; filename=report.xls")
?>

<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">

            <form  method="POST">

                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th style ='text-align: center;'>No.</th>
                            <th style ='text-align: center;'>Nama Pemesan</th>
                            <th style ='text-align: center;'>Tanggal Pesanank</th>
                            <th style ='text-align: center;'>Alamat Pemesan</th>
                            <th style ='text-align: center;'>Makanan</th>
                            <th style ='text-align: center;'>Jumlah Pesanan</th>
                            <th style ='text-align: center;'>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $no = 1;
                        $ambilData = mysqli_query($con, "select * from tbl_pesanan");
                        while ($data = mysqli_fetch_array($ambilData)) {

                            $total = number_format($data['total']);

                            echo "<tr>";
                            echo "<td style ='text-align: center;'><input type='checkbox' name= 'id_pesanan[]' value='$data[id_pesanan]'></td>";
                            // echo "<td><img src="<?php"></td>";
                            echo "<td>$no</td>";
                            echo "<td style ='text-align: center;'>$data[nm_pelanggan]</td>";
                            echo "<td style ='text-align: center;'>$data[tanggal_pesanan]</td>";
                            echo "<td style ='text-align: center;'>$data[alamat]</td>";
                            echo "<td style ='text-align: center;'>$data[makanan]</td>";
                            echo "<td style ='text-align: center;'>$data[jml_makanan]</td>";
                            echo "<td  style ='text-align: center;'>Rp $total</td>";

                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>