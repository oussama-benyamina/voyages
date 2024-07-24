<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rome - Club MED</title>
    <link rel="stylesheet" href="css/voyages.css<?php time() ;?>">
    <link rel="stylesheet" href="css/rome.css<?php time() ;?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="animated-text">Rome, la Ville Éternelle</h1>
                <p>Explorez les trésors de la capitale italienne, berceau de la civilisation romaine.</p>
            </div>
            <div class="video-container">
                <video autoplay muted loop>
                    <source src="images/rome-video.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        <section class="info">
            <div class="container">
                <h2>Informations générales</h2>
                <p>Rome, la capitale de l'Italie, est une ville riche en histoire et en culture. Connue pour ses monuments antiques, ses musées, ses églises baroques et sa gastronomie délicieuse, Rome est une destination incontournable pour les amateurs d'art, d'architecture et de patrimoine.</p>
            </div>
        </section>

        <section class="attractions">
            <div class="container">
                <h2>Attractions touristiques</h2>
                <div class="attraction-grid">
                    <div class="attraction-card">
                        <img src="images/colisee.jpg" alt="Colisée">
                        <h3>Colisée</h3>
                        <p>L'un des monuments les plus emblématiques de Rome, le Colisée est un amphithéâtre romain datant du 1er siècle après J.-C.</p>
                    </div>
                    <div class="attraction-card">
                        <img src="images/vatican.jpg" alt="Vatican">
                        <h3>Cité du Vatican</h3>
                        <p>Découvrez la Basilique Saint-Pierre, la Chapelle Sixtine et les musées du Vatican, abritant des chefs-d'œuvre inestimables.</p>
                    </div>
                    <div class="attraction-card">
                        <img src="images/trevifontaine.jpg" alt="Fontaine de Trevi">
                        <h3>Fontaine de Trevi</h3>
                        <p>Admirez la splendeur de la Fontaine de Trevi, l'une des plus belles fontaines baroques de Rome.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gastronomy">
            <div class="container">
                <h2>Gastronomie romaine</h2>
                <div class="food-grid">
                    <div class="food-card">
                        <img src="images/pasta.jpg" alt="Pâtes">
                        <h3>Pasta alla Carbonara</h3>
                        <p>Des pâtes crémeuses avec du guanciale (bacon italien), des œufs, du pecorino romain et du poivre noir.</p>
                    </div>
                    <div class="food-card">
                        <img src="images/pizza.jpg" alt="Pizza">
                        <h3>Pizza Romana</h3>
                        <p>Une pizza croustillante et fine, garnie de tomates fraîches, de mozzarella et de basilic.</p>
                    </div>
                    <div class="food-card">
                        <img src="images/gelato.jpg" alt="Gelato">
                        <h3>Gelato</h3>
                        <p>Savourez une délicieuse glace italienne artisanale, disponible dans une variété de saveurs exquises.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <h2>Galerie d'images</h2>
                <div class="image-grid">
                    <div class="image-card">
                        <img src="images/rome1.jpg" alt="Rome">
                        <div class="image-overlay">
                            <h3>Fontaine de Trevi</h3>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="images/rome2.jpg" alt="Rome">
                        <div class="image-overlay">
                            <h3>Colisée</h3>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="images/rome3.jpg" alt="Rome">
                        <div class="image-overlay">
                            <h3>Place d'Espagne</h3>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="images/rome4.jpg" alt="Rome">
                        <div class="image-overlay">
                            <h3>Basilique Saint-Pierre</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/animations.js"></script>
</body>
</html>
