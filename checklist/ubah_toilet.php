<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE toilet SET lokasi = '$lokasi', keterangan = '$keterangan' ";
    $sql .= "WHERE id = '{$id}'";
    $result = mysqli_query($koneksi, $sql);

    header('location: ind_toilet.php');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM toilet WHERE id = '{$id}'";
    $result = mysqli_query($koneksi, $sql);
    if (!$result) die('Error: Data tidak tersedia');
    $data = mysqli_fetch_array($result); 

    function is_select($var, $val) {
        if ($var == $val) return 'selected="selected"';
        return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="margin-top: 30px; background-color: #778899;">
    <div class="container" style="background-color: #FF69B4; width: 50%; padding: 30px;">
        <h1 style="color: #FFFFFF; text-align: center;">Ubah Data</h1>
        <div class="main">
            <form method="post" action="ubah_toilet.php" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-text">Lokasi</span>
                    <select class="form-select" aria-label="Default select example" name="lokasi">
                        <option value=""></option>
                        <option value="Office">Office</option>
                        <option value="Factory 1">Factory 1</option>
                        <option value="Factory 2">Factory 2</option>
                        <option value="Security">Security</option>
                    </select>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Keterangan</span>
                    <select class="form-select" aria-label="Default select example" name="keterangan">
                        <option value=""></option>
                        <option value="Sudah">Sudah</option>
                        <option value="Belum">Belum</option>
                    </select>
                </div>
                <div><br>
                    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                    <input class= "btn" style="background-color: #778899; color: #FFFFFF;" type="submit" name="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</body>
</html>