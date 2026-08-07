<!DOCTYPE html>
<html>
<head>
    <title>Profil Toko - Toko Topi Cewek Kekinian</title>
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
            padding: 30px;
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

        /* STYLE KONTEN PROFIL */
        .profile-container {
            max-width: 850px;
            margin: 0 auto;
            text-align: left;
            background: #111;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #333;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.1);
        }
        .profile-header {
            text-align: center;
            border-bottom: 2px solid gold;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        .profile-header h2 {
            color: gold;
            margin: 0;
            font-size: 24px;
        }
        .profile-section {
            margin-bottom: 25px;
        }
        .profile-section h3 {
            color: gold;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .profile-section p, .profile-section ul {
            color: #ccc;
            font-size: 14px;
            line-height: 1.6;
        }
        .profile-section ul {
            padding-left: 20px;
        }
        .profile-section li {
            margin-bottom: 8px;
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


            </td>
          </tr>";

    // BARIS 3: KONTEN UTAMA PROFIL
    echo "<tr class='baris3'>
            <td colspan='3'>
                <div class='profile-container'>
                    <div class='profile-header'>
                        <h2>PROFIL TOKO TOPI CEWEK KEKINIAN</h2>
                    </div>

                    <div class='profile-section'>
                        <h3>Tentang Kami</h3>
                        <p>Selamat datang di Toko Topi Cewek Kekinian! Kami adalah pusat fashion aksesoris topi wanita terpercaya yang menyediakan berbagai macam pilihan topi stylish, aesthetic, dan berkualitas tinggi mulai dari Bucket Hat, Baseball Cap, hingga Snapback.</p>
                    </div>

                    <div class='profile-section'>
                        <h3>Visi & Misi</h3>
                        <ul>
                            <li><strong>Visi:</strong> Menjadi penyedia aksesoris fashion topi wanita nomor 1 yang menghadirkan tren terkini dengan harga terjangkau.</li>
                            <li><strong>Misi:</strong> Menjaga kualitas bahan terbaik, memberikan pelayanan yang cepat dan ramah, serta mengutamakan kepuasan pelanggan di setiap transaksi.</li>
                        </ul>
                    </div>

                    <div class='profile-section'>
                        <h3>Keunggulan Produk Kami</h3>
                        <ul>
                            <li>Bahan premium berkualitas (Daimaru, Katun Drill, Canvas Premium).</li>
                            <li>Jahitan rapi dan nyaman digunakan sehari-hari.</li>
                            <li>Model selalu <i>up-to-date</i> mengikuti tren fashion kekinian.</li>
                            <li>Harga bersaing dengan penawaran diskon menarik setiap harinya.</li>
                        </ul>
                    </div>
                </div>

                <!-- TOMBOL KEMBALI DI BAWAH KOTAK PROFIL -->
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