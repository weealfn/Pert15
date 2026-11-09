<?php
?>
<h2>Toko Online</h2>

<?php
if (isset($_COOKIE['produk'])) {
    echo "<p>Produk yang Anda pilih adalah Mouse Wireless</p>";
} else {
    echo "<p>Belum ada produk yang dipilih</p>";
}
?>

<a href="cookie1.php">Pilih produk</a> |
<a href="cookie3.php">Hapus cookie</a>