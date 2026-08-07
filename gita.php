<!DOCTYPE html>
<html>
<head>
    <title>Toko Topi Cewek Kekinian - Home</title>
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
        
        /* Mengatur lebar kolom */
        th.kecil, td.kecil {
            width: 100px;
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

        /* STYLE FOOTER BAGIAN BAWAH */
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
echo "<table>";

    // BARIS 1: HEADER ATAS
    echo "<tr class='baris1'> 
            <th colspan='3'>
                <div class='cell-flex'>
                    <div class='left-text'>
                        <span>TOKO TOPI CEWEK KEKINIAN</span>
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
                        <a href='coba.php' class='active'>Home</a> | 
                        <a href='profil.php'>Profil</a> | 
                        <a href='stok_barang.php'>Stok Barang</a> | 
                        <a href='tambah.php'>Tambah Penjualan</a> | 
                        <a href='kontak.php'>Kontak</a> 
                    </div>

                    <!-- Kanan: Form Pencarian -->
                    <div class='search'>
                        <form action='cari.php' method='GET'>
                            <input type='text' name='q' placeholder='Cari...'>
                            <input type='submit' value='Cari'>
                        </form>
                    </div>

                </div>
            </td>
          </tr>";

    // BARIS 3: KONTEN KARTU PRODUK
    echo "<tr class='baris3'>
            <td class='kecil' colspan='3'>
                <div class='row-cards' style='display:flex; justify-content:space-around; gap:20px; padding: 20px 0;'>
                
                  <!-- Card 1 -->
                  <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center; border:1px solid #333; border-radius:8px;'>
                      <img src='topi10.JPG' alt='Topi bucket' style='width:100%; height:250px; object-fit:cover; background:white; padding:10px; box-sizing:border-box;'>
                      <h2 style='margin-top:15px; margin-bottom:5px;'>21.000 <small style='color:gold;'>/22.000</small></h2>
                      <h3 style='margin-top:5px;'>Topi bucket</h3>
                      <p style='color:gold;'>★ ★ ★ ★ ★</p>
                      <p>Code topi: bucket simple</p>
                      <p>Color: Black</p>
                      <p>Bahan: Daimaru</p>
                      <p>Size: 55-60 cm (sesuai size lingkar kepala mu)</p>
                      <a href='beli.php' style='display:inline-block; margin-top:10px; padding:8px 16px; background:gold; color:black; text-decoration:none; font-weight:bold; border-radius:4px;'>Beli Sekarang</a>
                  </div>

                  <!-- Card 2 -->
                  <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center; border:1px solid #333; border-radius:8px;'>
                      <img src='topi2.JPG' alt='Topi Baseball' style='width:100%; height:250px; object-fit:cover; background:white; padding:10px; box-sizing:border-box;'>
                      <h2 style='margin-top:15px; margin-bottom:5px;'>25.000 <small style='color:gold;'>/28.000</small></h2>
                      <h3 style='margin-top:5px;'>Topi Baseball</h3>
                      <p style='color:gold;'>★ ★ ★ ★ ★</p>
                      <p>Code topi: baseball casual</p>
                      <p>Color: Navy</p>
                      <p>Bahan: Katun Drill</p>
                      <p>Size: 56-62 cm (sesuai size lingkar kepala mu)</p>
                      <a href='beli.php' style='display:inline-block; margin-top:10px; padding:8px 16px; background:gold; color:black; text-decoration:none; font-weight:bold; border-radius:4px;'>Beli Sekarang</a>
                  </div>

                  <!-- Card 3 -->
                  <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center; border:1px solid #333; border-radius:8px;'>
                      <img src='topi3.JPG' alt='Topi Snapback' style='width:100%; height:250px; object-fit:cover; background:white; padding:10px; box-sizing:border-box;'>
                      <h2 style='margin-top:15px; margin-bottom:5px;'>30.000 <small style='color:gold;'>/35.000</small></h2>
                      <h3 style='margin-top:5px;'>Topi Snapback</h3>
                      <p style='color:gold;'>★ ★ ★ ★ ★</p>
                      <p>Code topi: snapback street</p>
                      <p>Color: Black-Gold</p>
                      <p>Bahan: Canvas Premium</p>
                      <p>Size: Adjustable (sesuai size lingkar kepala mu)</p>
                      <a href='beli.php' style='display:inline-block; margin-top:10px; padding:8px 16px; background:gold; color:black; text-decoration:none; font-weight:bold; border-radius:4px;'>Beli Sekarang</a>
                  </div>

                </div>
            </td>
          </tr>";


echo "</table>";
?>

</body>
</html>