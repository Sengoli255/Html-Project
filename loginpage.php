<?php
mysqli_connect("localhost","root","mgahawa","");
//enter db name
mysqli_select_db("mysgl");

if(isset($_POST["mgahawa"]))
        {
            $username=$_POST["username"];
            $pass=$_POST["pass"];

            $query="insert into login(username,password)"; 
                values ("$username","$pass");
        }
        if(mysql_query($query)) {
            echo "your date is insert in the database";
        }
?>