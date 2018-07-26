<!doctype html>

<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <title>Zak Brindle</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Slabo+13px|Damion|Quicksand');
        @import url('https://fonts.googleapis.com/css?family=Comfortaa|Righteous|Russo+One');
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>

<body>

    <script src="jquery-3.2.1.min.js"></script>


<!--
    <header>
        <h1 id="header-name">Zak Brindle</h1>
        <h2 id="header-title">Sales and Technology</h2>
        <img id="header-logo" src="images/logo.png" alt="Logo">
    </header>
-->


    <aside>
        <nav id="nav" class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <h1 id="header-name">Zak Brindle</h1>
            <div id="contactNav">
                <img id="phone" title="Ring Me" src="contactImages/callBlack.png">
                <img id="email" title="Email Me" src="contactImages/message.png">
            </div>
<!--            <img id="whatsapp" src="contactImages/whatsapp.png">-->
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li><a href="main.php">home</a></li>
                    <li><a href="about.php">about</a></li>

                    <li class="dropdown">
                        <a href="#" id="navbardrop" data-toggle="dropdown">
                    portfolio
                </a>
                        <div id="ddMenu" class="dropdown-menu w-50 p-3">
                            <a class="dropdown-item w-100 p-3" href="op1.php">technical</a>
                            <a class="dropdown-item w-100 p-3" href="op2.php">sales</a>
                        </div>
                    </li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
            </div>
        </nav>
    </aside>
    
    <button onclick="topFunction()" id="upBtn" title="Go to top"><b>^</b></button>
    
