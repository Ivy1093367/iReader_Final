
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<?php 
require("dataBase.php");
session_start();
?>
<head>
<title>AdminUsers</title>
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
								<!--<a class="btn btn-outline-warning" href="like.php" role="button">
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
								</a>-->
								
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
							<div class="home_title">使用者管理</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>AdminUsers</li>
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
                    <div class="section_title text-center">
                    <!--<form action="" method="post" enctype="multipart/form-data">-->
                    <form action="" method="post">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">姓名:</label>
                        <div class="col-sm-10">
                        <input type=text name=name required="required" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">生日:</label>
                        <div class="col-sm-10">
                        <input type=date name=birth required="required" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputState" class="col-sm-2 col-form-label">性別:</label>
                    <div class="col-sm-10">
                    <select name="gender" id="inputState" class="col-sm-2 col-form-label">
                    <option selected>Choose...</option>
                    <option>男</option><option>女</option><option value='N'>N/A</option>
                    </select></div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEL:</label>
                        <div class="col-sm-10">
                        <input type=tel name=tel spaceholder="只需數字" required="required" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">EMail:</label>
                        <div class="col-sm-10">
                        <input type=email name=mail required="required" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">密碼:</label>
                        <div class="col-sm-10">
                        <input type=password name=pwd required="required" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Check:</label>
                        <div class="col-sm-10">
                        <input type=password name=checkpwd required="required" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputState" class="col-sm-2 col-form-label">Role:</label>
                    <div class="col-sm-10">
                    <select name="role" id="inputState" class="col-sm-2 col-form-label">
                    <option selected>Choose...</option>
                    <option>User</option><option>Admin</option>
                    </select></div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="新增使用者">
                    </form>
                    
                </div>

                    <p></p>
                    <div class="section_subtitle">
                    <?php
                    $SQL="SELECT * FROM user";
                    if($result=mysqli_query($link, $SQL)){
                        echo "<table class='table caption-top table-hover'>";
                        echo "<thead><tr><th>uNo</th><th>名稱</th><th>E-Mail</th><th>性別</th><th>生日</th><th>聯絡方式</th><th>書庫</th><th>權限</th><th></th></tr></thead><tbody>";
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$row['uNo']."</td>";
                            echo "<td>".$row['uName']."</td>";
                            echo "<td>".$row['uMail']."</td>";
                            echo "<td>".$row['uGender']."</td>";
                            echo "<td>".$row['uBirth']."</td>";
                            echo "<td>".$row['uTel']."</td>";
                            echo "<td><a href='Admin_usersbook.php?uNo=".$row['uNo']."'>查看</a></td>";
                            echo "<td>".$row['uRole']."</td>";
                            echo "<td><a href='Admin_Udel.php?uNo=".$row['uNo']."'>刪除</a></td>";
                            echo "</tr>";
                        }
                        echo "</tbody></table>";
                    }
                    ?>
                    <?php
                    if(isset($_POST['name'])){
                        $name=$_POST['name'];
                        $birth=$_POST['birth'];
                        $gender=$_POST['gender'];
                        $tel=$_POST['tel'];
                        $mail=$_POST['mail'];
                        $pwd=$_POST['pwd'];
                        $pwdC=$_POST['checkpwd'];
                        $role=$_POST['role'];
                        if($pwd!=$pwdC){
                            echo "<script type='text/javaScript'>";
                            echo "alert('密碼不一致! 註冊失敗');";
                            echo "</script>";
                        }else{
                            $SQL="INSERT INTO user(uName, uMail, uPwd, uGender, uBirth, uTel, uRole) VALUE ('$name', '$mail', '$pwd', '$gender', '$birth', '$tel', '$role')";
                            mysqli_query($link, $SQL);
                            //header('Location: Admin_users.php');
                            echo "<meta http-equiv='refresh' content='0; url=Admin_users.php'>";
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
<script src="js/courses.js"></script>
</body>
</html>

<?php
        if(isset($_SESSION['Admin'])){
            if($_SESSION['Admin']!="Yes"){
                header('Location: login.php');
            }
        }else{
            header('Location: index.php');
        }
?>

    新增會員: <br/>
    <form action="" method="post">
        名:
        <input type=text name=name required="required">
        <br/>
        生:
        <input type=date name=birth required="required">
        <br/>
        性別:
        <select name=gender>
            <option>男</option>
            <option>女</option>
            <option value='N'>N/A</option>
        </select>
        <br/>
        tel:
        <input type=tel name=tel spaceholder="只需數字" required="required">
        <br/>
        Email:
        <input type=email name=mail required="required">
        <br/>
        pwd:
        <input type=password name=pwd required="required">
        <br/>
        check:
        <input type=password name=checkpwd required="required">
        <br/>
        Role:
        <select name=role>
            <option>User</option>
            <option>Admin</option>
        </select>
        <br/>
        <input type="submit" value="新增">
</form>
<br/>
<p></p>

<?php
$SQL="SELECT * FROM user";
if($result=mysqli_query($link, $SQL)){
    echo "<table border=1>";
    echo "<tr><td>uNo</td><td>名稱</td><td>E-mail</td><td>性別</td><td>生日</td><td>聯絡方式</td><td>書庫</td><td>權限</td></tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['uNo']."</td>";
        echo "<td>".$row['uName']."</td>";
        echo "<td>".$row['uMail']."</td>";
        echo "<td>".$row['uGender']."</td>";
        echo "<td>".$row['uBirth']."</td>";
        echo "<td>".$row['uTel']."</td>";
        echo "<td><a href='Admin_usersbook.php?uNo=".$row['uNo']."'>查看</a></td>";
        echo "<td>".$row['uRole']."</td>";
        echo "<td><a href='Admin_Udel.php?uNo=".$row['uNo']."'>刪除</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $birth=$_POST['birth'];
    $gender=$_POST['gender'];
    $tel=$_POST['tel'];
    $mail=$_POST['mail'];
    $pwd=$_POST['pwd'];
    $pwdC=$_POST['checkpwd'];
    $role=$_POST['role'];
    if($pwd!=$pwdC){
        echo "<script type='text/javaScript'>";
        echo "alert('密碼不一致! 註冊失敗');";
        echo "</script>";
    }else{
        $SQL="INSERT INTO user(uName, uMail, uPwd, uGender, uBirth, uTel, uRole) VALUE ('$name', '$mail', '$pwd', '$gender', '$birth', '$tel', '$role')";
        mysqli_query($link, $SQL);
        header('Location: Admin_users.php');
    }
}
?>