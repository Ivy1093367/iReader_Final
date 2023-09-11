
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<?php 
require("dataBase.php");
session_start();
?>
<head>
	<title>AdminAnnounce</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Elearn project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/courses.css">
	<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>
	
	<div class="super_container">
		
		<!-- Header -->
		
		<header class="header">
			
			<!-- Top Bar -->
			<div class="top_bar">
				<div class="top_bar_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<ul class="top_bar_contact_list">
										<li><div class="question">享讀就讀，i上閱讀</div></li>
										<li>
											<div>(07) 591 9000</div>
										</li>
										<li>
											<div>ireader2467@gmail.com</div>
										</li>
									</ul>
									<div class="top_bar_login ml-auto">
										<ul>
										<?php if(isset($_COOKIE['uNo'])){
											$SQL="  SELECT uName FROM user
												WHERE uNo=".$_COOKIE['uNo'];
												if($result=mysqli_query($link,$SQL)){
													while($row=mysqli_fetch_assoc($result)){
														?>	
												<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16 " color="#ffffff">
													<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
												</svg><font color="white"><?php echo $row['uName'];?></font></li>
												<li><a href="Back_logout.php">Logout</a></li>
												<?php }
												}
											}else{ ?>
												<li><a href="enroll.php">Register</a></li>
												<li><a href="login.php">Login</a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
									<div class="logo_content d-flex flex-row align-items-end justify-content-start">
										<div class="logo_img"><img src="images/logo.png" width="35" height="35" alt=""></div>
										<div class="logo_text">享讀★I讀</div>
									</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">首頁</a></li>
									<li><a href="about.php">關於我們</a></li>
									<li><a href="courses.php">找書趣</a></li>
									<li><a href="contact.php">顧客服務</a></li>
                                    <li><a href="AdminControl.php">管理者總頁</a></li>
								</ul>
								
								<!-- Hamburger -->
								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>
	
	<!-- Menu -->
	
	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="courses.php">Courses</a></li>
				<li class="menu_mm"><a href="instructors.php">Instructors</a></li>
				<li class="menu_mm"><a href="#">Events</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">phone:</span>(009) 35475 6688933 32</div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Home -->
	
	<div class="home">
		<!-- Background image artist https://unsplash.com/@thepootphotographer -->
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/courses.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">公告管理</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>AdminAnnounce</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Courses -->
	
	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<?php
					if(isset($_SESSION['Admin'])){
					?>
                    <div class="section_title text-center"><h3>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="row mb-3">
								<label for="inputEmail3" class="col-sm-2 col-form-label">標題</label>
								<div class="col-sm-10">
									<input type="text" name="title" required="required" class="form-control" id="inputEmail3">
								</div>
							</div>
							<div class="row mb-3">
								<label for="inputPassword3" class="col-sm-2 col-form-label">內文</label>
								<div class="col-sm-10">
									<textarea name="content" cols="33" rows="3" required="required" class="form-control" id="inputPassword3"></textarea>
								</div>
							</div>
							<div class="row mb-3">
								<label for="formFile" class="col-sm-2 col-form-label">圖片</label>
								<div class="col-sm-10">
									<input class="form-control" type="file" name="img" accept="image/*" required="required" id="formFile">
								</div>
							</div>
							<button type="submit" class="btn btn-primary">新增公告</button>
						</form></h3></div>
			
			<p></p>
			<div class="section_subtitle"><?php
                    $SQL="SELECT * FROM announce";
                    if($result=mysqli_query($link, $SQL)){
                        echo "<table class='table caption-top table-hover'>";
                        echo "<thead><tr><th>標題</th><th>內文</th><th>時間</th><th>公告圖片</th><th></th></tr></thead><tbody>";
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$row['title']."</td>";
                            echo "<td>".$row['content']."</td>";
                            echo "<td>".$row['time']."</td>";
                            echo "<td><img src='".$row['path']."' width='30%'></td>";
                            echo "<td><a href='Admin_Adel.php?title=".$row['title']."'>刪除</a></td>";
                            echo "</tr>";
                        }
                        echo "</tbody></table>";
                    }
                    if(isset($_POST['title'])){
						if(isset($_POST['content'])){
							$t=$_POST['title'];
                            $c=$_POST['content'];
                            $now=date("Y/m/d H:i:s", time());
                            $SQL="SELECT * FROM announce WHERE title LIKE '$t'";
                            if($result=mysqli_query($link, $SQL)){
								if(mysqli_num_rows($result)!=0){
									echo "<script type='text/javaScript'>";
                                    echo "alert('已有同名公告!請勿重複上傳!');";
                                    echo "</script>";
                                }else{
									$imgInfo=pathinfo($_FILES['img']['name']);
                                    $ext=$imgInfo["extension"];
                                    $pa=$t.".".$ext;
                                    $filename="images/".$pa;
                                    echo $filename;
                                    copy($_FILES['img']['tmp_name'], $filename);
                                    $SQL="INSERT INTO announce(title, content, time, path) VALUE('$t', '$c', '$now', '$filename')";
                                    if($result=mysqli_query($link, $SQL)){
										//header('Location: Admin_announce.php');
                                        echo "<meta http-equiv='refresh' content='0; url=Admin_announces.php'>";
                                    }
                                }
                            }
                        }
                    }
                    ?>

<?php
					}else{
						echo "粗企，你的開門方式不對 O-O";
                        echo "<meta http-equiv='refresh' content='3; url=login.php'>";
						//header("Refresh:3; url=login.php");
					}
					?>
					<!--<div class="section_subtitle">不知道如何選擇嗎?可以透過分類搜尋找到自己有興趣的書哦~</div>-->
				</div></div>
			</div>
			
		</div>
	</div>
	
	<!-- Footer -->
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				
				<!-- About -->
				<div class="col-lg-3 footer_col">
					<div class="footer_about">
						<div class="logo_container">
								<div class="logo_content d-flex flex-row align-items-end justify-content-start">
									<div class="logo_img"><img src="images/logo.png" width="35" height="35" alt=""></div>
									<div class="logo_text">享讀★I讀</div>
								</div>
							</div>
							<div class="footer_about_text">
								<p>享讀-電子書/實體書籍無限閱讀<br>I讀-電子書租借或購買<br>享讀就讀，i上閱讀</p>
							</div>
							
						</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Quick menu</div>
						<ul class="footer_list">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About us</a></li>
							<li><a href="courses.php">Books</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Useful Links</div>
						<ul class="footer_list">
							<li><a href="like.php">收藏</a></li>
							<li><a href="cart.php">購物車</a></li>
							<li><a href="Mybooks.php">個人書櫃</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contact Us</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Address:</div>
								<div class="footer_contact_line">高雄市楠梓區高雄大學路700號</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Phone:</div>
								<div class="footer_contact_line">(07) 591 9000</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Email:</div>
								<div class="footer_contact_line">ireader2467@gmail.com</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/courses.js"></script>
</body>

</html>