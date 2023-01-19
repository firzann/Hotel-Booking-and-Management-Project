<?php

@include 'db.php';

session_start();

if(isset($_POST['submit'])){

   $firstname = mysqli_real_escape_string($con, $_POST['userfirstname']); 
   $lastname = mysqli_real_escape_string($con, $_POST['userlastname']);
   $title = mysqli_real_escape_string($con, $_POST['usertitle']);
   $phone = mysqli_real_escape_string($con, $_POST['userphone']);
   $email = mysqli_real_escape_string($con, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE firstname = '$firstname' && lastname = '$lastname' && title = '$title' && phone = '$phone' && email = '$email' && password = '$pass'";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'password not mathched!';
      }else{
         $insert = "INSERT INTO user_form(firstname, lastname, title, phone, email, password) VALUES('$firstname', '$lastname', '$title', '$phone', '$email','$pass')";
         mysqli_query($con, $insert);
         header('location:login_form.php');
      }
   }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleloginregister.css">
    <title>Register</title>
</head>
<body>
      <div class="form-container">

      <form action="" method="post">
         <h3 class="title">register now</h3>
         <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               }
            }
         ?>
         <input type="email" name="usermail" placeholder="enter your email" class="box" required>
         <input type="text" pattern="[A-Za-z]+" name="userfirstname" placeholder="enter your first name" class="box" required>
         <input type="text" pattern="[A-Za-z]+" name="userlastname" placeholder="enter your last name" class="box" required>
         <!-- <input type="title" name="usertitle" placeholder="choose your title" class="box" required> -->
         <label class="title" for="title">Choose title:</label>
            <select id="title" name="usertitle">
               <option value="Mr">Mr.</option>
               <option value="Mrs">Mrs.</option>
               <option value="Ms">Ms.</option>
            </select>
         <input type="number" name="userphone" placeholder="enter your phone number" class="box" required>
      
         <input type="password" name="password" placeholder="enter your password" class="box" required>
         <input type="password" name="cpassword" placeholder="confirm your password" class="box" required>
         <input type="submit" value="register now" class="form-btn" name="submit">
         <p>already have an account? <a href="login_form.php">login now!</a></p>
      </form>

   </div>
</body>
</html>