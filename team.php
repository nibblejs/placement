<!DOCTYPE html>
<html>

<head>
	<title>Welcome to JSS Placement Cell</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/check.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js "></script>
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
			<table style="list-style:none;">
			<ul>
			<li>Priyank Mishra</li>
			<li></li>
			<li></li>
			</ul>
			<ul>
			<li>CSE 4th Year</li>
			<li></li>
			<li></li>
			</ul>
			<ul>
			</ul>
			<ul>
			<li></li>
			<li></li>
			<li>Aman Agarwal</li>
			</ul>
			<ul>
			<li></li>
			<li></li>
			<li>CSE 3th Year</li>
			</ul>
			</table>
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