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

	
		<div class="form">	
				<h2 class="heading">Recruiters login</h2>
				<form id="input" action="common_code/recruiters_login.php" method="post">
					<table class="table1">
						<tr><td>Username</td><td>:</td><td><input type="text" name="username"></td></tr>
						<tr><td>Password</td><td>:</td><td><input type="text" name="password"></td></tr>
						<tr><td><input type="submit" class="btn btn-hover" value="Register"></tr>
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