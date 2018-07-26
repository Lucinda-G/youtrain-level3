<?php

//change this variable to be the title of the new page
$title = 'Lucinda Gooding Portfolio';

//include the header - all pages use the same header
include 'includes/header.php';

?>

<body>


    <section id="contact">
        <article id="contact-article">
            <h1>Contact me directly...</h1> <br>
            <div id="socialMedia">
                <a target="_blank" href="mailto:gooding.lucinda@gmail.com">
                    <img class="contactLogo" src="cvImages/email.png" id="contactSocial" title="Send me an email">
                </a>
                <a target="_blank" href="tel:07714643503">
                    <img class="contactLogo" src="cvImages/phone.png" id="contactSocial" title="Call me">
                </a>
            </div> <br>
            <h1>Or...</h1> <br> <br>
            <div id="socialMedia">
                <a target="_blank" href="https://www.facebook.com/lucinda.gooding">
                    <img class="socialLogo" src="cvImages/facebook.png" id="contactSocial" title="Like me on Facebook">
                </a>
                <a target="_blank" href="http://picbear.com/cindygooding">
                    <img class="socialLogo" src="cvImages/instagram.png" id="contactSocial" title="Follow me on Instagram">
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/lucinda-gooding-8425a210a/">
                    <img class="socialLogo" src="cvImages/linkedin.png" id="contactSocial" title="Connect with me on LinkedIn">
                </a>
                <a target="_blank" href="https://plus.google.com/111162230368655597956">
                    <img class="socialLogo" src="cvImages/googleplus.png" id="contactSocial" title="Follow me on Google+">
                </a>
            </div>
            
        </article>
        
    </section>
    



    <script src="../HomePortfolio/jquery-3.2.1.min.js"></script>

<?php

include 'includes/script.php';
    
include 'includes/footer.php';

?>



