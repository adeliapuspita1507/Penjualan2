<?php
include __DIR__ . '/../koneksi.php';

$data = mysqli_query($conn, "
    SELECT
        id,
        nama        AS nama_customer,
        email      AS email_customer,
        no_hp       AS hp_customer,
        alamat       AS alamat_customer
    FROM customer
");
?>

<h2>Data Customer</h2>

<a href="dashboard.php?page=tambah-customer" class="btn-add">+ Tambah Customer</a>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

<?php $no = 1; ?>
<?php while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_customer'] ?></td>
        <td><?= $row['email_customer'] ?></td>
        <td><?= $row['hp_customer'] ?></td>
        <td><?= $row['alamat_customer'] ?></td>
        <td>
            <a href="dashboard.php?page=edit-customer&id=<?= $row['id'] ?>">Edit</a> |
            <a href="dashboard.php?page=hapus-customer&id=<?= $row['id'] ?>"
               onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
<?php } ?>
</table>
