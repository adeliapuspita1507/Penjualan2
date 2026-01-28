<?php
include __DIR__ . '/../koneksi.php';

$id = $_GET['id'] ?? 0;

mysqli_query($conn, "DELETE FROM customer WHERE id='$id'");

echo "<script>
    alert('Data customer berhasil dihapus');
    window.location='dashboard.php?page=customer';
</script>";
exit;
