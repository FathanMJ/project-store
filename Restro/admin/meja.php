<!DOCTYPE html>
<html><?php
session_start();
include('config/config.php');
include('config/checklogin.php');
check_login();
require_once('partials/_head.php');
require_once('partials/_analytics.php');
?>
<head>
    <title>Booking Meja Restoran</title>
</head>
<body>
<!-- For more projects: Visit codeastro.com  -->
  <!-- Sidenav -->
  <?php
  require_once('partials/_sidebar.php');
  ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <?php
    require_once('partials/_topnav.php');
    ?>
    <!-- Header -->
    
    <h1>Booking Meja Restoran</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="tanggal">Tanggal:</label><br>
        <input type="date" id="tanggal" name="tanggal" required><br><br>
        <label for="waktu">Waktu:</label><br>
        <input type="time" id="waktu" name="waktu" required><br><br>
        <label for="no_meja">No Meja:</label><br>
        <input type="number" id="no_meja" name="no_meja" min="1" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Proses form jika sudah di-submit
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $tanggal = $_POST["tanggal"];
        $waktu = $_POST["waktu"];
        $no_meja = $_POST["no_meja"];

        // Simpan informasi booking ke database atau lakukan tindakan lain sesuai kebutuhan
        // Contoh sederhana: hanya menampilkan informasi booking
        echo "<h2>Booking Details:</h2>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Tanggal: " . $tanggal . "<br>";
        echo "Waktu: " . $waktu . "<br>";
        echo "No Meja: " . $no_meja . "<br>";
    }
    ?>
</body>
</html>
