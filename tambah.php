<!DOCTYPE html>
<html>
<head>
    <title>Tambah Stok Topi</title>
    <style>
        body { 
            background: black; 
            color: white; 
            font-family: Arial, sans-serif; 
            padding: 20px; 
        }
        input, textarea { 
            padding: 6px; 
            margin: 5px; 
            width: 250px; 
        }
        button { 
            padding: 8px 15px; 
            border: 1px solid gold; 
            background: none; 
            color: white; 
            cursor: pointer; 
        }
        button:hover { background: gold; color: black; }
        table td { padding: 5px; }
    </style>
</head>
<body>

<h3>Tambah Stok Data Topi</h3>
<form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Seri/Kode Topi</td>
            <td><input type="text" name="seri" placeholder="Contoh: TP001" required></td>
        </tr>
        <tr>
            <td>Nama Topi</td>
            <td><input type="text" name="nama_barang" placeholder="Contoh: Topi Snapback" required></td>
        </tr>
        <tr>
            <td>Jenis/Kategori</td>
            <td><input type="text" name="jenis" placeholder="Contoh: Baseball / Bucket" required></td>
        </tr>
        <tr>
            <td>Harga (Rp)</td>
            <td><input type="number" name="harga" required></td>
        </tr>
        <tr>
            <td>Deskripsi / Spesifikasi</td>
            <td><textarea name="deskripsi" rows="4" cols="30" required></textarea></td>
        </tr>
        <tr>
            <td>Foto Produk</td>
            <td><input type="file" name="foto" accept="image/*" required></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Simpan Topi</button></td>
        </tr>
    </table>
</form>

</body>
</html>