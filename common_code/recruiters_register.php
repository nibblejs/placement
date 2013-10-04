<?php
	require_once("global_inc.php");
	session_start();	
	$header="http://localhost/placement/recruiters_register";
	class student
	{
		public function check()
		{
			$username=stripslashes($_POST['username']);
			$first_name=stripslashes($_POST["first_name"]);
			$last_name=stripslashes($_POST["last_name"]);
			$email=stripslashes($_POST["email"]);
			$univ_roll=stripslashes($_POST["univ_roll"]);
			$dob=stripslashes($_POST["dob"]);
			$password=stripslashes($_POST["password"]);
			$password2=stripslashes($_POST["password2"]);
			$branch=stripslashes($_POST["branch"]);
			$gender=stripslashes($_POST["gender"]);
			$admission=stripslashes($_POST["admission"]);
			if($username==NULL || $first_name==NULL || $last_name==NULL || $univ_roll==NULL || $dob==NULL || $password2==NULL || $password==NULL || $branch==NULL|| $gender==NULL || $admission==NULL || $email==NULL)
			{
				$_SESSION["err"]="please enter details correctly, all details are mandatory";
				header('Location:'.$header.'.php');
			}
			else if (!$password!=$password2)
			{
				$_SESSION["err"]="passwords do not match";
				header('Location:'.$header.'.php');
			}
			else if (strlen($password)<=6)
			{
				$_SESSION["err"]="password is too short";
				header('Location:'.$header.'.php');
			}
			else 
			{
				$_SESSION["err"]="";
				return md5($password);
			}
		}
		public function submit()
		{
			$pass=$this->check();
			$sql="INSERT INTO recruiters (username, firstname, lastname, univ_rollno, dob, password, email, branch, gender, admission_no) VALUES ('$username', '$first_name', '$last_name', '$univ_roll', '$dob', '$pass', '$email', '$branch', '$gender', '$admission')";
			$res=mysqli_query($con, $sql);
			if(!$res);
			echo "there was a problem in datbase connection";
		}
	}
	$register= new student;
	$register->submit();
	mysql_close($con);
?>