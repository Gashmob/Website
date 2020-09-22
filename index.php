<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta>

    <script src="https://kit.fontawesome.com/831001b8d8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
    <link rel="stylesheet" type="text/css" href="css/carousel.css"/>

    <title>Kevin Traini</title>
    <link rel="shortcut icon" href="images/profil.png" type="image/x-icon">
</head>

<body>
<header>
    <div class="header-text">
        <span>Kevin Traini</span>
    </div>
</header>

<main>
    <div class="infos">
        <div>
            <div class="infos-header">A PROPOS</div>
            <p class="infos-content">Étudiant en licence informatique, je profite de mon temps libre entre les cours
                pour réaliser divers projets (site internets, simulations, logiciels, ...)</p>
            <p class="infos-bottom">Tous ces projets sont disponible sur mon <a href="https://github.com/Gashmob"
                                                                                target="_blank"><i
                            class="fab fa-github"></i> Github <i class="fas fa-external-link-alt"
                                                                 style="font-size: 9px;position: relative;top: -.3em"></i></a>
            </p>
        </div>
    </div>

    <div class="projects">
        <div class="projects-header">MES PROJETS</div>
        <div class="carousel">
            <div class="head">
                <div class="content">
                    <div id="1">
                        <img src="images/hediata.png" alt="">
                        <div class="content-text">
                            <p>Site internet de la faction Hediata dans le jeu <a href="https://starbasegame.com"
                                                                                  target="_blank">Starbase <i
                                            class="fas fa-external-link-alt"
                                            style="font-size: 9px;position: relative;top: -.3em"></i></a></p>
                            <p>Réalisé à l'aide du framework Symfony ainsi que de Bootstrap</p>
                            <ul>
                                <li><a href="https://hediata.ktraini.com" target="_blank">Site Web <i
                                                class="fas fa-external-link-alt"
                                                style="font-size: 9px;position: relative;top: -.3em"></i></a>
                                </li>
                                <li><a href="https://github.com/Hediata/site_internet" target="_blank">Git <i
                                                class="fab fa-git-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="2">
                        <img src="images/fork.svg" alt="">
                        <div class="content-text">
                            <p>Petit framework basique pour les petits sites</p>
                            <ul>
                                <li><a href="https://github.com/Gashmob/Fork" target="_blank">Git <i
                                                class="fab fa-git-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="side-buttons">
                    <i class="fas fa-chevron-left left"></i>
                    <i class="fas fa-chevron-right right"></i>
                </div>
            </div>
            <div class="bottom-buttons">
                <i class="far fa-circle" id="1"></i>
                <i class="far fa-circle" id="2"></i>
            </div>
        </div>
    </div>

    <div class="cv">
        <div class="cv-header">C.V.</div>
        <p>Mon CV est disponible en <a href="cv/cv.html">html <i class="fas fa-file-code"></i></a> et en <a
                    href="cv/cv.pdf">pdf <i class="fas fa-file-pdf"></i></i></a>. Retrouvez moi aussi sur <a
                    href="https://fr.linkedin.com/in/kevin-traini-1253661b0" target="_blank"><i
                        class="fab fa-linkedin"></i> Linkedin <i class="fas fa-external-link-alt"
                                                                 style="font-size: 9px;position: relative;top: -.3em"></i></a>
        </p>
    </div>

    <div class="contact">
        <div class="contact-header">CONTACTEZ MOI</div>
        <p>Par mail <a href="mailto:kevin@ktraini.com">kevin@ktraini.com</a> ou sur mon profil <a
                    href="https://fr.linkedin.com/in/kevin-traini-1253661b0" target="_blank"><i
                        class="fab fa-linkedin"></i> Linkedin <i class="fas fa-external-link-alt"
                                                                 style="font-size: 9px;position: relative;top: -.3em"></i></a>
        </p>
    </div>
</main>

<footer>
    Le code source est disponible directement depuis le navigateur avec <code>Ctrl+U</code>
</footer>

<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="js/carousel.js"></script>
</body>
</html>
