<?php
session_start();
include "connect.php";

$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";
$remember = isset($_POST['remember']); // Check if remember me is checked

if (!empty($_POST['submit_validate'])) {
    $query = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' && password = '$password'");
    $hasil = mysqli_fetch_array($query);

    if ($hasil) {
        $_SESSION['username_simsditp'] = $username;
        $_SESSION['level_simsditp'] = $hasil['level'];
        $_SESSION['id_simsditp'] = $hasil['id'];

        if ($remember) {
            setcookie('username_simsditp', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('password_simsditp', $_POST['password'], time() + (86400 * 30), "/"); // Store the plain password temporarily (not recommended for production)
        } else {
            setcookie('username_simsditp', '', time() - 3600, "/");
            setcookie('password_simsditp', '', time() - 3600, "/");
        }

        header('location:../home');
    } else { ?>
        <script>
            alert('username atau password yang anda masukan salah');
            window.location = '../login'
        </script>
        <?php
    }
}
?>
