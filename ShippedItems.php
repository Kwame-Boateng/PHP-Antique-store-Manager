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
    
    <!-- Start of Home page -->
    
    <div data-role = "page" id = "passwordpage">
    <div data-role = "header" data-theme = "a">
        <h1>Shipped Items</h1>
        </div>
  
    <div data-role = "content">
       
        <ul data-role = "listview" data-inset = "true" data-theme = "a">
       <?php
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM shp_table");
if(!$result){
 // echo('bad search');
}
else
{
  //echo('good search');


    while ($row = mysqli_fetch_array($result))
  {
      //echo('in the loop');
   ?>

        
    <li data-role = "list-divider">  <?php echo  'Shipped Item '.$row['shp_id'] ; ?> </li>   
            <li> <p><b> Customer ID: </b><?php echo  $row['cust_id'] ; ?> </p>
                <p><b> Shipping Company: </b><?php echo  $row['shp_company'] ; ?>
                <p><b> Shipping Number:</b> <?php echo  $row['shp_number'] ; ?>
                <p><b> Shipping Date: </b><?php echo  $row['shp_date'] ; ?></li>
  

   <?php
       
  }  //end of while loop
     
} // end of IF else statement
?>
     </ul>   
        
        
        
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
