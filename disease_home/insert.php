<?php
require_once('config.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $u_name = $_POST['name'];
    $u_email = $_POST['email'];
    $u_pass = md5($_POST['pass']);

    $qry = mysql_query("INSERT INTO user(u_name, u_email, u_pass, u_flag)VALUES('$u_name', '$u_email', '$u_pass', '0')");

        // Check if(qry == true) -->> pass values 
            if($qry == true)
			{
                header("location:login.php");
            }
            else
            {
                echo"Not".mysql_error();
            }
 
}

?>