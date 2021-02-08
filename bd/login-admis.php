<?php

 //-get value asse from in longiin age file
  $username = $_POST['nameadmis'];
  $password = $_POST['passwordadmis'];

  //to  prevent mysql inject
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  

  //connect to the server and select database
  mysql_connect("localhost", "root", "");
  $con = mysql_connect("localhost", "root", "");
  $username = mysql_real_escape_string($con, $username);
  $password = mysql_real_escape_string($con, $password);
  mysql_select_db("login_admis") or die("echec de connexion a la base de donne".mysql_error());

  //query the database for user
  $result = mysql_query("select * from admis where username = '$username' and password = '$password' ")
              or die("echec de connexion".mysql_error());
  $row = mysql_fetch_array($result);
  if ($row['username'] == $username && $row['password'] == $password)
  {
    echo"login success !!! welcome".$row['username']; 
  }else{
    echo"failed to login!";
  }
  //babci.com@hotmail.com
?>
