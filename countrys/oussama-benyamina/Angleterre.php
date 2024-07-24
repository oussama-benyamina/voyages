<!DOCTYPE html>
<html>
<head>
    <title>Voyages en Angleterre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css?t=<?php time(); ?>">
    <link rel="stylesheet" href="./css/Angleterre.css?t=<?php time(); ?>">
    
</head>
<body>
    
    <header>
        
        <nav>
            <a href="/index.php">Home</a>
            <a href="#accueil">Accueil</a>
            <a href="#villes">Villes</a>
            <a href="#sites">Sites touristiques</a>
            <a href="#contact">Contact</a>
        </nav>
        <h1>Découvrez l'Angleterre</h1>
    </header>

    
    <main>

        <div class="video-container">
            <video autoplay muted  src="./images/LondonHD.mp4" ></video>
        </div>

        <section id="accueil" class="hero">
            <div class="hero-content">
                <h2>Bienvenue chez Voyages Anglais</h2>
                <p>Nous sommes une agence spécialisée dans les voyages en Angleterre. Laissez-nous vous guider à travers les plus belles régions et les sites les plus emblématiques de ce pays riche en histoire et en culture.</p>
                <a href="#contact" class="btn">Contactez-nous</a>
            </div>
        </section>
        <section id="villes">
            <h2>Principales villes à visiter</h2>
            <ul class="villes-list">
                <?php
                
                $villes = array(
                    "Londres" => "images/London-bigben.jpg",
                    "Manchester" => "images/Manchester.jpg",
                    "Birmingham" => "images/Birmingham.jpg",
                    "Liverpool" => "images/Liverpool.jpeg",
                    "Bristol" => "images/Bristol.jpeg"
                );
                foreach ($villes as $ville => $image) {
                    echo "<li>
                            <img src='$image' alt='$ville'>
                            <h3>$ville</h3>
                          </li>";
                }
                ?>
            </ul>
        </section>
        <section id="sites">
            <h2>Sites touristiques incontournables</h2>
            <div class="sites-grid">
                <?php
                $sites = array(
                    "La Tour de Londres" => array(
                        "image" => "images/Tour-de-Londres.jpeg",
                        "lien" => "Tour-de-Londres.php"
                    ),
                    "Le Palais de Buckingham" => array(
                        "image" => "images/Palais-de-Buckingham.jpeg",
                        "lien" => "Palais-de-Buckingham.php"
                    ),
                    "La Cathédrale de Canterbury" => array(
                        "image" => "images/Cathédrale-de-Canterbury.jpeg",
                        "lien" => "Cathédrale-de-Canterbury.php"
                    )
                );
                
                foreach ($sites as $nom => $site) {
                    echo "<article>
                            <a href='{$site['lien']}'>
                                <img src='{$site['image']}' alt='$nom'>
                                <h3>$nom</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                          </article>";
                }
                
                ?>
            </div>
        </section>
        <section id="contact">
            <h2>Contactez-nous</h2>
            <form>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Site Voyages Anglais . La Plateforme Tous droits réservés.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
   
</body>
</html>