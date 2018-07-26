<?php

//change this variable to be the title of the new page
$title = 'Test Tree Class';


//include the header - all pages use the same header
include 'includes/header.php';


?>

<!--  Page content goes here   -->
<div class="container">
    
    <?php
    
    //to bring in external code
    require_once('classes/Tree.php');
    $myTree = new Tree('../Lucinda');
    
    ?>
    
</div><!-- end of class=container -->



<?php

//include the footer - all pages use the same footer
include 'includes/footer.php';


?>
