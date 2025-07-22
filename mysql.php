<?php
$connection = mysqli_connect("localhost","root","","wdpf_round_65");

if(!$connection){
    die("connection failed");
}
echo "connection successfully <br><br>";
?>

<?php
$connection = mysqli_connect("localhost","root","","wdpf_round_65");
if(isset($_GET['delid'])){
    $delete = $_GET['delid'];

    $deletion = "DELETE FROM newhorizon WHERE id = '$delete'";
    mysqli_query($connection,$deletion);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
            width:600px;
            height: auto;
        }
        th,td{
            border:1px solid black;
            padding:8px 15px; 
            text-align:center;
        }
        th{
            background-color:black;
            color:white;
        }
        .btn-edit{
            background-color:green;
            color:white;
            padding:5px 7px;
            text-decoration:none;
            border-radius:5px;
        }
        .btn-dlt{
            background-color:red;
            color:white;
            padding:5px 7px;
            text-decoration:none;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Modify</th>
        </tr>
    


<?php
$table = $connection->query("select * from newhorizon");
while(list($id, $name,$email,$gender) =$table->fetch_row()){
    echo "
    <tr>
        <td>$id</td>
        <td>$name</td>
        <td>$email</td>
        <td>$gender</td>
        <td>
        <a href='edit.php' class='btn-edit'>Edit</a>
        <a href='mysql.php?delid=$id' class='btn-dlt'>Delete</a>
        </td>
    </tr>";
}

?>

</table>
</body>
</html>