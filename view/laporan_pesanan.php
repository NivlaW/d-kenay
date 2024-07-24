<?php 
include '../koneksi.php';

$awal = isset($_GET['awal']) ? $_GET['awal'] : '';
$akhir = isset($_GET['akhir']) ? $_GET['akhir'] : '';
?>

<body onload="javascript:window.print()" style="margin: 0 auto; width: 1000px;">

    <img src="../assets/images/logo 1.svg" style="width:20%; height: 120px; float: left;" alt="logo">

    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td style="font-size: 32; color: blue; text-align: center;"><b>Dapur Kenay</b></td>
        </tr>
        <tr>
            <td style="font-size: 18; padding-top : 10px; color: blue; text-align: center;"><b>Jl. Ciremai Raya No.64, Kel. Kecapi, Kec. Harjamukti, Kota Cirebon, Jawa Barat</b></td>
        </tr>
        <tr>
            <td style="font-size: 18; padding-top : 10px; color: blue; text-align: center;"><b>Telp : 0721(09876), Email : SejahteraPerkasa@gmail.com</b></td>
        </tr>
    </table><br>

    <div style="border-bottom: 3px dotted gray;"></div><br>

    <label for="" style="font-size: 20; text-align: center;"><center><u>Laporan Pesanan Dapur Kenay</u></center></label>

    <p>&nbsp;</p>

    <table width="100%" cellspacing="0" cellpadding="0" style="border: 1px solid #000; padding: 3px 5px;">
        <thead>
            <tr style="background-color: lightgray;">
                <th style="border: 1px solid #000; padding: 3px 5px;">No</th>
                <th style="border: 1px solid #000; padding: 3px 5px;">Nama Pemesan</th>
                <th style="border: 1px solid #000; padding: 3px 5px;">Tanggal Pesanan</th>
                <th style="border: 1px solid #000; padding: 3px 5px;">Alamat Pemesan</th>
                <th style="border: 1px solid #000; padding: 3px 5px;">Makanan</th>
                <th style="border: 1px solid #000; padding: 3px 5px;">Jumlah Pesanan</th>
                <th style="border: 1px solid #000; padding: 3px 5px;">Total</th>
                <th style="border: 1px solid #000; padding: 3px 5px;">Status</th>
                <!-- <th style="border: 1px solid #000; padding: 3px 5px;">Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include '../koneksi.php';
                $no = 1;
                $ambilData = mysqli_query($con, "select * from tbl_pesanan");
                if($awal != '' && $akhir != ''){
                    $ambilData = mysqli_query($con, "select * from tbl_pesanan WHERE tanggal_pesanan BETWEEN '$awal' AND '$akhir'");
                }
            while ($data = mysqli_fetch_array($ambilData)) {

                $total = number_format($data['total']);


                echo "<tr>";
                // echo "<td><input type='checkbox' name= 'id_jabatan[]' value='$data[id_pesanan]'></td>";
                // echo "<td><img src="<?php"></td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$no</td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$data[nm_pelanggan]</td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$data[tanggal_pesanan]</td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$data[alamat]</td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$data[makanan]</td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$data[jml_makanan]</td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>Rp $total</td>";
                echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$data[status]</td>";
                // echo "<td style='border: 1px solid #000; padding: 3px 5px;'>$data[status]</td>";
                // echo "<td><a href=file_jabatan/{$data['SK_jabatan']} target='_blank'>Download File</a></td>";
                // echo "<td><a href='index.php?page=data_jabatan_edit&&id=" . $data['id_jabatan'] . " ' class='btn btn-warning'>Edit</a> <a href='index.php?page=data_jabatan_delete&&id=" . $data['id_jabatan'] . "' onclick='javascript: return confirm(`apakah anda ingin menghapus data ini..?`)' class='btn btn-danger'>Delete</a></td>";
                $no++;
            }
            ?>
        </tbody>

    </table>

    <p>&nbsp;</p>
    <table align="border-right" cellspacing="0" cellpadding="0">
            <tr>
                <td style="text-align: center;">Cirebon, <?php echo date("d F Y"); ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">Owner Dapur Kenay
                    <p>&nbsp;</p>
                    <u>Slamet Raharjo</u>
                </td>
            </tr>
    </table>

</body>