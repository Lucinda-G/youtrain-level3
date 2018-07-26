<?php

//change this variable to be the title of the new page
$title = 'Images';


//include the header - all pages use the same header
include 'includes/header.php';



?>

<!--  Page content goes here   -->
<div class="container">
    <h1>Images</h1>
            
    <?php
    //connect to DB
    require_once('dbconfig.php');
    
    //go get all the users
    $sql = "SELECT * FROM images"; //must include 'id' to use later
    
    $result = $conn->query($sql);
    
    //developer function to view result
    //var_dump($result);
            
    $amount = $result->num_rows;
    echo 'There are currently ' . $amount . ' images.';
            
    ?>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Description</th>
                <th>Date Uploaded</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    
    <?php
            
    //Loop through all results and create a tabe row for each
    //'.' work like '+' in c#
    while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td><img src="' . $row['file_path'] . '"></td>'; //Displays image
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . $row['date_uploaded'] . '</td>';
        echo '<td><a href="javascript:confirmDelete(' . $row['image_id'] . ',&apos;' . $row['file_path'] . '&apos;);">delete</a></td>'; //must include 'javascript:'
        //deleteUser.php?userID=' . $row['id'] . '
        echo '</tr>';
    }
    $conn->close();
    
    ?>
            
        </tbody>
    </table>
    
</div><!-- end of class=container -->


<script>

    function confirmDelete(image_id,filePath){
        var yes = confirm('Are you sure?');
        if(yes == true){
            window.location = 'deleteImage.php?imageID=' + image_id + '&filePath=' + filePath; //In JS, it's a '+' to concatinate
        }
    };

</script>


<?php

//include the footer - all pages use the same footer
include 'includes/footer.php';


?>
