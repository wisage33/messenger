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
    <title>Registration</title>
</head>
<body>
<<<<<<< HEAD
<<<<<<< main
<form action="../model/reg.php" method="post">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="reg_user">Registration</button>
</form>
=======
=======
>>>>>>> b457f62df3b69c22e4c6dcbecc02aa71c099fecb
    <form action="../model/reg.php" method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="reg_user">Registration</button>
    </form>
    <div class="message">
        <?php if (isset($_SESSION['message'])): ?>
        <?= $_SESSION['message']; ?>
<<<<<<< HEAD
        <?php unset($_SESSION['message']); ?>
        <? endif ?>
    </div>
>>>>>>> local
=======
        <? endif ?>
    </div>
>>>>>>> b457f62df3b69c22e4c6dcbecc02aa71c099fecb
</body>
</html>
