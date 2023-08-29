<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('connect.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = md5('$password')";
    $res = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($res);
    if ($rows > 0) {
        $_SESSION['usernameAdmin'] = $username;
        while ($row = mysqli_fetch_assoc($res)) {
            $_SESSION['id-Admin'] = $row['id'];
        }
        header('location:shop.php');
        exit();
    } else {
        $_SESSION['error'] = 'tên đăng nhập hoặc mật khẩu không hợp lệ!';
        header('location:login.php?eror=wrog');
        exit();
    }
}
?>