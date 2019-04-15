<?php
    $servername = "localhost";
    $username = "Ayush";
    $password = "abcdefgh";
    $dbname = "medanta";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE admin (
    id VARCHAR(100) PRIMARY KEY, 
    pass VARCHAR(100)
    )";

    if (mysqli_query($conn, $sql)) {
        $encpass=md5("1234");
        $name="admin";
        $query="INSERT INTO admin(id,pass)
                            VALUES('$name','$encpass')";
                    if(mysqli_query($conn,$query))
                        echo('<script type="text/javascript">
                            alert("Insert Succesful");
                        </script>');;
    } else {
       // echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>