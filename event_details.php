<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="user_home.html">Lets Play</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
    
     <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="user_home.php"><i class="glyphicon glyphicon-home"></i> All Events</a></li>
                    <li><a href="my_events.php"><i class="glyphicon glyphicon-calendar"></i> My Events</a></li>
                </ul>
                
                    
                
             </div>
              <div class="sidebar content-box" style="display: block; text-align:center;">
                <a href="create_event.php" class="btn btn-success btn-lg" type="button" > <i class="glyphicon glyphicon-plus"></i> Create Event</a>
              
              </div>
              
		  </div>
       
         <div class="col-md-10">
             <div class="row">
		          <div class="col-md-8 panel-info">
                      <div class="content-box-header panel-heading">
	  					    <div class="panel-title ">Event Details</div>
						
		  			         </div>
		  			 <div class="content-box-large box-with-header">

<?php 
            $servername = "localhost";
            $username = "root";
            $password = "1234567";
            $dbname = "infoweb";
            $user_id =$_GET['user_id'];
            $event_id = $_GET['event_id'];
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
         
            
            $sql = "SELECT DISTINCT User_ID,Event_ID,Location,Game_Type,Date,Time,Players_Reqd, COUNT(User_ID) AS Joined FROM event WHERE User_ID='$user_id' and Event_ID='$event_id' GROUP BY User_ID, Event_ID,Location,Game_Type,Date,Time,Players_Reqd";
            
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    
                    $location = $row["Location"];
                    $players_reqd = $row["Players_Reqd"];
                    $date = $row["Date"];
                    $time = $row["Time"];
                    $game_type = $row["Game_Type"];
                    $created_user = $row["User_ID"];
                       
                }
            } else {
                    echo "0 results";
            }
?>
                <h3 align="center">Game:</h3> <h3 align="center"><b><?php echo  $game_type?></b></h3>
                        
                        <div class="panel-body">
		  					<table class="table">
				              <thead>
				                <tr>
				                  <th style ="text-align: center;"><i class="glyphicon glyphicon-calendar"></i>: <b><?php echo  $date ?></b></th>
				                  <th style ="text-align: center;"><i class="glyphicon glyphicon-time"></i>: <b><?php echo  $time ?></b></th>
				                </tr>
				              </thead>
				              <thead>
				                <tr>
				                  <th style ="text-align: center;"><i class="glyphicon glyphicon-globe"></i>: <b><?php echo  $location ?></b></th>
				                  <th style ="text-align: center;"><i class="glyphicon glyphicon-user"></i>: <b><?php echo  $created_user?></b></th>
				                </tr>
                                </thead>
				
				            </table>
                        
                           
		  				</div>
             </div>
          </div>
          <div class="col-md-4 panel-info">
              <div class="content-box-header panel-heading">
	  					<div class="panel-title ">Joined Players</div>
						
		      </div>
		  			<div class="content-box-large box-with-header">
                        <div class="panel-body">
                            <table class="table">
                
    <?php         
                

                $sql = "SELECT Player_ID FROM event WHERE User_ID='$user_id' and Event_ID='$event_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if ($row["Player_ID"] != $_GET["user_id"]) {
                            echo '<tr><td>'.$row["Player_ID"].'</td><td><a href="remove_player.php?user_id='.$_GET["user_id"].'&event_id='.$_GET["event_id"].'&player_id='.$row["Player_ID"].'">Remove User </a></td></tr>';
                        }

                    }
                } else {
                    echo "0 results";
                }
            $conn->close();
    ?>

                        
                    </table>      
		        </div>
             </div>
          </div>
                 
            <div class="row">
            <div class="col-md-4 panel-info">
                <div class="content-box-large box-with-header" style="display: block; text-align:center;">
              
                <?php  
                     echo '<a href="edit_event.php?user_id='.$user_id.'&event_id='.$event_id.'" class="btn btn-warning btn-lg"> <i class="glyphicon glyphicon-pencil"></i> Edit Event</a>';
                ?>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
       
</div>


    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
        
        
      </body>
</html> 