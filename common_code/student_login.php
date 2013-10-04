<?php
	require_once("global_inc.php");
	session_start();	
	$login= new student;
	$login->get($con);
	class student
	{
		public function check($username, $password)
		{
			if ($username==NULL || $password==NULL) 
			{
				$_SESSION["err"]="please enter details correctly, all details are mandatory";
				header('Location: ../student_login.php');
			}
			else
			{
				$_SESSION['err'] = "";
				return md5($password);
			}
		}
		public function get($con)
		{
			$username=stripslashes($_POST['username']);
			$password=stripslashes($_POST['password']);
			
			$pass=$this->check($username,$password);
			$sql="SELECT * FROM student WHERE username='$username' AND password='$pass'";
			$res=mysql_query($sql,$con);
			$fnd = mysql_num_rows($res);
			if($fnd==1)
			{
				$_SESSION['err']="";
				echo "You are logged in";
				header('Location: ../student_login.php');
				$_SESSION['user']=$fnd['firstName']." ".$fnd['lastName'];
			}
			else 
			if($fnd ==0)
			{
			$_SESSION['err']= "Enter correct details";
			header('Location: ../student_login.php');
			}
			
		}
	}
	mysql_close($con);
?>