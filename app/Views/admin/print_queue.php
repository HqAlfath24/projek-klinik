<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cetak Nomor Antrian</title>
    <style>
        .queue-card {
            width: 300px;
            border: 2px solid #000;
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 0 auto;
        }

        .queue-header {
            font-size: 20px;
            font-weight: bold;
        }

        .queue-body {
            margin-top: 20px;
            font-size: 16px;
        }

        .queue-footer {
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="queue-card">
        <div class="queue-header">Klinik Erins</div>
        <div class="queue-body">
            <p>Nomor Antrian</p>
            <h1><?= $mrecord['id']; ?></h1>
            <p>Nama: <?= $patient['name']; ?></p>
            <p>Poli: <?= $polyclinic['name']; ?></p>
        </div>
        <div class="queue-footer">
            <p><?= date('d-m-Y'); ?></p>
        </div>
    </div>
</body>

</html>