<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
	$message=$_SESSION['message'];
	echo "<script type='text/javascript'>
	alert('$message');
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<label class="logo">Interactive Cares</label>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text"></label>
		<img class="main_img" src="background.png">
	</div>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="welcome_img" src="school.jpg">
				
			</div>

			<div class="col-md-8">

				<h2> <b> Welcome to Interactive Cares</b></h2>

				<br>

				<p>Interactive Cares is a one stop virtual Edtech Platform for creating employability.Interactive cares, Inc. is an education technology company, founded in May 2010 by Eren Bali, Gagan Biyani, and Oktay Caglar. It is based in San Francisco, California, United States, with hubs in Denver, Colorado; Dublin, Ireland; Austin, Texas; Melbourne, Australia; İstanbul, Turkey, and Gurgaon, India.As of June 2023, the platform claimed to have 64 million learners, over 210,000 courses, and more than 75,000 instructors teaching courses in nearly 75 languages. The company also claims that more than 50% of the Fortune 100 are Udemy Business customers.

Students take courses primarily to improve job-related skills.Students take courses primarily to improve job-related skills.[5] Some courses generate credit toward technical certification. Udemy attracts corporate trainers seeking to create coursework for employees of their company.</p>
			</div>
			

		</div>
		

	</div>
	<br>
    <center>
		<h2><b>Our Teachers</b></h2>
	</center>
         <div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="anindita1.jpg">
				<h3>Anindita Bose</h3>

			</div>

			<div class="col-md-4">

				<img class="teacher" src="saidur1.jpg">
				<h3>Saidur Rahman Setu </h3>

			</div>

			<div class="col-md-4">

				<img class="teacher" src="jubaer1.jpg">
			    <h3>Jubaer Talukder</h3>

			</div>
			

		</div>
		

	</div>



<br>
<br>
<br>


	<center>
		<h1><b>Our Courses</b></h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="Anindita.jpg">
				<h3>Web Development Course</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="saidur.jpg">
				<h3>Javascript Course</h3>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="jubaer.jpg">
				<h3>Video Editing Course</h3>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1 class="adm">Admission Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action="data_check.php" method="POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt" name="message"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
		</div>


		</form>
		
	</div>


	<footer>
		<h3 class="footer_text">All @copyright reserved by IC</h3>
	</footer>


</body>
</html>


