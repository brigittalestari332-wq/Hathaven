<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pencarian - Toko Topi Cewek Kekinian</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #333;
            text-align: center;
        }
        
        /* Mengatur tinggi baris */
        tr.baris1 td, tr.baris1 th {
            height: 5%;
        }

        tr.baris2 td {
            height: 15%;
        }

        tr.baris3 td {
            height: 75%;
            vertical-align: top;
            padding: 20px;
        }

        tr.baris4 td {
            height: 5%;
            background-color: #0d0d0d;
            padding: 10px 0;
        }

        /* Layout flexbox di dalam sel */
        .cell-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            padding: 0 15px;
        }

        .left-text {
            font-size: 14px;
            font-weight: bold;
            color: gold;
            letter-spacing: 0.5px;
        }

        .right-text {
            font-size: 12px;
            color: #ccc;
        }

        /* LOGO BOX VERTIKAL (TEKS DI BAWAH LOGO) */
        .logo-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .logo-box span {
            font-weight: bold;
            color: gold;
            font-size: 13px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .menu a:hover, .menu a.active {
            background-color: gold;
            color: black;
        }

        .search input[type="text"] {
            padding: 6px 10px;
            border-radius: 4px;
            border: 1px solid #444;
            background: #222;
            color: white;
        }

        .search input[type="submit"] {
            padding: 6px 12px;
            background: gold;
            border: none;
            color: black;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-kembali-wrapper {
            text-align: center;
            margin-top: 25px;
        }

        /* STYLE FOOTER */
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            font-size: 13px;
            color: #aaa;
        }
        .footer-content a {
            color: gold;
            text-decoration: none;
            margin: 0 5px;
        }
        .footer-content a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
// Ambil kata kunci pencarian dari parameter URL 'q'
$keyword = isset($_GET['q']) ? trim($_GET['q']) : '';

// Data dummy produk topi
$daftar_produk = [
    [
        'nama' => 'Topi bucket',
        'harga' => '21.000',
        'harga_lama' => '22.000',
        'code' => 'bucket simple',
        'color' => 'Black',
        'bahan' => 'Daimaru',
        'size' => '55-60 cm (sesuai size lingkar kepala mu)',
        'gambar' => 'topi10.JPG'
    ],
    [
        'nama' => 'Topi Baseball',
        'harga' => '25.000',
        'harga_lama' => '28.000',
        'code' => 'baseball casual',
        'color' => 'Navy',
        'bahan' => 'Katun Drill',
        'size' => '56-62 cm (sesuai size lingkar kepala mu)',
        'gambar' => 'topi2.JPG'
    ],
    [
        'nama' => 'Topi Snapback',
        'harga' => '30.000',
        'harga_lama' => '35.000',
        'code' => 'snapback street',
        'color' => 'Black-Gold',
        'bahan' => 'Canvas Premium',
        'size' => 'Adjustable (sesuai size lingkar kepala mu)',
        'gambar' => 'topi3.JPG'
    ]
];

// Filter produk berdasarkan kata kunci
$hasil_cari = [];
if ($keyword !== '') {
    foreach ($daftar_produk as $produk) {
        if (
            stripos($produk['nama'], $keyword) !== false ||
            stripos($produk['code'], $keyword) !== false ||
            stripos($produk['color'], $keyword) !== false ||
            stripos($produk['bahan'], $keyword) !== false
        ) {
            $hasil_cari[] = $produk;
        }
    }
} else {
    // Jika kolom cari kosong, tampilkan semua produk
    $hasil_cari = $daftar_produk;
}

echo "<table>";

    // BARIS 1: HEADER ATAS
    echo "<tr class='baris1'>
            <th colspan='3'>
                <div class='cell-flex'>
                    <div class='left-text'>
                        <span>TOKO TOPI CEWEK KEKINIAN - HASIL PENCARIAN</span>
                    </div>
                    <div class='right-text'>
                        <span>TLP: +628675673653431 | Mail: Tokotopi@gmail.com</span>
                    </div>
                </div>
            </th>
          </tr>";

    // BARIS 2: LOGO (TEKS DI BAWAH LOGO) & MENU NAVIGASI
    echo "<tr class='baris2'>
            <td colspan='3'>
                <div class='cell-flex'>
                    
                    <!-- Kiri: Logo + Nama Toko (Atas Bawah) -->
                    <div class='logo-box'>
                        <img src='logo topi.jpg' alt='logo' width='120' height='60' style='object-fit: contain;' onerror=\"this.src='https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=200'\">
                        <span>TOKO TOPI CEWEK KEKINIAN</span>
                    </div>

                    <!-- Tengah: Menu Navigasi -->
                    <div class='menu'>
                        <a href='gita.php'>Home</a> | 
                        <a href='coba.php'>Home (Coba)</a> | 
                        <a href='profil.php'>Profil</a> | 
                        <a href='stok_barang.php'>Stok Barang</a> | 
                        <a href='tambah.php'>Tambah Penjualan</a> | 
                        <a href='kontak.php'>Kontak</a> | 
                        <a href='logout.php'>LOGOUT</a>
                    </div>

                    <!-- Kanan: Form Pencarian -->
                    <div class='search'>
                        <form action='cari.php' method='GET'>
                            <input type='text' name='q' value='" . htmlspecialchars($keyword) . "' placeholder='Cari...'>
                            <input type='submit' value='Cari'>
                        </form>
                    </div>

                </div>
            </td>
          </tr>";

    // BARIS 3: KONTEN HASIL PENCARIAN
    echo "<tr class='baris3'>
            <td colspan='3'>
                <h2 style='color:gold; text-align:center; margin-top:10px;'>
                    " . ($keyword !== '' ? "Hasil Pencarian untuk: '" . htmlspecialchars($keyword) . "'" : "Semua Produk Topi") . "
                </h2>";

    if (!empty($hasil_cari)) {
        echo "<div class='row-cards' style='display:flex; justify-content:center; flex-wrap:wrap; gap:20px; padding: 20px 0;'>";
        
        foreach ($hasil_cari as $p) {
            echo "
            <div class='card' style='background:#111; color:white; width:28%; min-width:250px; padding:15px; text-align:center; border:1px solid #333; border-radius:8px;'>
                <img src='{$p['gambar']}' alt='{$p['nama']}' style='width:100%; height:230px; object-fit:cover; background:white; padding:10px; box-sizing:border-box;' onerror=\"this.src='https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=200'\">
                <h2 style='margin-top:15px; margin-bottom:5px;'>{$p['harga']} <small style='color:gold;'>/{$p['harga_lama']}</small></h2>
                <h3 style='margin-top:5px;'>{$p['nama']}</h3>
                <p style='color:gold;'>★ ★ ★ ★ ★</p>
                <p>Code topi: {$p['code']}</p>
                <p>Color: {$p['color']}</p>
                <p>Bahan: {$p['bahan']}</p>
                <p>Size: {$p['size']}</p>
                <a href='beli.php' style='display:inline-block; margin-top:10px; padding:8px 16px; background:gold; color:black; text-decoration:none; font-weight:bold; border-radius:4px;'>Beli Sekarang</a>
            </div>";
        }

        echo "</div>";
    } else {
        echo "
        <div style='text-align:center; padding: 50px 0; color:#aaa;'>
            <p style='font-size:18px;'>Produk dengan kata kunci <strong>'" . htmlspecialchars($keyword) . "'</strong> tidak ditemukan.</p>
            <p>Coba gunakan kata kunci lain seperti <em>bucket</em>, <em>baseball</em>, atau <em>snapback</em>.</p>
        </div>";
    }

    echo "
                <!-- TOMBOL KEMBALI KE GITA.PHP -->
                <div class='btn-kembali-wrapper'>
                    <a href='gita.php' style='
                        display: inline-block;
                        padding: 8px 16px;
                        background: transparent;
                        color: gold;
                        border: 1px solid gold;
                        border-radius: 5px;
                        text-decoration: none;
                        font-size: 14px;
                        transition: 0.3s;
                    ' onmouseover=\"this.style.background='gold'; this.style.color='black';\" 
                       onmouseout=\"this.style.background='transparent'; this.style.color='gold';\">
                        &larr; Kembali ke Home 
                    </a>
                </div>
            </td>
          </tr>";

echo "</table>";
?>

</body>
</html>