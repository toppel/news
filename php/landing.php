

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

$result = mysqli_query($conn,"SELECT * FROM landing WHERE usename='$_POST[usename]'");

while($row = mysqli_fetch_array($result))
{
    if($row['password'] == $_POST['password']){
	    echo "登陆成功";
        mysqli_query($conn,"DELETE FROM news WHERE id=1");
	    $sql = "INSERT INTO news (id,name,now) VALUES (1,'$_POST[usename]','$_POST[usename]')";
        if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
    		?>
		 	<meta http-equiv="refresh" content="1;url=../winter/index.php">;
		 	<?php
    	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    	 }
    }else{
		echo "账号或者密码错误！";
        ?>
            <meta http-equiv="refresh" content="3;url=../winter/login.html">;
        <?php
    }
}
$conn->close();

?>

