<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="card p-3 border-0 mx-auto">
        <div>
            <a href="./add.php" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th>no_anggota</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>jenis_kelamin</th>
                    <th>tempat_lahir</th>
                    <th>tanggal_lahir</th>
                    <th>pekerjaan</th>
                    <th>status</th>
                    <th colspan="2">simpanan</th>
                    <th>aksi</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>wajib</th>
                    <th>sukarela</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>no_anggota</td>
                    <td>nama</td>
                    <td>alamat</td>
                    <td>jenis_kelamin</td>
                    <td>tempat_lahir</td>
                    <td>tanggal_lahir</td>
                    <td>pekerjaan</td>
                    <td>status</td>
                    <td>100</td>
                    <td>200</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>