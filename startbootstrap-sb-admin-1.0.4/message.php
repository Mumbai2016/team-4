<!DOCTYPE html>
<<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sample App </title>
	<meta name="description" content="Wiredwiki App">
    
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<style>
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
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
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
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
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
</head>
<body>
  <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

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
                            
                                 <form class="form" role="form" method="post" action="update" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                          <a hreg="index1.php">Click here for admin login"</a>
                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                             <input type="email" class="form-control" id="email" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                             <input type="password" class="form-control" id="pass>exampleInputPassword2" placeholder="Password" required>
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
    <a href="#">Career Connect</a>
    <a href="#">LSD programs</a>
    <a href="#">Last Mile Support</a>
    <a href="#">Long Term Engagement</a>
  </div>
</div> </li>
  					<li><a href="#impact">Impact</a> 
  					<li><a href="#contact">ContactUs</a> 
  				</ul>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->


<br/><br/><br/><br/><br/><br/>
<div class="fluid-container">
<div class="row">
  <div class="col-lg-12">

<form method="post" action="msg.php">
<div class="form-group">
    <select name="workshop"> 
   <option value="Painting">Painting</option>
  <option value="Computer Learning">Computer Learning</option>
  <option value="Dancing">Dancing</option>
  <option value="Mobile Repair">Mobile Repair</option>
   
  <option value="Spoken English">Spoken English</option>
  <option value="Tailoring">Tailoring</option>
  
</select>
  </div>

  
  
  

  <button type="submit" class="btn btn-default">Submit</button>

</form>

  </div>
  </div>
</div><!-- Contact -->


<!--
  <form action="dummyexotel.php" method="post">

<select name="selected"> 
   <option value="Painting">Painting</option>
  <option value="Dance">Dance</option>
  <option value="Music">Music</option>
  <option value="Creativity">Creativity</option>
   <option value="Education">Education for Global citizenship</option>
  <option value="HRE">Human Right Education</option>
  <option value="CDE">Community Driven Education</option>
  <option value="Creativity">Audi</option>
</select>

<input type="checkbox" name="workshop" value="Painting">Painting</input>
<input type="checkbox" name="workshop" value="Dance">Dance</input>
<input type="checkbox" name="workshop" value="Music workshop">Female</input>
<input type="checkbox" name="workshop" value="Creativity">Creativity</input>
<input type="checkbox" name="workshop" value="Education">Education for Global citizenship</input>
<input type="checkbox" name="workshop" value="HRE">Human Right Education</input>
<input type="checkbox" name="workshop" value="CDE">Community Driven Education</input>


<input type="submit" name="submit" value="Submit"/> -->

  
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