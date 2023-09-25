<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil data matakuliah</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="3">
                Tampil Data Matakuliah
            </th>
        </tr>
        <tr>
            <td colspan="3" >
                <hr>
            </td>
        </tr>
        <tr>
            <th>KODE MTK</th>
            <th>:</th>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>:</td>
            <td>
                <?= $sks; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" > 
                <a href="<?=base_url('matakuliah') ?>">Kembali</a>
            </td>
        </tr>
    </table>
</body>
</html>