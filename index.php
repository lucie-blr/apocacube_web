<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="images/logo.png">
    <meta name="description" content="Free, modern and nice web template for Minecraft server.">
    <meta name="author" content="Astronawta">
<script src="https://kit.fontawesome.com/124a4654ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/global.css?v=<?php echo(rand(1000, 1000000)); ?>">
    <link rel="stylesheet" href="css/pages/home.css?v=<?php echo(rand(1000, 1000000)); ?>">

    <title>Apocacube | Home</title>
</head>
<body>
    <!--Navbar-->
    <div class="navbar">
        <div class="menu-mobile">
            <a href="index.php">
                <div class="logo">
                    <img src="images/logo.png" alt="Server logo" class="logo-img">
                    <h3 class="server-name">Apocacube</h3>
                </div>
            </a>

            <div class="hamburger">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="links">
            <a href="#" class="link active">Home</a>
            <a href="rules.html" class="link">Rules</a>
            <a href="admin-team.html" class="link">Admin-Team</a>
            <a href="contact.html" class="link">Contact</a>
        </div>
    </div>

    <!--Header-->
    <section id="header">
        <div class="content">

            <div class="left">
                <div class="server-name">
                    <p>SMP-Like minecraft server</p>
                    <h1 class="minecraft-server-ip">apocacube</h1>
                </div>
                <p class="server-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, consectetur explicabo. Dolor enim inventore minus neque officiis.
                    <br><br>Join and play with your friends.
                </p>
                <div class="buttons">
                    <button class="copy-ip">Join us!</button>
                    <a href="#about"><button class="how-to-join">Show more</button></a>
                </div>
                <p class="ip-copied">Discord sent!</p>
            </div>

            <div class="right">
                <img src="images/logo.png" alt="Server logo" class="logo-img logo-img-header">

                <div class="stats">
                    <div class="stat">
                        <div class="icon">
                            <i class="fa-brands fa-discord"></i>
                        </div>
                        <div class="texts">
                            <h5 class="stat-title">Discord server</h5>
                            <p><span class="stat-number discord-online-users">None</span> users online</p>
                        </div>
                    </div>
                    <div class="stat">
                        <div class="icon">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <div class="texts">
                            <h5 class="stat-title">Minecraft server</h5>
                            <p><span class="stat-number minecraft-online-players">None</span> players online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About us-->
    <section id="about">
        <div class="content">
            <div class="left">
                <h2 class="section-title">Who we are?</h2>
                <p class="about-us">Lörem ipsum tosk nedust hemiktigt ifall hubot, och haför. Vagt antevynat. Antivaxxare krana: liksom monoktigt ide i ubel. Mikroktig dovis preliga, ogt. Dihagen säs såvis nun. Dra åt helvete-kapital sana inklusive orat i kock för realingar. Biledes. Antik möligt. Antev jyling astropp. Antroponetik förstärkt verklighet, om curlingförälder. Andronetik bityr. Mivoling. Dov vygåd sarat megara. Tematisk intras då töning. Koka böcker debev. Mivoling. Dov vygåd sarat megara. Tematisk intras då töning. Koka böcker debev. Mivoling. Dov vygåd sarat megara. Tematisk intras då töning. Koka böcker </p>
            </div>

            <div class="right">
                <img src="images/about-section-person-image.png" alt="Minecraft person">
                <div class="img-background"></div>
            </div>
        </div>
    </section>

    <!--Mini games-->
    <section id="minigames">
        <div class="content miniGames-list">
            <div class="game">
                <img src="images/survival-minigames-image.jpg" alt="Survival image">

                <div class="info">
                    <h2 class="section-title">Survival</h2>
                    <div class="game-description">
                        <p>Lörem ipsum tosk nedust hemiktigt ifall hubot, och haför. Vagt antevynat. Antivaxxare krana: liksom monoktigt ide i ubel. Mikroktig dovis preliga, ogt. Dihagen säs såvis nun. Dra åt helvete-kapital sana </p>
                        <ul class="services">
                            <li class="service">Economy</li>
                            <li class="service">SlimeFun</li>
                            <li class="service">Player Warps</li>
                            <li class="service">and more</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="game">
                <img src="images/survival-minigames-image.jpg" alt="Survival image">

                <div class="info">
                    <h2 class="section-title">SkyBlock</h2>
                    <div class="game-description">
                        <p>Lörem ipsum tosk nedust hemiktigt ifall hubot, och haför. Vagt antevynat. Antivaxxare krana: liksom monoktigt ide i ubel. Mikroktig dovis preliga, ogt. Dihagen säs såvis nun. Dra åt helvete-kapital sana </p>
                        <ul class="services">
                            <li class="service">Economy</li>
                            <li class="service">SlimeFun</li>
                            <li class="service">Player Warps</li>
                            <li class="service">and more</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Discord-->
    <section id="discord">
        <div class="content">
            <h2 class="section-title">Have a <span>problem</span> or want to get in touch with others? <br> Join our <span>Discord!</span></h2>
            <a href="#" class="discord-link"><button class="join-discord">Join Discord</button></a>
        </div>
    </section>

    <!--Vote (max 2 vote sites)-->
<!--
    <section id="vote">
        <div class="content">
            <div class="info">
                <h2 class="section-title">Why vote?</h2>
                <p class="section-description">Lörem ipsum tosk nedust hemiktigt ifall hubot, och haför. Vagt antevynat. Antivaxxare krana: liksom monoktigt ide i ubel. Mikroktig dovis preliga, ogt. Dihagen säs såvis nun. Dra åt helvete</p>
            </div>

            <div class="links voteLinks">
                <a href="#" class="url">
                    <div class="link">
                        <h5>servers-minecraft</h5>
                        <div class="link-description">
                            <p class="description">Lörem ipsum tosk nedust hemiktigt ifall hubot, hubot ifall.</p>
                            <div class="icon">
                                <i class="fa-solid fa-circle-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="url">
                    <div class="link">
                        <h5>planetminecraft</h5>
                        <div class="link-description">
                            <p class="description">Lörem ipsum tosk nedust hemiktigt ifall hubot, hubot ifall.</p>
                            <div class="icon">
                                <i class="fa-solid fa-circle-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
-->

    <!--FAQs-->
    <section id="faq">
        <div class="content">
            <div class="info">
                <h2 class="section-title">Server <span>FAQs.</span></h2>
                <p class="section-description">Lörem ipsum tosk nedust hemiktigt ifall hubot, och haför. Vagt antevynat. Antivaxxare krana: liksom monoktigt ide i ubel. Mikroktig dovis preliga, ogt. Dihagen säs såvis nun. Dra åt helvete</p>
            </div>

            <div class="accordion faqList">
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure?
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure. Klittra tidögt och soment, viradade utivis. Sebina hedersvåld profavis. Hurade gon vimöde. Lörem Sebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. Lörem
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header">
                        Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure?
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure. Klittra tidögt och soment, viradade utivis. Sebina hedersvåld profavis. Hurade gon vimöde. Lörem Sebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. Lörem
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header">
                        Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure?
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure. Klittra tidögt och soment, viradade utivis. Sebina hedersvåld profavis. Hurade gon vimöde. Lörem Sebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. Lörem
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header">
                        Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure?
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            Lörem ipsum pongar valig pede, tisade. Tilåskapet decijål ifall sar pure. Klittra tidögt och soment, viradade utivis. Sebina hedersvåld profavis. Hurade gon vimöde. Lörem Sebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. LöremSebina hedersvåld profavis. Hurade gon vimöde. Lörem
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer id="footer">
        <p class="copyright">&copy; 2023 <span class="server-name-footer">Apocacube</span>. All rights reserved.</p>
        <div class="social-links">
            <a href="#" class="link tiktok-link"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#" class="link instagram-link"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="#" class="link discord-link-footer"><i class="fa-brands fa-discord"></i></a>
        </div>
    </footer>
</body>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/cbf5ee59c8.js" crossorigin="anonymous"></script>
</html>
