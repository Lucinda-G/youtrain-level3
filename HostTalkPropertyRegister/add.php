<?php

//change this variable to be the title of the new page
$title = 'Add New Machine';


//include the header - all pages use the same header
include 'includes/header.php';


?>

<!--  Page content goes here   -->
<!--<div class="container">-->
    
    <h2><?php echo $title; ?></h2>
    <form action="saveAdd.php" method="get" name="addForm">
        <div class="form-group">
            <label for="networkName"><strong>Network Name:</strong></label>
            <input class="form-control" type="text" name="networkName" required> 
        </div>        
        <div class="form-group">
            <label for="notes"><strong>Notes:</strong></label>
            <textarea class="form-control" name="notes"></textarea>
        </div> 
        <div class="form-group">
            <label for="operatingSystem"><strong>Operating System:</strong></label>
            <input class="form-control" type="text" name="operatingSystem" required> 
        </div>    
        <div class="form-group">
            <label for="otherSoftware"><strong>Other Software:</strong></label>
            <input class="form-control" type="text" name="otherSoftware"> 
        </div>    
        <div class="form-group">
            <label for="allocatedTo"><strong>Allocated To:</strong></label>
            <input class="form-control" type="email" name="allocatedTo" required> 
        </div>      
        <div class="form-group">
            <label for="ipAddress"><strong>IP Address:</strong></label>
            <input class="form-control" type="text" name="ipAddress" required> 
        </div>
        <button type="submit" class="btn button" onclick="IsEmpty()">Add</button>
        <button type="button" class="btn button" onclick="cancel()">Cancel</button>
    </form>
    
<?php
    include 'includes/footer.php';
?>


<script>
    //The cancel button
    function cancel() {
        window.history.back()
    }
</script>

<script>
    function IsEmpty(){
        
        var notes = document.forms["addForm"]["notes"].value;
        
        if(notes == ""){
            document.forms["addForm"]["notes"].value = "N/A";
        }
        
        var otherSoftware = document.forms["addForm"]["otherSoftware"].value;
        
        if (otherSoftware == ""){
            document.forms["addForm"]["otherSoftware"].value = "N/A";
        }
    }
</script>
