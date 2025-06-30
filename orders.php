<?php
@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Your Orders</title>

   <!-- Font Awesome for icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <style>
      body {
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         background-color: #f9fafb;
         margin: 0;
         padding: 0;
      }

      .container {
         max-width: 900px;
         margin: 40px auto;
         padding: 0 20px;
      }

      h1.title {
         font-size: 3rem;
         color: #0f172a;
         margin-bottom: 30px;
      }

      .box {
         background-color: #fff;
         border: 1px solid #e2e8f0;
         border-radius: 12px;
         padding: 25px;
         margin-bottom: 25px;
         box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
      }

      .box p {
         font-size: 1.6rem;
         margin: 10px 0;
         color: #1e293b;
      }

      .box span {
         font-weight: normal;
         color: #475569;
      }

      .status {
         display: inline-block;
         padding: 4px 12px;
         font-size: 1.4rem;
         font-weight: bold;
         border-radius: 20px;
         color: white;
      }

      .status-pending {
         background-color: #f97316;
      }

      .status-paid {
         background-color: #22c55e;
      }

      .heading {
         text-align: center;
         background: #fff;
         padding: 30px;
         border-bottom: 1px solid #e2e8f0;
         margin-bottom: 20px;
      }

      .heading h3 {
         font-size: 2.5rem;
         color: #1e293b;
      }

      .heading p {
         font-size: 1.4rem;
         color: #64748b;
         margin-top: 5px;
      }

      .heading p a {
         color: #e84393;
         text-decoration: none;
      }

      .heading p a:hover {
         text-decoration: underline;
      }

      .empty {
         font-size: 1.8rem;
         color: #e11d48;
         text-align: center;
         margin-top: 2rem;
      }
   </style>
</head>
<body>

<?php @include 'header.php'; ?>

<section class="heading">
   <h3>Your Orders</h3>
   <p><a href="home.php">Home</a> / Order</p>
</section>

<div class="container">
   <h1 class="title">Placed Orders</h1>

   <?php
   $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
   if(mysqli_num_rows($select_orders) > 0){
      while($fetch_orders = mysqli_fetch_assoc($select_orders)){
   ?>
   <div class="box">
      <p>Placed on: <span><?php echo $fetch_orders['placed_on']; ?></span></p>
      <p>Name: <span><?php echo $fetch_orders['name']; ?></span></p>
      <p>Number: <span><?php echo $fetch_orders['number']; ?></span></p>
      <p>Email: <span><?php echo $fetch_orders['email']; ?></span></p>
      <p>Address: <span><?php echo $fetch_orders['address']; ?></span></p>
      <p>Payment Method: <span><?php echo $fetch_orders['method']; ?></span></p>
      <p>Your Orders: <span><?php echo $fetch_orders['total_products']; ?></span></p>
      <p>Total Price: <span>$<?php echo $fetch_orders['total_price']; ?></span></p>
      <p>Payment Status: 
         <span class="status <?php echo ($fetch_orders['payment_status'] == 'pending') ? 'status-pending' : 'status-paid'; ?>">
            <?php echo $fetch_orders['payment_status']; ?>
         </span>
      </p>
   </div>
   <?php
      }
   } else {
      echo '<p class="empty">No orders placed yet!</p>';
   }
   ?>
</div>

<?php @include 'footer.php'; ?>

</body>
</html>
