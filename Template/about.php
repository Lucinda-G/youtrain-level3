<?php

//change this variable to be the title of the new page
$title = 'Template';

//include the header - all pages use the same header
include 'includes/header.php';

?>



    <section id="about">

        <img id="lantern" src="images/lantern.png">

        <style>
            #lantern {
                width: 100px;
                height: 100px;
/*                position: relative;*/

                animation-name: example;
                animation-duration: 4s;
                animation-timing-function: linear;
            }

            @keyframes example {

                0% {
                    left: 0px;
                    bottom: 0px;
                }
                10%{
                    left: 100px;
                    bottom: 100px;
                }
                20% {
                    left: 200px;
                    bottom: 200px;
                }
                30% {
                    left: 300px;
                    bottom: 300px;
                }
                40% {
                    left: 400px;
                    bottom: 400px;
                }
                50% {
                    left: 500px;
                    bottom: 500px;
                }
                60% {
                    left: 600px;
                    bottom: 600px;
                }
                70% {
                    left: 700px;
                    bottom: 700px;
                }
                80% {
                    left: 800px;
                    bottom: 800px;
                }
                90% {
                    left: 900px;
                    bottom: 900px;
                }
                100% {
                    left: 1000px;
                    bottom: 1000px;
                }
            }

        </style>

        <!--        <article id="about-article">-->
        <!--        </article>-->
    </section>



    <script src="../BoynsEdwards/jquery-3.2.1.min.js"></script>


    <?php

include 'includes/script.php';

include 'includes/footer.php';

?>
