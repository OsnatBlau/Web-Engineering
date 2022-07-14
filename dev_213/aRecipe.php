
<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mealy - a Recipe</title>
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
    <header class="d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a href="#"> <img src="images/Logo.png" alt="Logo" class="img-fluid logo"></a>
        </div>
        <nav>
            <ul class="d-flex justify-content-around">
                <a href="homepage.php">
                    <li>Home</li>
                </a>
                <a href="recipes.php">
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

    <main id="the-recipe">
        <h2>Cucumber Salad with Vinegar</h2>
        <img src="images/Cucumber-Vinegar-Salad.jpg">
        <div id="instructions">
            <h3>Ingredients</h3>
            <ul class="ingredients">
                <li>6 Persian cucumbers</li>
                <li>2 teaspoons granulated sugar</li>
                <li>½ teaspoon salt</li>
                <li>1 cup thinly sliced red onion</li>
                <li>¼ cup white-wine vinegar</li>
                <li>2 tablespoons chopped fresh dill</li>
                <li>¼ teaspoon ground pepper</li>
            </ul>
            <h3>Instructions</h3>
            <p>
                Using a knife to slice thinly sliced ​​cucumbers.
                Place the cucumber in a colander over a large bowl. mix with sugar and salt. Leave
                at room temperature for 30 minutes.
                <br>
                Transfer the liquid-free cucumbers to a dry bowl and mix with onion, vinegar, dill
                and pepper.
                Leave at room temperature for 15 minutes. Serve immediately or refrigerate for up to
                3 days.
            </p>
        </div>
        
        <a href="recipes.php">
            <button type="button" class="button">Choose Another Recipe</button>
        </a>
    </main>
                        
    <footer>
        <div class = "logout">
          <a href="logout-Y.php"><button type="button" class="btn btn-warning">log out</button></a>
        </div>
    </footer>
</body>

</html>