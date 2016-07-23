<?php
	include('config.php');
	if(isset($_POST)){ 	
		extract($_POST);
		$sql="SELECT password, user_id FROM `scrum`.`user` WHERE `user_name` = '$user_name';";
		//echo $sql;

		$result=$conn->query($sql);
		//echo $result;

		if($result->num_rows>0){
				$row=$result->fetch_assoc();
				if(strcmp($row['password'], $password)==0){
					session_start();
					$_SESSION['user_name']=$user_name;
					$_SESSION['password']=$password;
					$_SESSION['user_id']=$row['user_id'];
		
					header('Location:project.php');
				}
				else
					echo "Incorrect password<br>";
		}
		else{
			echo "No such user<br>";
		}
	} 
	else
    	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
?>