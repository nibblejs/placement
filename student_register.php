<!DOCTYPE html>
<html>

<head>
	<title>Welcome to JSS Placement Cell</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="bod_div">
<img src="img/header.png" style="margin-bottom:40px;">
	<div id = "main">
	<!--  Sidebar  -->
	<?php
		include_once("common_code/navigation_inc.php");
	?>
	
	<!--Main Body-->

	
		<div class="main_body" style="align:center;">	
			<h2 class="heading">Student Register</h2>
			<?php
				session_start();
				if (isset($_SESSION["err"]))
				echo $_SESSION["err"];
			?>
			<form name="input" action="common_code/student_register.php" method="post">
				<table class="table">
					<tr>	<td>User name</td><td>:</td><td><input type="text" name="user_name"></td></tr>
					<tr>	<td>First name</td><td>:</td><td><input type="text" name="first_name"></td></tr>
					<tr>	<td>Last name</td><td>:</td><td><input type="text" name="last_name"></td></tr>
					<tr>	<td>Email ID</td><td>:</td><td><input type="email" name="email"></td></tr>
					<tr>	<td>University Roll No</td><td>:</td><td><input type="text" name="univ_roll"></td></tr>
					<tr>	<td>Date of birth</td><td>:</td><td><input type="date" name="dob"></td></tr>
					<tr>	<td>Password</td><td>:</td><td><input type="password" name="password"></td></tr>
					<tr>	<td>Confirm Password</td><td>:</td><td><input type="password" name="password2"></td></tr>
					<tr>	<td>Branch</td><td>:</td><td><select name="branch">
  													<option value="CS">Computer Science</option>
  													<option value="IT">Information Technology</option>
  													<option value="ME">Mechanical</option>
 													<option value="CE">Civil</option>
 													<option value="EC">Electronics and Comm.</option>
 													<option value="EE">Electricals and Electronics</option>
 													<option value="IC">Instrumentation and control</option>
 													<option value="MP">Manufacturing Technology</option>
												</select></td>
					<tr>	<td>Gender</td><td>:</td><td><input type="radio" name="sex" value="male">Male &nbsp;<input type="radio" name="sex" value="female">Female</td></tr>
					<tr>	<td>Admission Number</td><td>:</td><td><input type="text" name="admission"></td></tr>
					<tr>	<td></td><td><input type="submit" class="btn btn-hover" value="Register"></td></tr>
				</table>
			</form>
		</div>	
		
		
	<!--Notices-->		
		
	<div class="ticker">
   		<h3 style="color:rgb(85,26,143);text-shadow: 0px 0px 7px black;">Notices</h3>
   		<ul id="ticker">
       		<?php
       			require_once('common_code/show_notice.php');
       		?>
		</ul>
	</div>
	<script type="text/javascript">
		 $(document).ready(function ()	
		 	{function ticker() 
		{
    		$('#ticker li:first').slideUp(function() 
    		{
       		 	$(this).appendTo($('#ticker')).slideDown();
    		});
		}
		setInterval(ticker, 3000);})
	</script>
		<!--Footer-->
		<footer>
			<center>&copy;2013 Nibble Computer Society</center>
		</footer>
		
	</div>
</div>	
	
	
</body>

</html>