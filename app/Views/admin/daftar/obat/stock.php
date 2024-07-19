<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1><?= $title; ?></h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>No. Reg</th>
                <th>Produsen</th>
                <th>Distributor</th>
                <th>Stok</th>
                <th>Kadaluarsa</th>
                <th>Harga Satuan</th>
                <th>Komposisi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($medicine as $mdc) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $mdc['name_medicine']; ?></td>
                    <td><?= $mdc['reg_num']; ?></td>
                    <td><?= $mdc['produsen']; ?></td>
                    <td><?= $mdc['distributor']; ?></td>
                    <td><?= $mdc['stok']; ?></td>
                    <td><?= $mdc['expired']; ?></td>
                    <td><?= $mdc['unit_price']; ?></td>
                    <td><?= $mdc['composition']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>