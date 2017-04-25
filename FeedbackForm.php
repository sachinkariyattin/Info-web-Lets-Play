<!DOCTYPE html>
<html>
<head>
	<title>Let's Play</title>
</head>
<body>

<br>Let's Play Feedback Page<br>

<?php
// if the $_POST is NOT empty (i.e. has some stuff in it) then something has been posted:
if (!empty($_POST)): ?>

    <?php
    $feedback = $_POST["feedback"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $servername = "localhost";
    $username = "root";
    $password = "1234567";
    $dbname = "sys";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO feedback(feedback, name, email) VALUES('$feedback', '$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

	?>

<?php else: ?>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        Name: <input type="text" name="name" required="this field is empty"><br>
        E-mail: <input type="text" name="email" required="this field is empty"><br>
        Feedback: <input type="text" name="feedback" required="this field is empty"><br>
        <input type="submit" value="Send Feedback">
    </form>
<?php endif; ?>
</body>
</html>