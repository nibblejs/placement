<?php
    require_once('../common_code/global_inc.php');

    if(!isset($_SESSION['name']))
        die('Session not set');

    class Profiles_display
    {
        public function __construct()
         {
            echo('Working');
         }

        function display()
        {
            $query = "Select * from Student";
            $process=mysql_query($query);
            if($process)
            {
                $i = 0;
                while($row = mysql_fetch_array($process, MYSQL_ASSOC))
                {
                    echo "<table><tr>$row[] </tr> </table>";
                }
            }
        }

    }


?>