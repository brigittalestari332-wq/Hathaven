<?php
include "koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM tmbbrg");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Stok Topi</title>
    <style>
        body {
            background: #0f0f0f;
            color: white;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        h2 { text-align: center; }
        .card {
            background: #1a1a1a;
            border-radius: 15px;
            width: 250px;
            padding: 15px;
            margin: 15px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(255,255,255,0.05);
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(255,215,0,0.3);
        }
        img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 10px;
        }
        .price {
            color: gold;
            font-size: 18px;
            margin: 5px 0;
            font-weight: bold;
        }
        .qty-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        .qty-box button {
            width: 35px;
            height: 35px;
            border: none;
            background: gold;
            color: black;
            font-weight: bold;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
        }
        .qty-box input {
            width: 50px;
            text-align: center;
            margin: 0 8px;
            padding: 5px;
            border-radius: 8px;
            border: none;
        }
        .buy-btn {
            padding: 10px;
            width: 100%;
            border: none;
            background: linear-gradient(45deg, gold, orange);
            color: black;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
        }
    </style>
    <script>
        function tambah(id) {
            let qty = document.getElementById('qty_' + id);
            qty.value = parseInt(qty.value) + 1;
        }

        function kurang(id) {
            let qty = document.getElementById('qty_' + id);
            if (parseInt(qty.value) > 1) {
                qty.value = parseInt(qty.value) - 1;
            }
        }

        function setQty(id) {
            let val = document.getElementById('qty_' + id).value;
            document.getElementById('buy_qty_' + id).value = val;
        }
    </script>
</head>
<body>

<h2>Katalog Koleksi Topi</h2>
<h2 style="font-size: 16px; color: gold;">Selamat Berbelanja di Toko Topi Jaya Abadi</h2>

<div style="text-align: center;">
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card">
        <img src="uploads/<?php echo htmlspecialchars($row['foto']); ?>" alt="Foto Topi">
        <div class="price">
            Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?>
        </div>
        <b><?php echo htmlspecialchars($row['nama_barang']); ?></b><br>
        <small>Kode: <?php echo htmlspecialchars($row['seri']); ?></small>
        <p style="font-size:13px; color:#ccc;">
            <?php echo htmlspecialchars($row['deskripsi']); ?>
        </p>

        <!-- QTY -->
        <div class="qty-box">
            <button type="button" onclick="kurang(<?php echo $row['id_barang']; ?>)">-</button>
            <input type="number" id="qty_<?php echo $row['id_barang']; ?>" value="1" min="1" readonly>
            <button type="button" onclick="tambah(<?php echo $row['id_barang']; ?>)">+</button>
        </div>

        <!-- TOMBOL BELI SEKARANG -->
        <div style="margin-top: 10px;">
            <form action="beli.php" method="get">
                <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
                <input type="hidden" name="jumlah" id="buy_qty_<?php echo $row['id_barang']; ?>" value="1">
                <button class="buy-btn" type="submit" onclick="setQty(<?php echo $row['id_barang']; ?>)">Beli Sekarang</button>
            </form>
        </div>
    </div>
<?php } ?>
</div>

</body>
</html>