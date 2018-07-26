<?php

//change this variable to be the title of the new page
$title = 'BoynsEdwards';

//include the header - all pages use the same header
include 'includes/header.php';

?>

    <section id="wedding">
        <article id="project-display">
            <h1 id="pageTitle">Venue Details</h1>

            <div id="venueSlidesContainer">
                <div id="venueSlides" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="venueImage" src="images/beeston.jpg" alt="1">
                        </div>
                        <div class="carousel-item">
                            <img id="venueImage" src="images/ceremony.jpg" alt="1">
                        </div>
                        <div class="carousel-item">
                            <img id="venueImage" src="images/front.jpg" alt="1">
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="weddingDetailsText">
                <h1>Beeston Manor</h1>
                <p>Quaker Brook Lane <br>
                    Hoghton PR5 0RA <br>
                    <a target="_blank" id="venueLinks" href="tel:01254 851996">01254 851996</a>
                     <br>
                    <a id="venueLinks" target="_blank" href="http://www.beestonmanor.com/">www.beestonmanor.com</a>
                </p>
                <a target="_blank" id="venueLinks" href="http://www.beestonmanor.com/accommodation/"><h1>Accommodation</h1></a>
                <p>Double Room: £120<br>
                Single Room: £80<br>
                King Size Room: £130<br>
                ~All Include a Full Cooked Breakfast~</p>
            </div>
            
            <div id="mapContainer">
<!--                <img id="map" src="images/map.png">-->
                <a target="_blank" href="https://www.google.co.uk/maps/place/Beeston+Manor+Events+Venue/@53.7720768,-2.7712125,11z/data=!4m7!3m6!1s0x487b7483b0b3419f:0x6d50208700baf14d!5m1!1s2018-06-10!8m2!3d53.7440787!4d-2.599021">
                    <img id="mapSquare" src="images/mapSquare.png">
                    <div class="overlay">
                    </div>
                </a>
            </div>
            
        </article>
    </section>
    



<?php

include 'includes/script.php';

include 'includes/footer.php';

?>
