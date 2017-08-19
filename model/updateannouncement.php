<?php


			

		require "../connect.php";

		if(isset($_POST['announcement']))
		{
			$An_ID=$_POST['An_ID'];
			$Topic=$_POST['Topic'];
			$Category = $_POST['Category'];
			$Date = $_POST['Date'];
			$Time=$_POST['Time'];
			$Description=$_POST['Description'];
			
			
			
	        $sqli = "UPDATE announcement SET An_ID='$An_ID',Date='$Date',Time='$Time',Category='$Category',Topic='$Tpoic',Description='$Description' WHERE An_ID = '$An_ID'"; 

			$result = mysqli_query($conn,$sqli)
				or die(mysqli_error($conn));


			if(!mysqli_query($conn,$sqli))
			{
				echo "error".mysqli_error($conn);
            }
        }

        if(isset($_POST['delete']))
        {
			$An_ID = $_POST['An_ID'];
			$sql="DELETE FROM `announcement` WHERE An_ID='$An_ID'";
			$res=mysqli_query($conn,$sql);
			if($res)
			{
        		echo'successful';
			}
			else
			{
				echo "error".mysqli_error($conn);
			}
		}

		if(isset($_POST['search'])) 
		{
			$sql="SELECT * FROM announcement WHERE An_ID='$An_ID'";
			$result = mysqli_query($conn,$sql)

			while ($row = mysqli_fetch_assoc($result)) 
			{
        		
    		}


		}   

            
        

?>