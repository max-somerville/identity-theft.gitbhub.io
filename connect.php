<?php

    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $user_age = $_POST['u_age'];
    $user_occupation = $_POST['u_opc'];

    $conn = new mysqli('localhost', 'root', '','user_information');
    if($conn->connect_error)
    {
        die ('Connection Failed : ' .$conn->connect_error);
    } 
    else 
    {
        $stmt = $conn->prepare("insert into user_info(first_name, last_name, user_age, user_occupation)
        values(?, ?, ?, ?)");
        $stmt->bind_param("ssis", $first_name, $last_name, $user_age, $user_occupation);
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }
    header('Location: index.php');
?> 