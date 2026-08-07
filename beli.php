<?php
include "koneksi.php";

$id     = $_GET['id_barang'] ?? 0;
$jumlah = $_GET['jumlah'] ?? 1;

$data = mysqli_query($koneksi, "SELECT * FROM tmbbrg WHERE id_barang='$id'");
$row  = mysqli_fetch_assoc($data);

if (!$row) {
    echo "<script>alert('Produk topi tidak ditemukan!'); window.location='stok_barang.php';</script>";
    exit;
}

$harga = $row['harga'];
$total = $harga * $jumlah;

$kode = rand(100000, 999999);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Topi</title>
    <style>
        body {
            background: #0f0f0f;
            color: white;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        h1 { text-align: center; }
        .container {
            display: flex;
            gap: 40px;
            margin-top: 20px;
        }
        .box {
            flex: 1;
            background: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border-radius: 6px;
            border: none;
            box-sizing: border-box;
        }
        .total {
            color: gold;
            font-weight: bold;
        }
        button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(45deg, gold, orange);
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }
        button:disabled {
            background: #555;
            color: #888;
            cursor: not-allowed;
        }
        #qrisBox {
            background: #222;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Form Pembelian Topi</h1>

<form action="prosesbeli.php" method="post">
    <div class="container">
        <!-- KIRI -->
        <div class="box">
            <h3>Detail Produk Topi</h3>
            <label>Nama Topi:</label>
            <input value="<?php echo htmlspecialchars($row['nama_barang']); ?>" readonly>
            
            <label>Kode/Seri:</label>
            <input value="<?php echo htmlspecialchars($row['seri']); ?>" readonly>
            
            <label>Harga Satuan:</label>
            <input value="Rp <?php echo number_format($harga, 0, ',', '.'); ?>" readonly>
            
            <label>Jumlah Beli:</label>
            <input value="<?php echo $jumlah; ?>" readonly>
            
            <label>Total Harga:</label>
            <input class="total" value="Rp <?php echo number_format($total, 0, ',', '.'); ?>" readonly>
        </div>

        <!-- KANAN -->
        <div class="box">
            <h3>Data Pembeli</h3>
            <input type="hidden" name="id_barang" value="<?php echo $id; ?>">
            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
            <input type="hidden" name="total" value="<?php echo $total; ?>">

            <label>No Faktur:</label>
            <input type="text" name="no_faktur" value="FK-TOPI-<?php echo time(); ?>" required readonly>

            <label>Tanggal Transaksi:</label>
            <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>

            <label>Nama Pembeli:</label>
            <input type="text" name="nama_pembeli" required>

            <label>Alamat Pengiriman:</label>
            <input type="text" name="alamat" required>

            <label>No KTP / HP:</label>
            <input type="text" name="ktp" required>

            <!-- METODE PEMBAYARAN -->
            <label>Metode Pembayaran:</label>
            <select id="metode" onchange="showPayment()" required>
                <option value="">-- Pilih --</option>
                <option value="transfer">Transfer Bank</option>
                <option value="ewallet">E-Wallet</option>
                <option value="cod">COD (Bayar di Tempat)</option>
            </select>

            <!-- TRANSFER -->
            <div id="transferBox" style="display:none;">
                <label>Bank Tujuan:</label>
                <select>
                    <option>BCA</option>
                    <option>BRI</option>
                    <option>BNI</option>
                </select>
            </div>

            <!-- EWALLET -->
            <div id="ewalletBox" style="display:none;">
                <label>E-Wallet Tujuan:</label>
                <select>
                    <option>DANA</option>
                    <option>OVO</option>
                    <option>GoPay</option>
                </select>
            </div>

            <!-- QRIS & VERIFIKASI -->
            <div id="qrisBox" style="display:none;">
                <h3>Scan QRIS Pembayaran</h3>
                <img src="uploads/qris.png" width="180" alt="QRIS Code" onerror="this.src='https://via.placeholder.com/180?text=Scan+QRIS'">
                <p>Total: <b style="color:gold;">Rp <?php echo number_format($total, 0, ',', '.'); ?></b></p>
                <p>Kode Verifikasi Simulasi: <b style="color: lightgreen;"><?php echo $kode; ?></b></p>
            </div>

            <div id="verifikasiBox" style="display:none;">
                <label>Masukkan Kode Verifikasi:</label>
                <input type="text" id="inputKode" onkeyup="cekKode()">
                <p id="statusBayar"></p>
            </div>

            <button type="submit" id="btnSubmit" disabled>Proses Pembelian</button>
        </div>
    </div>
</form>

<script>
    let kodeAsli = "<?php echo $kode; ?>";

    function showPayment() {
        let metode = document.getElementById("metode").value;

        document.getElementById("transferBox").style.display = "none";
        document.getElementById("ewalletBox").style.display = "none";
        document.getElementById("qrisBox").style.display = "none";
        document.getElementById("verifikasiBox").style.display = "none";
        document.getElementById("btnSubmit").disabled = true;

        if (metode === "transfer") {
            document.getElementById("transferBox").style.display = "block";
            document.getElementById("qrisBox").style.display = "block";
            document.getElementById("verifikasiBox").style.display = "block";
        } else if (metode === "ewallet") {
            document.getElementById("ewalletBox").style.display = "block";
            document.getElementById("qrisBox").style.display = "block";
            document.getElementById("verifikasiBox").style.display = "block";
        } else if (metode === "cod") {
            document.getElementById("btnSubmit").disabled = false;
        }
    }

    function cekKode() {
        let input = document.getElementById("inputKode").value;
        let status = document.getElementById("statusBayar");
        let btn = document.getElementById("btnSubmit");

        if (input === kodeAsli) {
            status.innerHTML = "✔ Pembayaran Berhasil";
            status.style.color = "lightgreen";
            btn.disabled = false;
        } else {
            status.innerHTML = "✖ Kode Salah";
            status.style.color = "red";
            btn.disabled = true;
        }
    }
</script>

</body>
</html>