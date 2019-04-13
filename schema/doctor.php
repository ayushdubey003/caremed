<?php
    $servername = "localhost";
    $username = "Ayush";
    $password = "abcdefgh";
    $dbname = "medanta";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE doctor (
    id VARCHAR(100) PRIMARY KEY, 
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    available INTEGER DEFAULT 0,
    nurseId INTEGER,
    wardboyId INTEGER,
    FOREIGN KEY(nurseId) REFERENCES nurse(id),
    FOREIGN KEY(wardboyId) REFERENCES wardboy(id),
    logout INTEGER,
    pass VARCHAR(50) NOT NULL,
    gender INTEGER NOT NULL,
    qualification VARCHAR(100)
    )";

    if (mysqli_query($conn, $sql)) {
    } else {
       // echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>