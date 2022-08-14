<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   


<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>



<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Login</h1>
</div>



<section class="booking">

   <h1 class="heading-title">LOGIN YOUR DETAILS</h1>

   <form action="login_from.php" method="post" class="book-form">

      <div class="flex">
         
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         
         
         
         <div class="inputBox">
            <span>Password</span>
            <input type="password" placeholder="enter your password" name="password">
         </div>
         
         
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>




















<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="login.php"><i class="fas fa-angle-right"></i>Login</a>
      </div>

      

   </div>

   <div class="credit"> created by <span>Vishwajeet Narayan , Vinayak Dubey , Sandesh Bhatt</span> | all rights reserved! </div>

</section>











<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

</body>
</html>