<?php
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM kumpulan_resep");

    if(isset($_POST['submit'])) {
        $n_masakan = $_POST['n-masakan'];
        $a_masakan = $_POST['a-masakan'];
        $b_utama = $_POST['b-utama'];

        $kirim = mysqli_query($db, "INSERT INTO kumpulan_resep(nama_masakan, asal_makanan, bahan_utama) VALUES('$n_masakan', '$a_masakan', '$b_utama')");
        if($kirim) {
            header("Location:resep.php");
        } else {
            echo "INVALID !!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Resep Daging</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gambar">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery.js"></script>
    <style>
        .h-list a.home {
            background-color: #00DEFF;
            color: black;
        }
        .h-list a.home:hover {
            color: white;
        }
        .h-list a.menu-resep {
            background-color: #00ABE0;
            color: white;
        }
        .h-list a.menu-resep:hover {
            color: black;
        }
        .t-resep {
            margin-left: 210px;
        }
        h3 {
            text-align: center;
            margin-left: 280px;
        }
        .action {
            margin-left: 23px;
            color: green;
        }
        .action:hover {
            background-color: red;
            color: white;
        }
        .tambah {
            float: right;
            margin-right: 245px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="h-list">
                <a class="home" href="index.php">Beranda</a>
                <a class="register" href="register.php">Daftar</a>
                <a class="profil" href="akun.php">Profil</a>
                <a onclick="tentang()" class="aboutMe" href="aboutMe.php">Tentang Saya</a>
                <a class="menu-resep" href="resep.php">Daftar Resep</a>
                <a class="b-resep" href="buat.php">Buat Resep</a>
        </div>
    </div>
    <div class="navbar">
        <div class="n-logo">
            <p class="logo">MariMasak</p>
            <p class="teks">Kumpulan Resep Masakan Indonesia</p>
            <input type="text" placeholder="Cari resep...">
            <button class="cari" type="submit"><i class="fa fa-search"></i></button> <br>
            <br> 
            <br> <button class="mode" onclick="myFunction()">Switch Mode</button>
        </div>
    </div>
    <div class="main">
        <div class="m-resep">
            <div class="tambah">
                <a href="buat.php">
                    <img src="gambar/create.png"></img>
                </a>
            </div>
            <h3>Kumpulan Resep</h3>
            <div class="t-resep"> 
                <table border=1 width="825px">
                    <tr>
                        <th width="25px" class="nomor">No</th>
                        <th width="250px">Nama Masakan</th>
                        <th width="250px">Asal Masakan</th>
                        <th width="150px">Bahan Utama</th>
                        <th width="75px">Edit</th>
                        <th width="75px">Hapus</th>
                    </tr>
                    <?php 
                        $i = 1;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?=$i;?></td>
                        <td><?=$row['nama_masakan'] ?></td>
                        <td><?=$row['asal_makanan'] ?></td>
                        <td><?=$row['bahan_utama'] ?></td>
                        <td>
                            <a href="edit.php?id=<?=$row['id_resep'];?>">
                            <img src="gambar/edit.png" class="action"></img>
                            </a>
                        </td>
                        <td>
                            <a href="hapus.php?id=<?=$row['id_resep'];?>">
                                <img src="gambar/delete.png" class="action"></img>
                            </a>
                        </td>
                    </tr>
                    <?php
                        $i++;
                            }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="f-teks">
            <p>@Copyright 2022 - by Asril M.F</p>
        </div>
    </div>
</body>
</html>