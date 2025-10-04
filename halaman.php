<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
        <h1>Form login</h1>
            <label for="">Username</label>
        <br>
            <input type="text" name="username">
        <br><br>
            <label for="">Password</label>
        <br>
            <input type="password" name="password">
        <br><br>
            <input type="submit" value="Login" id="submit">

            <p>Tidak punya akun? yuk, <a href="halaman2.php">buat dulu!</a></p>
        </form>
    </div>
</body>
</html>