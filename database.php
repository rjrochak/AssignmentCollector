

<?php

   	$server   = "localhost";
   	$username = "root";
   	$password = "";
   	$db		  = "assignmentcollector";            //change database name to connect the mysql file


		$conn = mysqli_connect($server,$username,$password,$db);

		if ($conn) 
		{
			// code...
			// echo "Connection is Successfull";



			?>
			<script>
				//alert("Connection is Successful.. ");
			</script>
			<?php 

			
		}
		else
		{
			echo "Connection failed";

		}



?>
