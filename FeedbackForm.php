

<?php
// if the $_POST is NOT empty (i.e. has some stuff in it) then something has been posted:


    
    $feedback = $_POST["feedback"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $servername = "localhost";
    $username = "root";
    $password = "1234567";
    $dbname = "infoweb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO feedback(feedback, name, email, phone) VALUES('$feedback', '$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header('Location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
