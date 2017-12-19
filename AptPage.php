<!DOCTYPE html>
<html>
<head>
<title>First Mobile Example</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="themes/jcustom1.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    
    <!-- Start of Appointment Page -->
    
    <div data-role = "page" id = "appointment">
    <div data-role = "header" data-theme = "a">
        <h1>Select Employee</h1>
        </div>
  
    <div data-role = "content"> 
       
        <?
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM employee_table");
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
    print ("<option value=\"$row[emp_id]\"");
    print (">");
    print ("$row[emp_ln]");
       
  }  //end of while loop
     print( "<INPUT TYPE=\"submit\" VALUE=\"GET APPOINTMENTS \" NAME=\"submit\">\n" );
        print( "</FORM>\n" );  
} // end of IF else statement

 



?>
        

        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "a">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "second.html" data-icon = "home">Home</a></li>
            <li> <a href = "password page.html">Sign Out</a></li>
            
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of Home page -->
    
    
   
    

</body>
</html>