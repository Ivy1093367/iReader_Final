<!DOCTYPE html>
<html lang="zh-Hant-TW">
<!--<html lang="zh-Hant-TW">-->
<?php require("dataBase.php");?>
<head>
<title>IReader</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!--<link href="setofont.ttf" rel="stylesheet">-->
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
									<li class="active"><a href="index.php">首頁</a></li>
									<li><a href="about.php">關於我們</a></li>
									<li><a href="courses.php">找書趣</a></li>
									<li><a href="contact.php">顧客服務</a></li>
								</ul>
								<a class="btn btn-outline-warning" href="like.php" role="button">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
									</svg>
								</a>
								<a class="btn btn-outline-warning" href="cart.php" role="button">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
										<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
									  </svg>
								</a>
								<a class="btn btn-outline-warning" href="Mybooks.php" role="button">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
										<path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
									  </svg>
									個人書櫃
								</a>
								
								<!--<button type="button"><i class="fa fa-shopping-cart"></button>
								div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>-->

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
		<!-- d? -->
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
		<!-- D? -->
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<!-- ?? -->
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<!-- ?? -->
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">首頁</a></li>
				<li class="menu_mm"><a href="courses.php">找書趣</a></li>
				<li class="menu_mm"><a href="instructors.php">Instructors</a></li>
				<li class="menu_mm"><a href="#">Events</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">聯絡我們</a></li>
			</ul>
		</nav>
		<!-- ?? -->
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
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<?php
					$SQL="SELECT * FROM announce";
					if($result=mysqli_query($link,$SQL)){
						while($row=mysqli_fetch_assoc($result)){
							// echo $row['title']." / ";
							// echo $row['time']." / ";
							// echo $row['content'];
							// echo "<br/>";
				?>
						<div class="owl-item">
							<!-- Background image artist https://unsplash.com/@benwhitephotography -->
							<div class="home_slider_background" style="background-image:url(<?php echo $row['path'];?>)"></div>
							<div class="home_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="home_content text-center">
												<!--<div class="home_logo"><img src="images/home_logo.png" alt=""></div>-->
												<br><br><br><br><br><br><br><br>
												<div class="home_text">
													<div class="home_title"><font face="HanyiSentyCrayon-non-color"><?php echo $row['title'];?></font></div>
													<div class="home_subtitle"><font color="#ff8a00"><b><?php echo $row['content'];?></b></font></div>
												</div>
												<div class="home_buttons">
													<!-- #公告# -->
													<div class="button home_button"><a href="courses.php">找書趣<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
													<div class="button home_button"><a href="enroll.php">立即註冊<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>


			</div>
		</div>
	</div>

	<!-- Featured Course -->

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Home Slider Nav -->
					<div class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
						<div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						<div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					</div>
					<div class="featured_container">
						<br>
						<br>
						<br>
						<br>
						<?php
            				$SQL="  SELECT B.ISBN, B.bName, B.paper_buy
							FROM topbooks T, books B
							WHERE T.ISBN=B.ISBN
							ORDER BY T.rank";
							if($result=mysqli_query($link,$SQL)){
								while($row=mysqli_fetch_assoc($result)){
									// echo "<img style='width:200px;' src='bimgs/".$row['ISBN'].".png'>";
									// echo $row['ISBN'];
									// echo $row['bName'];
									// echo $row['paper_buy'];
									// echo "<br/>";
								}
							}
				        ?>
						<div class="row">
							<div class="col-lg-6 featured_col">
								<div class="featured_content">
									<div class="featured_header d-flex flex-row align-items-center justify-content-start">
										<div class="featured_tag"><a href="book.php?isbn=9789863126850">More</a></div>
										<div class="featured_price ml-auto">Price: <span>$567</span></div>
									</div>
									<div class="featured_title"><h3><a href="book.php?isbn=9789863126850">新觀念 PHP8+MySQL+AJAX 網頁程式範例教本(第六版)</a></h3></div>
									<div class="featured_text">● XAMPP整合套件和Visual Studio Code 編輯器<br>● PHP 基本語法與流程控制<br>● 表單、Cookie、Session等狀態管理<br>● 伺服端檔案處理、上傳和電子郵件<br>● MySQL 資料庫管理與SQL基本語法
										<br>● PHP 物件導向和例外處理<br>● AJAX、JSON和REST API<br>● Laravel框架與 MVC 設計模式<br>● 全書範例檔案和兩本電子書下載</div>
									<div class="featured_footer d-flex align-items-center justify-content-start">
										<div class="featured_author_image"><img src="images/php_author.jfif" alt=""></div>
										<div class="featured_author_name">作者 陳會安</div>
										<div class="course_sales ml-auto"><a href="<?php echo 'Useradd_cookies.php?isbn=9789863126850&type=L'?>" role="button">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" color="#ff8a00">
												<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
											</svg>
										</a></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 featured_col">
								<!-- Background image artist https://unsplash.com/@jtylernix -->
								<div class="featured_background" style="background-image:url(images/phpbook.jfif)"></div>
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
					<div class="section_title text-center"><h2>Choose your books</h2></div>
					<div class="section_subtitle">不知道如何選擇嗎?可以透過分類搜尋找到自己有興趣的書哦~</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="course_search">
						<form action="courses.php" method="post" class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
							<div><input type="text" name="name" class="course_input" placeholder="書名"></div>
							<div><input type="text" name="publish" class="course_input" placeholder="出版社"></div>
							<button class="course_button"><span>search book</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<!-- Courses Slider -->
					<div class="courses_slider_container">
						<h3><b>新書推薦</b></h3>
						<div class="owl-carousel owl-theme courses_slider">
							
							<!-- Slider Item -->
							<?php
								$SQL="  SELECT T.rank, B.ISBN, B.bName, B.author, B.bInfo, B.paper_buy
								FROM topbooks T, books B
								WHERE T.ISBN=B.ISBN
								ORDER BY T.rank";
								if($result=mysqli_query($link,$SQL)){
									while($row=mysqli_fetch_assoc($result)){
										// echo "<img style='width:200px;' src='bimgs/".$row['ISBN'].".png'>";
										// echo $row['ISBN'];
										// echo $row['bName'];
										// echo $row['paper_buy'];
										// echo "<br/>";
							?>
										<div class="owl-item">
											<div class="course">
												<div class="course_image"><img src="images/<?php echo $row['ISBN'];?>.png" alt=""></div>
												<div class="course_body" height="500">
													<div class="course_header d-flex flex-row align-items-center justify-content-start">
														<div class="course_tag"><a href="book.php?isbn=<?php echo $row['ISBN'];?>">Top<?php echo $row['rank'];?></a></div>
														<div class="course_price ml-auto">Price: <span>$<?php echo $row['paper_buy'];?></span></div>
													</div>
													<div class="course_title"><h3><a href="book.php?isbn=<?php echo $row['ISBN'];?>"><?php echo $row['bName'];?></a></h3></div>
													<div class="course_text"><?php 
																				$str=str_replace("\\","<br/>", $row['bInfo']);
																				echo $str;?>
														</div>
													<div class="course_footer d-flex align-items-center justify-content-start">
													<!-- 6?	 -->
													<div class="course_author_image"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
														<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
														<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
													</svg></div>
														<div class="course_author_name">作者 <?php echo $row['author'];?></div>
														<!-- 6?	 -->
														<div class="course_sales ml-auto"><a href="<?php echo 'Useradd_cookies.php?isbn='.$row['ISBN'].'&type=L'?>" role="button">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" color="#ff8a00">
																<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
															</svg>
														</a></div>
													</div>
												</div>
											</div>
										</div>
							<?php
									}
								}
							?>


						</div>
						
						<!-- Courses Slider Nav -->
						<div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						<div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->
	<div class="milestones">
		<!-- Background image artis https://unsplash.com/@thepootphotographer -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row milestones_container">
							
				<!-- Milestone -->
				<?php
				$SQL="SELECT DISTINCT COUNT(*) AS total FROM user";
				$result=mysqli_query($link,$SQL)
				?>
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="<?php 
																			while($row=mysqli_fetch_assoc($result)){
																				echo $row['total'];
																			}?>">0
																		</div>
						<div class="milestone_text">Users</div>
					</div>
				</div>

				<!-- Milestone -->
				<?php
				$SQL="SELECT DISTINCT COUNT(*) AS total FROM books";
				$result=mysqli_query($link,$SQL)
				?>
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="<?php 
																			while($row=mysqli_fetch_assoc($result)){
																				echo $row['total'];
																			}?>">0
																		</div>
						<div class="milestone_text">Books</div>
					</div>
				</div>

				<!-- Milestone -->
				<?php
				$SQL="SELECT DISTINCT COUNT(*) AS total FROM comment";
				$result=mysqli_query($link,$SQL)
				?>
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="<?php 
																			while($row=mysqli_fetch_assoc($result)){
																				echo $row['total'];
																			}?>">0
																		</div>
						<div class="milestone_text">Comments</div>
					</div>
				</div>

				<!-- Milestone -->
				<!--<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Countries</div>
					</div>
				</div>-->

			</div>
		</div>
	</div>

	<!-- Sections -->

	<div class="grouped_sections">
		<div class="container">
			<div class="row">

				<!-- Why Choose Us -->

				<!--<div class="col-lg-4 grouped_col">
					<div class="grouped_title">Why Choose Us?</div>
					<div class="accordions">

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center active"><div>Mauris vehicula nisi congue?</div></div>
							<div class="accordion_panel">
								<div>
									<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Vehicula nisi congue, blandit?</div></div>
							<div class="accordion_panel">
								<div>
									<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Mauris vehicula nisi congue?</div></div>
							<div class="accordion_panel">
								<div>
									<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Nisi congue, blandit purus sed?</div></div>
							<div class="accordion_panel">
								<div>
									<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
								</div>
							</div>
						</div>

					</div>

				</div>-->

				<!-- Events -->

				<!--<div class="col-lg-4 grouped_col">
					<div class="grouped_title">Upcoming Events</div>
					<div class="events">-->

						<!-- Event -->
						<!--<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">20</div>
									<div class="event_month">April</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">New Marketing Course Release</a></div>
								<div class="event_subtitle">Location: Online Platform</div>
							</div>
						</div>-->

						<!-- Event -->
						<!--<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">23</div>
									<div class="event_month">April</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">Students Art Workshop</a></div>
								<div class="event_subtitle">Location: Online Platform</div>
							</div>
						</div>-->

						<!-- Event -->
						<!--<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">25</div>
									<div class="event_month">April</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">Launch Party for a new Platform</a></div>
								<div class="event_subtitle">Location: Online Platform</div>
							</div>
						</div>-->

						<!-- Event -->
						<!--<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">27</div>
									<div class="event_month">April</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">New Marketing Course</a></div>
								<div class="event_subtitle">Location: Online Platform</div>
							</div>
						</div>-->

						<!-- Event -->
						<!--<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">29</div>
									<div class="event_month">April</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">New Marketing Course</a></div>
								<div class="event_subtitle">Location: Online Platform</div>
							</div>
						</div>

					</div>
				</div>-->

				<!-- News -->

				<!--<div class="col-lg-4 grouped_col">
					<div class="grouped_title">Latest News</div>
					<div class="news">-->
						
						<!-- News Post -->
						<!--<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_1.jpg" alt="https://unsplash.com/@beccatapert"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">April 02, 2018</div>
								<div class="news_post_title"><a href="news.php">Why Choose online education?</a></div>
								<div class="news_post_author">By <a href="#">William Smith</a></div>
							</div>
						</div>-->

						<!-- News Post -->
						<!--<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_2.jpg" alt="https://unsplash.com/@nbb_photos"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">April 02, 2018</div>
								<div class="news_post_title"><a href="news.php">Books, Kindle or tablet?</a></div>
								<div class="news_post_author">By <a href="#">William Smith</a></div>
							</div>
						</div>-->

						<!-- News Post -->
						<!--<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_3.jpg" alt="https://unsplash.com/@rawpixel"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">April 02, 2018</div>
								<div class="news_post_title"><a href="news.php">Why Choose online education?</a></div>
								<div class="news_post_author">By <a href="#">William Smith</a></div>
							</div>
						</div>-->

						<!-- News Post -->
						<!--<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_4.jpg" alt="https://unsplash.com/@jtylernix"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">April 02, 2018</div>
								<div class="news_post_title"><a href="news.php">Books, Kindle or tablet?</a></div>
								<div class="news_post_author">By <a href="#">William Smith</a></div>
							</div>
						</div>

					</div>
				</div>-->
			</div>
		</div>
	</div>

	<!-- Video -->

	<!--<div class="video">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="video_container_outer">
						<div class="video_container">-->
							<!-- Video poster image artist: https://unsplash.com/@annademy -->
							<!--<video id="vid1" class="video-js vjs-default-skin" controls data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/5_MRXyYjHDk"}], "youtube": { "iv_load_policy": 1 } }'>
							</video>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<!-- Join -->

	<div class="join">
		<!--<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center"><h2>Join Our Platform Today</h2></div>
					<div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
				</div>
			</div>
		</div>-->
		<div class="button join_button"><a href="enroll.php">register now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
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
						<!--<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>-->
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/video-js/Youtube.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>