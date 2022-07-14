<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mealy - Recipes</title>
    <link rel="logo icon" href="images/Logo.png">
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

</head>

<body>
    <?php
        include 'db/db.php';
        include 'login-session.php';
    ?>
    <header class="d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a href="#"> <img src="images/Logo.png" alt="Logo" class="img-fluid logo"></a>
        </div>
        <nav>
            <ul class="d-flex justify-content-around">
                <a href="homepage.php">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li class="active">Recipes</li>
                </a>
                <a href="list.php">
                    <li>Inventory</li>
                </a>
                <a href="form.php">
                    <li>Contact</li>
                </a>
            </ul>
        </nav>
    </header>

    <main>
        <div id="wrapper">
            <h1>My Recipes</h1>

            <div class="d-flex flex-wrap justify-content-center card_recipe">

            <?php
                //get data from DB
                $query = "SELECT 'Permission' FROM dev_213_users_new";
                $result = mysqli_query($connection,$query);
                if (!$result)
                    die("DB query failed.");
            ?>
                <div class="card mb-3 jaune">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/Cucumber-Vinegar-Salad.jpg" class="img-fluid rounded-start"
                                alt="Concombre">
                        </div>
                        <div class="col-md-8">
                            <a href="aRecipe.php">
                            <div class="card-body">
                                <h2 class="card-title">Cucumber Salad with Vinegar</h2>
                                <!-- נותן אופציה למחוק רק אם המשתמש הוא אדמין -->
                                <?php
                                    if ($_SESSION["user_id"] == 1)
                                    { 
                                ?>
                                        <form method="get"> 
                                            <input type="submit" name="delete" value="delete" class="button">
                                            <input type="hidden" name="vin" value="'.$row['vin'].'">
                                            <?php
                                                if(isset($_REQUEST['delete']))
                                                    {
                                                        $sql_s =" DELETE FROM `dev_213_recipes` 
                                                                    WHERE `id_recipe`=3";
                                                    }
                                            ?>
                                        </form>
                                <?php
                                    }
                                ?>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 jaune">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/Pizza.png" class="img-fluid rounded-start"
                                alt="Concombre">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title">Healthy Pizza</h2>
                                <!-- נותן אופציה למחוק רק אם המשתמש הוא אדמין -->
                                <?php
                                    if ($_SESSION["user_id"] == 1)
                                    { 
                                ?>
                                        <form method="get"> 
                                            <input type="submit" name="delete" value="delete" class="button">
                                            <input type="hidden" name="vin" value="'.$row['vin'].'">
                                            <?php
                                                if(isset($_REQUEST['delete']))
                                                    {
                                                        $sql_s =" DELETE FROM `dev_213_recipes` 
                                                                    WHERE `id_recipe`=1";
                                                    }
                                            ?>
                                        </form>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 jaune">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/Pasta.png" class="img-fluid rounded-start"
                                alt="Concombre">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title">Red Pasta</h2>
                                <!-- נותן אופציה למחוק רק אם המשתמש הוא אדמין -->
                                <?php
                                    if ($_SESSION["user_id"] == 1)
                                    { 
                                ?>
                                        <form method="get"> 
                                            <input type="submit" name="delete" value="delete" class="button">
                                            <input type="hidden" name="vin" value="'.$row['vin'].'">
                                            <?php
                                                if(isset($_REQUEST['delete']))
                                                    {
                                                        $sql_s =" DELETE FROM `dev_213_recipes` 
                                                                    WHERE 'id_recipe'=4";
                                                    }
                                            ?>
                                        </form>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 jaune">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/Hamburger.png" class="img-fluid rounded-start"
                                alt="Concombre">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title">Hamburger</h2>
                                <!-- נותן אופציה למחוק רק אם המשתמש הוא אדמין -->
                                <?php
                                    if ($_SESSION["user_id"] == 1)
                                    { 
                                ?>
                                        <form method="get"> 
                                            <input type="submit" name="delete" value="delete" class="button">
                                            <input type="hidden" name="vin" value="'.$row['vin'].'">
                                            <?php
                                                if(isset($_REQUEST['delete']))
                                                    {
                                                        $sql_s =" DELETE FROM `dev_213_recipes` 
                                                                    WHERE 'id_recipe'=2";
                                                    }
                                            ?>
                                        </form>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                //release returned data
                mysqli_free_result($result);
            ?>
        </div>
    </main>

    <section class="bkgjaune">
        <div class="d-flex flex-wrap ">
            <img src="images/jus.jpeg" alt="jus" class="img-fluid taille">
            <div class="bkgwhite" style="width: auto;">
                <h2>Juice Coc​ktails</h2>
                <a href="#">
                    <button type="button" class="btn btn-warning">check out!</button>
                </a>
            </div>
        </div>

        <div class="d-flex flex-wrap ">
            <div class="bkgwhite othertop" style="width: auto;">
                <h2>Great Salads</h2>
                <a href="#">
                    <button type="button" class="btn btn-warning">check out!</button>
                </a>
            </div>
            <img src="images/salade.jpeg" alt="salade" class="img-fluid saladetaille">
        </div>

    </section>

    <footer>
        <div class = "logout">
          <a href="logout-Y.php"><button type="button" class="btn btn-warning">log out</button></a>
        </div>
    </footer>
    <?php
        //close DB connection
        mysqli_close($connection);
    ?>
</body>

</html>