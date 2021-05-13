<?php

    $conn = new mysqli('localhost', 'root', '','user_information');

    $sqlget = "SELECT * FROM user_info";
    $sqldata = mysqli_query($conn, $sqlget) or die('error getting');

    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
        echo "
            <div class='item'>
                <ul>
                    <li>First mame: " .$row['first_name'] . "</li>
                    <li>Last name: "  .$row['last_name'] . "</li>
                    <li>Age: " .$row['user_age'] . "</li>
                    <li>Occupation: "  .$row['user_occupation'] . "</li>
                </ul>
            </div>";
    }
    $conn->close();
?>