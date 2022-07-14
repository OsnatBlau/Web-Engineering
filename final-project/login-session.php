<?php
   session_start();
   include 'db/db.php'; 
   include 'error/error.php';
   
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form 
      
      $email = mysqli_real_escape_string($connection,$_POST['Email']);
      $password = mysqli_real_escape_string($connection,$_POST['password']); 
      
      $sql = "SELECT user_id FROM dev_213_users_new WHERE email = '$email' and 'Password = '$password'";
      $result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $email and $Password, table row must be 1 row
      if (empty($email)) { array_push($errors, "Must enter password"); }
      if (empty($password)) { array_push($errors, " Must enter email "); }


      if($count == 1) {
         session_register("email");
         $_SESSION['Email'] = $email;
         
         header('location: homepage.php');
      }else {
         $error = "Your Email or Password is invalid";
      }
   }
?>


