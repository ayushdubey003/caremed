<!DOCTYPE html>
<html lang="en">
<head>
<title>Receptionist</title>
<link rel="icon" href="../images/logo.png" type="image/gif" sizes="16x16">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">

<div class="header_container">
            <div class="container">
                <div class="row"><br><br><center> <img src="../images/logo.png"> </center>
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <nav class="main_nav ml-auto">
                                    
                                <ul>
                                    <li><a href="../index.php">Home</a></li>
                                </ul>
                            </nav>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</head>
<body>


<?php
	session_start();
	unset($_SESSION['username']);
	//require 'header.html';
	$servername = "localhost";
    $username = "Ayush";
    $password = "abcdefgh";
    $dbname = "medanta";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(isset($_POST['but']))
	{
		@$email=$_POST['username'];
		@$pass=$_POST['pass'];
		if(empty($email)||empty($pass))
		{
			echo('<script type="text/javascript">
						alert("All fields are compulsary");
				</script>');
		}
		else
		{
			$encpass=md5($pass);
			$query="SELECT * FROM receptionist WHERE id='$email' AND pass='$encpass'";
			$result=mysqli_query($conn,$query);
			
			if(mysqli_num_rows($result)>0)
			{
				$_SESSION['username']=$email;
				header("Location: receptionisthome.php");
			}
			else
				echo('<script type="text/javascript">
					alert("Invalid username or password");
				</script>');
		}
	}
?>

<div class="super_container">
	
	<!-- Home -->


		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../images/news.jpg" data-speed="0.8"></div>
		
	

	<!-- News -->

	<div class="about">
                <form action="receptionist.php" method="POST">
                    <p style="color:#000000;font-size:20px;margin-left:45%">Username : </p><input type="text" name="username" style="width: 60%;padding: 12px 20px;margin-left: 20%;box-sizing: border-box;border: 2px solid gray;border-radius: 4px;"></input>
                    <p style="color:#000000;font-size:20px;margin-left:45%">Password : </p><input type="password" name="pass" style="width: 60%;padding: 12px 20px;margin-left:20%;box-sizing: border-box;border: 2px solid gray;border-radius: 4px;"></input>
                    <button style="margin-top:10px;margin-left:46%;margin-bottom:100px;padding:12px 20px;background:#283290;color:#FFFFFF;border-color:#283290" name="but">LOG IN</button>
                </form>

	<!-- Footer -->

	<footer class="footer">
	<div class="footer_container">
			<div class="container">
				<div class="row">
					
					<!-- Footer - About -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div class="footer_logo_container"  style="float:left;">
								<a href="#" class="d-flex flex-column align-items-center justify-content-center">
									<div class="logo_content">
										<div class="logo d-flex flex-row align-items-center justify-content-center">
											<img src="../images/logo.png">
										</div>
									</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>MULTI SUPER SPECIALITY HOSPITAL</p>
							</div>
							<ul class="footer_about_list">
								<li><div class="footer_about_icon"><img src="../images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
								<li><div class="footer_about_icon"><img src="../images/envelope.svg" alt=""></div><span>information@medanta.com</span></li>
								<li><div class="footer_about_icon"><img src="../images/placeholder.svg" alt=""></div><span>Near jawahar colony,gurugram-HARYANA</span></li>
							</ul>
						</div>
					</div>

					<!-- Footer - Links -->
					

					<!-- Footer - News -->
					
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>


<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/about.js"></script>

</body>
</html>


<?php
    if(isset($_POST['but']))
    {
        if(isset($_POST['username'])&&isset($_POST['pass']))
        {
            $username=$_POST['username'];
            $password=$_POST['pass'];
            if(strlen($username)==0||strlen($password)==0)
                die('<script type="text/javascript">
                        alert("All fields are compulsary");
                    </script>');
        }
    }
?>