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
        <h1>Appointment</h1>
        </div>
  
    <div data-role = "content"> 
       
            
        
        
        
    <h2>Select An Appointment To Update</h2>    
        
        
        
        <?php
$id=$_GET['choice']; 
//echo "the category is $choice";

include ("connect.php");
// Select statement to retreive all information from table using a passed value
$result = mysqli_query($link, "SELECT * FROM appt_table WHERE emp_id='$id'");
if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
   while ($row = mysqli_fetch_array($result))
  {
        ?> 

<form action="NotePage.php" method="post">
    <input type="hidden" name="appt_id" value="<?php echo $row['appt_id']; ?>">
    <lable>Customer ID</lable>
        <input name="cust_id" value="<?php echo $row['cust_id']; ?>">
     <lable>Item ID</lable>
        <input name="item_id" value="<?php echo $row['item_id']; ?>">
     <lable>Appointment Date</lable>
        <input name="appt_date" value="<?php echo $row['appt_date']; ?>">   
    
    <input type="submit" value = "SELECT">
    <br><br>
</form>
        <?
  }  //end of while loop    
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