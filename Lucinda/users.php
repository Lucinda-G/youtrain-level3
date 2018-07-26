<?php

//change this variable to be the title of the new page
$title = 'List of Users';


//include the header - all pages use the same header
include 'includes/header.php';



?>

<!--  Page content goes here   -->
<div class="container">
    <h1>List of Users</h1>
            
    <?php
    //connect to DB
    require_once('dbconfig.php');
    
    //go get all the users
    $sql = "SELECT firstname, lastname, id FROM users"; //must include 'id' to use later
    
    $result = $conn->query($sql);
    
    //developer function to view result
    //var_dump($result);
            
    $amount = $result->num_rows;
    echo 'There are currently ' . $amount . ' users on the system.';
            
    ?>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    
    <?php
            
    //Loop through all results and create a tabe row for each
    //'.' work like '+' in c#
    while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td><a href="javascript:confirmDelete(' . $row['id'] . ');">delete</a></td>'; //must include 'javascript:'
        //deleteUser.php?userID=' . $row['id'] . '
        echo '</tr>';
    }
    $conn->close();
    
    ?>
            
        </tbody>
    </table>
    
</div><!-- end of class=container -->


<script>

    function confirmDelete(id){
        var yes = confirm('Are you sure?');
        if(yes == true){
            window.location = 'deleteUser.php?userID=' + id; //In JS, it's a '+' to concatinate
        }
    };

</script>


<?php

//include the footer - all pages use the same footer
include 'includes/footer.php';


?>
