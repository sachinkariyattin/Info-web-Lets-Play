<?php 
    session_start();
    if (! (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
        header('Location: login.php');
    }
?>
<html>
    <head>
        <title>Lets Play</title>
    </head>
    
    <body>
    <?php 
            $servername = "localhost";
            $username = "root";
            $password = "1234567";
            $dbname = "infoweb";
            $user_id =$_GET['user_id'];
            $event_id = $_GET['event_id'];
            $player_id = $_GET['player_id'];
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            $sql = "DELETE FROM EVENT WHERE User_ID='$user_id' AND Event_ID='$event_id' AND Player_ID='$player_id'";
    

            if ($conn->query($sql) === TRUE) {
                echo '<script language="javascript">';
                echo 'alert("Removed Successfully")';
                header('Location:my_events.php');
                echo '</script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

    $conn->close();

        
        ?>
        
        
        
        
    </body>
</html>