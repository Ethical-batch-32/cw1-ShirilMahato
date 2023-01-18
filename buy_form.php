<?php

   $connection = mysqli_connect('localhost','root','','laptop');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $laptop = $_POST['laptop'];
      $number = $_POST['number'];
      $request = " insert into buy_form(name, email, phone, address, laptop, number) values('$name','$email','$phone','$address','$laptop','$number') ";
      mysqli_query($connection, $request);

      header('location:home.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>