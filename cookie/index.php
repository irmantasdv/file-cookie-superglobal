<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form" action="login.php" method="post">
        <input type="text" minlength="4" name="name">
        <input type="password" minlength="4" name="password">
        <button type="submit" name="action">Login</button>
    </form>
</body>

</html>