<?php
session_start();
require_once '../../config/connection.php';

if (isset($_POST['auth_user'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE login = :login");
    $stmt->execute([
        ':login' => $login
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password']))
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'login' => $user['login']
        ];
        header('Location: ../../../index.php');
        exit();
    }
}