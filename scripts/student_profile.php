<?php
    require_once('../common_code/global_inc.php');
    class Student_profile
    {

        function __construct()
        {
            echo('it works');
        }

        function display_profile()
        {
            $query = "Select * from Student";
            $process=mysql_query($query);
            if($process)
            {
            echo '<table>';
                while($row = mysql_fetch_array($process))
                {
                    echo '<tr>';
                    echo '<td height="80" rowspan="2" align="right" valign="middle">
                        <img src="' . $row['imgUrl'] . '" width="80" height="80" alt="' .
                        $row['imgAlt'] . '"/>' . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Firstname</td><td>$row["firstname"]</td><td>Lastname</td><td>$row["lastname"]</td>';
                    echo '</tr>';
                }
            echo '</table>';
            }
        }

        function update_profile()
        {

        }
    }
?>