<?php
	require_once('db_connect.php');
?>
<?php
	class Student extends DB_Connect
	{
		public Student(String f_name, String l_name,int rollno)
		{
			$this->f_name = f_name;
			$this->l_name = l_name;
			$this->rollno = rollno;
		}
		
		public check_Details()
		{
			$f_name = mysql_query('Select f_name from student where f_name = 'f_name'');
			if ($f_name == NULL)	
				mysql_close();
			$l_name = mysql_query('Select l_name from student where l_name = 'l_name'');
			if ($l_name == NULL)	
				mysql_close();
			$rollno = mysql_query('Select rollno from student where univ_rollno = 'rollno'');
			if ($rollno == NULL)	
				mysql_close();
		}
		
		public get_Details()
		{
			DB_Connect db = new DB_Connect();
			db->connect();
			$sql = 'SELECT f_name, l_name, univ_rollno, average from student where univ_rollno = 'rollno'';
			$query = mysql_query($query);
			if($query)
			{
				while($row = mysql_fetch_array($query, MYSQL_ASSOC))
				{
					/*echo"Student First Name :{$row['f_name']} <br />" . 
						"Student Last Name : {$row['l_name']} <br />" . 
						"University Roll No : {$row['univ_rollno']} <br />". 
						"Average Marks: {$row['average']} <br />"*/
				}
			}
			else
			{
				die("Query data fetch error". mysql_error()); 
			}
		}
		
		
	}
?>
