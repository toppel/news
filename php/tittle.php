<?php
$servername = "localhost";
$username = "top";
$password = "";
$dbname = "test";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysqli_query($conn,"SELECT * FROM news WHERE id=1");
$row = mysqli_fetch_array($result);

$sql = "INSERT INTO user (name,title,passage) VALUES ('$row[name]','$_POST[tittle]','$_POST[passage]')";
if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
    		?>
		 	<meta http-equiv="refresh" content="1;url=../winter/index.php">;
		 	<?php
    	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    	 }
?>