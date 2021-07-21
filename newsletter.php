<?php

include 'config.php';

if(isset($_POST['sign-up'])){

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO newsletter (id,f_name, l_name, email) VALUES('','$f_name', '$l_name', '$email')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Couldn't post data !!".mysqli_error());
    }else{
        header("Location: index.php?Thank you for subscribing Us :)");
    }

}

?>