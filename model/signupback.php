<?php 
	session_start();
	require "../connect.php";

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$username=$_POST['username'];
			$FirstName=$_POST['FirstName'];
			$LastName = $_POST['LastName'];
			$password = $_POST['password'];
			
			$Contact_No=$_POST['Contact_No'];
			$Type=$_POST['Type'];
			

			 
			

			
				

		
			$sql="INSERT INTO login (`username`,`FirstName`, `LastName`, `password`, `Contact_No`, `Type`) VALUES ('$username','$FirstName','$LastName','$password','$Contact_No','$Type')"; 
			$res=mysqli_query($conn,$sql);
		
			if ($res) {

			echo "success";
			}
		else{
			echo "error".mysqli_error($conn);
		}
		}

?>