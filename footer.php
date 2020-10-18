 <div class="box side">
            
    <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
          
    <i>Type Part of the Food / Location and then Search</i>
            
    <hr />
            
    <!-- Start of Food Search -->
            
    <form method="post" action="food_search.php" enctype="multipart/form-data">
     
        <input class="search" type="text" name="food" size="40" value="" required placeholder="Food..."   />
            
        <input class="submit" type="submit" name="find_food" 
            value="&#xf002;" />
        
    </form>
     
    <!-- End of Food Search -->
     
     <br />
     
    <!-- Start of Location Search -->
            
    <form method="post" action="location_search.php" enctype="multipart/form-data">
     
        <input class="search" type="text" name="location" size="40" value="" required placeholder="Location..."   />
            
        <input class="submit" type="submit" name="find_location" 
            value="&#xf002;" />
        
    </form>
     
    <!-- End of Location Search -->
     
     <hr />
     
     <i>Use the Dropdown Menus to Search by Vegetarian, Course, or Rating</i>
     
     <br />
     
     <!-- Start of Vege Search -->
     
    <form method="post" action="vege_search.php" enctype="multipart/form-data">
        
        <select name="vege" required>
            <option value="y" selected>Vegetarian...</option>
            <option value="n">Non-Vegetarian...</option>
        </select>
        
         <input class="submit" type="submit" name="find_vege" 
                       value="&#xf002;" />
    </form>
     
    <!-- End of Vege Search -->
     
     <hr />
     
    <!-- Start of Course Search -->
            
    <form method="post" action="course_search.php" enctype="multipart/form-data">
        
        <select name="course" required>
            <option value="" disabled selected>Course...</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Lunch">Lunch</option>
            <option value="Dinner">Dinner</option>
            <option value="Dessert">Dessert</option>
        </select>
        
         <input class="submit" type="submit" name="find_course" 
                       value="&#xf002;" />
    </form>
     
    <!-- End of Course Search -->
     
<hr />

<h3>Ratings Search</h3>

<!-- Start of Ratings Form -->

<form method="post" action="rating_search.php"
enctype="multipart/form-data">
    
    <select class="half_width" name="amount">
        <option value="exactly">Exactly...</option>
        <option value="more" selected>At Least...</option>
        <option value="less">At Most...</option>
        
    </select>
        
    <select class="half_width" name="stars">
        <option value=1>&#9733;</option>
        <option value=2>&#9733;&#9733;</option>
        <option value=3 selected>&#9733;&#9733;&#9733;</option>
        <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
        <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        
    </select>
    
         <input class="submit" type="submit" name="find_rating" 
                       value="&#xf002;" />
</form>
 
<!-- End of Ratings Form -->
        
</div>  <!-- / side bar -->

<div class="box footer">
    CC Trent Rust 2020
</div>    <!-- / footer -->
