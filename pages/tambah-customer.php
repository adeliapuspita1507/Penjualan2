<?php
include __DIR__ . '/../koneksi.php';



if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO customer VALUES (
        '',
        '$_POST[nama]',
        '$_POST[email]',
        '$_POST[no_hp]',
        '$_POST[alamat]'
    )");

    header("location:dashboard.php?page=customer");
}
?>

<h3>Tambah Customer</h3>

<form method="post">
    <div class="mb-2">
        <label>Nama Customer</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Email</label>
        <textarea name="email" class="form-control"></textarea>
    </div>

    <div class="mb-2">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control">
    </div>

    <div class="mb-2">
        <label>Alamat</label>
        <input type="alamat" name="alamat" class="form-control">
    </div>

    <button name="simpan" class="btn btn-success">Simpan</button>
</form>
