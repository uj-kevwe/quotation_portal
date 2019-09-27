<?php

require 'data_connect.php';
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); //failed to connect
} else { //successful connection
    //search user credentials in users table
    $sql = "select * from users where Username='" . $_POST['user'] . "' and password ='" . $_POST['pass'] . "' and Email ='"
            . $_POST['email'] . "'";
    $result = $mysqli->query($sql);
    //if found and unique grant access to user interface
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['Username'];
        $_SESSION['names'] = $row['FullNames'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['role'] = $row['Role'];
        $_SESSION['message'] = " logged on successfully";
        //reset status to online
        if ($row['status'] <> 'online') {
            $mysqli->query("Update users set status = 'online' where Username ='".$row['Username']."'");
            header("location:interface.php");
        }
        else{
            $_SESSION['message']=$row['Username']." already logged on.<br>Kindly log out before attempting to login again";
            header("location:index.php");
        }
    } else {//if not found display appropriate error message
        $_SESSION['message'] = " unable to log on.<br>confirm your credentials";
        //echo mysqli_error($mysqli);
      header("location:index.php");
    }
}



