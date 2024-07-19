<html>

<head>
    <title>Invoice</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000000;
            text-align: center;
        }
    </style>
</head>

<body>
    <div style="font-size:32px; color:'#dddddd' "><i><?= $title; ?></i></div>
    <p>
        Semarang, Indonesia<br>
        024123456
    </p>
    <h4>Nomor Antrian</h4>
    <h1><u><?= $mrecord['poly_code']; ?><?= $mrecord['num_queue']; ?></u></h1><br>
    <p>
        <?= $mrecord['patient_slug']; ?><br>
        <?= $mrecord['poly_code']; ?><br><br>
        Nomor antrian ini hanya berlaku pada <br>
        <?= date('d-m-y'); ?><br><br>
        <b>
            Terimakasih Anda Terlah Tertib<br>
            Semoga Sehat Selalu
        </b>
    </p>

</body>

</html>