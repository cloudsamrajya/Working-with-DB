<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="select * from tname where id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$contact = $row['contact'];
$email=$row['email'];


if (isset($_POST["Update"])){

    $name = $_POST['name'];
    $contact= $_POST['contact'];
    $email = $_POST['email'];
    
    $sql = "UPDATE tname set id=$id, name='$name',contact='$contact',email='$email' where id=$id   ";
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
   Name <input type="text" name="name" value=<?php echo $name ?>>
   Contact <input type="number" name="contact" value=<?php echo $contact ?>>
Email <input type="text" name="email" value=<?php echo $email ?>><br>
 <input type="submit" name="Update">
  </form> 
 </div>
</body>
</html>