<?php
    $servername = "localhost";
    $username = "Ayush";
    $password = "abcdefgh";
    $dbname = "medanta";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE receptionist (
    id VARCHAR(100) PRIMARY KEY, 
    pass VARCHAR(50) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL
    )";

    if (mysqli_query($conn, $sql)) {
    } else {
        //echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>