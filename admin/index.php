<head>
<title>Admin Log In</title>
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




</head>
<body>
<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	require 'header.html';
	if(isset($_POST['but']))
    {
        if(isset($_POST['username'])&&isset($_POST['pass']))
        {
            $username=$_POST['username'];
			$password=$_POST['pass'];			
			$servername = "localhost";
			$usernames = "Ayush";
			$passwords = "abcdefgh";
			$dbname = "medanta";
			$conn = mysqli_connect($servername, $usernames, $passwords, $dbname);
			$sql="SELECT id,pass FROM admin";
			$result=mysqli_query($conn,$sql);
            if(strlen($username)==0||strlen($password)==0)
                echo('<script type="text/javascript">
                        alert("All fields are compulsary");
					</script>');
			else if (mysqli_num_rows($result) > 0) {
				$x=0;
				while($row = mysqli_fetch_assoc($result)) {
					$encpass=md5($password);
					$userid=$row['id'];
					$pass=$row['pass'];
					if($userid==$username&&$pass==$encpass)
					{
						echo "Here";
						$x=1;
						break;
					}
				}
				if($x==1)
				{
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					header("Location: adminhome.php");
				}
				else
                	echo('<script type="text/javascript">
                        alert("Wrong username or password");
                    </script>');			
            }
            else
                echo('<script type="text/javascript">
                        alert("Wrong username or password");
                    </script>');
        }
    }

?>

<div class="super_container">
	
	<!-- Home -->


		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../images/news.jpg" data-speed="0.8"></div>
		
	

	<!-- News -->

	<div class="about">
                <form action="index.php" method="POST">
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
