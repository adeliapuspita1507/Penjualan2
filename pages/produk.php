<?php
include __DIR__ . '/../koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM barang");

if (!$data) {
    die("Query error: " . mysqli_error($conn));
}
?>

<h2>List Produk</h2>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Satuan</th>
    </tr>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($data)) {
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['kode_barang']; ?></td>
            <td><?= $row['nama_barang']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
            <td><?= $row['stok']; ?></td>
            <td><?= $row['satuan']; ?></td>
        </tr>
    <?php } ?>
</table>
