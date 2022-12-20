<?php
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $selectclub = $_POST['selectclub'];

    $conn = new mysqli('localhost', 'root', ' ','enroll');
    if($conn->connect_error){
        die('Connection failed : ' $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into enroll_form(id,firstname,lastname,email,phonenumber, selectclub) 
            values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssi", $id, $firstname, $lastname, $email, $phonenumber, $selectclub);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }
?>

