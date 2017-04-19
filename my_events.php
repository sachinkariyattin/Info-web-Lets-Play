<!DOCTYPE html>
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
	                 <h1><a href="user_home.php">Lets Play</a></h1>
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
                    <li ><a href="user_home.php"><i class="glyphicon glyphicon-home"></i> All Events</a></li>
                    <li class="current"><a href="my_events.php"><i class="glyphicon glyphicon-calendar"></i> My Events</a></li>
                </ul>
                
                    
                
             </div>
              <div class="sidebar content-box" style="display: block; text-align:center;">
                <a href="create_event.php" class="btn btn-success btn-lg" type="button" ><i class="glyphicon glyphicon-plus"></i> Create Event</a>
              
              </div>
              
		  </div>
		  <div class="col-md-10">
               <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">My Events</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive ">
  						<table class="table table-hover">
			              <thead>
			                <tr>
			                  <th>User ID</th>
                              <th>Location</th>
                              <th>Game</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Players Required</th>
                              <th>Players Joined</th><th></th><th></th>
			                </tr>
			              </thead>
			              <tbody>
                            <?php 
                                $servername = "localhost";
                                $username = "root";
                                $password = "1234567";
                                $dbname = "infoweb";
                                $logged_user = "USER_8";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "SELECT DISTINCT User_ID,Event_ID,Location,Game_Type,Date,Time,Players_Reqd, COUNT(User_ID) AS Joined FROM event WHERE User_ID='$logged_user' GROUP BY User_ID, Event_ID,Location,Game_Type,Date,Time,Players_Reqd";
            
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr><td>".$row["User_ID"]."</td><td>".$row["Location"]."</td><td>".$row["Game_Type"]."<td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["Players_Reqd"]."</td><td>".$row["Joined"].'</td><td><a href="delete_event.php?user_id='.$row["User_ID"].'&event_id='.$row["Event_ID"].'" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a></td><td><a href="event_details.php?user_id='.$row["User_ID"].'&event_id='.$row["Event_ID"].'" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View Details</a></td></tr>';
                                    }
                                    echo "</table>";
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();
                            ?>
			              </tbody>
			            </table>
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