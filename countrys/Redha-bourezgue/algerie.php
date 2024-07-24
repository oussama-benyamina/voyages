<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Algerie</title>
    <link rel="stylesheet" href="./algerie.css">
    <script src="https://kit.fontawesome.com/96dcb489df.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- section acceuil -->
<section id="Acceuil">
<header>
    
                <img class="logoo" src="/images/logo.png" alt="" style="        width: 8vw;
                margin-left: -10vw;
                margin-bottom: -1vw;">
            
        <div class="logo">
            
            <p>ALGERIE</p>
            
        </div>

        <!-- menu responsive -->
        
        <div class="menu-toggle"></div>

        <ul class="menu">
            <li><a href="#Acceuil">Acceuil</a></li>
            <li><a href="#Histoire">Histoire</a></li>
            <li><a href="#gallerie">Culture</a></li>
            <li><a href="#contact">voyage</a></li>
            <li>
            
                <div class="dropdown">
                    <button class="dropbtn">Pays</button>
                    <div class="dropdown-content">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                      <a href="#">Link 3</a>
                      <a href="#">Link 3</a>
                      <a href="#">Link 3</a>
                      <a href="#">Link 3</a>
                      <a href="#">Link 3</a>
                      <a href="#">Link 3</a>
                      <a href="#">Link 3</a>
                    </div>
                  </div>
            
            </li>
        </ul>
    </header>
    <div class="Acceuil-text">
        <h1>L'Algerie , Une Histoire</h1>
        <p>Plus q'un simple pays</p>
        <a href="#Histoire">Commencez l'histoire</a>
    </div>
    
    </section> 

    <!-- section acceuil -->
    <section id="Histoire">
        <div>
            <p class="tittle-section">l'histoire</p>
            <h1 class="sub-tittle-section">Quel est donc ce pays ?</h1>
            <div class="description-photo">
                    <div class="desc">
                        <p>L'histoire de l'Algérie s'insère dans l'histoire plus large du Maghreb et remonte à des millénaires. Dans l'Antiquité, le territoire algérien connaît la formation des royaumes numides avant de passer sous la domination partielle des Romains, des Vandales, des Byzantins et des principautés berbères.</p>

                        <H2>LES POINT FORT DU PAYS</H2>
                        <div class="list-services">
                            <div class="service">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>PETROLE</p>
                            </div>
                            <div class="service">
                                <i class="fas fa-money-check-alt"></i>
                                <p>GAZ</p>
                            </div>
                            <div class="service">
                                <i class="fas fa-check"></i>
                                <p>ARTISTIQUE</p>
                            </div>
                        </div>
                </div>
                <img src="images/download.jpg" alt="">
            </div>
        </div>
    </section> 

    <!-- section gallerie destination -->
    <section id="gallerie">
            <p class="tittle-section">Culture</p>
            <h1 class="sub-tittle-section">Une culture qui dure a travers le temps  </h1>
            <div class="liste-photos">
                <div class="gallerie-img">
                    <img src="images/330px-Kateb_Yacine_Nedjma_authograph.jpg" alt="">
                    <div class="show-country"><p>Littérature</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="images/375px-Idir_Bondy_France_21-06-2008.jpg" alt="">
                    <div class="show-country"><p>Musique</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="images/405px-Dance_de_sebiba.jpg" alt="">
                    <div class="show-country"><p>Danse</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="images/330px-ACTION_THÉÂTRAL_048.jpg" alt="">
                    <div class="show-country"><p>Théâtre</p></div>
                </div>

            </div>
    </section> 





<script>
    var menu_toggle = document.querySelector('header .menu-toggle');
    var menu = document.querySelector('header .menu');
    menu_toggle.onclick = function(){
        menu_toggle.classList.toggle('active') ; 
        menu.classList.toggle('responsive') ; 
    }
</script>

</body>
</html>