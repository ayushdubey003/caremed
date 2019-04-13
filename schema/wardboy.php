<?php
    $servername = "localhost";
    $username = "Ayush";
    $password = "abcdefgh";
    $dbname = "medanta";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE wardboy (
    id INTEGER AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    assigned INTEGER DEFAULT 0
    )";

    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>