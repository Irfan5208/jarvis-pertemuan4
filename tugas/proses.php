<?php

// data array
$products = [
  ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
  ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
  ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
  ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
  ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30],
];

// cek data yang di-submit
if (isset($_POST['submit'])) {
// tambahkan data baru di array
  $newProduct = [
    "barang" => $_POST['barang'],
    "Harga" => (int)$_POST['harga'], // ubah ke integer
    "Deskripsi" => $_POST['deskripsi'],
    "Stok" => (int)$_POST['stok'], // ubah ke integer
  ];
  array_push($products, $newProduct);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
<div class="container my-5">
    <h1>Daftar Produk</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Stok</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // loop produk and tampilkan data di tabel
        $i = 1;
        foreach ($products as $product) {
          echo "<tr>";
          echo "<td>" . $i . "</td>";
          echo "<td>" . $product['barang'] . "</td>";
          echo "<td>Rp. " . number_format($product['Harga'], 0, ',', '.') . "</td>"; // Format price with comma separator
          echo "<td>" . $product['Deskripsi'] . "</td>";
          echo "<td>" . $product['Stok'] . "</td>";
          echo "</tr>";
          $i++;
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>