<?php
session_start();
if (!isset($_SESSION['user']))
{
    header('Location: app/view/authorization.php');
    unset($_SESSION['user']);
    exit();
}
if (isset($_POST['exit_user']))
{
    unset($_SESSION['user']);
    header('Location: app/view/authorization.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
    <h1>Hello, <?= $_SESSION['user']['login']?></h1>
    <button type="submit" name="exit_user">Exit</button>
</body>
</html>
