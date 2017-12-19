<?php


//!-- Your connection information needs to go here, 
$hostname="localhost";
$username="kboateng330_usn";
$password="yyVh1$29";
$dbname="kboateng330_db";
//$usertable="Client table";

$link = mysqli_connect($hostname, $username, $password);
   if(!$link){
      //echo('bad connect');
   }
  else
  {
    //  echo('good connect');
  }

if (!mysqli_select_db($link, $dbname))
{
	//echo('no database selected'); 
	
}
else
{   
  //echo('database selected');  
}
?>