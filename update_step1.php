<?
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM test_330_1");
if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
print( "<form name=\"form1\" method=\"get\" action=\"update_step2.php\">\n" );
print "<p>users ";
print ("<select name=\"choice\">\n");
    while ($row = mysqli_fetch_array($result))
  {
      //echo('in the loop');
    print ("<option value=\"$row[id1]\"");
    print (">");
    print ("$row[lname]");
       
  }  //end of while loop
     print( "<INPUT TYPE=\"submit\" VALUE=\"enter \" NAME=\"submit\">\n" );
        print( "</FORM>\n" );  
} // end of IF else statement

 



?>