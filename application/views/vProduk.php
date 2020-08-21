<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 10 - Muhammad Ihsan Anshory </title>
</head>

<body>
    <h1>Manajemen Produk</h1>
    <a href="<?php echo site_url(); ?>/Produk/tambahProduk/ ">
        <input type="button" name="" value="Tambah Produk">
    </a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($isi as $row) :
                $no = $no + 1;
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->nama_produk; ?></td>
                    <td><?php echo $row->keterangan; ?></td>
                    <td><?php echo $row->harga; ?></td>
                    <td><?php echo $row->jumlah; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>index.php/Produk/delete?nm_produk=<?php echo $row->nama_produk; ?>" onclick="return confirm ('Menghapus <?php echo $row->nama_produk; ?>?')">
                            <input type="button" name="" value="hapus">
                        </a>
                        <a href="<?= base_url(); ?>index.php/Produk/updateProduk?nm_produk=<?php echo $row->nama_produk; ?>" onclick="return confirm ('Mengubah <?php echo $row->nama_produk; ?>?')">
                            <input type="button" name="" value="ubah">
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>