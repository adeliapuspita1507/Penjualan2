<?php
include __DIR__ . '/../koneksi.php';

$id = $_GET['id'] ?? 0;
$q  = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id'");
$d  = mysqli_fetch_assoc($q);

if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['no_hp'];
    $email  = $_POST['email'];

    mysqli_query($conn, "UPDATE customer SET
        nama='$nama',
        alamat='$alamat',
        no_hp='$no_hp',
        email='$email'
        WHERE id='$id'");

    echo "<script>
        alert('Data customer berhasil diupdate');
        window.location='dashboard.php?page=customer';
    </script>";
    exit;
}
?>

<h2>Edit Customer</h2>

<form method="post">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $d['nama'] ?>" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" required><?= $d['alamat'] ?></textarea>
    </div>

    <div class="form-group">
        <label>No HP</label>
        <input type="text" name="no_hp" value="<?= $d['no_hp'] ?>" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?= $d['email'] ?>" required>
    </div>

    <button type="submit" name="update">Update</button>
</form>
