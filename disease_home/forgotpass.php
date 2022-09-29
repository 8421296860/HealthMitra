<?php
//here we use include it will resert the database
//require_once it will stop previous database and start the new database (it is better than include bzc include it restart it takes time but require_once will direclty fatch the data(less time required))
include('config.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $myemail = $_POST['email'];
    $mypass = $_POST['pass'];
    $password = md5($mypass);

   $qry = mysql_query("UPDATE disease_prediction.user SET u_pass = '$password' WHERE user.u_email = '$myemail'");  


    if ($qry == true)
    {
        echo "Password Changed";
        header("location:Login.php");
    }
    else
    {
        echo "Not".mysql_error();
    }

}
else
{
    echo "NOT POST";
}
?>