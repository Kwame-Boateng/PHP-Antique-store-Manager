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
        <h1>Selected Appointment</h1>
        </div>
  
    <div data-role = "content"> 
       
            
  
        <?php
//<!---- this retreiveis the data from your form, 
//-- field names here need to match name fields in your form
$cust_id = $_POST['cust_id'];
$item_id = $_POST['item_id'];
$appt_id = $_POST['appt_id'];
$appt_date = $_POST['appt_id'];




//!-- Your connection information needs to go here, 
include ("connect.php");
  
        
        $result = mysqli_query($link, "SELECT * FROM cust_table, item_table WHERE cust_table.cust_id = $cust_id and item_table.item_id = $item_id");




if(!$result){
  //echo('bad search');
}
else
{
  //echo('good search');
 
    while ($row = mysqli_fetch_array($result))
  {
    
    ?>

<h3>Appointment Details: </h3>    
        
        <p>Customer Name: <?php echo $row['cust_fn']." ".$row['cust_ln'];  ?></p>
         <p>Item name: <?php echo $row['item_name']; ?></p>
        <p>Item Notes: <?php echo $row['item_notes']; ?></p>
        <p>Item Image:</p>
<img src="photo1.jpg" width="350" height="350">
        
         <br><br>
        <form action="Notes.php" method="post">
            
            <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
           
    
    <lable>Update Item Notes</lable>
        <textarea name="notes" rows="30" cols="40"></textarea>
     
    
    <input type="submit" value = "UPDATE">
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