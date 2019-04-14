<head>
<title>Doctor Registration</title>
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
<?php
    session_start();
    @$user=$_SESSION['username'];
    @$pass=$_SESSION['password'];
    if($user=="admin"&&$pass=="1234")
    {
        require 'header1.html';
        $servername = "localhost";
        $username = "Ayush";
        $password = "abcdefgh";
        $dbname = "medanta";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(isset($_POST['but']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
			$email=$_POST['email'];
			$depat=$_POST['dept'];
			$gender=$_POST['gender'];
			$qualification=$_POST['qualification'];
            if(empty($fname)||empty($lname)||empty($email)||empty($depat)||empty($gender)||empty($qualification))
            {
                echo('<script type="text/javascript">
                        alert("All fields are compulsary");
                    </script>');
            }
            else if (!preg_match("/^[a-zA-Z]*$/",$fname)||!preg_match("/^[a-zA-Z]*$/",$lname)) {
                echo "<script type='text/javascript'>
                alert('Only Letters allowed');
                </script>";
            }
            else
            {
                $password=rand(10000,99999);
                $mod=1000000007;
                for($i=0;$i<5;$i++)
                {
                    $password=$password*rand(10000,99999);
                    $password=$password%$mod;
                }
                $encpassword=md5($password);
                $query="SELECT * FROM doctor WHERE username='$email'";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0)
                {
                    echo "<script type='text/javascript'>
                    alert('Email id already registered');
                    </script>";
                    die();
                }
                $subject="Do not Reply";
                $text="Dear User,\nYour username is $email and password is $password. Please use it to Login in the future";
                $headers="From: ayushdubey957@gmx.com";
                if(mail($email,$subject,$text,$headers)){
					$tablename="doctor";
					if($depat=="1")
						$department="Department of Plastic Surgery";
					else if($depat=="2")
						$department="Department of Gastroenterology";
					else if($depat=="3")
						$department="Department of Dentistry";
					else if($depat=="4")
						$department="Department of Radiation Oncology";
					else if($depat=="5")
						$department="Department of Cardiac Surgery";
					else if($depat=="6")
						$department="Department of Nephrology";
					else if($depat=="7")
						$department="Department of Urology and Andrology";
					else if($depat=="8")
						$department="Department of Gynaecology";
                    $query="INSERT INTO $tablename(id,firstname,lastname,department,pass,gender,qualification)
                            VALUES('$email','$fname','$lname','$department','$encpassword','$gender','$qualification')";
                    if(mysqli_query($conn,$query))
                        echo('<script type="text/javascript">
                            alert("Insert Succesful");
                        </script>');;
                }
                else
                {
                    echo "<script type='text/javascript'>
                    alert('Error sending mail');
                    </script>";
                    die();
                }
            }
        }
    }
    else
        die('You are not authorized to access this page');
    
?>
<div class="super_container">
	
	<!-- Home -->


		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../images/news.jpg" data-speed="0.8"></div>
		
	

	<!-- News -->

	<div class="about">
        <form method="POST" action="doctor.php" style="margin-left:50px;margin-bottom:100px">
            <p style="color:#000000;font-size:20px;margin-left:45%">Email * : </p><input type="email" name="email" style="width: 60%;padding: 12px 20px;margin-left: 20%;box-sizing: border-box;border: 2px solid gray;border-radius: 4px;"></input>
            <p style="color:#000000;font-size:20px;margin-left:45%">First Name * : </p><input type="text" name="fname" style="width: 60%;padding: 12px 20px;margin-left: 20%;box-sizing: border-box;border: 2px solid gray;border-radius: 4px;"></input>
            <p style="color:#000000;font-size:20px;margin-left:45%">Last Name * : </p><input type="text" name="lname" style="width: 60%;padding: 12px 20px;margin-left:20%;box-sizing: border-box;border: 2px solid gray;border-radius: 4px;"></input>
			<p style="color:#000000;font-size:20px;margin-left:45%">Department* :</p>
			<p style="color:#000000;font-size:20px;margin-left:20%">
				<select style="width:75%;padding:8px" name="dept">
					<option value="1">Department of Plastic Surgery</option>
					<option value="2">Department of Gastroenterology</option>
					<option value="3">Department of Dentistry</option>
					<option value="4">Department of Radiation Oncology</option>
					<option value="5">Department of Cardiac Surgery</option>
					<option value="6">Department of Nephrology</option>
					<option value="7">Department of Urology and Andrology</option>
					<option value="8">Department of Gynaecology</option>
				</select>
			</p>
			<p style="color:#000000;font-size:20px;margin-left:45%">Gender* :<br></p>
			<p style="color:#000000;font-size:20px;margin-left:27%"> 
				<input type="radio" name="gender" value="1" checked  style="margin-left:20%"> Male
				<input type="radio" name="gender" value="2" style="margin-left:20px;"> Female<br>
			</p> 
			<p style="color:#000000;font-size:20px;margin-left:45%">Qualification * : </p><input type="text" name="qualification" style="width: 60%;padding: 12px 20px;margin-left: 20%;box-sizing: border-box;border: 2px solid gray;border-radius: 4px;"></input>
            <button style="margin-top:10px;margin-left:45%;margin-bottom:100px;padding:12px 20px;background:#283290;color:#FFFFFF;border-color:#283290" name="but">REGISTER</button>        
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