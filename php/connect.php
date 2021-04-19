
<?php
	$dname = $_POST['dname'];
	$username = $_POST['username'];
	$video = $_POST['video'];

	// Database connection
	$conn = new mysqli('sql2.7m.pl','JvstAlf','Alf3.02004','jvstalf_justalf');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(dname, username, video) values(?, ?, ?)");
		$stmt->bind_param("sssssi", $dname, $username, $video);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>