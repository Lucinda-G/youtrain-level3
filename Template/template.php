<?php

$title = 'Template';

include 'includes/header.php';

?>


<section id="homeScreen">       
        
    <div id="demo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img id="homeImage" src="images/Image.png" alt="1">
        </div>
        <div class="carousel-item">
            <img id="homeImage" src="images/Image.png" alt="1">
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</section>


    
<?php

include 'includes/script.php';

include 'includes/footer.php';

?>

