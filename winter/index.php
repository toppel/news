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
$sql = "SELECT id,name,title,passage,time FROM user";
$results = $conn->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>blog</title>
	<link rel="stylesheet" href="styles/view.css">
	<script src="jquery-2.2.1.js"></script>
</head>
<body>
	<div id="bg">
	<div class="shelter">
		
	</div>	
	
	<!-- 页头开始 -->
	<div id="header" name="header">
		<ul>
			<a href="index.php"><li><div id="headerdiv">首页</div></li></a>
			<a href="##"><li><div class="aboutmeheader">
				关于我
				
			</div></li></a>
			<a href="##"><li><div id="headerdiv">
				联系我
				<div class="contact">
					<a href="##"><i class="iconfont">&#xe610;</i></a>
					<a href="##"><i class="iconfont">&#xe603;</i></a>
					<a href="##"><i class="iconfont">&#xe60c;</i></a>
				</div>
				</div></li>
			</a>
			<a href="message bored.php"><li><div id="headerdiv">留言板</div></li></a>	
			<a href="login.html"><li><div id="headerdiv">登录</div></li></a>
			<a href="first.html"><li><div id="headerdiv">注册</div></li></a>
			<a href="##"><li class="set"><i class="iconfont">&#xe6bd;</i></li></a>
		</ul>
	</div>
	<div class="aboutme">
					嘿嘿嘿不告诉你

	</div>
	
	<!-- 正文开始 -->
	
	<div class="container">
		<div class="content1">
			<div class="content2">
				<a href="##">
					<div class="headportrait">
					
					</div>
				</a>
				<div class="hr"></div>
				<h1><div class="name">
					<?php echo $row['name']; ?>
				</div></h1>
				<div class="hr"></div>
				<a href="#content3"><div class="more">MORE</div></a>
				<div class="arrow">
					<a href="#content3"><i class="iconfont" style="color:white">&#xe61e;</i></a>
				</div>
			</div>
			<div id="content3">
				<ul>
					<a href="##"><li class="guidance">PHOTO</li></a>
					<a href="##"><li class="guidance2">ARTICLE</li></a>
				</ul>
				<div class="articlecc">
					<a href="article1.html" target="_blank">
						<div class="articlec">
							<h2>我是第一篇文章</h2>
							<hr>
							<div class="article">
							<?php if ($results->num_rows > 0) {
									    $rows = $results->fetch_assoc();
                                       	for( ; $row['name'] != $rows['name'] &&  $rows['id']>0; ){$rows = $results->fetch_assoc();}
        								if( $row['name']==$rows['name'] ){
        									echo $rows["passage"];} else {
   																		 echo "还未发表文章";
																		 }									
																	 } else {
   																		 	echo "还未发表文章";
																		    } ?>
							</div>
							<div class="picture">
								
							</div>
						</div>
					</a>
					<a href="article2.html" target="_blank">
						<div class="articlec">
							<h2>我是第二篇文章</h2>
							<hr>
							<div class="article">
								<?php if ($results->num_rows > 0) {
									    $rows = $results->fetch_assoc();
                                       	for( ; $row['name'] != $rows['name'] &&  $rows['id']>0; ){ $rows = $results->fetch_assoc();}
        								if( $row['name']==$rows['name'] ){
        									echo $rows["passage"];} else {
   																		 echo "还未发表文章";
																		 }									
																	 } else {
   																		 	echo "还未发表文章";
																		    } ?>
							</div>
							<div class="picture">
								
							</div>
						</div>
					</a>
					<a href="article3.html" target="_blank">
						<div class="articlec">
							<h2>我是第三篇文章</h2>
							<hr>
							<div class="article">
								<?php if ($results->num_rows > 0) {
									    $rows = $results->fetch_assoc();
                                       	for( ; $row['name'] != $rows['name'] &&  $rows['id']>0; ){$rows = $results->fetch_assoc();}
        								if( $row['name']==$rows['name'] ){
        									echo $rows["passage"];} else {
   																		 echo "还未发表文章";
																		 }									
																	 } else {
   																		 	echo "还未发表文章";
																		    } ?>
							</div>
							<div class="picture">
								
							</div>
						</div>
					</a>
				<a href="submitart.html">
					<div class="submitart">
						发表文章</div>
					
				</a>
				</div>
				<div class="photocc">
					<div class="photowrap">
							<a href="##">
								<div class="photoc">
									<div class="cover1">
										
									</div>
								</div>
								<div class="photoc">
									<div class="cover">
										
									</div>
								</div>
								<div class="photoc">
									<div class="cover">
										
									</div>
								</div>
								<div class="photoc">
									<div class="cover1">
										
									</div>
								</div>
							</a>
							<div class="Simulationwindow">
								
							</div>
					</div>
						
				</div>
					<div class="bigphotoc">
					<div class="wholewrap">
						<a href="##">
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
							<div class="bigphoto">
								<div class="wrap"></div>
							</div>
						</a>
						
					</div>
						
					</div>											
			</div>			
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
	
	</div>
	<script>
	var guidance =document.querySelector('.guidance');
	var guidance2 = document.querySelector('.guidance2');
	var articlecc = document.querySelector('.articlecc');
	var photocc = document.querySelector('.photocc');
	var wholewrap = document.querySelector('.wholewrap');
	var bigphotoc = document.querySelector('.bigphotoc');
	var bigphoto = document.querySelector('.bigphoto');
	var bigphoto1 = document.querySelector('.bigphoto:nth-child(1).bigphoto:nth-child(1)');
	var bigphoto2 = document.querySelector('.bigphoto:nth-child(2)');
	var bigphoto3 = document.querySelector('.bigphoto:nth-child(3)');
	var bigphoto4 = document.querySelector('.bigphoto:nth-child(4)');
	var bigphoto5 = document.querySelector('.bigphoto:nth-child(5)');
	var bigphoto6 = document.querySelector('.bigphoto:nth-child(6)');
	var bigphoto7 = document.querySelector('.bigphoto:nth-child(7)');
	var bigphoto8 = document.querySelector('.bigphoto:nth-child(8)');
	var bigphoto9 = document.querySelector('.bigphoto:nth-child(9)');
	var bigphoto10 = document.querySelector('.bigphoto:nth-child(10)');
	var wrap = document.querySelector('.wrap');
	var aboutmeheader = document.querySelector('.aboutmeheader');
	var aboutme = document.querySelector('.aboutme');
	var photoc = document.querySelector('.photoc');
	var Simulationwindow = document.querySelector('.Simulationwindow');
	var big2 = document.querySelector('.photoc:nth-child(2)');
	var big3 = document.querySelector('.photoc:nth-child(3)');
	var big4 = document.querySelector('.photoc:nth-child(4)');
	var shelter = document.querySelector('.shelter');
	guidance2.addEventListener("click",function() {
		articlecc.style.display = "block"
		photocc.style.display = "none"
	})
	guidance.addEventListener("click",function() {
		articlecc.style.display = "none"
		photocc.style.display = "block"
	})
	guidance2.addEventListener("click",function() {
		articlecc.style.display = "block"
		wholewrap.style.display = "none"
		bigphotoc.style.display = "none" 
	})
	guidance.addEventListener("click",function() {
		articlecc.style.display = "none"
		wholewrap.style.display = "block"
		bigphotoc.style.display = "block" 
	})
	aboutmeheader.addEventListener("click",function() {
		aboutme.style.display = "block"
	})
	aboutme.addEventListener("click",function() {
		aboutme.style.display = "none"
	})
	photoc.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		shelter.style.display = "block"
	})
	Simulationwindow.addEventListener("click", function() {
		Simulationwindow.style.display = "none"
		Simulationwindow.style.background = "url(images/spring.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 0 + "px";
		shelter.style.display = "none"
	})
	big2.addEventListener("click", function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.background = "url(images/summer.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 0 + "px";
		shelter.style.display = "block"
	})
	big3.addEventListener("click", function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.background = "url(images/autumn.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 100 + "px";
		shelter.style.display = "block"
	})
	big4.addEventListener("click", function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/winter.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 100 + "px";
		shelter.style.display = "block"
	})
	Simulationwindow.addEventListener("click",function() {
		shelter.style.display = "none"
	})
	bigphoto1.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/1.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto2.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/2.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto3.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/3.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto4.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/4.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto5.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/5.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto6.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/6.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto7.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/7.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto8.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/8.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto9.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/9.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})
	bigphoto10.addEventListener("click",function() {
		Simulationwindow.style.display = "block"
		Simulationwindow.style.backgroundImage = "url(images/10.jpg)"
		Simulationwindow.style.backgroundSize = "cover"
		Simulationwindow.style.marginTop = 580 + "px";
		shelter.style.display = "block"
	})


	</script>
	<script>
		function setDivCenter(Simulationwindow){   
        var top = ($(window).height() - $(Simulationwindow).height())/2;   
        var left = ($(window).width() - $(Simulationwindow).width())/2;   
        var scrollTop = $(document).scrollTop();   
        var scrollLeft = $(document).scrollLeft();   
        $(Simulationwindow).css( { position : 'absolute', 'top' : top + scrollTop, left : left + scrollLeft } ).show();  
    	}
	</script>
</body>
</html>