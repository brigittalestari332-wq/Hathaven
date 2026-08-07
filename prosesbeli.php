<?php
include "koneksi.php";

$no_faktur = $_POST['no_faktur'];
$tanggal   = $_POST['tanggal'];
$nama      = $_POST['nama_pembeli'];
$alamat    = $_POST['alamat'];
$ktp       = $_POST['ktp'];
$id        = $_POST['id_barang'];
$jumlah    = $_POST['jumlah'];
$total     = $_POST['total'];

$data = mysqli_query($koneksi, "SELECT * FROM tmbbrg WHERE id_barang='$id'");
$row  = mysqli_fetch_assoc($data);

mysqli_query($koneksi, "INSERT INTO transaksi (no_faktur, tanggal, nama_pembeli, alamat, ktp, id_barang, jumlah, total) 
VALUES ('$no_faktur', '$tanggal', '$nama', '$alamat', '$ktp', '$id', '$jumlah', '$total')");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelian Topi</title>
    <style>
        body {
            font-family: monospace;
            background: #f5f5f5;
            color: #000;
        }
        .struk {
            width: 300px;
            background: white;
            padding: 15px;
            margin: 30px auto;
            border: 1px solid #ccc;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .center {
            text-align: center;
        }
        hr {
            border: none;
            border-top: 1px dashed #000;
        }
        button {
            display: block;
            margin: 10px auto;
            padding: 8px 15px;
            cursor: pointer;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
        }

        @media print {
            button {
                display: none;
            }
            body {
                background: white;
            }
            .struk {
                border: none;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>

<div class="struk">
    <div class="center">
        <h3>TOKO TOPI JAYA ABADI</h3>
        <p>Terima Kasih Atas Pembelian Anda</p>
    </div>
    <hr>
    
    <p>No Faktur: <?php echo htmlspecialchars($no_faktur); ?></p>
    <p>Tanggal  : <?php echo htmlspecialchars($tanggal); ?></p>
    <hr>
    
    <p>Nama Pembeli : <?php echo htmlspecialchars($nama); ?></p>
    <p>No KTP/HP    : <?php echo htmlspecialchars($ktp); ?></p>
    <hr>
    
    <p><b><?php echo htmlspecialchars($row['nama_barang']); ?></b></p>
    <p>Harga Satuan : Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
    <p>Jumlah Beli   : <?php echo $jumlah; ?></p>
    <hr>
    
    <p><b>Total Pembayaran:</b></p>
    <h3>Rp <?php echo number_format($total, 0, ',', '.'); ?></h3>
    <hr>
    
    <div class="center">
        <p>Status: LUNAS</p>
    </div>
</div>

<button onclick="window.print()">🖨 Cetak Struk</button>

</body>
</html>