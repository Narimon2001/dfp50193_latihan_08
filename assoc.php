<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSOCIATIVE ARRAY</title>
    
</head>

<body>
    <?php
    $peserta = [
        'nama' => 'Narimon Een',
        'umur' => '20',
        'jantina' =>'Perempuan',
    ];?>

    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $peserta['nama']; ?></td>
        </tr>

        <tr>
            <td>Umur:</td>
            <td><?php echo $peserta['umur']; ?> tahun</td>
        </tr>

        <tr>
            <td>Jantina:</td>
            <td><?php echo $peserta['jantina']; ?></td>
        </tr>
    </table>

</body>
</html>