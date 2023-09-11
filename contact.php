<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
<title>Contact</title>
<?php require("dataBase.php");?>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<!--手風琴效果-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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
												$SQL="SELECT uName FROM user
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
									<li class="active"><a href="contact.php">顧客服務</a></li>
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
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container-fluid">
			<div class="row row-xl-eq-height">
				<!-- Contact Content -->
				<div class="col-xl-6">
					<div class="contact_content">
						<div class="row">
							<!--<div class="col-xl-6">
								<div class="contact_about">
									<div class="logo_container">
										<a href="#">
											<div class="logo_content d-flex flex-row align-items-end justify-content-start">
												<div class="logo_img"><img src="images/logo.png" width="35" height="35" alt=""></div>
												<div class="logo_text">learn</div>
											</div>
										</a>
									</div>
									<div class="contact_about_text">
										<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar.</p>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="contact_info_container">
									<div class="contact_info_main_title">Contact Us</div>
									<div class="contact_info">
										<div class="contact_info_item">
											<div class="contact_info_title">Address:</div>
											<div class="contact_info_line">811高雄市楠梓區高雄大學路700號</div>
										</div>
										<div class="contact_info_item">
											<div class="contact_info_title">Phone:</div>
											<div class="contact_info_line">(07) 591 9000</div>
										</div>
										<div class="contact_info_item">
											<div class="contact_info_title">Email:</div>
											<div class="contact_info_line">ireader2467@gmail.com</div>
										</div>
									</div>
								</div>
							</div>-->
							<div class="container">
								<div class="accordion accordion-flush" id="myAccordion" >
								<div class="accordion-item">
								<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
								<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
								</symbol>
								<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
									<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
								</symbol>
								<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
									<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
								</symbol>
								</svg>

								<div class="alert alert-primary d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
								<div>常見問題</div>
								</div>
									<h2 class="accordion-header" id="heading1" style="font-size: 40px;">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false">
										你們有免運活動嗎?</button>
									</h2>
									<div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#myAccordion" style="">
									<div class="accordion-body">
										<p>不好意思目前沒有哦!站主們還是學生現在很窮QQ<br>近期以買多折扣活動為主，或許日後會推出免運活動敬請期待~<font color="#ff8a00"><b>歡迎抖內><</b></font></p>
									</div>
									</div>
								</div>		
								<div class="accordion-item">
									<h2 class="accordion-header" id="heading2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false">
										會員有甚麼優惠或招待嗎?</button>
									</h2>
									<div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#myAccordion" style="">
									<div class="accordion-body">
										<p>因為平台剛成立不久，近期的活動為註冊會員便可享第一次購物30%折扣的超值優惠哦!!<br>快來加入吧~~</p>
									</div>
									</div>
								</div>		
								<div class="accordion-item">
									<h2 class="accordion-header" id="heading3">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
										如果在我們的平台找不到自己想買的那本書怎麼辦?</button>
									</h2>
									<div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
									<div class="accordion-body">
										<p>可以透過<font color="#ff8a00"><b>下方意見投遞</b></font>告訴我們噢!或許不久後你就會看到新書榜上出現它了!</p>
									</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="heading4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
										下單之後真的會收到書嗎?</button>
									</h2>
									<div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
									<div class="accordion-body">
										<p>不會XD</p>
									</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="heading5">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
										我的問題並沒有在以上列表中。</button>
									</h2>
									<div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
									<div class="accordion-body">
										<p>歡迎您透過<font color="#ff8a00"><b>下方意見投遞</b></font>告知我們~~</a>。</p>
									</div>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="contact_form_container">
							<form action="Back_mail.php" method="post" id="contact_form" class="contact_form">
								<div>
									<div class="row">
										<div class="col-lg-6 contact_name_col">
											<input type="text" name="name" class="contact_input" placeholder="Name" required="required">
										</div>
										<div class="col-lg-6">
											<input type="email" name="mail" class="contact_input" placeholder="E-mail" required="required">
										</div>
									</div>
								</div>
								<input type="hidden" name="mailType" value="已收到意見回饋: ">
								<div><input type="text" name="subject" class="contact_input" placeholder="Subject" required="required"></div>
								<div><textarea name="content" class="contact_input contact_textarea" placeholder="Message"></textarea></div>
								<input type="hidden" name="ending" value="請靜候處理。感謝!">
								<button class="contact_button"><span>send message</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Map -->
				<div class="col-xl-6 map_col">
					<div class="contact_map">

						<!-- Google Map -->
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.87608775504!2d120.28572321479518!3d22.732846585100607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0f0e428e298f%3A0xe092a59b86a28bcd!2z566h55CG5a246Zmi!5e0!3m2!1szh-TW!2stw!4v1654882363453!5m2!1szh-TW!2stw" 
									width="800" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
						</div>

					</div>
				</div>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>