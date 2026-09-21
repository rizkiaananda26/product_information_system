<?php

require_once "products.php";
require_once "functions.php";

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information System</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }

        .kritis {
            background-color: #ffcccc;
        }
    </style>
</head>

<body>

    <h1>Product Information System</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Total Nilai Stok</th>
            <th>Deskripsi</th>
        </tr>

        <?php foreach ($produk as $item) { ?>

            <tr class="<?= cekStok($item["stok"]) == "kritis" ? "kritis" : "" ?>">
                <td><?= $item["id"] ?></td>
                <td><?= $item["nama"] ?></td>
                <td><?= $item["kategori"] ?></td>
                <td>Rp <?= number_format($item["harga"], 0, ',', '.') ?></td>
                <td><?= $item["stok"] ?></td>
                <td>
                    Rp <?= number_format(
                        hitungTotalNilaiStok($item["harga"], $item["stok"]),
                        0,
                        ',',
                        '.'
                    ) ?>
                </td>
                <td><?= $item["deskripsi"] ?></td>
            </tr>

        <?php } ?>

    </table>

</body>
</html>