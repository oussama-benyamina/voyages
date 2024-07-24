<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> Travels </title>
            <link href="brasil.css?t=<?= time(); ?>" rel="stylesheet" type="text/css">

        </head>
        <body>
            <video autoplay loop muted class="video">
                <source src="./fond2.mp4" type="video/mp4">
            </video>
            <header>
                <nav>
                    <ul>
                    <li><a href="#">Accueil</a></li>
                    <li>
                        <a href="#"> Destinations </a>
                        <ul class="sousmenu">
                            <li> <a href="#"</li>
                        </ul>
                    </li>
                    <li><a href="#"> Billets </a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <div class="destination">


                <div class="d1">
                    <img src="./image7.jpg">
                    <p>
                    Rio de Janeiro s'anime au coucher du soleil et vous invite à découvrir sa culture, sa cuisine et sa vie nocturne. Que vous souhaitiez vous détendre sur les plages au clair de lune, écouter de la musique en direct dans les bars locaux ou vous immerger dans la scène de la samba, vous trouverez de nombreuses options pour tirer le meilleur parti de vos nuits dans cette ville.
                    </p>
                </div>
                <div class="d1">
                    <img src="./backgroundbresil2.avif">
                    <p>
                    La ville de Rio de Janeiro est située dans l’un des endroits les plus heureux du monde, dans la superbe baie de Guanabara, et est entourée de nature, à l’intérieur comme dans les environs. En marchant dans les rues, vous pourrez rencontrer des colibris et toute sorte d’oiseaux colorés, à l’image de la ville.
                    </p>
                </div>
                <div class="d1">
                    <img src="./backgroundsbresil3.webp">
                    <p> SurIlha do Maraj et sur Ilha do Cardoso vous serez charmé par la nature et ses spectacles uniques. Sur l’archipel des Abrolhos et celui de Fernando de Norhona, vous pourrez faire l’une des expériences de plongée les plus fascinantes du Brésil. 

                    </p>
                </div>
                
                


            </div>

            <hr>
            <section class="reservation">
                <div class="container">
                        <h2>Formulaire de Voyage</h2>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" id="nom" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="destination">Destination:</label>
                                <select id="destination" name="destination" required>
                                    <option value="">Choisir une destination</option>
                                    <option value="paris"> Rio de Janeiro </option>
                                    <option value="london"> SurIlha do Maraj </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date de départ:</label>
                                <input type="date" id="date" name="date" required>

                                <label for="date">Date de retour:</label>
                                <input type="date" id="date" name="date" required>

                                <label for="nombre_personnes"> Passagers :</label>
                                <input type="number" id="nombre_personnes" name="nombre_personnes" min="1" value="1">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer">
                            </div>
                        </form>
                </div>

                <article class="p1">
                    <p>
                        Réservez n'a jamais été aussi simple.
                    </p>
                </article>
            </section>


            <footer class="contact" id="contact" >
             
                <h1>Contact</h1>
                <p> N'hésiter pas à me contacter à l'adresse suivante : 
                </p>
                <p class="mail"> yacine.sitouah@outlook.fr </p>
                <p> Tèl: 06.20.03.64.24</p>
                <p> &copy; Yacine Sitouah</p>   
       
            </footer>

            
        </body>
    </html>