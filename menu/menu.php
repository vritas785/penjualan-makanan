<?php
$conn = new mysqli('localhost', 'root', '', 'penjualan');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM makanan";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Pesan untuk WhatsApp
        $message = urlencode("Saya ingin memesan:\n" .
                             "Nama: " . $row['nama'] . "\n" .
                             "Deskripsi: " . $row['deskripsi'] . "\n" .
                             "Harga: Rp" . number_format($row['harga'], 0, ',', '.') . "\n");

        // URL WhatsApp
        $whatsapp_url = "https://wa.me/6287816548103/?text=$message";

        echo "<div class='menu-item'>";
        echo "<img src='uploads/" . htmlspecialchars($row['gambar']) . "' alt='" . htmlspecialchars($row['nama']) . "'>";
        echo "<h3>" . htmlspecialchars($row['nama']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['deskripsi']) . "</p>";
        echo "<p class='price'>Rp" . number_format($row['harga'], 0, ',', '.') . "</p>";
        echo "<a href='$whatsapp_url' class='btn' target='_blank'>Order Now</a>";
        echo "</div>";
    }
} else {
    echo "<p>No items available.</p>";
}
echo "</div>";

$conn->close();
?>