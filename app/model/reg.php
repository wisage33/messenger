<?php
session_start();
require_once ("C:/OSPanel/domains/practic/config/connection.php");

if (isset($_POST['reg_user'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (login, password) VALUES (:login, :password)");
    $stmt->execute([
        ":login" => $login,
        ":password" => $hashedPassword
    ]);
    $conn = null;
    $_SESSION['message'] = 'Registration successful';
    header("Location: ../view/register.php");
    exit();
}
?>
