<html>
<body>
<?php
require_once("global_inc.php");
session_start();	
	

	class student
	{
        
		public function check($user_name,$first_name,$last_name,$email,$univ_roll,$dob,$password,$password2,$branch,$gender,$admission)
		{
			if($user_name==NULL || $first_name==NULL || $last_name==NULL ||$email==NULL || $univ_roll==NULL || $dob==NULL || $password2==NULL || $password==NULL || $branch==NULL|| $gender==NULL || $admission==NULL)
			{
				$_SESSION["err"]="please enter details correctly, all details are mandatory";
				header('Location: ../student_register.php');
			}
            elseif (!($password==$password2))
			{
				$_SESSION["err"]="passwords do not match";
				header('Location: ../student_register.php');
			}
            elseif (strlen($password)<=6)
			{
				$_SESSION["err"]="password is too short";
				header('Location: ../student_register.php');
			}
            else
			{
			$_SESSION["err"]="";
			return md5($password);
			}
		}
		public function submit($con)
		{
			$user_name=stripslashes($_POST["user_name"]);
			$first_name=stripslashes($_POST["first_name"]);
			$last_name=stripslashes($_POST["last_name"]);
			$email=stripslashes($_POST["email"]);
			$univ_roll=stripslashes($_POST["univ_roll"]);
			$dob=stripslashes($_POST["dob"]);
			$password=stripslashes($_POST["password"]);
			$password2=stripslashes($_POST["password2"]);
			$branch=stripslashes($_POST["branch"]);
			$gender=stripslashes($_POST["sex"]);
			$admission=stripslashes($_POST["admission"]);
			
		
		
			$register = new student;
			$pass=$register->check($user_name,$first_name,$last_name,$email,$univ_roll,$dob,$password,$password2,$branch,$gender,$admission);
			
			
			$sql="INSERT INTO student (`username`, `firstname`, `lastname`, `email`, `univ_roll`, `dob`, `password`, `branch`, `gender`, `admission`) VALUES ('$user_name', '$first_name', '$last_name', '$email', '$univ_roll', '$dob', '$pass', '$branch', '$gender', '$admission')";
			
			if($pass!=NULL)
			{
			$res=mysql_query($sql,$con);
			if(!$res)
			{
				return "there was a problem in datbase connection";
				header('Location: ../student_register.php');
			}
			else
			{
				return "Registered Successfully";
				header('Location: ../student_register.php');
			}
			}
			else
			return "Error";
		}
	}
	$register= new student();
	$result=$register->submit($con);
	echo $result;

	
	mysql_close($con);
	
?>
</body>
</html>