<?php

//change this variable to be the title of the new page
$title = 'Property Register';

//include the header - all pages use the same header
include 'includes/header.php';

?>

<body>

    <!--  Page content goes here   -->
<!--
    <div class="container">
        <section id="header">
        <img id="logo" class="right" src="images/logo.png">
        <br><br>
        <h1><i>Host</i>Talk Property Register</h1>
        </section>
        <br>
-->


<?php
    //connect to DB
    require_once('dbconfig.php');
    
    //first go get the categories for the category filter
    $sql = 'SELECT * FROM allocation';
    $result = $conn->query($sql);
    
    //build link which will allow the user to filter results based on category
    echo '<div class="cat-links">';
    //'catID' is what is being passed in the url
    //check if active-cat css class is needed on this link
    if(isset($_GET['allocID']) == false){ //if it's not set
        echo '<a id="active-cat" href="propertyRegister.php">All</a>';
    } else{
        echo '<a href="propertyRegister.php">All</a>';
    }
    
    while($row = $result->fetch_assoc()){
        
        //check if active-cat css class is needed on this link
        if(isset($_GET['allocID'])){
            if($_GET['allocID'] == $row['allocation_id']){
                echo '<a id="active-cat" href="propertyRegister.php?allocID=' . $row['allocation_id'] . '">' . $row['allocation_answer'] . '</a>'; //reloads the page and adds a certain ID  
            }else{
                echo '<a href="propertyRegister.php?allocID=' . $row['allocation_id'] . '">' . $row['allocation_answer'] . '</a>'; //reloads the page and adds a certain ID  
            }
  
        }else{
             echo '<a href="propertyRegister.php?allocID=' . $row['allocation_id'] . '">' . $row['allocation_answer'] . '</a>'; //reloads the page and adds a certain ID      
        }
    }
    
    
?>

    <span class="right">
    <button type="button" class="btn button" id="add">Add</button> 
<!--        btn btn-success-->
    </span>

<?php
    
    
    echo '</div>';
      
       
    //go get all the messages
    $sql = "SELECT * FROM property_register, allocation WHERE property_register.allocation = allocation.allocation_id"; //table name from DB   
    
    if(isset($_GET['allocID'])){
        $sql .= ' AND property_register.allocation = ' . $_GET['allocID']; //adding 'AND' because there's already a 'WHERE'. And you must include a space before the 'AND'.
    }
    
     
    $result = $conn->query($sql);

    $amount = $result->num_rows;
    
    
    echo '<br> There are currently ' . $amount . ' machines.';    
    
?>

    <div>
        <input type="text" id="searchInput" onkeyup="search()" placeholder="Search..." title="Type in a keyword" class="right form-control scroll">
    </div>



    <table id="prTable" class="table table-hover scroll" style="table-layout:fixed">
        <thead>
            <tr >
                <th>ID</th>
                <th>Network Name</th>
                <th>Notes</th>
                <th>Operating System</th>
                <th>Other Software</th>
                <th>Allocated To</th>
                <th>IP Address</th>
                <th>Allocation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php
            
        //Loop through all results and create a tabe row for each
        //'.' work like '+' in c#
        while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['network_name'] . '</td>';
        echo '<td>' . $row['notes'] . '</td>';
        echo '<td>' . $row['operating_system'] . '</td>';
        echo '<td>' . $row['other_software'] . '</td>';
        echo '<td>' . $row['allocated_to'] . '</td>';
        echo '<td>' . $row['ip_address'] . '</td>';
        echo '<td>' . $row['allocation_answer'] . '</td>';
        echo '<td><a class="editLink" href="edit.php?rowID=' . $row['id'] . '">edit</a>';
        echo '</td>';
        echo '</tr>';
        }
        $conn->close();

?>
        </tbody>
    </table>


<!--        <button id="emailBtn">email</button>-->

    <?php
    include 'includes/footer.php';
    ?>
    


    <script>
        var btn = document.getElementById('add');
        btn.addEventListener('click', function() {
            document.location.href = 'add.php';
        });

    </script>

    <script>
        var emailBtn = document.getElementById('emailBtn');
        emailBtn.addEventListener('click', function() {
            document.location.href = 'email.php';
        });

    </script>

    <script>
        function search() {
            //.toUpperCase() turns the search input into uppercase
            var searchText = document.getElementById('searchInput').value.toUpperCase();
            var targetTable = document.getElementById('prTable');
            var targetTableColCount;

            //Loop through table rows
            for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
                var rowData = '';

                //Get column count from header row
                if (rowIndex == 0) {
                    targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
                    continue; //do not execute further code for header row.
                }

                //Process data rows. (rowIndex >= 1) - .toUpperCase() turns all the data into uppercase
                for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
                    rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent.toUpperCase();
                }

                //If search term is not found in row data
                //then hide the row, else show
                if (rowData.indexOf(searchText) == -1){
                    targetTable.rows.item(rowIndex).style.display = 'none';
                }
                else{
//                    targetTable.rows.item(rowIndex).style.display = 'table-row';
                    targetTable.rows.item(rowIndex).style.display = 'flex'; //This is how to align them
                }
            }
        }

    </script>

