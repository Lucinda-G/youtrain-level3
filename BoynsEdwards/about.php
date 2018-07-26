<?php

//change this variable to be the title of the new page
$title = 'BoynsEdwards';

//include the header - all pages use the same header
include 'includes/header.php';

?>



    <section id="pagesSections">
        
        <div id="dannielleSection">
            <img id="danImg" src="images/dan.png">
            <h1 id="aboutDesc">Dannielle Edwards</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim suscipit neque at efficitur. Morbi porta, tortor eu malesuada pretium, mauris purus rutrum tortor, ornare gravida nisi magna vel metus.</p>
        </div>
        
        <div id="kyleSection">
            <img id="kyleImg" src="images/kyleHead.png">
            <h1 id="aboutDesc">Kyle Boyns</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim suscipit neque at efficitur. Morbi porta, tortor eu malesuada pretium, mauris purus rutrum tortor, ornare gravida nisi magna vel metus.</p>
        </div>
        
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

        <!--        <article id="about-article">-->
        <!--        </article>-->
    </section>



    <script src="../Template/jquery-3.2.1.min.js"></script>


    <?php

include 'includes/script.php';

include 'includes/footer.php';

?>
