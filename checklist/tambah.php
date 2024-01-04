<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{

    $toilet_id = $_POST['toilet_id'];
    $kloset = $_POST['kloset'];
    $wastafel = $_POST['wastafel'];
    $lantai = $_POST['lantai'];
    $dinding = $_POST['dinding'];
    $kaca = $_POST['kaca'];
    $bau = $_POST['bau'];
    $sabun = $_POST['sabun'];
    $users_id = $_POST['users_id'];

    $query = "INSERT INTO checklist (tanggal, toilet_id, kloset, wastafel, lantai, dinding, kaca, bau,
    sabun, users_id) VALUES (NOW(), '$toilet_id', '$kloset', '$wastafel', '$lantai', '$dinding', '$kaca', '$bau', '$sabun', '$users_id')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>window.location='index.php'</script>";
    } else {
        die("Maaf, data gagal disimpan: " . mysqli_error($koneksi));
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="margin-top: 30px; background-color: #778899;">
    <div class="container" style="background-color: #FF69B4; width: 50%; padding: 30px;">
        <h1 style="color: #FFFFFF; text-align: center;">Tambah Data</h1>
        <div class="main">
            <form method="post" action="tambah.php" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-text">Kode Toilet</span>
                    <input class="form-control" type="text" name="toilet_id">
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Kode Petugas</span>
                    <input class="form-control" type="text" name="users_id">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input">
                            <label style="color: #FFFFFF;">Kloset</label>
                            <select class="form-select" aria-label="Default select example" name="kloset">
                                <option value=""></option>
                                <option value="Bersih">Bersih</option>
                                <option value="Kotor">Kotor</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>

                    </div>
                    <div class="col">
                        <div class="input">
                            <label style="color: #FFFFFF;">Wastafel</label>
                            <select class="form-select" aria-label="Default select example" name="wastafel">
                                <option value=""></option>
                                <option value="Bersih">Bersih</option>
                                <option value="Kotor">Kotor</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>
                    </div>
                </div>

            <div class="row">
            <div class="col">
                <div class="input">
                    <label style="color: #FFFFFF;">Lantai</label>
                    <select class="form-select" aria-label="Default select example" name="lantai">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
            <div class="col">
                <div class="input">
                    <label style="color: #FFFFFF;">Dinding</label>
                    <select class="form-select" aria-label="Default select example" name="dinding">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Kaca</label>
                    <select class="form-select" aria-label="Default select example" name="kaca">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Bau</label>
                    <select class="form-select" aria-label="Default select example" name="bau">
                        <option value=""></option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Sabun</label>
                    <select class="form-select" aria-label="Default select example" name="sabun">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Habis">Habis</option>
                        <option value="Hilang">Hilang</option>
                    </select>
                </div><br>
                
                <input class= "btn" style="background-color: #778899; color: #FFFFFF;" type="submit" name="submit" value="Simpan">
            </form>
        </div>
    </div>
</body>
</html>
