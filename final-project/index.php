<?php
    include 'db/db.php';
    include 'login-session.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <form action="login-session.php" method="post">
            <div class="title">Login</div>
            <div class="input-box underline">
                <input type="email" name="Email" placeholder="Enter Your Email" required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter Your Password" pattern="[a-zA-Z0-9]{5}" required>
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="submit" name="" value="Continue">
            </div>
        </form>
    </div>
</body>

</html>