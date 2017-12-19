<?php

$notes=$_POST['notes']; 
$item_id = $_POST['item_id'];
   
 
include ("connect.php");
// Select statement to retreive all information from table using a passed value
$sql = "UPDATE item_table SET item_notes = '$notes' WHERE item_id = '$item_id' ";

$result = mysqli_query($link, $sql);

if(!$result){
  echo('Text could not be updated');
}
else
{
  //echo('good search');
   //$count = mysqli_num_rows($result); 
    //if($count == 1) {
     header("location: second.html"); exit;
      //}else {
         //echo ("Your Login Name or Password is invalid");
      //}
    
      
} // end of IF else statement
?>

   
   
   