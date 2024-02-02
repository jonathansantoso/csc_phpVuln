<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
    <link rel="stylesheet" href="style.css"> <!--styling -->
</head>
<body>
    <form action="./controller.php" method="POST">
        <h1>form login</h1>
        <section class="rowInput">
            <label for="username">username</label>
            <!-- payload: jonathan' OR 1=1 #' -->
            <input type="text" name="username" id="username" value="<?= $_SESSION["username"] ?? ''?>">
        </section>
        <section class="rowInput">
            <label for="password">password</label>
            <input type="password" name="password" id="password" value="<?= $_SESSION["password"] ?? ''?>">
        </section>
        <input type="submit" value="submit" name="login">
    </form>
    <h1 class="err"><?= $_SESSION["error-message"]?></h1>
</body>
</html>