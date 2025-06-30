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

<header class="modern-header">
  <style>
    .modern-header {
      background-color: #fff;
      border-bottom: 1px solid #eee;
      padding: 15px 40px;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .modern-header .logo img {
      height: 40px;
      display: block;
    }

    .modern-header nav ul {
      display: flex;
      list-style: none;
      gap: 40px;
      margin: 0;
      padding: 0;
    }

    .modern-header nav ul li {
      position: relative;
    }

    .modern-header nav ul li a {
      color: #333;
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
      padding: 5px 0;
    }

    .modern-header nav ul li:hover > ul {
      display: block;
    }

    .modern-header nav ul ul {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background: white;
      border: 1px solid #ddd;
      padding: 10px 0;
      min-width: 150px;
      z-index: 100;
    }

    .modern-header nav ul ul li {
      padding: 5px 20px;
    }

    .modern-header nav ul ul li a {
      font-size: 15px;
    }

    .icons {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-top: 10px;
    }

    .icons a {
      color: #333;
      text-decoration: none;
      font-size: 16px;
      position: relative;
    }

    .icons .fa-bars {
      display: none;
    }

    .icons .login-btn {
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .icons .signup-btn {
      padding: 6px 12px;
      border-radius: 5px;
      background-color: #f77f96;
      color: #fff;
    }

    .icons a span {
      font-size: 13px;
      color: #f77f96;
    }

    .account-box {
      display: none;
      position: absolute;
      top: 80px;
      right: 40px;
      background: #fff;
      border: 1px solid #ddd;
      padding: 15px;
      font-size: 14px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .account-box p {
      margin: 5px 0;
    }

    .account-box .delete-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 5px 12px;
      background-color: #f77f96;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    @media (max-width: 768px) {
      .modern-header nav ul {
        flex-direction: column;
        gap: 10px;
      }

      .icons {
        margin-top: 10px;
        flex-wrap: wrap;
      }
    }
  </style>

  
  <a href="home.php" class="logo">
    <img src="images/Screenshot 2025-06-30 040220_prev_ui.png" alt="Bloom & Petal Logo">
  </a>

  <nav class="navbar">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="#">Pages +</a>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="orders.php">Orders</a></li>
      <li><a href="#">Account +</a>
        <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <div class="icons">
    <a href="search_page.php"><i class="fas fa-search"></i></a>
    <a href="login.php" class="login-btn"><i class="fas fa-sign-in-alt"></i> Login</a>
    <a href="register.php" class="signup-btn"><i class="fas fa-user-plus"></i> Sign Up</a>

    <?php
      $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      $cart_num_rows = mysqli_num_rows($select_cart_count);
    ?>
    <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
  </div>

  <div class="account-box">
    <p>Username: <span><?php echo $_SESSION['user_name']; ?></span></p>
    <p>Email: <span><?php echo $_SESSION['user_email']; ?></span></p>
    <a href="logout.php" class="delete-btn">Logout</a>
  </div>
</header>

<!-- Load Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
