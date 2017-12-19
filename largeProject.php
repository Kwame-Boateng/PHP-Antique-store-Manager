<!DOCTYPE html>
<html>
<head>
<title>First Mobile Example</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
    
    <!-- Start of Home page -->
    
    <div data-role = "page" id = "homepage">
    <div data-role = "header" data-theme = "b">
        <h1>Home Page</h1>
        </div>
  
    <div data-role = "content">
       
     <ul data-role = "listview" data-inset = "true" data-theme = "c">   
       <?php
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE feature_item = 'Y'");
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

        
    <li data-role = "list-divider">  FEATURE ITEM </li>   
    <li>  <?php echo  $row['content'] ; ?> </li>
  

   <?php
       
  }  //end of while loop
     
} // end of IF else statement
?>
        
</ul>
        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of Home page -->
    
    
    <!-- Start of Ads page -->
    
    <div data-role = "page" id = "Adspage">
    <div data-role = "header" data-theme = "b">
        <h1>More Ads</h1>
        </div>
        
        
    <div data-role = "content">
       <ul data-role = "listview" data-inset = "true" data-theme = "c">
        <li> <a href = "#pets"> Pets </a> </li>
           <li> <a href = "#vehicle"> Vehicles </a> </li>
           <li> <a href = "#wanted"> Technology Items </a> </li>
           <li> <a href = "#house"> Household Items </a> </li>
           <li> <a href = "#tech"> Wanted </a> </li>

        </ul>

        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>

    </div>
    
    <!-- End of Ads page -->
    
    
    <!-- Start of Pets Category page -->
    
    <div data-role = "page" id = "pets">
    <div data-role = "header" data-theme = "b">
        <h1>Pets Category</h1>
        </div>
  
    <div data-role = "content">
       
        <ul data-role = "listview" data-inset = "true" data-theme = "c">
       <?php
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code = '1'");
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

        
    <li data-role = "list-divider">  <?php echo  $row['cat_name'] ; ?> </li>   
    <li>  <?php echo  $row['content'] ; ?> </li>
  

   <?php
       
  }  //end of while loop
     
} // end of IF else statement
?>
     </ul>   

        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of pets Category -->
    
    
    
    <!-- Start of Vehicle Category page -->
    
    <div data-role = "page" id = "vehicle">
    <div data-role = "header" data-theme = "b">
        <h1>Vehicle Category</h1>
        </div>
  
    <div data-role = "content">
       
        <ul data-role = "listview" data-inset = "true" data-theme = "c">
       <?php
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code = '2'");
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

        
    <li data-role = "list-divider">  <?php echo  $row['cat_name'] ; ?> </li>   
    <li>  <?php echo  $row['content'] ; ?> </li>
  

   <?php
       
  }  //end of while loop
     
} // end of IF else statement
?>
     </ul>   

        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of Vehicle Category -->
    
    
    
    <!-- Start of Pets Category page -->
    
    <div data-role = "page" id = "wanted">
    <div data-role = "header" data-theme = "b">
        <h1>Technology Item Category</h1>
        </div>
  
    <div data-role = "content">
       
        <ul data-role = "listview" data-inset = "true" data-theme = "c">
       <?php
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code = '3'");
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

        
    <li data-role = "list-divider">  <?php echo  $row['cat_name'] ; ?> </li>   
    <li>  <?php echo  $row['content'] ; ?> </li>
  

   <?php
       
  }  //end of while loop
     
} // end of IF else statement
?>
     </ul>   

        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of Wanted Category -->
    
    
    
    
    <!-- Start of Household Item Category page -->
    
    <div data-role = "page" id = "house">
    <div data-role = "header" data-theme = "b">
        <h1>Household Item Category</h1>
        </div>
  
    <div data-role = "content">
       
        <ul data-role = "listview" data-inset = "true" data-theme = "c">
       <?php
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code = '4'");
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

        
    <li data-role = "list-divider">  <?php echo  $row['cat_name'] ; ?> </li>   
    <li>  <?php echo  $row['content'] ; ?> </li>
  

   <?php
       
  }  //end of while loop
     
} // end of IF else statement
?>
     </ul>   

        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of Household Item Category -->
    
    
    
    <!-- Start of Technology Item Category page -->
    
    <div data-role = "page" id = "tech">
    <div data-role = "header" data-theme = "b">
        <h1>Wanted Category</h1>
        </div>
  
    <div data-role = "content">
       
        <ul data-role = "listview" data-inset = "true" data-theme = "c">
       <?php
// gets the connect information for the database
include ("connect.php");

// Select statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code = '5'");
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

        
    <li data-role = "list-divider">  <?php echo  $row['cat_name'] ; ?> </li>   
    <li>  <?php echo  $row['content'] ; ?> </li>
  

   <?php
       
  }  //end of while loop
     
} // end of IF else statement
?>
     </ul>   

        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of Technology Item Category -->
    
    
     <!-- Start of Registration page -->
    
    <div data-role = "page" id = "placeads">
    <div data-role = "header" data-theme = "b">
        <h1>PLACE ADS</h1>
        </div>
  
    <div data-role = "content">
       
      <form action = "add.php" method="post">
          
          <br>
        
        <label >AD CATEGORY:</label>
      <select name = "category">
        <option>PETS</option>
        <option>VECHILES</option>
        <option>TECHNOLOGY ITEMS</option>
        <option>HOUSEHOLD ITEMS</option>
        <option>WANTED</option>
      </select> 
          
          
          <br><br>
          
          <label >AD CODE (1 = PETS, VEHICLES = 2, TECH ITEMS = 3, HOUSE ITEMS = 4, WANTED = 5):</label>
      <select name = "code">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select> 
        
        <br><br>
          
          <label >AD DESCRIPTION:</label>
      <textarea cols="40" rows="8" name = "description"></textarea>
          
          <br>
        
        <input type="submit" value="Submit Ad" />
        
        </form>  
      

        
        </div>
    
    
    
    <div data-role = "footer" data-theme = "b">
        <div data-role = "navbar">
            
            <ul>
            <li> <a href = "#homepage" data-icon = "home">Home</a></li>
            <li> <a href = "#Adspage">See More Ads</a></li>
            <li> <a href = "#placeads">Place an Ad</a></li>
            
            </ul>
        
        </div>

        </div>
    

    </div>
    
    <!-- End of registration page -->
    
    
    
    
    
    
    
    

    

</body>
</html>
