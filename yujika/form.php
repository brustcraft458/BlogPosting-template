<?php
$jk = "Laki-Laki";

// New id
function newNoAnggota() {
    global $anggotaList;
    $no_anggota = count($anggotaList);
    $no_anggota++;
    $no_anggota = sprintf('%03d', $no_anggota); // 001
    return $no_anggota;
}
?>

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
    <div class="card p-4 mx-auto">
        <h1>Judul Data</h1>
        <form action="" method="POST">
            <label for="nama">Nama Lengkap</label><br>
            <input type="text" id="nama" name="nama"><br>

            <label for="alamat">Alamat</label><br>
            <input type="text" id="alamat" name="alamat"><br><br>

            <label for="jenis_kelamin">Jenis Kelamin</label><br>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-Laki" <?= $jk == "Laki-Laki" ? 'selected' : '' ?>>Laki - Laki</option>
                <option value="Perempuan" <?= $jk == "Perempuan" ? 'selected' : '' ?>>Perempuan</option>
            </select><br><br>

            <label for="tempat_lahir">Tempat Lahir</label><br>
            <input type="text" id="tempat_lahir" name="tempat_lahir"><br><br>

            <label for="tanggal_lahir">Tanggal Lahir</label><br>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>

            <label for="pekerjaan">Pekerjaan</label><br>
            <input type="text" id="pekerjaan" name="pekerjaan"><br><br>

            <label for="simpanan_wajib">Uang simpanan Wajib</label><br>
            <input type="number" id="simpanan_wajib" name="simpanan_wajib"><br><br>

            <label for="simpanan_sukarela">Uang simpanan Sukarela</label><br>
            <input type="number" id="simpanan_sukarela" name="simpanan_sukarela"><br><br>

            <a href="./index.php" class="btn btn-primary">Cancel</a>
            <input type="submit" class="btn btn-primary" name="save" value="Save">
        </form>
    </div>
</body>

</html>