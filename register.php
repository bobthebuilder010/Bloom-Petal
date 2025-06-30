<?php
@include 'config.php';
@include 'header.php';

if(isset($_POST['submit'])){

   $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $name = mysqli_real_escape_string($conn, $filter_name);
   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));
   $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);
   $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'User already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'Passwords do not match!';
      }else{
         mysqli_query($conn, "INSERT INTO `users` (name, email, password) VALUES ('$name', '$email', '$pass')") or die('query failed');
         $message[] = 'Registered successfully!';
         header('location:login.php');
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <style>
      * {
         box-sizing: border-box;
         margin: 0;
         padding: 0;
         font-family: 'Rubik', sans-serif;
      }
      body {
         background-color: #fff;
         color: #1c1c1c;
      }
      .form-container {
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         padding: 2rem;
      }
      form {
         background: #fff;
         padding: 3rem;
         border-radius: 10px;
         box-shadow: 0 0 15px rgba(0,0,0,0.05);
         width: 100%;
         max-width: 400px;
         text-align: center;
      }
      form h3 {
         font-size: 2.2rem;
         margin-bottom: 1.5rem;
         color: #1c1c1c;
      }
      .box {
         width: 100%;
         padding: 1.2rem 1.4rem;
         margin: 0.8rem 0;
         font-size: 1.4rem;
         border: 1px solid #ddd;
         border-radius: 6px;
         background-color: #f9f9f9;
      }
      .btn {
         margin-top: 1rem;
         background-color: #ff6b81;
         color: #fff;
         border: none;
         padding: 1rem;
         width: 100%;
         font-size: 1.5rem;
         border-radius: 6px;
         cursor: pointer;
         transition: background 0.3s ease;
      }
      .btn:hover {
         background-color: #ff4f6d;
      }
      form p {
         margin-top: 1.5rem;
         font-size: 1.3rem;
         color: #555;
      }
      form p a {
         color: #ff6b81;
         text-decoration: none;
         font-weight: 500;
      }
      form p a:hover {
         text-decoration: underline;
      }
      .message {
         background: #ffe6ea;
         color: #d1003f;
         padding: 1rem;
         margin: 1rem auto;
         width: 100%;
         max-width: 400px;
         border-left: 5px solid #ff4f6d;
         border-radius: 4px;
         position: relative;
      }
      .message i {
         position: absolute;
         right: 1rem;
         top: 1rem;
         cursor: pointer;
      }
   </style>
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $msg){
      echo '
         <div class="message">
            <span>'.$msg.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
      ';
   }
}
?>

<section class="form-container">
   <form action="" method="post">
      <h3>Create Account</h3>
      <input type="text" name="name" class="box" placeholder="Your Name" required>
      <input type="email" name="email" class="box" placeholder="Your Email" required>
      <input type="password" name="pass" class="box" placeholder="Password" required>
      <input type="password" name="cpass" class="box" placeholder="Confirm Password" required>
      <input type="submit" class="btn" name="submit" value="Create Account">
      <p>Already have an account? <a href="login.php">Login</a></p>
   </form>
</section>

<?php @include 'footer.php'; ?>

</body>
</html>
