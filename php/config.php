<?php
  /*  $dsn = 'mysql:host=localhost;dbname=top'; //主机名字，数据库名
    $username = 'root'; //用户名
    $passwd = ''; //密码
	try{
    	$dbh = new PDO($dsn,$username,$passwd,array( PDO :: ATTR_PERSISTENT=> true));//长连接
    	$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//报错会中断进行事物，并回滚
    	$dbh->exec('set names utf8');
    }catch( PDOException   $e){//抓错误
        die($e->getMessage());
    }*/
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

$flag = 0;
$result = mysqli_query($conn,"SELECT * FROM landing
WHERE usename='$_POST[usename]'");
$row = mysqli_fetch_array($result);
if ( $row['usename'] == $_POST['usename'] ) {
    echo "用户名已被使用！";
    $flag = 1;
}

if ( $flag == 0 ) {
    $sql = "INSERT INTO landing (usename, password) VALUES ('$_POST[usename]','$_POST[password]')";
}else{
    $sql = 0 ;
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    ?>
    <meta http-equiv="refresh" content="3;url=../winter/login.html">;
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    ?>
    <meta http-equiv="refresh" content="1;url=../winter/first.html">;
    <?php
}


$conn->close();


?>