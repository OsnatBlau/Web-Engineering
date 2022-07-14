<?php
   session_start();
   include 'db/db.php'; 
   
   
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form 
      $query  = "SELECT * FROM  dev_213_users_new WHERE email='" 
      . $_POST["Email"] 
      . "' and password = '"
      . $_POST["password"]
      ."'";

  $result = mysqli_query($connection , $query);
  $row    = mysqli_fetch_assoc($result);

  if(is_array($row)) {
      

      session_start();
      $_SESSION["user_id"]     = $row['user_id'];
      


      header('Location: '.URL.'homepage.php');
  } else {
      echo 'Authentication failed !';
      $message = "Invalid username or password !";
  }
}



      
