<?php include "topbit.php"; 

$showall_sql="SELECT * FROM `L1_DB_assess_TreRus` ORDER BY `L1_DB_assess_TreRus`.`Food` ASC ";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>
        
<div class="box main">
            
    <h2>All Items</h2>
            
    <?php
    
    // check if there are any results
    
    if ($count<1)
    
    {
        
    ?>
    
    <div class="error">
         Sorry! There are no results that match your search.
         Please use the search box in the sidebar to try again.
        
    </div>
    
    <?php
        
    }   // end count 'if'
    
    // if there are not results, output an error
    
    else{
        
        do{
    
        ?>
    
     <!-- Results go here -->
    <div class="results">
    
        <?php
        
       if ($showall_rs['Vege']== 'y')
        
        {
        
        ?>
        
        <b><i>This dish is vegetarian</i></b>
        
        <?php
           
        }
         
        ?>
        
        
        <p>Food: <span class="sub_heading"><?php echo $showall_rs['Food']; ?></span></p>
        
        <p>Course: <span class="sub_heading"><?php echo $showall_rs['Course']; ?></span></p>
        
         <p>Location: <span class="sub_heading"><?php echo $showall_rs['Location']; ?></span></p>
        
        <p>Rating: <span class="sub_heading">
            <?php 
            for ($x=0; $x < $showall_rs['Rating']; $x++)
               
            {
                echo "&#9733";
            }
                
            ?>
            
        </span></p>
        
        <p><span class="sub_heading">Review</span></p>
        
        <p><span> <?php echo $showall_rs['Review']; ?></span></p>
        
    </div> <!-- / end results div -->
    
    <br />
    
    <?php
        } // end of 'do'
        
        while($showall_rs=mysqli_fetch_assoc($showall_query));
        
    }   // end else
    
    // if there are results, display them
    
    ?>
   
    
</div>  <!-- / main -->
        
<?php include "footer.php"; ?>