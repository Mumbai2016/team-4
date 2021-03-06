<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

  <script type="text/javascript">
	   function getAge() 
	{
	
	var dateString = document.getElementById('dob').value;
    
	var today = new Date();
	
    var birthDate = new Date(dateString.toString());
	
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
	
	if(document.getElementById('dob') != 'null' ){
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
     document.getElementById('age').value = age.toString();
	}
    }
   
    
    
</script>

	<style> 
/*! normalize.css v3.0.2 | MIT License | git.io/normalize */
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}	
	   *, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;		
}

body {
background-image:url("final.jpg");
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}

.form {
  background: rgba(19, 35, 47, 0.9);
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
}
.tab-group .active a {
  background: #1ab188;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: none;
}

h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #1ab188;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #179b77;
}

.button-block {
  display: block;
  width: 100%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}
    .remodal-bg.with-red-theme.remodal-is-opening,
    .remodal-bg.with-red-theme.remodal-is-opened {
      filter: none;
    }

    .remodal-overlay.with-red-theme {
      background-color: #f44336;
    }

    .remodal.with-red-theme {
      background: #fff;
    }
</style>
<?php
 require('db.php');
 // If form submitted, insert values into the database.
 if (isset($_POST['email'])){
 $username = $_POST['email'];

 $password = $_POST['password'];

 $email = stripslashes($email);
 $email = mysql_real_escape_string($email);
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format"; 
		}
 $password = stripslashes($password);
 $password = mysql_real_escape_string($password);
 $trn_date = date("YYYY-MM-DD");
 $query = "INSERT into Person(email, password, joined_date) VALUES ('$email','.md5($password).', $trn_date)";
 $result = mysql_query($query);
 if($result){
 header("Location: index.php");
 }
 }
 
?>    
  </head>

  <body>
  
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Register</a></li>
		<li class="tab"><a href="#login">Login</a></li>
		
      </ul>
      
      <div class="tab-content">
        <div id="signup">  
		
          <h1>Sign Up for Free</h1>
          
			                    <form role="form" action="" method="post" class="login-form">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="firstname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lastname"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              email<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
		  
		  <div class="top-row">
          <div class="field-wrap">
		  <label>
		  Mobile No.<span class="req">*</span>
		  </label>
		  <input type="number"required autocomplete="off" id="mobile"/>
          </div>
		  
          <div class="field-wrap">
		  <label>
		  Father's Mobile No.<span class="req">*</span>
		  </label>
		  <input type="number"required autocomplete="off" name="f_mobile"/>	
          </div>
		  </div>
		  
		  <div class="top-row">
		  <div class="field-wrap">
		  <label>
		  Mother's Mobile No.<span class="req">*</span>
		  </label>
		  <input type="number"required autocomplete="off" name="m_mobile"/>	
          </div>
		  
		  <div class="field-wrap">
		  <label>
		  Other's Mobile No.<span class="req">*</span>
		  </label>
		  <input type="number"required autocomplete="off" name="o_mobile"/>	
          </div>
		  </div>

		  

		  <div class="top-row">  
		  <div class="field-wrap">
		  <label>
		  <span class="req"></span>
		  </label>
		  <input type="date" id="dob" onblur="getAge()"/>
          </div>
		  
		  <div class="field-wrap">
		  <label>
		  Age<span class="req"></span>
		  </label>
		  <input type = "text"  id="age" name="age"/>
          </div>
		  </div>
	
		<div class="field-wrap">
		  <p>
		  Status
		 </p>
		  <select >
			<option value="married" >married </option>
			<option value="unmarried">unmarried</option>
		  </select>
          </div>
		  
		 
          <button type="submit" class="button button-block"/>Get Started</button>
		   </form>
        </div>
		<div id="login">
		<h1>already having account?</h1>
		<form action="index.php">
		 <div class="field-wrap">
              <Button type="submit" class="button button-block"/>Click here to Log In</button>
            </div>
			</form>
			</div>
        
        
      </div>
	  <!-- tab-content -->
		</div>
		<!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script type="text/javascript">
		$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');
  $('.tab-content > div').not(target).hide();
  $(target).fadeIn(600);
});
</script>
   
  </body>
</html>