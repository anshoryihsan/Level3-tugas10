<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 10 - Muhammad Ihsan Anshory </title>
</head>

<body>
    <h1>Ubah Produk</h1>

    <?php foreach ($produk as $row) : ?>
        <form action="<?php echo base_url() . 'index.php/Produk/saveUpdate'; ?>" method="post" id="update">
            Nama produk :
            <input type="text" value="<?php echo $row->nama_produk ?>" class="form-control span8" name="nama_produk" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
            Keteangan :
            <textarea rows="4" value="<?php echo $row->keterangan ?>" cols="50" name="keterangan" form="update" required><?php echo $row->keterangan ?></textarea>
            Harga :
            <input type="text" value="<?php echo $row->harga ?>" class="form-control span8" name="harga" pattern="^[0-9]{1,}$" maxlength="25" required />
            Jumlah :
            <input type="text" value="<?php echo $row->jumlah ?>" class="form-control span8" name="jumlah" pattern="^[0-9]{1,}$" maxlength="25" required />
            <button onclick="return confirm ('Merubah data <?php echo $row->nama_produk; ?>?')">Save</button>
        </form>
        <button class="btn btn-link"><a href="javascript:history.back()">Cancel</a></button>
    <?php endforeach; ?>
</body>

</html>