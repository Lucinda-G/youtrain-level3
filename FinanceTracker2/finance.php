<!doctype html>
<html lang="en-gb">
<!--Comment with control + forward slash-->

<head>
    <!--For English characters-->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width">


    <!--title very important for seo (search engine optimisation)-->
    <title>Lucinda Gooding</title>
    <!--    Link to external stylesheet-->
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Slabo+13px|Damion|Quicksand');

    </style>
</head>

<body>

    <header>
        <h1>Budget</h1>
    </header>


    <aside id="totalAmount">
        <h2 id="totalDisplay"></h2>
        <img id="savingsImage" src="images/savings.png" onclick="showSavings()">
    </aside>


    <section id="savingsContent">
        <header>
            <h2>Savings</h2>
        </header>

        <form id="savingsForm1">
<!--            <div id="forDeleteS1"></div>-->
            <h2 id="forDeleteS1" onclick="addS(1)">Add Savings 1</h2>
            <section id="toDeleteS1" style="display: none">
                <div class="dropdown">
                    <button onclick="dropdown()" class="dropdownButton" type="button">-</button>
                    <div id="savingsDropdown" class="dropdown-content">
                        <a id="changeGoal1Button" onclick="changeGoal1()">Change goal</a>
                        <a id="renameSavings1Button" onclick="renameSavings1()">Rename</a>
                        <a id="deleteSavings1Button" onclick="deleteSavings1()">Delete</a>
                    </div>
                </div>

                <header>
                    <h3>Savings 1</h3>
                    <h4 id="savings1"></h4>
                </header>

                <div id="inorout">
                    <input type="radio" id="savingsIn" name="inout" value="in" onclick="savingsInCheck()"> Savings In
                    <input type="radio" id="savingsOut" name="inout" value="out" onclick="savingsOutCheck()"> Savings Out
                </div>

                <div id="savingsAmount">
                    <label>Amount: &nbsp; £</label>
                    <input type="text" id="amountSavings" name="amountSavings" disabled><br>
                    <button type="button" id="saveInButton" name="saveInButton" onclick="addInSavings()">Add</button>
                    <button type="button" id="saveOutButton" name="saveOutButton" onclick="addOutSavings()">Remove</button>
                </div>

                <h3 id="savings1Total"></h3>

                <div id="container" onclick="openSavingsTable()" title="View Savings 1 Table">
                    <div id="progress-bar">
                        <a id="percentageSavings1">0%</a>
                    </div>
                </div>

                <h4 id="savings1Goal"></h4>

                <table id="savings1Table" border="1">
                    <thead>
                        <tr>
                            <th>In/Out</th>
                            <th>Amount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--...-->
                    </tbody>
                </table>

            </section>

        </form>



        <!--Change goal 1-->
        <div id="changeGoalPopup" class="changeGoalPopup">
            <div class="changeGoalPopup-Content">
                <span class="close">&times;</span>
                <h3>Change Savings 1's goal</h3>
                <label for="changeGoal1Amount">£</label>
                <input type="text" id="changeGoal1Amount"> <br>
                <!--placeholder="Enter goal"-->
                <button id="changeGoal1AmountBtn" type="button" onclick="changeGoal1Amount()">Change</button>
            </div>
        </div>


        <!--Rename Savings1-->
        <div id="renameSavings1Popup" class="renameSavings1Popup">
            <div class="renameSavings1Popup-Content">
                <span class="closeRenameS1">&times;</span>

                <h3>Rename Savings 1</h3>
                <input type="text" id="renameSavings1Text"> <br>
                <!--placeholder="Enter goal"-->
                <button id="renameSavings1Btn" type="button" onclick="renameSavings1Submit()">Rename</button>
            </div>
        </div>


        <!--Delete Savings1-->
        <div id="deleteSavings1Popup" class="deleteSavings1Popup">
            <div class="deleteSavings1Popup-Content">
                <span class="closeDeleteS1">&times;</span>

                <h3>Delete Savings 1</h3>
                <h4>Are you sure you want to delete your Savings 1 Tracker?</h4>
                <button id="yesSavings1Btn" type="button" onclick="yesSavings1Delete()">Delete</button>
                <button id="noSavings1Btn" type="button" onclick="noSavings1Delete()">Cancel</button>
            </div>
        </div>

        <!--..................................................................................-->

        <!--SAVINGS 2-->
        <form id="savingsForm2">
            <h2 id="forDeleteS2" onclick="addS2()">Add Savings 2</h2>
            <section id="toDeleteS2" style="display: none">
                <div class="dropdown2">
                    <button onclick="dropdown2()" class="dropdownButton2" type="button">-</button>
                    <div id="savings2Dropdown" class="dropdown2-content">
                        <a id="changeGoal2Button" onclick="changeGoal2()">Change goal</a>
                        <a id="renameSavings2Button" onclick="renameSavings2()">Rename</a>
                        <a id="deleteSavings2Button" onclick="deleteSavings2()">Delete</a>
                    </div>
                </div>

                <header>
                    <h3>Savings 2</h3>
                    <h4 id="savings2"></h4>
                </header>

                <div id="inorout2">
                    <input type="radio" id="savingsIn2" name="inout2" value="in2" onclick="savingsInCheck2()"> Savings In
                    <input type="radio" id="savingsOut2" name="inout2" value="out2" onclick="savingsOutCheck2()"> Savings Out
                </div>

                <div id="savingsAmount2">
                    <label>Amount: &nbsp; £</label>
                    <input type="text" id="amountSavings2" name="amountSavings2" disabled><br>
                    <button type="button" id="saveInButton2" name="saveInButton2" onclick="addInSavings2()">Add</button>
                    <button type="button" id="saveOutButton2" name="saveOutButton2" onclick="addOutSavings2()">Remove</button>
                </div>

                <h3 id="savings2Total"></h3>

                <div id="container2" onclick="openSavingsTable2()" title="View Savings 2 Table">
                    <div id="progress-bar2">
                        <a id="percentageSavings2">0%</a>
                    </div>
                </div>

                <h4 id="savings2Goal"></h4>

                <table id="savings2Table" border="1">
                    <thead>
                        <tr>
                            <th>In/Out</th>
                            <th>Amount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--...-->
                    </tbody>
                </table>
            </section>
        </form>


        <!--Change goal 2-->
        <div id="changeGoalPopup2" class="changeGoalPopup2">
            <div class="changeGoalPopup2-Content">
                <span class="closeS2">&times;</span>
                <h3>Change Savings 2's goal</h3>
                <label for="changeGoal2Amount">£</label>
                <input type="text" id="changeGoal2Amount"> <br>
                <!--placeholder="Enter goal"-->
                <button id="changeGoal2AmountBtn" type="button" onclick="changeGoal2Amount()">Change</button>
            </div>
        </div>


        <!--Rename Savings2-->
        <div id="renameSavings2Popup" class="renameSavings2Popup">
            <div class="renameSavings2Popup-Content">
                <span class="closeRenameS2">&times;</span>

                <h3>Rename Savings 2</h3>
                <input type="text" id="renameSavings2Text"> <br>
                <!--placeholder="Enter goal"-->
                <button id="renameSavings2Btn" type="button" onclick="renameSavings2Submit()">Rename</button>
            </div>
        </div>


        <!--Delete Savings2-->
        <div id="deleteSavings2Popup" class="deleteSavings2Popup">
            <div class="deleteSavings2Popup-Content">
                <span class="closeDeleteS2">&times;</span>

                <h3>Delete Savings 2</h3>
                <h4>Are you sure you want to delete your Savings 2 Tracker?</h4>
                <button id="yesSavings2Btn" type="button" onclick="yesSavings2Delete()">Delete</button>
                <button id="noSavings2Btn" type="button" onclick="noSavings2Delete()">Cancel</button>
            </div>
        </div>


        <!--..................................................................................-->

        <!--SAVINGS 3-->
        <form id="savingsForm3">
            <h2 id="forDeleteS3" onclick="addS3()">Add Savings 3</h2>
            <section id="toDeleteS3" style="display: none">
                <div class="dropdown3">
                    <button onclick="dropdown3()" class="dropdownButton3" type="button">-</button>
                    <div id="savings3Dropdown" class="dropdown3-content">
                        <a id="changeGoal3Button" onclick="changeGoal3()">Change goal</a>
                        <a id="renameSavings3Button" onclick="renameSavings3()">Rename</a>
                        <a id="deleteSavings3Button" onclick="deleteSavings3()">Delete</a>
                    </div>
                </div>

                <header>
                    <h3>Savings 3</h3>
                    <h4 id="savings3"></h4>
                </header>

                <div id="inorout3">
                    <input type="radio" id="savingsIn3" name="inout3" value="in3" onclick="savingsInCheck3()"> Savings In
                    <input type="radio" id="savingsOut3" name="inout3" value="out3" onclick="savingsOutCheck3()"> Savings Out
                </div>

                <div id="savingsAmount3">
                    <label>Amount: &nbsp; £</label>
                    <input type="text" id="amountSavings3" name="amountSavings3" disabled><br>
                    <button type="button" id="saveInButton3" name="saveInButton3" onclick="addInSavings3()">Add</button>
                    <button type="button" id="saveOutButton3" name="saveOutButton3" onclick="addOutSavings3()">Remove</button>
                </div>

                <h3 id="savings3Total"></h3>

                <div id="container3" onclick="openSavingsTable3()" title="View Savings 3 Table">
                    <div id="progress-bar3">
                        <a id="percentageSavings3">0%</a>
                    </div>
                </div>

                <h4 id="savings3Goal"></h4>

                <table id="savings3Table" border="1">
                    <thead>
                        <tr>
                            <th>In/Out</th>
                            <th>Amount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--...-->
                    </tbody>
                </table>
            </section>
        </form>


        <!--Change goal 3-->
        <div id="changeGoalPopup3" class="changeGoalPopup3">
            <div class="changeGoalPopup3-Content">
                <span class="closeS3">&times;</span>
                <h3>Change Savings 3's goal</h3>
                <label for="changeGoal3Amount">£</label>
                <input type="text" id="changeGoal3Amount"> <br>
                <button id="changeGoal3AmountBtn" type="button" onclick="changeGoal3Amount()">Change</button>
            </div>
        </div>


        <!--Rename Savings3-->
        <div id="renameSavings3Popup" class="renameSavings3Popup">
            <div class="renameSavings3Popup-Content">
                <span class="closeRenameS3">&times;</span>

                <h3>Rename Savings 3</h3>
                <input type="text" id="renameSavings3Text"> <br>
                <button id="renameSavings3Btn" type="button" onclick="renameSavings3Submit()">Rename</button>
            </div>
        </div>


        <!--Delete Savings3-->
        <div id="deleteSavings3Popup" class="deleteSavings3Popup">
            <div class="deleteSavings3Popup-Content">
                <span class="closeDeleteS3">&times;</span>

                <h3>Delete Savings 3</h3>
                <h4>Are you sure you want to delete your Savings 3 Tracker?</h4>
                <button id="yesSavings3Btn" type="button" onclick="yesSavings3Delete()">Delete</button>
                <button id="noSavings3Btn" type="button" onclick="noSavings3Delete()">Cancel</button>
            </div>
        </div>

    </section>


        <!--..................................................................................-->




    <footer>
        Copyright &copy; 2018 Lucinda Gooding ZX. All Rights Reserved.
    </footer>


    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script src="notify.js"></script>
    <!--	<script type="text/javascript" src="functions.js"></script>-->


    <script>
        //Total amount
        var total = 1181;
        document.getElementById('totalDisplay').innerHTML = total.toFixed(2);

        var setTotal = 0;
        document.getElementById('setTotal').innerHTML = setTotal.toFixed(2);

//        var spendTotal = 0;
//        document.getElementById('spendTotal').innerHTML = spendTotal.toFixed(2);

        //.........Savings 1........//
        var savings1Name = "Savings 1";
        document.getElementById('savings1').innerHTML = savings1Name;

        var savings1TotalAmount = 0;
        document.getElementById('savings1Total').innerHTML = savings1TotalAmount.toFixed(2);

        var savings1GoalAmount = 40; //CHANGE THIS
        document.getElementById('savings1Goal').innerHTML = "Goal: £" + savings1GoalAmount.toFixed(2);
        //.....End of Savings 1....//

        //.........Savings 2........//
        var savings2Name = "Savings 2";
        document.getElementById('savings2').innerHTML = savings2Name;

        var savings2TotalAmount = 0;
        document.getElementById('savings2Total').innerHTML = savings2TotalAmount.toFixed(2);

        var savings2GoalAmount = 20; //CHANGE THIS
        document.getElementById('savings2Goal').innerHTML = "Goal: £" + savings2GoalAmount.toFixed(2);
        //.....End of Savings 2....//

        //.........Savings 3........//
        var savings3Name = "Savings 3";
        document.getElementById('savings3').innerHTML = savings3Name;

        var savings3TotalAmount = 0;
        document.getElementById('savings3Total').innerHTML = savings3TotalAmount.toFixed(2);

        var savings3GoalAmount = 60; //CHANGE THIS
        document.getElementById('savings3Goal').innerHTML = "Goal: £" + savings3GoalAmount.toFixed(2);
        //.....End of Savings 3....//


        //.......................................Outcomes.......................................//
        //Outcome for Set Monthly
        function addOutcome() {
            //Checks it's an integer
            var x = document.getElementById("outcomeAmount").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('outcomeAmount').value = null;
            }
            else {
                //For changesTable
                var rows = "";
                var date = dateChange(); //Calls the dateChange function
                var description = document.getElementById('outDescription').value;
                var inout = "Outcome";
                var originalAmount = document.getElementById('outcomeAmount').value;
                var amount = Number(originalAmount).toFixed(2);
               // var originalTotal = document.getElementById//////////////////////////////////
                var newTotal = (Number(total) - Number(amount)).toFixed(2);

                rows += "<tr><td>" + date + "</td><td>" + description + "</td><td>" + inout + "</td><td>" + amount + "</td><td>" + newTotal + "</td></tr>";
                $(rows).appendTo("#changesTable tbody");

                //For setOutcomeTable
                var rowsSet = "";

                rowsSet += "<tr><td>" + date + "</td><td>" + description + "</td><td>" + amount + "</td></tr>";
                $(rowsSet).appendTo("#setOutcomeTable tbody");
                
                var newSetTotal = (Number(setTotal) + Number(amount)).toFixed(2);
                setTotal = newSetTotal;
                document.getElementById('setTotal').innerHTML = setTotal;
                                 
                total = newTotal;
                document.getElementById('totalDisplay').innerHTML = total.toFixed(2);
                document.getElementById('outDate').value = null;
                document.getElementById('outDescription').value = null;
                document.getElementById('outcomeAmount').value = null;
            }
        }

        //Outcome for Spending
//        function addSpending() {
//            //Checks it's an integer
//            var x = document.getElementById("spendAmount").value;
//            if (parseFloat(x) != (x)) {
//                alert("Wrong value entered");
//                document.getElementById('spendAmount').value = null;
//            }
//            //Adds to row if is an integer
//            else {
//                //For changesTable
//                var rows = "";
//                var dateEntered = document.getElementById('spendDate').value;
//                var dateFormatter = new Date(dateEntered);
//                var date = dateFormatter.getDate() + '/' + Number(dateFormatter.getMonth() + 1) + '/' + dateFormatter.getFullYear();
//
//                var description = document.getElementById('spendDescription').value;
//                var inout = "Outcome";
//                var originalAmount = document.getElementById('spendAmount').value;
//                var amount = Number(originalAmount).toFixed(2);
//                var newTotal = (Number(total) - Number(amount)).toFixed(2);
//
//                rows += "<tr><td>" + date + "</td><td>" + description + "</td><td>" + inout + "</td><td>" + amount + "</td><td>" + newTotal + "</td></tr>";
//                $(rows).appendTo("#changesTable tbody");
//
//                //For setOutcomeTable
//                var rowsSpend = "";
//                var spendTotal = document.getElementById('spendTotal').value;
//                var newSpendTotal = (Number(spendTotal) + Number(amount)).toFixed(2);
//
//                rowsSpend += "<tr><td>" + date + "</td><td>" + description + "</td><td>" + amount + "</td></tr>";
//                $(rowsSpend).appendTo("#spendingTable tbody");
//
//                spendTotal = newSpendTotal;
//                document.getElementById('spendTotal').innerHTML = spendTotal.toFixed(2);
//                total = newTotal;
//                document.getElementById('totalDisplay').innerHTML = total.toFixed(2);
//                document.getElementById('spendDate').value = null;
//                document.getElementById('spendDescription').value = null;
//                document.getElementById('spendAmount').value = null;
//            }
//        }


        //Function in an Function - Changes the format of the date
        function dateChange(date) {
            var dateEntered = document.getElementById('outDate').value;
            var dateFormatter = new Date(dateEntered);
            var date = dateFormatter.getDate() + '/' + Number(dateFormatter.getMonth() + 1) + '/' + dateFormatter.getFullYear();
            return date;
        }
        //....................................End of Outcomes..................................//


        //.......................................Savings.......................................//

        //Overall Savings expansion
        function showSavings() {
            var x = document.getElementById("savingsContent");
            if (x.style.display == "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        ///////////////////////////////////SAVINGS 1///////////////////////////////////////

        
        //Add Savings
        function addS(id){            
            var section = document.getElementById('toDeleteS' + id);
            section.style.display = "block";
            
            var text = document.getElementById('forDeleteS' + id);
            text.style.display = "none";
            
            var form = document.getElementById('savingsForm' + id);
            form.style.backgroundColor = 'white';
            
            closeDropdownS1()
//            document.getElementById("savingsDropdown").classList.remove("show");
        }
        
        
        
        //Add Savings 1
        function addS1(){            
            var section = document.getElementById('toDeleteS1');
            section.style.display = "block";
            
            var text = document.getElementById('forDeleteS1');
            text.style.display = "none";
            
            var form = document.getElementById('savingsForm1');
            form.style.backgroundColor = 'white';
            
            closeDropdownS1()
//            document.getElementById("savingsDropdown").classList.remove("show");
        }
        
        
        //Start of Savings 1 dropdown//

        //Shows dropdown after clicking the button
        function dropdown() {
            document.getElementById("savingsDropdown").classList.toggle("show");
        }

        //Hides the dropdown when clicking anywhere on the screen
        window.onclick = function(event) {
            if (!event.target.matches('.dropdownButton')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        
        function closeDropdownS1(){
            document.getElementById("savingsDropdown").classList.remove("show");
        }

        //CHANGING SAVINGS 1'S GOAL
        var goalPopup = document.getElementById('changeGoalPopup');
        var changeGoalBtn = document.getElementById('changeGoal1Button');
        var spanS1C = document.getElementsByClassName("close")[0];

        //Opens popup box and displays current value in the input box
        function changeGoal1() {
            goalPopup.style.display = "block";
            document.getElementById('changeGoal1Amount').value = Number(savings1GoalAmount).toFixed(2);
        }

        //Closes popup box
        spanS1C.onclick = function() {
            goalPopup.style.display = "none";
        }

        //Changes the goal amount from the popup to the Savings1 form
        function changeGoal1Amount() {
            var x = document.getElementById("changeGoal1Amount").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('changeGoal1Amount').value = null;
            } else {
                var inputtedGoal1 = document.getElementById('changeGoal1Amount').value;
                savings1GoalAmount = inputtedGoal1;
                document.getElementById('savings1Goal').innerHTML = "Goal: £" + Number(savings1GoalAmount).toFixed(2);
                goalPopup.style.display = "none";
                changeProgressBar1("update");
                closeDropdownS1()
            }
        }

        //RENAMING SAVINGS 1
        var renameS1Popup = document.getElementById('renameSavings1Popup');
        var renameS1Btn = document.getElementById('changeGoal1Button');
        var spanS1R = document.getElementsByClassName("closeRenameS1")[0];

        //Opens popup box and displays current value in the input box
        function renameSavings1() {
            renameS1Popup.style.display = "block";
            document.getElementById('renameSavings1Text').value = savings1Name;
        }

        //Closes popup box
        spanS1R.onclick = function() {
            renameS1Popup.style.display = "none";
        }

        //Renames Savings1 from the popup to the Savings1 form
        function renameSavings1Submit() {
            var inputtedNameS1 = document.getElementById('renameSavings1Text').value;
            savings1Name = inputtedNameS1;
            document.getElementById('savings1').innerHTML = savings1Name;
            renameS1Popup.style.display = "none";
            closeDropdownS1()
        }

        //DELETING SAVINGS 1
        var deleteS1Popup = document.getElementById('deleteSavings1Popup');
        var yesS1Btn = document.getElementById('yesSavings1Button');
        var noS1Btn = document.getElementById('noSavings1Button');
        var spanS1D = document.getElementsByClassName("closeDeleteS1")[0];

        //Opens popup box and asks if sure you want to delete
        function deleteSavings1() {
            deleteS1Popup.style.display = "block";

        }

        //Closes popup box
        spanS1D.onclick = function() {
            deleteS1Popup.style.display = "none";
        }

        //Delete's the form and closes popup box
        function yesSavings1Delete() {
            var section = document.getElementById('toDeleteS1');
            section.style.display = "none";

            deleteS1Popup.style.display = "none";
            resetSavings1();
            
            var text = document.getElementById('forDeleteS1');
            text.style.display = "block";
            
            var form = document.getElementById('savingsForm1');
            form.style.backgroundColor = 'lightgrey';
        }

        //Closes popup box
        function noSavings1Delete() {
            deleteS1Popup.style.display = "none";
            closeDropdownS1()
        }

        //Makes Savings 1 empty ready to be used again
        function resetSavings1() {
            console.log("called");
            savings1Name = "Savings 1";
            document.getElementById('savings1').innerHTML = savings1Name;
            savings1TotalAmount = 0;
            document.getElementById('savings1Total').innerHTML = savings1TotalAmount.toFixed(2);
            savings1GoalAmount = 0;
            document.getElementById('savings1Goal').innerHTML = "Goal: £" + savings1GoalAmount.toFixed(2);
            changeProgressBar1("reset");
            ///////////!Get rid of table data!/////////
        }
        //End of Savings 1 dropdown//


        //Start of Savings 1 in/out//

        //SavingsIn - Checking the saving's radio buttons to display the correct button
        function savingsInCheck() {
            if (document.getElementById("savingsIn").checked) {
                document.getElementById("saveInButton").style.display = "inline-block";
                document.getElementById("saveOutButton").style.display = "none";
                document.getElementById("amountSavings").removeAttribute("disabled");
            } else if (document.getElementById("savingsOut").checked) {
                document.getElementById("saveOutButton").style.display = "inline-block";
                document.getElementById("saveInButton").style.display = "none";
                document.getElementById("amountSavings").removeAttribute("disabled");
            }
        }
        //SavingsOut - Checking the saving's radio buttons to display the correct button
        function savingsOutCheck() {
            if (document.getElementById("savingsOut").checked) {
                document.getElementById("saveOutButton").style.display = "inline-block";
                document.getElementById("saveInButton").style.display = "none";
                document.getElementById("amountSavings").removeAttribute("disabled");
            } else if (document.getElementById("savingsIn").checked) {
                document.getElementById("saveInButton").style.display = "inline-block";
                document.getElementById("saveOutButton").style.display = "none";
                document.getElementById("amountSavings").removeAttribute("disabled");
            }
        }

        //Adds the amount to the total, progress bar, and table.
        function addInSavings() {
            var x = document.getElementById("amountSavings").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('amountSavings').value = null;
            } else {
                var rowsSave = "";
                var savingsIn = "+";
                var amount = Number(document.getElementById('amountSavings').value).toFixed(2);
                var savingsTotal = (Number(savings1TotalAmount) + Number(amount)).toFixed(2);

                rowsSave += "<tr><td>" + savingsIn + "</td><td>" + amount + "</td><td>" + savingsTotal + "</td></tr>";
                $(rowsSave).appendTo("#savings1Table tbody");

                savings1TotalAmount = savingsTotal;
                document.getElementById('savings1Total').innerHTML = Number(savings1TotalAmount).toFixed(2);
                document.getElementById('amountSavings').value = null;
                changeProgressBar1("saveIn");
            }
        }

        //Subtracts the amount to the total, progress bar, and table.
        function addOutSavings() {
            var x = document.getElementById("amountSavings").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('amountSavings').value = null;
            } else {
                var rowsSave = "";
                var savingsOut = "-";
                var amount = Number(document.getElementById('amountSavings').value).toFixed(2);
                var savingsTotal = (Number(savings1TotalAmount) - Number(amount)).toFixed(2);
                // var savingsTotal = 3;

                rowsSave += "<tr><td>" + savingsOut + "</td><td>" + amount + "</td><td>" + savingsTotal + "</td></tr>";
                $(rowsSave).appendTo("#savings1Table tbody");

                savings1TotalAmount = savingsTotal;
                document.getElementById('savings1Total').innerHTML = Number(savings1TotalAmount).toFixed(2);
                document.getElementById('amountSavings').value = null;
                changeProgressBar1("saveOut");
            }
        }
        //End of Savings 1 in/out//


        //Start of Savings 1 displays//

        //Function inside a function - Changes the Progress Bar and checks the colours are correct
        function changeProgressBar1(answer) {
            var percent = ((savings1TotalAmount / savings1GoalAmount) * 100);

            if (answer == "saveIn" || answer == "saveOut" || answer == "update") {
                document.getElementById("progress-bar").style.width = percent + '%';
                document.getElementById("percentageSavings1").innerHTML = Number(percent).toFixed(0) + '%';
            } else if (answer == "reset") {
                document.getElementById("progress-bar").style.width = 0 + '%';
                document.getElementById("percentageSavings1").innerHTML = 0 + '%';
            }
            //Colour boundaries
            if (percent > 100) {
                document.getElementById("progress-bar").style.backgroundColor = 'red';
            } else if (percent < 0) {
                document.getElementById("progress-bar").style.backgroundColor = 'white';
            } else {
                document.getElementById("progress-bar").style.backgroundColor = 'aqua';
            }
        }

        //Onclick of the Progress Bar opens/closes the table
        function openSavingsTable() {
            var x = document.getElementById("savings1Table");
            if (x.style.display == "table") {
                x.style.display = "none";
            } else {
                x.style.display = "table";
            }
        }
        //End of Savings 1 displays//

        ///////////////////////////////END OF SAVINGS 1////////////////////////////////////////

        ///////////////////////////////////SAVINGS 2///////////////////////////////////////

        //Add Savings 2
        function addS2(){            
            var section = document.getElementById('toDeleteS2');
            section.style.display = "block";
            
            var text = document.getElementById('forDeleteS2');
            text.style.display = "none";
            
            var form = document.getElementById('savingsForm2');
            form.style.backgroundColor = 'white';
            
            closeDropdownS2();
            //document.getElementById("savings2Dropdown").classList.toggle("show");
        }
        
        
        //Start of Savings 2 dropdown//

        //Shows dropdown after clicking the button
        function dropdown2() {
            document.getElementById("savings2Dropdown").classList.toggle("show");
        }

        //Hides the dropdown when clicking anywhere on the screen
        window.onclick = function(event) {
            if (!event.target.matches('.dropdownButton2')) {
                var dropdowns = document.getElementsByClassName("dropdown2-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        function closeDropdownS2(){
            document.getElementById("savings2Dropdown").classList.remove("show");
        }
        
        //CHANGING SAVINGS 2'S GOAL
        var goalPopup2 = document.getElementById('changeGoalPopup2');
        var changeGoalBtn2 = document.getElementById('changeGoal2Button');
        var spanS2C = document.getElementsByClassName("closeS2")[0];

        //Opens popup box and displays current value in the input box
        function changeGoal2() {
            goalPopup2.style.display = "block";
            document.getElementById('changeGoal2Amount').value = Number(savings2GoalAmount).toFixed(2);
        }

        //Closes popup box
        spanS2C.onclick = function() {
            goalPopup2.style.display = "none";
        }

        //Changes the goal amount from the popup to the Savings2 form
        function changeGoal2Amount() {
            var x = document.getElementById("changeGoal2Amount").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('changeGoal2Amount').value = null;
            } else {
                var inputtedGoal2 = document.getElementById('changeGoal2Amount').value;
                savings2GoalAmount = inputtedGoal2;
                document.getElementById('savings2Goal').innerHTML = "Goal: £" + Number(savings2GoalAmount).toFixed(2);
                goalPopup2.style.display = "none";
                changeProgressBar2("update2");
                closeDropdownS2();
            }
        }

        //RENAMING SAVINGS 2
        var renameS2Popup = document.getElementById('renameSavings2Popup');
        var renameS2Btn = document.getElementById('changeGoal2Button');
        var spanS2R = document.getElementsByClassName("closeRenameS2")[0];

        //Opens popup box and displays current value in the input box
        function renameSavings2() {
            renameS2Popup.style.display = "block";
            document.getElementById('renameSavings2Text').value = savings2Name;
        }

        //Closes popup box
        spanS2R.onclick = function() {
            renameS2Popup.style.display = "none";
        }

        //Renames Savings2 from the popup to the Savings1 form
        function renameSavings2Submit() {
            var inputtedNameS2 = document.getElementById('renameSavings2Text').value;
            savings2Name = inputtedNameS2;
            document.getElementById('savings2').innerHTML = savings2Name;
            renameS2Popup.style.display = "none";
            closeDropdownS2();
        }

        //DELETING SAVINGS 2
        var deleteS2Popup = document.getElementById('deleteSavings2Popup');
        var yesS2Btn = document.getElementById('yesSavings2Button');
        var noS2Btn = document.getElementById('noSavings2Button');
        var spanS2D = document.getElementsByClassName("closeDeleteS2")[0];

        //Opens popup box and asks if sure you want to delete
        function deleteSavings2() {
            deleteS2Popup.style.display = "block";

        }

        //Closes popup box
        spanS2D.onclick = function() {
            deleteS2Popup.style.display = "none";
        }

        //Delete's the form and closes popup box
        function yesSavings2Delete() {
            var section = document.getElementById('toDeleteS2');
            section.style.display = "none";

            deleteS2Popup.style.display = "none";
            resetSavings2();
            
            var text = document.getElementById('forDeleteS2');
            text.style.display = "block";
            
            var form = document.getElementById('savingsForm2');
            form.style.backgroundColor = 'lightgrey';
        }

        //Closes popup box
        function noSavings2Delete() {
            deleteS2Popup.style.display = "none";
            closeDropdownS2();
        }

        //Makes Savings 2 empty ready to be used again
        function resetSavings2() {
            console.log("called");
            savings2Name = "Savings 2";
            document.getElementById('savings2').innerHTML = savings2Name;
            savings2TotalAmount = 0;
            document.getElementById('savings2Total').innerHTML = savings2TotalAmount.toFixed(2);
            savings2GoalAmount = 0;
            document.getElementById('savings2Goal').innerHTML = "Goal: £" + savings2GoalAmount.toFixed(2);
            changeProgressBar2("reset2");
            closeDropdownS2();
            ///////////!Get rid of table data!/////////
        }
        //End of Savings 2 dropdown//


        //Start of Savings 2 in/out//

        //SavingsIn - Checking the saving's radio buttons to display the correct button
        function savingsInCheck2() {
            if (document.getElementById("savingsIn2").checked) {
                document.getElementById("saveInButton2").style.display = "inline-block";
                document.getElementById("saveOutButton2").style.display = "none";
                document.getElementById("amountSavings2").removeAttribute("disabled");
            } else if (document.getElementById("savingsOut2").checked) {
                document.getElementById("saveOutButton2").style.display = "inline-block";
                document.getElementById("saveInButton2").style.display = "none";
                document.getElementById("amountSavings2").removeAttribute("disabled");
            }
        }
        //SavingsOut - Checking the saving's radio buttons to display the correct button
        function savingsOutCheck2() {
            if (document.getElementById("savingsOut2").checked) {
                document.getElementById("saveOutButton2").style.display = "inline-block";
                document.getElementById("saveInButton2").style.display = "none";
                document.getElementById("amountSavings2").removeAttribute("disabled");
            } else if (document.getElementById("savingsIn2").checked) {
                document.getElementById("saveInButton2").style.display = "inline-block";
                document.getElementById("saveOutButton2").style.display = "none";
                document.getElementById("amountSavings2").removeAttribute("disabled");
            }
        }

        //Adds the amount to the total, progress bar, and table.
        function addInSavings2() {
            var x = document.getElementById("amountSavings2").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('amountSavings2').value = null;
            } else {
                var rowsSave = "";
                var savingsIn = "+";
                var amount = Number(document.getElementById('amountSavings2').value).toFixed(2);
                var savingsTotal = (Number(savings2TotalAmount) + Number(amount)).toFixed(2);

                rowsSave += "<tr><td>" + savingsIn + "</td><td>" + amount + "</td><td>" + savingsTotal + "</td></tr>";
                $(rowsSave).appendTo("#savings2Table tbody");

                savings2TotalAmount = savingsTotal;
                document.getElementById('savings2Total').innerHTML = Number(savings2TotalAmount).toFixed(2);
                document.getElementById('amountSavings2').value = null;
                changeProgressBar2("saveIn2");
            }
        }

        //Subtracts the amount to the total, progress bar, and table.
        function addOutSavings2() {
            var x = document.getElementById("amountSavings2").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('amountSavings2').value = null;
            } else {
                var rowsSave = "";
                var savingsOut = "-";
                var amount = Number(document.getElementById('amountSavings2').value).toFixed(2);
                var savingsTotal = (Number(savings2TotalAmount) - Number(amount)).toFixed(2);

                rowsSave += "<tr><td>" + savingsOut + "</td><td>" + amount + "</td><td>" + savingsTotal + "</td></tr>";
                $(rowsSave).appendTo("#savings2Table tbody");

                savings2TotalAmount = savingsTotal;
                document.getElementById('savings2Total').innerHTML = Number(savings2TotalAmount).toFixed(2);
                document.getElementById('amountSavings2').value = null;
                changeProgressBar2("saveOut2");
            }
        }
        //End of Savings 2 in/out//

        //Start of Savings 2 displays//

        //Function inside a function - Changes the Progress Bar and checks the colours are correct
        function changeProgressBar2(answer) {
            var percent = ((savings2TotalAmount / savings2GoalAmount) * 100);

            if (answer == "saveIn2" || answer == "saveOut2" || answer == "update2") {
                document.getElementById("progress-bar2").style.width = percent + '%';
                document.getElementById("percentageSavings2").innerHTML = Number(percent).toFixed(0) + '%';
            } else if (answer == "reset2") {
                document.getElementById("progress-bar2").style.width = 0 + '%';
                document.getElementById("percentageSavings2").innerHTML = 0 + '%';
            }
            //Colour boundaries
            if (percent > 100) {
                document.getElementById("progress-bar2").style.backgroundColor = 'red';
            } else if (percent < 0) {
                document.getElementById("progress-bar2").style.backgroundColor = 'white';
            } else {
                document.getElementById("progress-bar2").style.backgroundColor = 'aqua';
            }
        }

        //Onclick of the Progress Bar opens/closes the table
        function openSavingsTable2() {
            var x = document.getElementById("savings2Table");
            if (x.style.display == "table") {
                x.style.display = "none";
            } else {
                x.style.display = "table";
            }
        }
        //End of Savings 2 displays//

        ///////////////////////////////END OF SAVINGS 2////////////////////////////////////////






        ///////////////////////////////////SAVINGS 3///////////////////////////////////////

        //Add Savings 3
        function addS3(){            
            var section = document.getElementById('toDeleteS3');
            section.style.display = "block";
            
            var text = document.getElementById('forDeleteS3');
            text.style.display = "none";
            
            var form = document.getElementById('savingsForm3');
            form.style.backgroundColor = 'white';
            
            closeDropdownS3();
            //document.getElementById("savings3Dropdown").classList.toggle("show");
        }
        
        //Start of Savings 3 dropdown//

        //Shows dropdown after clicking the button
        function dropdown3() {
            document.getElementById("savings3Dropdown").classList.toggle("show");
        }

        //Hides the dropdown when clicking anywhere on the screen
        window.onclick = function(event) {
            if (!event.target.matches('.dropdownButton3')) {
                var dropdowns = document.getElementsByClassName("dropdown3-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        function closeDropdownS3(){
            document.getElementById("savings3Dropdown").classList.remove("show");
        }
        
        //CHANGING SAVINGS 3'S GOAL
        var goalPopup3 = document.getElementById('changeGoalPopup3');
        var changeGoalBtn3 = document.getElementById('changeGoal3Button');
        var spanS3C = document.getElementsByClassName("closeS3")[0];

        //Opens popup box and displays current value in the input box
        function changeGoal3() {
            goalPopup3.style.display = "block";
            document.getElementById('changeGoal3Amount').value = Number(savings3GoalAmount).toFixed(2);
        }

        //Closes popup box
        spanS3C.onclick = function() {
            goalPopup3.style.display = "none";
        }

        //Changes the goal amount from the popup to the Savings3 form
        function changeGoal3Amount() {
            var x = document.getElementById("changeGoal3Amount").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('changeGoal3Amount').value = null;
            } else {
                var inputtedGoal3 = document.getElementById('changeGoal3Amount').value;
                savings3GoalAmount = inputtedGoal3;
                document.getElementById('savings3Goal').innerHTML = "Goal: £" + Number(savings3GoalAmount).toFixed(2);
                goalPopup3.style.display = "none";
                changeProgressBar3("update3");
                closeDropdownS3();
            }
        }

        //RENAMING SAVINGS 3
        var renameS3Popup = document.getElementById('renameSavings3Popup');
        var renameS3Btn = document.getElementById('changeGoal3Button');
        var spanS3R = document.getElementsByClassName("closeRenameS3")[0];

        //Opens popup box and displays current value in the input box
        function renameSavings3() {
            renameS3Popup.style.display = "block";
            document.getElementById('renameSavings3Text').value = savings3Name;
        }

        //Closes popup box
        spanS3R.onclick = function() {
            renameS3Popup.style.display = "none";
        }

        //Renames Savings3 from the popup to the Savings1 form
        function renameSavings3Submit() {
            var inputtedNameS3 = document.getElementById('renameSavings3Text').value;
            savings3Name = inputtedNameS3;
            document.getElementById('savings3').innerHTML = savings3Name;
            renameS3Popup.style.display = "none";
            closeDropdownS3();
        }

        //DELETING SAVINGS 3
        var deleteS3Popup = document.getElementById('deleteSavings3Popup');
        var yesS3Btn = document.getElementById('yesSavings3Button');
        var noS3Btn = document.getElementById('noSavings3Button');
        var spanS3D = document.getElementsByClassName("closeDeleteS3")[0];

        //Opens popup box and asks if sure you want to delete
        function deleteSavings3() {
            deleteS3Popup.style.display = "block";
        }

        //Closes popup box
        spanS3D.onclick = function() {
            deleteS3Popup.style.display = "none";
        }

        //Delete's the form and closes popup box
        function yesSavings3Delete() {
            var section = document.getElementById('toDeleteS3');
            section.style.display = "none";

            deleteS3Popup.style.display = "none";
            resetSavings3();
            
            var text = document.getElementById('forDeleteS3');
            text.style.display = "block";
            
            var form = document.getElementById('savingsForm3');
            form.style.backgroundColor = 'lightgrey';
        }

        //Closes popup box
        function noSavings3Delete() {
            deleteS3Popup.style.display = "none";
            closeDropdownS3();
        }

        //Makes Savings 3 empty ready to be used again
        function resetSavings3() {
            savings3Name = "Savings 3";
            document.getElementById('savings3').innerHTML = savings3Name;
            savings3TotalAmount = 0;
            document.getElementById('savings3Total').innerHTML = savings3TotalAmount.toFixed(2);
            savings3GoalAmount = 0;
            document.getElementById('savings3Goal').innerHTML = "Goal: £" + savings3GoalAmount.toFixed(2);
            changeProgressBar3("reset3");
            closeDropdownS3();
            ///////////!Get rid of table data!/////////
        }
        //End of Savings 3 dropdown//


        //Start of Savings 3 in/out//

        //SavingsIn - Checking the saving's radio buttons to display the correct button
        function savingsInCheck3() {
            if (document.getElementById("savingsIn3").checked) {
                document.getElementById("saveInButton3").style.display = "inline-block";
                document.getElementById("saveOutButton3").style.display = "none";
                document.getElementById("amountSavings3").removeAttribute("disabled");
            } else if (document.getElementById("savingsOut3").checked) {
                document.getElementById("saveOutButton3").style.display = "inline-block";
                document.getElementById("saveInButton3").style.display = "none";
                document.getElementById("amountSavings3").removeAttribute("disabled");
            }
        }
        //SavingsOut - Checking the saving's radio buttons to display the correct button
        function savingsOutCheck3() {
            if (document.getElementById("savingsOut3").checked) {
                document.getElementById("saveOutButton3").style.display = "inline-block";
                document.getElementById("saveInButton3").style.display = "none";
                document.getElementById("amountSavings3").removeAttribute("disabled");
            } else if (document.getElementById("savingsIn3").checked) {
                document.getElementById("saveInButton3").style.display = "inline-block";
                document.getElementById("saveOutButton3").style.display = "none";
                document.getElementById("amountSavings3").removeAttribute("disabled");
            }
        }

        //Adds the amount to the total, progress bar, and table.
        function addInSavings3() {
            var x = document.getElementById("amountSavings3").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('amountSavings3').value = null;
            } else {
                var rowsSave = "";
                var savingsIn = "+";
                var amount = Number(document.getElementById('amountSavings3').value).toFixed(2);
                var savingsTotal = (Number(savings3TotalAmount) + Number(amount)).toFixed(2);

                rowsSave += "<tr><td>" + savingsIn + "</td><td>" + amount + "</td><td>" + savingsTotal + "</td></tr>";
                $(rowsSave).appendTo("#savings3Table tbody");

                savings3TotalAmount = savingsTotal;
                document.getElementById('savings3Total').innerHTML = Number(savings3TotalAmount).toFixed(2);
                document.getElementById('amountSavings3').value = null;
                changeProgressBar3("saveIn3");
            }
        }

        //Subtracts the amount to the total, progress bar, and table.
        function addOutSavings3() {
            var x = document.getElementById("amountSavings3").value;
            if (parseFloat(x) != (x)) {
                alert("Wrong value entered");
                document.getElementById('amountSavings3').value = null;
            } else {
                var rowsSave = "";
                var savingsOut = "-";
                var amount = Number(document.getElementById('amountSavings3').value).toFixed(2);
                var savingsTotal = (Number(savings3TotalAmount) - Number(amount)).toFixed(2);

                rowsSave += "<tr><td>" + savingsOut + "</td><td>" + amount + "</td><td>" + savingsTotal + "</td></tr>";
                $(rowsSave).appendTo("#savings3Table tbody");

                savings3TotalAmount = savingsTotal;
                document.getElementById('savings3Total').innerHTML = Number(savings3TotalAmount).toFixed(2);
                document.getElementById('amountSavings3').value = null;
                changeProgressBar3("saveOut3");
            }
        }
        //End of Savings 3 in/out//

        //Start of Savings 3 displays//

        //Function inside a function - Changes the Progress Bar and checks the colours are correct
        function changeProgressBar3(answer) {
            var percent = ((savings3TotalAmount / savings3GoalAmount) * 100);

            if (answer == "saveIn3" || answer == "saveOut3" || answer == "update3") {
                document.getElementById("progress-bar3").style.width = percent + '%';
                document.getElementById("percentageSavings3").innerHTML = Number(percent).toFixed(0) + '%';
            } else if (answer == "reset3") {
                document.getElementById("progress-bar3").style.width = 0 + '%';
                document.getElementById("percentageSavings3").innerHTML = 0 + '%';
            }
            //Colour boundaries
            if (percent > 100) {
                document.getElementById("progress-bar3").style.backgroundColor = 'red';
            } else if (percent < 0) {
                document.getElementById("progress-bar3").style.backgroundColor = 'white';
            } else {
                document.getElementById("progress-bar3").style.backgroundColor = 'aqua';
            }
        }

        //Onclick of the Progress Bar opens/closes the table
        function openSavingsTable3() {
            var x = document.getElementById("savings3Table");
            if (x.style.display == "table") {
                x.style.display = "none";
            } else {
                x.style.display = "table";
            }
        }
        //End of Savings 3 displays//

        ///////////////////////////////END OF SAVINGS 3////////////////////////////////////////

    </script>

</body>

</html>
