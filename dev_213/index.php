<?php
    include 'db/db.php';
    include 'login-session.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Mealy</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght" rel="stylesheet">
    <link rel="logo icon" href="images/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="connect" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <link rel="connect" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
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