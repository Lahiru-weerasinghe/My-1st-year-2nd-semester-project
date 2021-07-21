<?php

include_once 'config.php';

if(isset($_POST['Submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO quickconnect(id, name, email, message) VALUES('','$name','$email','$message')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Couldn't post data !!".mysqli_error());
    }else{
        header("Location:index.php?Your_Email_has_sent_successfully:)");
    }
}

?>