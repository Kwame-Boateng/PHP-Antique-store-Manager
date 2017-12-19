<?php
//<!---- this retreiveis the data from your form, 
//-- field names here need to match name fields in your form
$shp_company = $_POST['shp_company'];
$shp_number = $_POST['shp_number'];
$shp_date = $_POST['shp_date'];
$cust_id = $_POST['cust_id'];

//echo "the choice is $choice ";

//!-- Your connection information needs to go here, 
include ("connect.php");




$result = mysqli_query($link, "INSERT INTO shp_table (shp_company, shp_date, shp_number, cust_id)
		VALUES ('$shp_company','$shp_date', '$shp_number', '$cust_id')");

//echo ('after the result');


if (!$result)
    {

	   echo ('NO Record Inserted');
	   //exit();
    }
else
    {
	   //echo ('Good job record inserted');	
       header("location: second.html"); exit;
    
    }

?>