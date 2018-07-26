<?php

$title = 'BoynsEdwards';

include 'includes/header.php';

//include 'includes/lanterns.php';

?>


<section id="pagesSections"> 
    <br>
    <div id="sunDiv">
<!--        <img id="sun" src="images/sun.png">-->
        <p id="countdown"></p>
    </div>
<!--  .........................................  -->
    
    
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img id="homeImage" src="images/familyMain.png" alt="1">
        </div>
        <div class="carousel-item">
            <img id="homeImage" src="images/familyMain2.png" alt="1">
        </div>
        </div>
    </div>
    
    <div id="mainText">
         <h1>Dannielle & Kyle</h1>
         <h1>29th August 2019</h1>
         <h1>Beeston Manor</h1>
         <h1>#edwardsboynswed</h1>
    </div>

<!--  .........................................  -->
    
    <img id="boat" src="images/boat.png">

        <img id="lantern" src="images/lantern.png">
        <img id="lantern2" src="images/lantern.png">

        <style>
            #lantern {
                width: 100px;
                height: 100px;

                animation-name: lantern;
                animation-duration: 4s;
                animation-timing-function: linear;
            }

            @keyframes lantern {
                0%{
                    left: 675px;
                    bottom: 400px;
                }
                25%{
                    left: 750px;
                    bottom: 550px;
                }
                50%{
                    left: 775px;
                    bottom: 700px;
                }
                 100%{
                    left: 750px;
                    bottom: 1050px;

                }  
            }
            
            #lantern2 {
                width: 100px;
                height: 100px;

                animation-name: lantern2;
                animation-duration: 4s;
                animation-timing-function: linear;
            }
            @keyframes lantern2 {
                0%{
                    left: 750px;
                    bottom: 400px;
                }
                25%{
                    left: 675px;
                    bottom: 575px;
                }              
                50%{
                    left: 650px;
                    bottom: 700px;
                }
                 100%{
                    left: 675px;
                    bottom: 1000px;

                } 
            }
            
            #boat {
                animation-name: boat;
                animation-duration: 6s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes boat {

                0% {
                    right: 0px;
                }
                25%{
                    right: 30px;
                }
                50%{
                    right: 30px;
                }
                75%{
                    right: 0px;
                }
                100%{
                    right: 0px;
                }

        </style>
    
</section>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Aug 29, 2019 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="countdown"
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

    
<?php

include 'includes/script.php';

include 'includes/footer.php';

?>

