<?php
include 'connection.php';







?>
<!DOCTYPE html>




<html lang="en">

<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <button ><a href="main.php">ADD User</a></button>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
        </tr>
<?php

$sql = "select * from tname";
$result = mysqli_query($con,$sql);
if ($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $contact = $row['contact'];
        $email = $row['email'];
echo '
<tr>
<td>'.$id.'</td>
<td> '.$name.'</td>
<td> '.$contact.'</td>
<td> '.$email.'</td>

<td>
    <button><a href="update.php?updateid='.$id.'   ">Update</a></button>
    <button><a href="delete.php?deleteid='.$id.' ">Delete</a></button>
</td>



';
    }
}
?>






    </table>
   
</body>
</html>