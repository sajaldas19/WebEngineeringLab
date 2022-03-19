<!-- 
=====================
  Title: PHP
  Author: Sajal Das
  Date: 15 Mar 2022
=====================
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Echo "hello world";
    // echo "hello";
    // $name = "sajal";
    // $Name = "farid";
    // $colour = "red";

    // echo "This is $name";
    $con = mysqli_connect('localhost','root', '');
    if(!$con){
        echo 'Not connected to the server';
    }
    if(!mysqli_select_db($con,'weblab6')){
        echo "database not selected";

    }
    // $name = $_POST['user_name'];
    // $email = $_POST['user_email'];

    // $sql = "INSERT INTO user (name, email) VALUES ('$name','$email')";
    // if(!mysqli_query($con, $sql)){
    //     echo "Not inserted";
    // }
    // else{
    //     echo "Successfully Inserted";
    // }

    $new_name = $_POST['new_name'];
    $new_email = $_POST['updated_email'];
    $update_email = "UPDATE user SET email='$new_email' WHERE name='$new_name'";
    if(!mysqli_query($con, $update_email)){
        echo "not Updated";
    }
    else{
        echo "Successfully Updated";
    }


    ?>
</body>
</html>