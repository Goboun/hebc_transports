<?php
    //Méta-données
    $titre="Home | HEBC";
    $date="11/02/2024";
    require("include/header.inc.php");
?>

        <!--Le vrai contenu de la page-->
        <main>
            <h1>Highspeed Express Bandwagon Compagny</h1>
                <p class="intro">
                    Projet en Développement Web
                </p>
                <p class="intro">
                    Etudiants HEBC et 22302932
                </p>
                <p class="intro">
                    <strong>L2-Informatique 2023-2024, TD-C, <?php echo date("d/m/o");?></strong>
                </p>
                <figure>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/cc/CY_Cergy_Paris_Universite_-_Logo.png" alt="" height="105" width="325"/>
                    <figcaption>
                        CY CERGY PARIS UNIVERSITÉ, 2 Avenue Adolphe Chauvin, 95300 Pontoise
                    </figcaption>
                </figure>

                <p>
                    Bienvenue sur le site web de <strong>HEBC</strong> en collaboration avec <strong>22302932</strong>. 
                    Retrouvez sur notre site les différents horaires de trains et de RER de la région parisienne. 
                    Toutes les informations dont vous avez besoin pour vos trajets sont disponibles ici !
                </p>

                <ul>
                    <li>Pour consulter un itinéraire, consultez <a href="itineraires.php">les itinéraires</a></li>
                    <li>Pour connaître les prochains départs de votre gare, consultez <a href="horaires.php">les horaires</a></li>
                    <li>Pour être au courant des dernières informations sur vos transports, veuillez consultez <a href="infostrafic.php">l'infos trafic</a></li>
                    <li>Pour les fans de trains et de RER, regardez quelles sont les gares les plus populaires dans <a href="statistiques.php">les statistiques</a></li>
                </ul>
                <figure>
                    <img src="./photos/<?php echo affichePhoto(); ?>" alt="indisponible, contactez HEBC"/>
                    <figcaption>
                        Photo choisi aléatoirement parmi 3 photos. Essayez de toutes les voir en raffraichissant la page ! 
                    </figcaption>
                </figure>

<?php
    require("include/footer.inc.php");
?>
  
    