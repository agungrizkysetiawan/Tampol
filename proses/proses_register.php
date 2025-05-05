<?php
include '../../config/database.php';

if (isset($_POST['login_admin'])) {
    $username = $db->real_escape_string(addslashes(trim($_POST['username'])));
    $password = $db->real_escape_string(sha1($_POST['password']));

    $q = "INSERT INTO user (username, password)
    VALUES ('$username', '$password')";
    
    // Eksekusi query
    $e = mysqli_query($db, $q);

    // Periksa apakah pengguna berhasil terdaftar
    if ($e) {
        // Jika berhasil, set session dan redirect ke halaman index
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        echo "<script>window.location = '../index.php'</script>";
    } else {
        // Jika gagal, redirect kembali ke halaman register dengan pesan kesalahan
        echo "<script>window.location = '../register.php?alert=gagal'</script>";
    }
}

?>