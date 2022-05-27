<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="col-md-12">
        <h3>Daftar Matakuliah</h3>
        <table class="tabel">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>SKS</th>
                    <th>Kode</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach($list_matkul as $mtkl){
                    ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $mtkl->nama ?></td>
                        <td><?= $mtkl->sks ?></td>
                        <td><?= $mtkl->kode ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>