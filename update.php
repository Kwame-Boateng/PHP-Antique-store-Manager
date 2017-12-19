<?php
//<!---- this retreiveis the data from your form, 
//-- field names here need to match name fields in your form
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$choice = $_POST['choice'];
$id=$_POST['id'];

//echo "the last name is $lname";
//echo "the first name is $fname";
//echo "the email is $email";
//echo "the id is $id";

//!-- Your connection information needs to go here, 
include ("connect.php");



$sql = "UPDATE test_330_1 SET lname = '$lname', fname ='$fname', email ='$email', choice ='$choice' WHERE id1 ='$id'";



$result = mysqli_query($link, $sql);

if (!$result)
    {
	   echo ('NO Record Updated');
    }
else
    {
	   echo ('Good job record updated');		
    }
?>
<h2> click to see records in the table</h2>
    
     <a href="get_content.php">See all records</a>
   <?  
    