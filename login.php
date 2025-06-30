<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <style>
      * {
         margin: 0; padding: 0;
         box-sizing: border-box;
         font-family: 'Segoe UI', sans-serif;
      }

      body {
         background-color: #fff;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         color: #222;
      }

      .form-container {
         width: 100%;
         max-width: 400px;
         padding: 30px;
         border-radius: 12px;
         box-shadow: 0 4px 20px rgba(0,0,0,0.05);
         text-align: center;
      }

      .form-container h3 {
         font-size: 24px;
         margin-bottom: 30px;
         color: #1c1c1c;
      }

      .form-container .box {
         width: 100%;
         padding: 12px 14px;
         margin-bottom: 20px;
         border: 1px solid #ccc;
         border-radius: 8px;
         font-size: 16px;
         outline: none;
         transition: 0.3s;
      }

      .form-container .box:focus {
         border-color: #f77f96;
         box-shadow: 0 0 0 2px rgba(247, 127, 150, 0.2);
      }

      .form-container .btn {
         width: 100%;
         padding: 12px;
         background-color: #f77f96;
         color: white;
         border: none;
         border-radius: 8px;
         font-size: 16px;
         cursor: pointer;
         transition: background-color 0.3s;
      }

      .form-container .btn:hover {
         background-color: #e76486;
      }

      .form-container p {
         margin-top: 20px;
         font-size: 14px;
         color: #555;
      }

      .form-container p a {
         color: #f77f96;
         text-decoration: none;
         font-weight: bold;
      }

      .form-container p a:hover {
         text-decoration: underline;
      }

      .message {
         position: fixed;
         top: 15px;
         left: 50%;
         transform: translateX(-50%);
         background-color: #ffe6e9;
         color: #c0392b;
         padding: 12px 20px;
         border-radius: 6px;
         box-shadow: 0 2px 8px rgba(0,0,0,0.1);
         display: flex;
         align-items: center;
         gap: 10px;
         z-index: 1000;
      }

      .message i {
         cursor: pointer;
      }

      .forgot-link {
         display: block;
         margin-bottom: 15px;
         font-size: 14px;
         color: #f77f96;
         text-align: left;
         margin-top: -10px;
      }

      .forgot-link:hover {
         text-decoration: underline;
      }
   </style>
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<section class="form-container">

   <form action="" method="post">
      <h3>Login</h3>
      <input type="email" name="email" class="box" placeholder="your@email.com" required>
      <input type="password" name="pass" class="box" placeholder="Password" required>
      <a href="#" class="forgot-link">Forgot Password?</a>
      <input type="submit" class="btn" name="submit" value="Login">
      <p>Don't have an account? <a href="register.php">Sign Up</a></p>
   </form>

</section>

</body>
</html>
