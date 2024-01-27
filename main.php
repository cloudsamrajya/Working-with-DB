<?php
include 'connection.php';
if (isset($_POST["submit"])){
    $name = $_POST['name'];
    $contact= $_POST['contact'];
    $email = $_POST['email'];
    
    $sql = "INSERT into tname(name,contact,email) values ('$name','$contact','$email')";
    $result = mysqli_query($con,$sql);
    if($result){
      header('location:display.php');
    }


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





    <div class="container">
  <form method="post">
   Name <input type="text" name="name" >
   Contact <input type="number" name="contact">
Email <input type="text" name="email"><br>
 <input type="submit" name="submit">
  </form> 
 </div>
</body>
</html>