<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>User Registration</h2>
<form action="" method="post">
    ID: <input type="text" name="id"><br><br>
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Gender: <input type="text" name="gender"><br><br>
    <input type="submit" value="Register">
</form>

<?php
$add = mysqli_connect("localhost","root","","wdpf_round_65");


if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];


    $data = "INSERT INTO newhorizon (Id,Name,Email,Gender) VALUES ('$id','$name','$email','$gender')";
    $showMe = mysqli_query($add,$data);

    if($showMe){
        echo "Data submited successfully";
        header('Location: mysql.php');
    }
    else{
        echo "Data not submited" .mysqli_error($add);
    }
    mysqli_close($add);
}
?>
</body>
</html>