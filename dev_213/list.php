<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mealy - Inventory</title>
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
    <!-- font aswame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                <a href="recipes.php">
                    <li>Recipes</li>
                </a>
                <a href="#">
                    <li class="active">Inventory</li>
                </a>
                <a href="form.php">
                    <li>Contact</li>
                </a>
            </ul>
        </nav>
    </header>

    <div class="bkgimg"> </div>

    <main class="listmain">
        <h1> My Fridge Contents</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Item name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Expiry date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //get data from DB
                        $query = "SELECT * FROM dev_213_item";
                        $result = mysqli_query($connection,$query);
                        if (!$result)
                            die("DB query failed.");

                        //use return data (if any)
                        $results = mysqli_query($connection, "SELECT * FROM dev_213_item ORDER BY id_item");
                        while($row = mysqli_fetch_array($results)) {
                    ?>
                        <tr>
                            <th scope="row">
                                <?php echo $row['id_item']?>
                                <form method="post"> 
                                    <input type="submit" name="delete" value="delete">
                                    <input type="hidden" name="vin" value="'.$row['vin'].'">
                                    <?php
                                    if(isset($_REQUEST['delete']))
                                        {
                                            $sql_s =" DELETE FROM `dev_213_item` 
                                                      WHERE id_item='".$_SESSION['use_i']."' 
                                                      AND vin='".$_REQUEST['vin']."' ";
                                        }
                                ?>
                                </form>
                            </th>
                            <td><?php echo $row['item_name']?></td>
                            <td><?php echo $row['Amount']?></td>
                            <td><?php echo $row['Expriy_date']?></td>
                        </tr>
                    <?php
                        }
                    ?>
                    <?php 
                        //release returned data
                        mysqli_free_result($result);
                    ?>



                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>
            <button type="button" class="button" onclick="showMsg();">Add Another Item</button>
            <form style="visibility:hidden" name="addItem" method="GET" action="config.php">
                <div class="form-group">
                    <label for="Name">Item Name</label>
                    <input class="form-control" type="text" placeholder="Name" name="Name" required>
                </div>
                <div class="form-group">
                    <label for="number">Amount</label>
                    <input class="form-control" type="number" placeholder="Amount" name="Amount" required>
                </div>
                <div class="form-group">
                    <label for="date">Expiry Date</label>
                    <input class="form-control" type="date" placeholder="Expriy_date" min="2022-07-15" name="Expiry_date" required>
                </div>
                <div class="form-submit">
                    <a href="list.php" onclick="submitForm()">
                        <input type="submit" value="Add New Item" class="button">
                    </a>
                </div>
                <div id="successMessage"> 
                    Thank you! Your item has been add.
                </div>
            </form>

            <script>
                function showMsg(){
                    document.addItem.style.visibility="visible";
                }
                function submitForm() {
                    let form = document.getElementById("form-submit");
                    document.getElementById("successMessage").style.cssText = 'opacity: 1';
                    setTimeout(() => form.submit(), 2000);
                }
            </script>
            <?php
                $Name = 'Name';
                $Amount = 'Amount';
                $Expriy_date = 'Expriy_date';
                $sql = "INSERT INTO dev_213_item (`item_name`,`Amount`,`Expriy_date`) 
                        VALUES ('$Name','$Amount','$Expriy_date')";
                if(!mysqli_query($connection,$sql)) {
                    echo 'Data not inserted';
                }
            ?>
        </div>
    </main>

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

