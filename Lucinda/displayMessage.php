<?php

//change this variable to be the title of the new page
$title = 'List of Users';


//include the header - all pages use the same header
include 'includes/header.php';


  
?>

<!--  Page content goes here   -->
<div class="container">
    <h1>Display Messages</h1>
            
    <?php
    //connect to DB
    require_once('dbconfig.php');
    
    //first go get the categories for the category filter
    $sql = 'SELECT * FROM contact_categories';
    $result = $conn->query($sql);
    
    //build link which will allow the user to filter results based on category
    echo '<div class="cat-links">';
    //'catID' is what is being passed in the url
    //check if active-cat css class is needed on this link
    if(isset($_GET['catID']) == false){ //if it's not set
        echo '<a class="active-cat" href="displayMessage.php">All</a>';
        
    } else{
        echo '<a href="displayMessage.php">All</a>';
    }
    
    while($row = $result->fetch_assoc()){
        
        //check if active-cat css class is needed on this link
        if(isset($_GET['catID'])){
            if($_GET['catID'] == $row['cat_id']){
                echo '<a class="active-cat" href="displayMessage.php?catID=' . $row['cat_id'] . '">' . $row['category'] . '</a>'; //reloads the page and adds a certain ID  
            }else{
                echo '<a href="displayMessage.php?catID=' . $row['cat_id'] . '">' . $row['category'] . '</a>'; //reloads the page and adds a certain ID  
            }
  
        }else{
             echo '<a href="displayMessage.php?catID=' . $row['cat_id'] . '">' . $row['category'] . '</a>'; //reloads the page and adds a certain ID      
        }
        
 
    }
    echo '</div>';
      
    
    
    
    
    //go get all the messages
    $sql = "SELECT name, email, message, date, category_id, category, cat_id, status, id FROM messages, contact_categories WHERE messages.category_id = contact_categories.cat_id"; //table name from DB   
    
    if(isset($_GET['catID'])){
        $sql .= ' AND messages.category_id = ' . $_GET['catID']; //adding 'AND' because there's already a 'WHERE'. And you must include a space before the 'AND'.
    }
    
     
    $result = $conn->query($sql);
    
    //developer function to view result
    //var_dump($result);
            
    $amount = $result->num_rows;
    echo 'There are currently ' . $amount . ' messages.';
          

    
    
    
    ?>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>Category</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
    
    <?php

            
    //Loop through all results and create a tabe row for each
    //'.' work like '+' in c#
    while($row = $result->fetch_assoc()){
        
        $date = date_create($row['date']);
        //echo date_format($date, "Y/m/d H:i:s");
        
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '<td>' . date_format($date, "Y/m/d H:i:s") . '</td>';
        echo '<td>' . $row['category'] . '</td>';
        echo '<td>' . $row['status'];
        echo '<br> <a href="updateMessage.php?messageID=' . $row['id'] . '">change</a>';
        echo '</td>';
        echo '</tr>';
    }
    $conn->close();
    
    ?>
            
        </tbody>
    </table>
    
</div><!-- end of class=container -->



<?php

//include the footer - all pages use the same footer
include 'includes/footer.php';


?>
