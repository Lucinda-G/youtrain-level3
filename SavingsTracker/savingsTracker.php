<!--<!doctype html>-->
<?php

//change this variable to be the title of the new page
$title = 'Savings Tracker';



?>

    <html lang="en-gb">


    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width">

        <title>Savings Tracker</title>

        <link rel="stylesheet" href="style.css">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Slabo+13px|Damion|Quicksand');

        </style>


    </head>

    <body>

        <header>
            <div id="title">
                <h1 id="saver">Savings Tracker</h1>
                
                    <div class="userDropdown">
                        <!--Hardcoded-->
                        <h2 id="user" class="userDropbtn">Lucinda Gooding &#9662;</h2>
                        <div class="userDropdown-content">
                            <a id="editProfileBtn">Edit Profile</a>
                            <a id="signOutBtn">Sign Out</a>
                        </div>
                    </div>  
                
                <br>
            </div>
            <br><br><br>

            <section id="headingSection">

                <button id="addNewSaverBtn" onclick="addNewSaver()">Add New Saver</button>

                <div id="addNewSaverPopup" class="addNewSaverPopup" style="display:none">

                    <div class="addNewSaverPopup-content">
                        <span class="close">&times;</span>

                        <form id="addNewSaverPopupForm" action="addSaver.php" method="get">
                            <h1 id="addNewSaverTitle">Add New Saver</h1>
                            <label>Name:</label> <br>
                            <input id="newSaverName" name="newSaverName" class="addNew" type="text" required>
                            <br>
                            <label>Notes:</label> <br>
                            <input id="newSaverNotes" name="newSaverNotes" class="addNew" type="text" required>
                            <br>
                            <label>Goal:</label><br>
                            <input id="newSaverGoal" name="newSaverGoal" class="addNew" type="number" step="0.01" required>
                            <br>
                            <input hidden id="newSaverTotal" name="newSaverTotal" type="number" step="0.01" value="0.00">
                            
                            <div id="createSaverBtn-container">
                                <button type="submit" id="createSaverBtn">Create Saver</button>
                            </div>
                        </form>

                    </div>

                </div>

                <br><br>

            </section>

        </header>

        <br>

        <section>

            <?php
            
            //connect to DB
            require_once('dbconfig.php');
            
            $sql = "SELECT * FROM savings_tracker"; //table name from DB  
            
            $result = $conn->query($sql);
            
            while($row = $result->fetch_assoc()){
                
                ?>

                <form id="saverTemplate" action="updateTotal.php" method="get">

                    <!--..............................Start of Dropdown...................................-->

                    <div class="dropdown">
                        <button class="dropbtn">-</button>
                        <div class="dropdown-content">
                            <a id="changeGoalBtn" onclick="changeGoal(<?php echo $row['st_id'] ?>)">Change Goal</a>
                            <a id="renameBtn" onclick="rename(<?php echo $row['st_id'] ?>)">Rename</a>
                            <a id="deleteBtn" onclick="deleteSaver(<?php echo $row['st_id'] ?>)">Delete</a>
                        </div>
                    </div>


                    <!--..............................End of Dropdown...................................-->



                    <header>
                        <!--                    <h1 name="saverID" id="saverID<?php echo $row['st_id'] ?>" hidden><?php echo $row['st_id'] ?></h1>-->
                        <h1 id="saverName<?php echo $row['st_id'] ?>">
                            <?php echo $row['st_name'] ?>
                        </h1>
                        <h3 id="saverNotes<?php echo $row['st_id'] ?>">
                            <?php echo $row['st_notes'] ?>
                        </h3>
                    </header>

                    <div>

                        <label> Amount: &nbsp; £</label>
                        <input type="number" step="0.01" id="inputSaverAmount<?php echo $row['st_id'] ?>" class="inputSaverAmount" name="inputSaverAmount<?php echo $row['st_id'] ?>"><br>

                        <button type="button" id="addBtn<?php echo $row['st_id'] ?>" class="saverButton" name="addBtn<?php echo $row['st_id'] ?>" onclick="addSavings(<?php echo $row['st_id'] ?> , this.form)">Add</button>

                        <button type="button" id="removeBtn<?php echo $row['st_id'] ?>" class="saverButton" name="removeBtn<?php echo $row['st_id'] ?>" onclick="removeSavings(<?php echo $row['st_id'] ?> , this.form)">Remove</button>
                    </div>

                    <div>

                        <h3 id="originalSaverTotal<?php echo $row['st_id'] ?>" hidden>
                            <?php echo $row['st_total'] ?>
                        </h3>
                        <!--this one v to update in the db on Save-->
                        <h3 id="saverTotal<?php echo $row['st_id'] ?>" class="saverTotal">
                            <?php echo $row['st_total'] ?>
                        </h3>



                        <input hidden name="saverTotalSave" id="saverTotalSave<?php echo $row['st_id'] ?>" type="text" value="">

                        <input hidden name="saverID" id="saverID<?php echo $row['st_id'] ?>" value="<?php echo $row['st_id']?>">

                        <input hidden name="saverPercent" id="saverPercent<?php echo $row['st_id'] ?>" type="text" value="">



                        <div id="saverContainer">
                            <div id="saverProgressBar<?php echo $row['st_id'] ?>" class="saverProgressBar" style="width:<?php echo $row['st_percent']?>%">

                                <a id="originalSaverPercentage<?php echo $row['st_id'] ?>" hidden>
                                    <?php echo $row['st_percent']?>%</a>

                                <a name="saverPercentage" id="saverPercentage<?php echo $row['st_id'] ?>" class="saverPercentage" value="<?php echo $row['st_percent']?>">
                                    <?php echo $row['st_percent']?>%</a>

                            </div>
                        </div>

                        <h3 id="saverGoal<?php echo $row['st_id'] ?>" class="saverGoal">
                            <?php echo $row['st_goal'] ?>
                        </h3>
                    </div>

<!--
                    <div>

                        <button type="reset" class="saverButton" onclick="cancelSavings(<?php echo $row['st_id'] ?>)">Reset</button>
                        <button class="saverButton" type="submit">Save</button>

                    </div>
-->

                </form>

                <!--................................Dropdown Popups - Change Goal.................................-->


                <div id="changeGoalSaverPopup<?php echo $row['st_id'] ?>" class="changeGoalSaverPopup" style="display:none">

                    <div class="changeGoalSaverPopup-content">
                        <span onclick="closePopup(<?php echo $row['st_id'] ?>)" class="close">&times;</span>

                        <form id="changeGoalSaverPopupForm" action="changeGoalSaver.php" method="get">
                            <h1 class="popupTitle">Change Goal</h1>
                            <h2 class="popupTitle">
                                <?php echo $row['st_name'] ?>
                            </h2>
                            <br>
                            <input hidden name="saverID" id="saverID<?php echo $row['st_id'] ?>" value="<?php echo $row['st_id']?>">
                            <input hidden name="changeGoalPercent" id="changeGoalPercent<?php echo $row['st_id'] ?>" value="">
                            <label>Goal:</label>
                            <input id="changeSaverGoal<?php echo $row['st_id'] ?>" class="addNew" name="changeSaverGoal" type="number" step="0.01" value="<?php echo $row['st_goal'] ?>" required>
                            <br>
                            <div class="changeButtons">
                                <button type="button" id="changeGoalPercentBtn" onclick="changeGoalPercentage(<?php echo $row['st_id'] ?> , this.form)">Change Goal</button>
<!--                                <button type="submit" id="changeGoalSaverBtn">Save</button>-->
                            </div>
                            
                        </form>

                    </div>

                </div>


                <!--................................Dropdown Popups - Rename...................................-->


                <div id="renameSaverPopup<?php echo $row['st_id'] ?>" class="renameSaverPopup" style="display:none">

                    <div class="renameSaverPopup-content">
                        <span onclick="closeRenamePopup(<?php echo $row['st_id'] ?>)" class="close">&times;</span>

                        <form id="renameSaverPopupForm" action="renameGoalSaver.php" method="get">
                            <h1 class="popupTitle">Rename</h1>
                            <h2 class="popupTitle">
                                <?php echo $row['st_name'] ?>
                            </h2>
                            <br>
                            <input hidden name="saverID" id="saverID<?php echo $row['st_id'] ?>" value="<?php echo $row['st_id']?>">
                            <label>Name:</label>
                            <input id="renameSaver<?php echo $row['st_id'] ?>" class="addNew" name="renameSaver" type="text" value="<?php echo $row['st_name'] ?>">
                            <br>
                            <label>Notes:</label>
                            <input id="renameNotesSaver<?php echo $row['st_id'] ?>" class="addNew" name="renameNotesSaver" type="text" value="<?php echo $row['st_notes'] ?>">
                            <br>
                            <div class="changeButtons">
                            <button type="submit" id="renameSaverBtn">Save</button>
                            </div>
                        </form>

                    </div>

                </div>

                <!--................................Dropdown Popups - Delete...................................-->

                <div id="deleteSaverPopup<?php echo $row['st_id'] ?>" class="deleteSaverPopup" style="display:none">

                    <div class="deleteSaverPopup-content">
                        <span onclick="closeDeletePopup(<?php echo $row['st_id'] ?>)" class="close">&times;</span>

                        <form id="deleteSaverPopupForm" action="deleteSaver.php" method="get">
                            <h1 class="popupTitle">Delete</h1>
                            <h2 class="popupTitle">
                                <?php echo $row['st_name'] ?>
                            </h2>
                            <br>
                            <input hidden name="saverID" id="saverID<?php echo $row['st_id'] ?>" value="<?php echo $row['st_id']?>">
                            <div class="changeButtons">
                                <label class="popupTitle">Are you sure you want to delete this saver?</label>
                            </div>
                            <br><br>
                            <div class="changeButtons">
                                <button type="submit" id="deleteSaverBtn">Yes</button>
                                <button type="button" id="noBtn" onclick="noDeleteSaver(<?php echo $row['st_id'] ?>)">No</button>
                                
                            </div>
                            
                        </form>

                    </div>

                </div>


                <?php
            }
            $conn->close();
            
            ?>

        </section>

        <br>

        <footer >
            <br> &copy;
            <?php  echo date('Y');   ?> Lucinda Gooding ZX. All Rights Reserved.
        </footer>

    </body>

    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script src="notify.js"></script>

    <script>
        ///////////////////////////////////////////////////////////////////////
        var addNSPopup = document.getElementById('addNewSaverPopup');
        var aNSBtn = document.getElementById("addNewSaverBtn");
        var span = document.getElementsByClassName("close")[0];

        function addNewSaver() {
            addNSPopup.style.display = "block";
        }

        span.onclick = function() {
            addNSPopup.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == addNSPopup) {
                addNSPopup.style.display = "none";
            }
        }
        
        ////////////////////////////////////////////////////////////////////////
        
        window.onload = function(){
            
            var saverProgressBars = document.getElementsByClassName("saverProgressBar");
            
            var progressIdStrLng = 16;
            
            for (var i = 0; i < saverProgressBars.length; i++){
                var saverProgressBarId = saverProgressBars[i].getAttribute("id");
                var idNum = saverProgressBarId.substr(progressIdStrLng); //Length of string to get id after
                
                progressBar(idNum);
            }
            
        };
        
        ////////////////////////////////////////////////////////////////////////

        function changeGoal(id) {
            document.getElementById("changeGoalSaverPopup" + id).style.display = "block";
        }

        function closePopup(id) {
            document.getElementById("changeGoalSaverPopup" + id).style.display = "none";
        }

        function changeGoalPercentage(id, form) {
            
            console.log(form);
            
            var total = Number(document.getElementById("saverTotal" + id).innerHTML).toFixed(2);
            var goal = Number(document.getElementById("changeSaverGoal" + id).value).toFixed(2);
            var percent = ((total / goal) * 100);

            document.getElementById("changeGoalPercent" + id).value = percent.toFixed(0);
            
            form.submit();
        }


        //////////Rename///////////

        function rename(id) {
            document.getElementById("renameSaverPopup" + id).style.display = "block";
        }

        function closeRenamePopup(id) {
            document.getElementById("renameSaverPopup" + id).style.display = "none";
        }





        function deleteSaver(id) {
            document.getElementById("deleteSaverPopup" + id).style.display = "block";
        }

        function closeDeletePopup(id) {
            document.getElementById("deleteSaverPopup" + id).style.display = "none";
        }

        function noDeleteSaver(id) {
            document.getElementById("deleteSaverPopup" + id).style.display = "none";
        }



        ///////////////////////////////////////////////////////////////////////

        function addSavings(id, form) {

            var amount = Number(document.getElementById("inputSaverAmount" + id).value).toFixed(2);
            var total = Number(document.getElementById("saverTotal" + id).innerHTML).toFixed(2);
            var overallTotal = (Number(total) + Number(amount)).toFixed(2);

            document.getElementById("saverTotal" + id).innerHTML = Number(overallTotal).toFixed(2);
            document.getElementById("saverTotalSave" + id).value = Number(overallTotal).toFixed(2);

            document.getElementById("inputSaverAmount" + id).value = null;

            progressBar(id);
            
            form.submit();
        }

        function removeSavings(id, form) {

            var amount = Number(document.getElementById("inputSaverAmount" + id).value).toFixed(2);
            var total = Number(document.getElementById("saverTotal" + id).innerHTML).toFixed(2);
            var overallTotal = (Number(total) - Number(amount)).toFixed(2);

            document.getElementById("saverTotal" + id).innerHTML = Number(overallTotal).toFixed(2);
            document.getElementById("saverTotalSave" + id).value = Number(overallTotal).toFixed(2);
            document.getElementById("inputSaverAmount" + id).value = null;

            progressBar(id);
            
            form.submit();
        }


        function progressBar(id) {
            var total = Number(document.getElementById("saverTotal" + id).innerHTML).toFixed(2);
            var goal = Number(document.getElementById("saverGoal" + id).innerHTML).toFixed(2);

            var percent = ((total / goal) * 100);
            //console.log(percent);

            
            document.getElementById("saverProgressBar" + id).style.width = percent + '%';
            document.getElementById("saverPercentage" + id).innerHTML = Math.floor(Number(percent)) + '%';
//            document.getElementById("saverPercentage" + id).innerHTML = Number(percent).toFixed(0) + '%';
            document.getElementById("saverPercent" + id).value = Number(percent).toFixed(0);

            if (percent < 0) {
                document.getElementById("saverProgressBar"+id).style.backgroundColor = '#434348';
            } else {
                document.getElementById("saverProgressBar"+id).style.backgroundColor = '#DB3D51';
            }
        }

        function cancelSavings(id) {

            document.getElementById("saverTotal" + id).innerHTML = document.getElementById("originalSaverTotal" + id).innerHTML;

            document.getElementById("saverPercentage" + id).innerHTML = document.getElementById("originalSaverPercentage" + id).innerHTML;

            var percent = document.getElementById("originalSaverPercentage" + id).innerHTML;

            console.log(percent);

            document.getElementById("saverProgressBar" + id).style.width = percent; //Doesn't like '%' added

            console.log(document.getElementById("saverProgressBar" + id).style.width);

        }

        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
        function saveSavings(id, st_total) {
            //saverTotal + id will be going in the database updating st_total



        }
        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//

    </script>

    <!--    </body>-->
    <!--</html>-->
