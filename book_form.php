<?php
   // DB Connection 
   $connection = mysqli_connect('localhost','root','');
   if(!$connection)
   {
      echo "Not Connected to the database server";
   }
   if(!mysqli_select_db($connection,"book_db"))
   {
      echo "Database Not avvailable";
   }
   // Post adding
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
      if(!mysqli_query($connection,$request))
      {
         echo "Coud Not Inserted";
      }

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>