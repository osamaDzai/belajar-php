<?php
// Array produk
$products = [
    [
        "nama" => "Kaos Polos",
        "gambar" => "assets/picture/kaos-polos.jpg",
        "harga" => "Rp50.000",
        "deskripsi" => "Kaos dengan desain polos yang nyaman dipakai sehari-hari."
    ],
    [
        "nama" => "Kemeja Denim",
        "gambar" => "assets/picture/denim.jpg",
        "harga" => "Rp150.000",
        "deskripsi" => "Kemeja denim dengan bahan denim berkualitas tinggi."
    ],
    [
        "nama" => "Celana Jogger",
        "gambar" => "assets/picture/celana.jpg",
        "harga" => "Rp120.000",
        "deskripsi" => "Celana jogger dengan desain casual yang cocok untuk berbagai aktivitas."
    ],
    [
        "nama" => "Jaket Parka",
        "gambar" => "assets/picture/jaket-parka.jpg",
        "harga" => "Rp250.000",
        "deskripsi" => "Jaket parka dengan bahan tahan air, cocok untuk cuaca hujan."
    ]
];

// Fungsi untuk menampilkan produk
function showProducts($products) {
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<img src="' . $product['gambar'] . '" alt="' . $product['nama'] . '">';
        echo '<h2>' . $product['nama'] . '</h2>';
        echo '<p>Harga: ' . $product['harga'] . '</p>';
        echo '<p>Deskripsi: ' . $product['deskripsi'] . '</p>';
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product List</title>
<link rel="stylesheet" href="assets/css/product.css">
</head>
<body>

<div id="products" class="container">
    <?php showProducts($products); ?>
</div>

</body>
</html>
