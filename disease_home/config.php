<?php
    define("server","localhost");
    define("username","root");
    define("password","");
    define("dbname","disease_prediction");

    $con = mysql_connect(server,username,password,dbname) OR die(mysql_error());
    mysql_select_db(dbname,$con) OR die(mysql_error());
?>