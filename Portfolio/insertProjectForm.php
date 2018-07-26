<!doctype html>
<html>
    <head>
        <title>Insert Project Form</title>
    </head>

    <body>
        <h1>Insert Project Form</h1>
        
        <form action="insertProjectAction.php" method="get">
            
            <div class="form-group">
                <label for="title">Title of Project:</label>
                <input type="text" name="title" class="form-control" required>
            </div>           
            <div class="form-group">
                <label for="description">Description of Project:</label>
                <textarea type="text" name="description" class="form-control" required></textarea>
            </div>         
            
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" class="form-control">
                    <?php
                    //connect to the DB
                    $conn = new mysqli('localhost','lgooding-projects','password','lgooding-projects');
                    if($conn->connect_errno){
                        die('Problem: ' . $conn->connect_error);
                    }
                
                    //prepare a SQL statement to get all categories
                    $sql = "SELECT * FROM project_categories";
                    //run the query storing results in variable $result
                    $result = $conn->query($sql);
                    //loop through the results
                    while($row = $result->fetch_assoc()){
                        //create an option element for each row
                        echo '<option value="' . $row['category_id'] . '">' . $row['category'] . '</option>'; //[category_id] is the id from the 'project_categories' DB, and [category] is the label from the 'project_categories' DB
                                        
                    }
                    
                    $conn->close();

                    ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        
        
        
        </form>
        
        
        
        
        
    </body>





</html>