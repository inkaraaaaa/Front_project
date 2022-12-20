<?php
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
?>

$conn = new mysql('localhost', 'root', '','enrol');
    if($conn->connect_error){
        die('Connection failed : ' $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into enroll_form (id,firstname,lastname,email,phonenumber) 
            values(?, ?, ?, ?, ?)");
        $stmt->bind_param("isssi", $id, $firstname, $lastname, $email, $phonenumber);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }