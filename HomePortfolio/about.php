<?php

//change this variable to be the title of the new page
$title = 'Lucinda Gooding Portfolio';

//include the header - all pages use the same header
include 'includes/header.php';

?>

    <section id="about">
        <article id="about-article">
            <p>
                > Cindy.name <br>
                <span class="response"> &nbsp;&nbsp;&nbsp;=> "Lucinda Gooding" </span>
            </p>
            <p>
                > Cindy.home <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> "Chorley"</span>
            </p>
            <p>
                > Cindy.education[0] <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> "HNC Computer Games Development (UCLAN)"</span>
            </p>  
            <p>
                > Cindy.education[1] <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> "Advanced Software Development Apprenticeship (YouTrain)"</span>
            </p>
            <p>
                > Cindy.work <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> Role: "Software Developer"</span> <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> Company: "Fujitsu"</span> <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> City: "Manchester"</span> <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> Start Date: "August 2017"</span> <br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> End Date: "Current"</span>
            </p>
            <p>
                > Cindy.partner<br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> "<a id="link" href="http://zakbrindle.com" target="_blank">Zak Brindle</a>"</span> <br>
            </p>
            <p>
                > Cindy.interests<br>
                <span class="response">&nbsp;&nbsp;&nbsp;=> ["coding", "singing", "piano", "gym", "cheese"]</span> <br>
            </p>

        </article>
    </section>



    <script src="../HomePortfolio/jquery-3.2.1.min.js"></script>


<?php

include 'includes/script.php';

include 'includes/footer.php';

?>


