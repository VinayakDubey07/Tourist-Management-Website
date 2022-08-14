<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      

      $request = " insert into login_from(email, password) values('$email','$password') ";
      mysqli_query($connection, $request);
      echo "Details Submitted Successfully!" ;

      header('location:book.php'); 


   }else{
      echo 'something went wrong please try again!';
   }

?>