<?php
	if($_POST["difficulty"]=="")
		header("Location: index.php");
	else {
		$servername = "localhost";
		$username = "root";
		$password = "kapardi@me";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$level = $_POST["difficulty"];
		$output = "";
		if($level=="easy") {
                    $sql="select * from CS309.Apply where sID=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "Student ID: ".$row["sID"]." Decision " . $row["decision"]. "<br/>";
			    }
			} else {
			    $output = "<br/>0 results";
			}
			$output = "Easy queries are expected to return very fast answers";
		}
		else if($level=="moderate") {
			$sid = $_POST["parameter"];
			$output = "Let's run the following query.<br/>";
			$sql = "select * from CS309.Apply where sID=".$sid;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "Student ID: ".$row["sID"]." Decision " . $row["decision"]. "<br/>";
			    }
			} else {
			    $output = "<br/>0 results";
			}
		}
		else {
			$output = "Hardest query evaaaa........<br/>";
			$sql = "select count(*) as kuchbhi from CS309.Apply,(select * from CS309.Student where GPA>9) as T1, (select * from CS309.College where enrollment>1000) as T2 where T1.sID = CS309.Apply.sID and T2.cName = CS309.Apply.cName and decision=0;";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "Count: ".$row["kuchbhi"];
			    }
			} else {
			    $output = "<br/>0 results";
			}
		}
		$conn->close();
	}
?>

<!DOCTYPE HTML>

<html>
<head>
<title>Action</title>
</head>
<body>
<?php
	echo $output;
?>
</body>
</html>