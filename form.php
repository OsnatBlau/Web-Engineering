<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mealy - Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- bootsrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <link rel="stylesheet" href="css/style.css" media="screen">
    <!-- font aswame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a href="#"> <img src="images/Logo.png" alt="Logo" class="img-fluid logo"></a>
            <a href="#"> <img src="images/icon-user.png" alt="user" class="img-fluid"></a>
        </div>
        <nav>
            <ul class="d-flex justify-content-around">
                <a href="homepage.php">
                    <li>Home</li>
                </a>
                <a href="recipes.php">
                    <li>Recipes</li>
                </a>
                <a href="list.php">
                    <li>Inventory</li>
                </a>
                <a href="#">
                    <li class="active">Contact</li>
                </a>
            </ul>
        </nav>
    </header>

    <main class="formmain">
        <div class="whterec d-flex">
            <div id="form-head">
                <img src="images/women.jpg" alt="women" class="img-fluid women">
                <h3>We will happy to hear you!</h3>
            </div>
            <form action="#" method="GET">
                <div class="form-group">
                    <label for="InputName">Your Name</label>
                    <input class="form-control" type="text" placeholder="Your Name" placeholder="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="email" placeholder="Your Email" placeholder="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Your Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="text"></textarea>
                </div>
                <div class="form-submit">
                    <a href="#" onclick="submitForm()">
                        <input type="submit" value="submit" class="button">
                    </a>
                </div>
                <div id="successMessage"> 
                    Thank you! Your message has been sent.
                </div>

                <script>
                    function submitForm() {
                        let form = document.getElementById("form-ubmit");
                        document.getElementById("successMessage").style.cssText = 'opacity: 1';
                        setTimeout(() => form.submit(), 2000);
                    }
                </script>
            </form>
        </div>
        
<!-- <?php
    $name=$_POST['name'];
    $phone=$_POST['email'];
    $message=$_POST['message'];

    echo "NAME-SUBMITTED : $name <br>";

    echo "PHOME-SUBMITTED :  $email <br>";

    echo "MESSAGE-SUBMITTED:  $message";
?> -->
    </main>

    <footer></footer>

</body>
</html>