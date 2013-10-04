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
                echo '<table border="0" align="center" height="100">';
                while($row = mysql_fetch_array($process, MYSQL_ASSOC))
                {
                    echo'<tr>';
                    echo '<td>$row["firstname"]'.'&nbsp;&nbsp;'.$row["lastname"].'</td>';
                    echo '<td>$row["course"]</td>';
                    echo '<td>$row["email"]</td>';
                    echo '<td>$row["percent_avg"]</td>';
                    echo '<td>$row["resume_src"]';
                    echo'</tr>';
                    echo '<hr>';
                }
                echo '</table>';
            }
        }

        function update($divname)
        {
            echo '<script type = \"text/javascript\">';
            echo 'function addElement() {
                      var ni = document.getElementById("myDiv");
                      var numi = document.getElementById("theValue");
                      var num = (document.getElementById("theValue").value -1)+ 2;
                      numi.value = num;
                      var newdiv = document.createElement("div");
                      var divIdName = "my"+num+"Div";
                      newdiv.setAttribute("id",divIdName);
                      newdiv.innerHTML = "<tr><td>$row["firstname"]'.'&nbsp;&nbsp;'.$row["lastname"].'</td>
                      <td>$row["course"]</td><td>$row["course"]</td><td>$row["email"]</td><td>$row["percent_avg"]</td>
                      <td>$row["resume_src"]</td></tr>";
                      ni.appendChild(newdiv);
                    }';
            echo '</script>';
        }

    }
?>

<!--<input type="hidden" value="0" id="theValue" />

<p><a href="javascript:;" onclick="addElement();">Add Some Elements</a></p>

<div id="myDiv"> </div>
*/
