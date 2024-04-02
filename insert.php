
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "cab");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all values from the form data(input)
		$S_l = $_REQUEST['from'];
		$D_l = $_REQUEST['to'];
		$P_name = $_REQUEST['p_name'];
		$Date = $_REQUEST['date'];
		$From = $_REQUEST['f_time'];
        $To = $_REQUEST['to_time'];
        $Remarks = $_REQUEST['remarks'];
		
		// Performing insert query execution
		$sql = "INSERT INTO info VALUES ('$S_l', 
			'$D_l','$P_name','$Date','$From','$To','$Remarks')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>


