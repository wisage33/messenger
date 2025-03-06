<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
</head>
<body>
    <form action="../model/auth.php" method="post">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="auth_user">Enter</button>
        </form>
</body>
</html>