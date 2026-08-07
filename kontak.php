<!DOCTYPE html>
<html>
<head>
    <title>Kontak Kami - Toko Topi Cewek Kekinian</title>
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

        /* STYLE KONTEN KONTAK */
        .contact-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            max-width: 900px;
            margin: 0 auto;
            text-align: left;
        }
        .contact-box {
            flex: 1;
            background: #111;
            padding: 25px;
            border-radius: 10px;
            border: 1px solid #333;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.1);
        }
        .contact-box h3 {
            color: gold;
            margin-top: 0;
            border-bottom: 2px solid gold;
            padding-bottom: 10px;
        }
        .contact-box label {
            display: block;
            margin-top: 10px;
            font-size: 13px;
            color: #ddd;
        }
        .contact-box input, .contact-box textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            background: #222;
            border: 1px solid #444;
            color: white;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: inherit;
        }
        .contact-box input:focus, .contact-box textarea:focus {
            outline: none;
            border-color: gold;
        }
        .btn-submit {
            margin-top: 15px;
            padding: 10px;
            background: gold;
            color: black;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
        }
        .btn-submit:hover {
            background: #e6c200;
        }
        .info-item {
            margin-bottom: 20px;
        }
        .info-item h4 {
            color: gold;
            margin: 0 0 5px 0;
            font-size: 14px;
        }
        .info-item p {
            margin: 0;
            color: #ccc;
            font-size: 13px;
            line-height: 1.4;
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


                </div>
            </td>
          </tr>";

    // BARIS 3: KONTEN UTAMA KONTAK
    echo "<tr class='baris3'>
            <td colspan='3'>
                <div class='contact-container'>
                    <!-- INFORMASI TOKO -->
                    <div class='contact-box'>
                        <h3>Informasi Kontak</h3>
                        
                        <div class='info-item'>
                            <h4>Alamat Toko</h4>
                            <p>Jl. Raya Fashion Topi No. 88, Jakarta Selatan, DKI Jakarta</p>
                        </div>

                        <div class='info-item'>
                            <h4>Telepon / WhatsApp</h4>
                            <p>+62 867-5673-6534-31</p>
                        </div>

                        <div class='info-item'>
                            <h4>Email</h4>
                            <p>tokotopi@gmail.com</p>
                        </div>

                        <div class='info-item'>
                            <h4>Jam Operasional Kasir</h4>
                            <p>Senin - Minggu: 08:00 - 21:00 WIB</p>
                        </div>
                    </div>

                    <!-- FORM KIRIM PESAN -->
                    <div class='contact-box'>
                        <h3>Kirim Pesan</h3>
                        <form action='#' method='POST' onsubmit=\"alert('Pesan Anda berhasil terkirim!'); return false;\">
                            <label>Nama Lengkap</label>
                            <input type='text' placeholder='Masukkan nama Anda' required>
                            
                            <label>Email / No. HP</label>
                            <input type='text' placeholder='Masukkan email atau WhatsApp' required>
                            
                            <label>Pesan / Masukan</label>
                            <textarea rows='4' placeholder='Tuliskan pesan Anda di sini...' required></textarea>
                            
                            <button type='submit' class='btn-submit'>KIRIM PESAN</button>
                        </form>
                    </div>
                </div>

                <!-- TOMBOL KEMBALI DI BAWAH KOTAK -->
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