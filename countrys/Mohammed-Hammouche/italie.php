<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyages en Italie - Club MED</title>
    <link rel="stylesheet" href="css/voyages.css">
    <link rel="stylesheet" href="css/italie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>

    
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="animated-text">Découvrez l'Italie avec Club MED</h1>
                <p>Explorez les merveilles de l'Italie avec notre agence de voyage spécialisée.</p>
                <a href="#" class="btn">Réserver maintenant</a>
            </div>
            <div class="video-container">
                <video autoplay muted loop>
                    <source src="images/video.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        <section class="destinations">
            <h2 class="section-title">Principales destinations</h2>
            <div class="destination-carousel">
                <div class="destination-card">
                    <img src="images/rome.jpg" alt="Rome">
                    <div class="destination-info">
                        <h3>Rome</h3>
                        <p>Explorez la Ville Éternelle, berceau de la civilisation romaine et de trésors architecturaux inestimables comme le Colisée, le Forum Romain et la Basilique Saint-Pierre.</p>
                        <a href="rome.php" class="btn">En savoir plus</a>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="images/venise.jpg" alt="Venise">
                    <div class="destination-info">
                        <h3>Venise</h3>
                        <p>Laissez-vous charmer par la beauté unique de Venise, la cité des canaux et des gondoles. Découvrez la Place Saint-Marc, le Pont des Soupirs et les îles de la lagune vénitienne.</p>
                        <a href="venise.php" class="btn">En savoir plus</a>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="images/florence.jpg" alt="Florence">
                    <div class="destination-info">
                        <h3>Florence</h3>
                        <p>Plongez dans la Renaissance italienne à Florence, berceau de l'art et de la culture. Admirez le Duomo, la Galerie des Offices et les chefs-d'œuvre de Michel-Ange et Botticelli.</p>
                        <a href="florence.php" class="btn">En savoir plus</a>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="images/milan.jpg" alt="Milan">
                    <div class="destination-info">
                        <h3>Milan</h3>
                        <p>Découvrez Milan, la capitale de la mode italienne, avec son emblématique Duomo, le Théâtre de la Scala et les galeries commerçantes animées.</p>
                        <a href="milan.php" class="btn">En savoir plus</a>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="images/naples.jpg" alt="Naples">
                    <div class="destination-info">
                        <h3>Naples</h3>
                        <p>Explorez Naples, ville animée et authentique, avec son centre historique classé au patrimoine mondial de l'UNESCO, ses ruines antiques et sa gastronomie légendaire.</p>
                        <a href="naples.php" class="btn">En savoir plus</a>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="images/sicile.jpg" alt="Sicile">
                    <div class="destination-info">
                        <h3>Sicile</h3>
                        <p>Découvrez la Sicile, île méditerranéenne riche en histoire et en culture, avec ses sites archéologiques, ses paysages volcaniques et ses villes pittoresques comme Palerme et Taormine.</p>
                        <a href="sicile.php" class="btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/animations.js"></script>
    <script src="js/carousel.js"></script>
</body>
</html>
