<!DOCTYPE html>
<html lang="zh-Hant-TW">
<?php require("dataBase.php"); ?>
<head>
<title>BookDetail</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
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
								<a href="#">
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
		<!--<div class="header_search_container">
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
		</div>-->`			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<!--<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>-->
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="courses.html">Courses</a></li>
				<li class="menu_mm"><a href="instructors.html">Instructors</a></li>
				<li class="menu_mm"><a href="#">Events</a></li>
				<li class="menu_mm"><a href="blog.html">Blog</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">phone:</span>(07) 591 9000</div>
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
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">書籍詳細資訊</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="courses.html">找書趣</a></li>
									<li>詳細書目</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<?php
								$ISBN=$_GET["isbn"];
								$SQL=" SELECT * FROM books
									   WHERE ISBN=".$ISBN;
								if($result=mysqli_query($link,$SQL)){
        							while($row=mysqli_fetch_assoc($result)){
										$bclass=$row['bClass'];
										$str3=str_replace("\\","<br/>", $row['binfo_detail']);
							?>
							
							<div class="news_post_image"><img src="images/<?php echo $row['ISBN'];?>.png" alt=""></div>
							<div class="news_post_body">
								<!--<div class="news_post_date"><a href="#">April 02, 2018</a></div>-->
								<br><div class="news_post_title"><a href="#"><?php echo $row['bName'];?></a></div>
								<a class="btn btn-danger" href="<?php echo 'Useradd_cookies.php?isbn='.$row['ISBN'].'&type=L'?>" role="button">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
									</svg> 收藏
								</a><br><br>
								<div class="news_post_author">作者 : <a href="#"><?php echo $row['Author']?></a></div>
								<div class="news_post_author">出版社 : <a href="#"><?php echo $row['bPublish']?></a></div>
								<div class="news_post_author">實體書庫存剩餘 : <font color="#ff8a00"><b><?php echo $row['bAmount']?></b></font> 本</div>
								
								<div class="news_post_text">
									<div><h3><font color="#ff8a00"><b>內容簡介</b></font></h3></div>
									<p><?php echo $str3?></p>
								</div>
								<!--<div class="news_post_link"><a href="#">Read More</a></div>-->
							</div>
							<?php
        						}
    						}?>
						</div>

						<!-- News Post -->
						<!--<div class="news_post">
							<div class="news_post_image"><img src="images/news_6.jpg" alt=""></div>
							<div class="news_post_body">
								<div class="news_post_date"><a href="#">April 02, 2018</a></div>
								<div class="news_post_title"><a href="#">Why choose an online course?</a></div>
								<div class="news_post_meta d-flex flex-row align-items-start justify-content-start">
									<div class="news_post_author">By <a href="#">William Smith</a></div>
									<div class="news_post_comments"><a href="#">3 Comments</a></div>
									<div class="news_post_tags">
										<span>in </span>
										<ul>
											<li><a href="#">Social Media</a></li>
										</ul>
									</div>
								</div>
								<div class="news_post_text">
									<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>-->

					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
						<!--<div class="sidebar_search">
							<form action="#" id="sidebar_search_form" class="sidebar_search_form">
								<input type="text" class="sidebar_search_input" placeholder="Search" required="required">
								<button class="sidebar_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>-->
						<div class="sidebar_categories">
							<div class="sidebar_title">Categories</div>
							<div class="sidebar_links">
								<ul>
									<!--<li><a href="#">Education</a></li>-->
									<?php
										$SQL="SELECT DISTINCT bClass FROM books";
            							if($result=mysqli_query($link,$SQL)){
                							while($row=mysqli_fetch_assoc($result)){
												if($bclass==$row['bClass']){
									?>
									<li><a href="#"><font color="#ff8a00"><b><?php echo $row['bClass']; ?></b></font></a></li>
									<?php
												}else{
									?>
									<li><a href="#"><?php echo $row['bClass']; ?></a></li>
									<?php
												}
               								}
            							}
            						?>
								</ul>
							</div>
						</div><br><br>
						<?php
						$SQL="  SELECT * FROM books
						WHERE ISBN=".$ISBN;
						if($result=mysqli_query($link,$SQL)){
							while($row=mysqli_fetch_assoc($result)){
						?>
			
						<div><p><div>Price: <span>$<?php echo $row['paper_buy']?></span></div><a class="btn btn-info" href="<?php echo 'Useradd_cookies.php?isbn='.$row['ISBN'].'&type=RB'?>" role="button">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
								<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"></path>
							</svg>購買實體書</a></p>
							<p><div class="course_price ml-auto">Price: <span>$<?php echo $row['i_buy']?></span></div><a class="btn btn-info" href="<?php echo 'Useradd_cookies.php?isbn='.$row['ISBN'].'&type=IB'?>" role="button">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
  								<path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
  								<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
							</svg>購買電子書</a></p>
							<p><div class="course_price ml-auto">Price: <span>$<?php echo $row['i_rent']?></span></div><a class="btn btn-info" href="<?php echo 'Useradd_cookies.php?isbn='.$row['ISBN'].'&type=IR'?>" role="button">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
								<path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
 								<path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
							</svg>租借電子書</a></p></div>
						<?php
        					}
    					}
						?>
						<div class="sidebar_latest_posts">
							<div class="sidebar_title">留言板</div>
							<div class="latest_posts">
						
								<!-- Comment -->
								<?php $SQL="  SELECT U.uName, U.uPhoto, C.Comment, C.Time FROM comment C, user U WHERE C.uNo=U.uNo AND ISBN=$ISBN";
								if($result=mysqli_query($link,$SQL)){
									while($row=mysqli_fetch_assoc($result)){
								?>
								
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<?php if($row['uPhoto'] ==null){ ?>
										<div><div class="latest_post_image"><svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
											<path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
											<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
										</svg></div></div>
									<?php }else{ ?>
										<div><div class="latest_post_image"><img src="images/<?php echo $row['uPhoto']?>" alt="" width="72" height="72"></div></div>
									<?php } ?>
									<div class="latest_post_body">
										<div class="latest_post_date"><?php echo $row['Time'] ?></div>
										<div class="latest_post_title"><?php echo $row['Comment'] ?></div>
										<!--<div class="latest_post_title"><a href="news.html">Why Choose online education?</a></div>-->
										<div class="latest_post_author">By <?php echo $row['uName'] ?></div>
									</div>
								</div>
								<?php
									}
								}?>
								<?php if(isset($_COOKIE['uNo'])){
									echo "<form action='' method='post'>";
									echo "<textarea name='cmt' class='form-control' placeholder='留下想說的話吧~~' cols='col-lg-4' rows='5'></textarea>";
									//echo "<input type='textarea' class='form-control' placeholder='留下想說的話吧~~'>";
									//echo "留言: <textarea name='cmt'  cols='20' rows='5'></textarea>";
									//echo "<textarea name='cmt' class='contact_input contact_textarea' placeholder='留下想說的話吧~~' cols='col-lg-4' rows='5'></textarea>";
									echo "<br>";
									//echo "<button class='contact_button'><span>送出</span><span class='button_arrow'>";
									//echo "<i class='fa fa-angle-right' aria-hidden='true'></i></span></button>";
									echo "<input type='submit' class='btn btn-primary' value='送出'>";
									echo "</form>";
								}else{
									echo "要留言請先<a href='login.php'><font color='#ff8a00'><b>登入</b></font></a>喔喔喔!!!";
								}

								if(!empty($_POST['cmt'])){
									$cmt=$_POST['cmt'];
									$time=date("Y/m/d H:i:s", time());
										$uNo=$_COOKIE['uNo'];
										$SQL="INSERT INTO comment(ISBN, uNo, Time, Comment) VALUE ('$ISBN', '$uNo', '$time', '$cmt')" ;
										if(mysqli_query($link, $SQL)){
											echo "<meta http-equiv='refresh' content='0; url=book.php?isbn=".$_GET['isbn']."'>";
											//header("Location: book.php?isbn=".$ISBN);
										}else{
											echo "<script type='text/javaScript'>";
											echo "alert('失敗，再試一次QQ');";
											echo "</script>";
										}
								}?>
							</div>
						</div>
						<div class="sidebar_elearn">
							<div class="elearn">
								<div class="elearn_background" style="background-image:url(images/elearn.jpg)"></div>
								<div class="elearn_content d-flex flex-column align-items-center justify-content-end">
									<div class="elearn_line">Get a 30% Discount</div>
									<div class="elearn_link"><a href="enroll.php">Register now</a></div>
									<div class="dcount">
										<div class="dcount_content d-flex flex-column align-items-center justify-content-center">
											<div class="dcount_value">30%</div>
											<div class="dcount_text">off</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Pagination -->
			<!--<div class="row">
				<div class="col">
					<div class="news_pagination">
						<ul>
							<li class="active"><a href="#">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li><a href="#">04</a></li>
							<li><a href="#">05</a></li>
						</ul>
					</div>
				</div>
			</div>-->

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
<script src="js/news.js"></script>
</body>
</html>