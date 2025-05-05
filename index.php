<?php
session_start();
session_destroy();
include 'config/database.php';

$qry_tatib = "SELECT * FROM jenis_tatib";
$exe_tatib = mysqli_query($db, $qry_tatib);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Aplikasi Tata Tertib</title>
    <link rel="stylesheet" href="view/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon fa-book"></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h3>SELAMAT DATANG DI WEBSITE</h3>
                    <h1>TATA TERTIB MAHASISWA POLINEMA</h1>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="tatib.php">Tatib</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </header>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; 2023 By Kelompok 5</p>
        </footer>

    </div>

    <!-- BG -->
    <div id="bg"></div>

</body>
</html>
