<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corée du Sud</title>
    <link rel="stylesheet" href="./css/coree.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <img class="logo" src="./img/logo.png" alt="">
    <ul class="header-ul">
        <li><a class="carte" href=".../index.php">Accueil</a></li>
        <li><a class="carte2" href="#reservation">Réserver</a></li>
    </ul>
</header>

<div class="video-container">
    <video autoplay muted loop id="myVideo">
        <source src="./videos/coree.mp4" type="video/mp4">
    </video> 
    <div class="text-degrade">
        <H1>Corée du Sud</H1>
        <H2>Une destination très animée</H2>
        </div>
        <div class="cities">
            <a href="#seoul">Séoul</a>
            <a href="#busan">Busan</a>
            <a href="#incheon">Incheon</a>
    </div> 
</div>

<section id="seoul" class="seoul-section">
    <div class="seoul-content">
        <div class="seoul-text">
            <h2>Explorer Séoul</h2>
            <p>Séoul, la capitale de la Corée du Sud, est une ville dynamique mêlant histoire, culture et modernité. Promenez-vous dans les rues animées de Myeongdong, découvrez l'histoire fascinante du palais Gyeongbokgung ou explorez la scène culinaire florissante de la ville.</p>
        </div>
        <img class="seoul" src="./img/seoul.jpeg" alt="Paysage de Séoul">
    </div>
</section>

<section id="busan" class="busan-section">
    <div class="busan-content">
        <div class="busan-text">
            <h2>Explorer Busan</h2>
            <p>Plages, temples, fruits de mer : tout cela à Busan. Découvrez une ville côtière vivante où la tradition rencontre la modernité. Plongez dans l'essence de la Corée du Sud en explorant ses trésors côtiers à chaque pas.</p>
        </div>
        <img class="busan" src="./img/busan.jpeg" alt="Paysage de Busan">
    </div>
</section>

<section id="incheon" class="incheon-section">
    <div class="incheon-content">
        <div class="incheon-text">
            <h2>Explorer Incheon</h2>
            <p>Incheon, où la tradition rencontre la modernité au bord de la mer, offrant un mélange enivrant de culture, de cuisine et d'aventures maritimes.</p>
        </div>
        <img class="incheon" src="./img/incheon.jpg" alt="Paysage de Incheon">
    </div>
</section>
<footer id="reservation">
<div class="contact-form">
  <h3>Réserver</h3>
  <form>
    <select name="city" id="city" required>
      <option value="" disabled selected>Choisissez une ville</option>
      <option value="seoul">Séoul</option>
      <option value="busan">Busan</option>
      <option value="incheon">Incheon</option>
    </select>
    <input type="text" name="name" placeholder="Votre nom" required>
    <input type="email" name="email" placeholder="Votre email" required>
    <textarea name="message" placeholder="Votre message" required></textarea>
    <button type="submit">Réserver</button>
  </form>
</div>
</footer>

</body>
</html>
