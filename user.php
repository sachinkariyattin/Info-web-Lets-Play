<?php
   include("config.php");

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       $userid = $_POST["userName"];
    $firstname=$_POST["firstName"];
    $lastname=$_POST["lastName"];
    $password=$_POST["password"];
    $email=$_POST["userEmail"];
    $contact=$_POST["userContact"];
    $address=$_POST["userAddress"];
    $date = $_POST["userDOB"];
    $BIO=$_POST["userBIO"];
    
        
    $servername = "localhost";
    $username = "root";
    $password_1 = "1234567";
    $dbname = "infoweb";
    
    

    // Create connection
    $conn = new mysqli($servername, $username, $password_1, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO user (user_id, first_name,last_name ,password,address,email,contact,dob,userbio) 
    VALUES ('$userid', '$firstname',  '$lastname', '$password','$address','$email','$contact', '$date','$BIO')";
    

    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');    
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   }
?>


<html>
    <head>
    <title>Lets Play</title>
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
   <body >
	  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="login.php">Lets Play</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                       
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

      <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  
            
              
		  </div>
       <div class="row">
           <div class="col-md-6">
               <div class="content-box-large">
                   <div class="panel-heading">
					            <div class="panel-title">Register</div>
					        </div>
                     <div class="panel-body">
                         <form action=" " method="post" class="form-horizontal">
                                  <div class="form-group">
								    <label  class="col-sm-2 control-label">User Name</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="userName" placeholder="Username">
								    </div>
								  </div>
                                   <div class="form-group">
								    <label  class="col-sm-2 control-label">First Name</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="firstName" placeholder="First Name">
								    </div>
								  </div>
                                     <div class="form-group">
								    <label  class="col-sm-2 control-label">Last Name</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="lastName" placeholder="Last Name">
								    </div>
								  </div>
                                 <div class="form-group">
								    <label  class="col-sm-2 control-label">Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" name="password" placeholder="Password">
								    </div>
								  </div>
                              <div class="form-group">
								    <label  class="col-sm-2 control-label">Confirm Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" name="confirm_password" placeholder="Password">
								    </div>
								  </div>
                             <div class="form-group">
								    <label  class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="userEmail" placeholder="email">
								    </div>
								  </div>
                               <div class="form-group">
								    <label  class="col-sm-2 control-label">Address</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="userAddress" placeholder="Address">
								    </div>
								  </div>
                              <div class="form-group">
								    <label  class="col-sm-2 control-label">Contact</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="userContact" placeholder="contact">
								    </div>
								  </div>
                    
                              <div class="form-group">
								    <label  class="col-sm-2 control-label">Date of Birth</label>
								    <div class="col-sm-10">
								      <input type="date" class="form-control" name="userDOB" placeholder="Date of Birth">
								    </div>
								  </div>
                             <div class="form-group">
								    <label  class="col-sm-2 control-label">Biography</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="userBIO" placeholder="Bio">
								    </div>
								  </div>
                             <div class="action">
                                <input type = "submit" class="btn btn-primary signup"  value = "Register"/><br />
			                </div> 
                         </form>
                   </div>
                   
               </div>
           </div>
           
       </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
   </body>
</html>