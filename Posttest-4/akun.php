<?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $ttl = $_POST['ttl'];
        $email = $_POST['email'];
        $pword = $_POST['pword'];

        // $show = $_POST['nama'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKUN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gambar/profil.png">
    <style>
        .h-list a.profil {
            background-color: #00ABE0;
            color: white;
        }
        .h-list a.profil:hover {
            color: black;
        }
        .h-list a.home {
            background-color: #00DEFF;
            color: black;
        }
        .h-list a.home:hover {
            color: white;
        }
        .n-logo {
            padding: 15px;
        }
        .m-profil {
            text-align: center;
            margin-bottom: 10px;
        }
        table {
            margin-top: 20px;
            margin-left: 450px;
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
                <a onclick="menu()" class="menu-resep" href="#Sambal">Sambal</a>
                <a onclick="menu()" class="menu-resep" href="#Sayuran">Sayuran</a>
                <a onclick="menu()" class="menu-resep" href="#Ikan">Ikan</a>
                <a onclick="menu()" class="menu-resep" href="#Daging">Daging</a>
                <a onclick="menu()" class="menu-resep" href="#Ayam">Ayam</a>
        </div>
    </div>
    <div class="navbar">
        <div class="n-logo">
            <p class="logo">MariMasak</p>
            <p class="teks">Kumpulan Resep Masakan Indonesia</p>
        </div>
    </div>
    <div class="main">
        <h3 class="m-profil">Profil Anda</h3>
        <table>
            <tr>
                <td width="100px">Nama</td>
                <td width="20px"> : </td>
                <td width="150px"><?=$_POST['nama']?></td>
                <td class="profil" rowspan="5" width="50px"><img src="gambar/profil.png"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td> : </td>
                <td><?=$_POST['ttl']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td><?=$_POST['email']?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td> : </td>
                <td><?=$_POST['pword']?></td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <div class="f-teks">
            <p>@Copyright 2022 - by Asril M.F</p>
        </div>
    </div>
</body>
</html>