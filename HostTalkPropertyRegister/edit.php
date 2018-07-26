<?php

//change this variable to be the title of the new page
$title = 'Edit Machine Details';


//include the header - all pages use the same header
include 'includes/header.php';


?> 

<!--  Page content goes here   -->
<!--<div class="container">-->
    
    <h2>Edit Machine Details</h2>
    
    <?php
    //store the messageID which has been passed from propertyRegister.php
    $id = $_GET['rowID'];
    //connect to db using our dbconfig file
    require_once('dbconfig.php');
    //prepare a SQL statement to get the message with the ID passed from message.php
    $sql = "SELECT * FROM property_register WHERE id=" . $id;
    //run the SQL query
    $result = $conn->query($sql);
    //loop through each result
    while ($row = $result->fetch_assoc()){ //gets data out
        //store data returned from database in variables to use further down the page
        $networkName = $row['network_name'];
        $notes = $row['notes'];
        $operatingSystem = $row['operating_system'];
        $otherSoftware = $row['other_software'];
        $allocatedTo = $row['allocated_to'];
        $ipAddress = $row['ip_address'];
    }
    
    //good housekeeping to manage memory usage on the server
    $conn->close();
    
    ?>
    
    
    <!--Any fields that we wish to edit must be inside the form-->
    <form action="saveEdit.php" method="get" name="editForm">
        
        <!--Store the ID of the message to be updated in a hidden field - this value is passed to the action page (updateMessageStatus.php) and ensures we update the correct message-->
        <input type="hidden" name="rowID" value="<?php echo $id; ?>">
        
        <div class="form-group">
            <label for="networkName"><strong>Network Name:</strong></label>
            <input name="networkName" class="form-control" type="text" value="<?php echo $networkName; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="notes"><strong>Notes:</strong></label>
            <textarea name="notes" class="form-control"><?php echo $notes; ?></textarea>
        </div>     
        
        <div class="form-group">
            <label for="operatingSystem"><strong>Operating System:</strong></label>
            <input name="operatingSystem" class="form-control" type="text" value="<?php echo $operatingSystem; ?>" required>
        </div>     
        
        <div class="form-group">
            <label for="otherSoftware"><strong>Other Software:</strong></label>
            <input name="otherSoftware" class="form-control" type="text" value="<?php echo $otherSoftware; ?>">
        </div>    
        
        <div class="form-group">
            <label for="allocatedTo"><strong>Allocated To:</strong></label>
            <input name="allocatedTo" class="form-control" type="email" value="<?php echo $allocatedTo; ?>" required>
        </div>     
        
        <div class="form-group">
            <label for="ipAddress"><strong>IP Address:</strong></label>
            <input name="ipAddress" class="form-control" type="text" value="<?php echo $ipAddress; ?>" required>
        </div>
        
        <button type="submit" class="btn button" onclick="IsEmpty()">Save</button>
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
        
        var notes = document.forms["editForm"]["notes"].value;
        
        if(notes == ""){
            document.forms["editForm"]["notes"].value = "N/A";
        }
        
        var otherSoftware = document.forms["editForm"]["otherSoftware"].value;
        
        if (otherSoftware == ""){
            document.forms["editForm"]["otherSoftware"].value = "N/A";
        }
    }
</script>