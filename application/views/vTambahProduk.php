<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 10 - Muhammad Ihsan Anshory </title>
</head>

<body>
    <h1>Tambah Produk</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_error('nama_nroduk'); ?>
    <form action="<?php echo base_url() . 'index.php/Produk/saveTambah'; ?>" method="post" id="update">
        Nama produk :
        <input type="text" value="" class="form-control span8" name="nama_produk" pattern="^[_A-Z a-z]{1,}$" maxlength="25" required />
        Keteangan :
        <textarea rows="4" value="" cols="50" name="keterangan" form="update" required></textarea>
        Harga :
        <input type="text" value="" class="form-control span8" name="harga" pattern="^[0-9]{1,}$" maxlength="25" required />
        Jumlah :
        <input type="text" value="" class="form-control span8" name="jumlah" pattern="^[0-9]{1,}$" maxlength="25" required />
        <button>Save</button>
    </form>
    <button class="btn btn-link"><a href="<?= base_url(); ?>index.php/Produk">Cancel</a></button>
</body>

</html>