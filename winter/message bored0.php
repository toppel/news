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
$sql = "SELECT id,name,paasage,type,messagepeople FROM message";
$results = $conn->query($sql); 
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="styles/messagebored.css">
</head>
<body>
			<div id="bg">
		
	
	<!-- 页头开始 -->
	<div id="header" name="header">
		<ul>
			<a href="index.php"><li><div id="headerdiv">首页</div></li></a>
			<a href="##"><li><div id="headerdiv">关于我</div></li></a>
			<a href="##"><li><div id="headerdiv">
				联系我
				<div class="contact">
					<a href="##"><i class="iconfont">&#xe610;</i></a>
					<a href="##"><i class="iconfont">&#xe603;</i></a>
					<a href="##"><i class="iconfont">&#xe60c;</i></a>
				</div>
				</div></li>
			</a>
			<a href="##"><li><div id="headerdiv">留言板</div></li></a>
			<a href="##"><li class="set"><i class="iconfont">&#xe6bd;</i></li></a>
		</ul>
	</div>
	
	<!-- 正文开始 -->
	<div class="pesonalportrait">
			
	</div>
	<div class="container">		
		<div class="all">
			<a href="##">
				<div id="letter">
					主人寄语
				</div>
			</a>
			<div id="lettercontent">
				<?php  if ($results->num_rows > 0) {
									    $rows = $results->fetch_assoc();
                                       	for( ; $row['name'] != $rows['name'] && $rows['type'] == 1 ; ){$rows = $results->fetch_assoc();}
        								if( $row['name']==$rows['name'] ){
        									echo $rows["paasage"];} else {
   																		 echo "还未发表寄语";
																		 }									
																	 } else {
   																		 	echo "还未发表寄语";
																		    }?>
			</div>
			<hr>
			<a href="##">
				<div class="words">
					我要留言
				</div>
			</a>
			<div class="ourportrait">
				<?/*php if ($results->num_rows > 0) {
									    $rows = $results->fetch_assoc();
                                       	for( ; $row['name'] != $rows['name'] && $rows['type'] == 2 ; ){$rows = $results->fetch_assoc();}
        								if( $row['name']==$rows['name'] ){
        									echo $rows['messagepeople']."<br>";//输出留言人
        									echo $rows["paasage"];}//输出留言	*/			
																	 ?>	
			</div>
			<div>
				<textarea id="content" placeholder="说点什么吧"></textarea>
			</div>
			<div class="setin">
				社交账号登录：
				<a href="##"><i class="iconfont">&#xe610;</i></a>
				<a href="##"><i class="iconfont">&#xe603;</i></a>
				<a href="##"><i class="iconfont">&#xe60c;</i></a>
				<a href="##"><i class="iconfont">&#xe61c;</i></a>
			</div>
			<a href="##">
				<div class="submit">
					发表
				</div>
			</a>
			<input  id="hhh" type="hidden" value="0">
			<!-- <a href="#content">
				<div class="words2">
					
				</div>
			</a> -->
			
		</div>
	</div>

	<!-- 页脚开始 -->
	<div class="footer">
		<div id="copyright">
			Copyright © 2014-2016 <?php echo $row['name']; ?>博客 . By s个人博客.
		</div>
		<div id="iconc">
			<a href="##"><i class="iconfont">&#xe610;</i></a>
			<a href="##"><i class="iconfont">&#xe603;</i></a>
			<a href="##"><i class="iconfont">&#xe60c;</i></a>
			<a href="##"><i class="iconfont">&#xe61c;</i></a>
			<a href="##"><i class="iconfont">&#xe66f;</i></a>
		</div>
		<a href="#header"><div class="try"></div></a>
	</div>
	<script>
		var words = document.querySelector('.words');
		var ourportrait = document.querySelector('.ourportrait');
		var content = document.querySelector('#content');
		var submit = document.querySelector('.submit');
		var setin = document.querySelector('.setin');
		var headerdiv = document.querySelector('#headerdiv');
		var contact = document.querySelector('.contact');
		words.addEventListener("click",function () {
			ourportrait.style.display = "block";
		})
		words.addEventListener("click",function (){
			content.style.display = "block"
		})
		words.addEventListener("click",function (){
			submit.style.display = "block"
		})
		words.addEventListener("click",function (){
			setin.style.display = "block"
		})
		headerdiv.addEventListener("click",function (){
			contact.style.display = "block"
		})




	</script>
</body>
</html>