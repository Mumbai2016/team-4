<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sample App </title>
	<meta name="description" content="Wiredwiki App">
    
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<style>
body{
        padding-top: 40px;
    }
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}
</style>

<?php



$servername = "ec2-54-179-133-213.ap-southeast-1.compute.amazonaws.com";
$username = "root";
$password = "root";
$dbname = "DreamADream";

// Create connection

$conn = mysqli_connect("127.0.0.1", $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	
	
	
	
	
	
	function output($conn)
	{
		if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}		$sql = "SELECT person_id, name, email FROM Person" ;
		$result = mysqli_query($conn, $sql);
		
		if (!is_null($result) && mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$output ="";
			$output.= '<a href="addToWorkshop.php?id='.$row['person_id'].'" class="list-group-item ">
				  <h4 class="list-group-item-heading">'.$row['name'].'</h4>
				  <p class="list-group-item-text">'.$row['email'].'</p>
				</a>';
			echo $output;
			}
		}
		
	
	}
?>

<body>

  <!-- Navbar -->
  	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
				
  				<a href="" class="navbar-brand">Dream A Dream</a>
  			</div>
            <!-- Navbar Header-->
  			<div class="collapse navbar-collapse" id="navbar-collapse">
  			<ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                            
                                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                             <label>
                                             <input type="checkbox"> keep me logged-in
                                             </label>
                                        </div>
                                 </form>
                            </div>
                            <div class="bottom text-center">
                                New here ? <a href="#"><b>Join Us</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
      </ul>
  				<ul class="nav navbar-nav">
  					<li><a href="#dashboard">Dashboard</a> 
  					<li><a href="#events">Upcoming Events</a> 
  					<li>
    <div class="dropdown">
  <a href="#programs"><button class="dropbtn">Programs</button></a>
  <div class="dropdown-content">
    <a href="career.php">Career Connect</a>
    <a href="LSDprograms.php">LSD programs</a>
    <a href="LastMileSupport.php">Last Mile Support</a>
    <a href="LongTermEngagement.php">Long Term Engagement</a>
  </div>
</div> </li>
  					<li><a href="#impact">Impact</a> 
  					<li><a href="#contact">ContactUs</a> 
  				</ul>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->
	
	<div class="container">
	  <h2>List Group With Custom Content</h2>
	  <div class="list-group">
	  
		<?php 
		
		output($conn);
		?>
		
		
	  </div>
</div>




<!-- Footer -->
  
    <footer>
      <hr>
        <div class="container text-center">

        
        <ul class="list-inline">
          <li><a href="http://www.twitter.com/wiredwiki">Twitter</a></li>
          <li><a href="http://www.facebook.com/askorama">Facebook</a></li>
          <li><a href="http://www.youtube.com/wiredwiki">YouTube</a></li>
        </ul>

        <p>&copy; Copyright @ 2014</p>

      </div><!-- end Container-->
      

    </footer>

	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>
