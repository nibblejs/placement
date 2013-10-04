<?php
 require_once('../common_code/global_inc.php');

class StudentSort 
{
    
    function __construct()
    {
        echo ('Everthing is working fine');
    }
    
   	function mark_sort()
	{
		$query = "Select * from Student order by marks DESC ";
		$query_run = mysql_query($query);
		if ($query_run)
		{
            echo '<table>';
			while($row = mysql_fetch_array($query_run, MYSQL_ASSOC))
			{
                echo'<tr><td>$row["firstname"]</td> <td>$row["lastname"]</td> <td> $row["email"]</td>
				<td> $row["univ_rollno"]</td> <td> $row["dob"]</td> <td> $row["branch"]</td> <td> $row["expertise"]</td>
				<td> $row["gender"]</td></tr>';
			}
            echo '</table>';
  		}
	}

	function dept_sort()
	{
		$query = "Select * from Student order by branch DESC ";
		$query_run = mysql_query($query);
		if ($query_run)
		{
            echo'<table>';
			while($row = mysql_fetch_array($query_run, MYSQL_ASSOC))
			{
				echo'<tr><td>$row["firstname"]</td> <td>$row["lastname"]</td> <td> $row["email"]</td>
				<td> $row["univ_rollno"]</td> <td> $row["dob"]</td> <td> $row["branch"]</td> <td> $row["expertise"]</td>
				<td> $row["gender"]</td></tr>';
			}
            echo '</table>';
  		}
	}	

	function expertise_sort()
	{
		$query = "Select * from Student order by expertise DESC ";
		$query_run = mysql_query($query);
		if ($query_run)
		{
            echo '<table>';
			while($row = mysql_fetch_array($query_run, MYSQL_ASSOC))
			{
                echo'<tr><td>$row["firstname"]</td> <td>$row["lastname"]</td> <td> $row["email"]</td>
				<td> $row["univ_rollno"]</td> <td> $row["dob"]</td> <td> $row["branch"]</td> <td> $row["expertise"]</td>
				<td> $row["gender"]</td></tr>';
			}
            echo '</table>';
  		}
	}	
		
}

?>
