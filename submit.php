<?php 
    include('connection.php');

    $email = $_POST['email'];
    $date = date('Y-m-d H:i:s');
    
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration (emails, date) values(?, ?)");
        $stmt->bind_param("ss",$email, $date);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

?>