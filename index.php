<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Dream A Dream </title>
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
    background-color: transparent;
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
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: white}

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
require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
        
        $password = $_POST['password'];
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format"; 
		}
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM Person WHERE email='$email' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index1.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
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
				
  				<a href="" class="navbar-brand" style="color:white">Dream A Dream</a>
  			</div>
            <!-- Navbar Header-->
  			<div class="collapse navbar-collapse" id="navbar-collapse">
  			<ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white"><b>Admin Login</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                            
                                 <form class="form" role="form" method="post" action="startbootstrap-sb-admin-1.0.4/dashboard.php" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                             <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                             <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
										</div>
										<div class="form-group">
											<label class="sr-only" for="exampleInputEmail2">Submit</label>
                                             <input type="submit"  class="form-control" id="exampleInputEmail2" value="submit" >
										</div>	
                                             
                                   </form>
                            </div>
                            
                     </div>
                </li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white"><b>Login</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                            
                                 <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8" id="login-nav">
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
                                New here ? <a href="form1.html"><b>Join Us</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
      </ul>
  				<ul class="nav navbar-nav"> 
  					
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
  					 
  					<li><a href="#contact" style="color:white">Contact Us</a> 
  				</ul>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->


<!-- Gallery -->
    <div class="container">
        <section>
            <div class="page-header" id="gallery">
                <h2><center><small></small></h2>
            </div>

            <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                    <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                    <li data-target="#screenshot-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/a.jpg" alt="Text of the image">
                        
                    </div>
                    <div class="item">
                        <img src="images/b.jpg" alt="Text of the image">
                        
                    </div>
                    <div class="item">
                        <img src="images/c.jpg" alt="Text of the image"/>
                        
                    </div>
                    

                </div><!-- End Carousel inner -->
                <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div><!-- End Carousel -->

        </section>
    </div>



<!-- Contact -->
<div class="container" id="contact">
    <section>

        <div class="row">
          <div class="col-lg-4">
          <hr>
            <p>Send us a message, or contact us from the address below</p>


            <address>
              <strong>
              No. 398/E</strong>, </br>17th Cross, 9th Main,</br> 3rd Block, Jayanagar,</br> Bangalore - 560011, India
                T +91.80.40951084
            </address>
          </div>
          
          <div class="col-lg-8">
            <form action="" class="form-horizontal">
              <div class="form-group">
              <hr>
                <label for="user-name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-name" placeholder="Enter you name">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-email" placeholder="Enter you Email Address">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-url" class="col-lg-2 control-label">Your Website</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-email" placeholder="If you have Any.">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Any Message</label>
                <div class="col-lg-10">
                  <textarea name="user-message" id="user-message" class="form-control" 
                  cols="20" rows="10" placeholder="Enter your Message"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>

             

            </form>
          </div>
        </div><!-- End the row -->

    </section>
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

      

      </div><!-- end Container-->
      

    </footer>

	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>
