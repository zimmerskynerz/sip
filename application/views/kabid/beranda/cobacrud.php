<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?= base_url('coba/crudform') ?>" method="post">
     <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
    <input type="text" id="idnama" name="idnama">
    <button type="submit">Simpan</button>
    </form>
    <table>
    <table>
    <th>Nama</th>
    <?php foreach($coba as $Coba): ?>
    <tr>
    <td><?= $Coba->nama ?></td>
    </tr>
<?php endforeach; ?>
    </table>
</table>
</body>
</html>