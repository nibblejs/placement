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
			<h2 class="heading">Recruiters Register</h2>
			<?php
				session_start();
				if (isset($_SESSION["err"]))
				echo $_SESSION["err"];
			?>
			<form name="input" action="common_code/recruiters_register.php" method="post">
				<table class="table">
					<tr>	<td>Company name</td><td>:</td><td><input type="text" name="companyname"></td></tr>
					<tr>	<td>Contact Person</td><td>:</td><td><input type="text" name="contactperson"></td></tr>
					<tr>	<td>Designation</td><td>:</td><td><input type="text" name="designation"></td></tr>
					<tr>	<td>Email ID</td><td>:</td><td><input type="email" name="email"></td></tr>
					<tr>	<td>Phone no.</td><td>:</td><td><input type="text" name="phno"></td></tr>
					<tr>	<td>Password</td><td>:</td><td><input type="password" name="password"></td></tr>
					<tr>	<td>Confirm Password</td><td>:</td><td><input type="password" name="password2"></td></tr>
					<tr>	<td></td><td><input type="submit" class="btn btn-hover" value="Register"></tr>
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