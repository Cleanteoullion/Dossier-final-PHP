<?php include 'C:\Users\coullion\Downloads\UwAmp\UwAmp\www\Portfolio\sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body> <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/Cleante.png" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour, je suis <span>Cléante Oullion</span>
                Chef de projet.
                </h1>
                <p>
                Je suis chef de projet au sein de BEYOND, une agence spécialisée dans le marketing d'influence.
                    Mon objectif est de permettre aux annonceurs de promouvoir leur marque en collaborant avec de nombreux talents sur des plateformes telles que twitch.
                    Anciennement joueur professionnel d'esport je mets à contribution mon expérience du secteur de manière quotidienne dans mon travail.
                </p>
                <div class="btn-con">
                <a download="img/cv.pdf" href="img/cv.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>À propos <span> de moi</span><span class="bg-text">mes statistiques</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Mon expérience</h4>
                    <p>
                    Après plusieurs années d'activité sur la scène esport de League of Legends en tant que joueur professionnel, je mets aujourd'hui mon expérience au profit du développement de la statégie des marques et des influenceurs au sein des domaines du gaming et de l'esport notamment sur Twitch <br /> <br /> J'ai rejoins BEYOND en Janvier 2022 avec pour ambition de dévelloper notre savoir-faire sur Twitch. Je suis en charge des campagnes avec différents acteurs, mais également à l'initiative de nombreuses recommandation pour nos clients.
                    </p>
                    <div class="btn-con">
                    <a download="img/cv.pdf" href="img/cv.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">10+</p>
                            <p class="small-text">Campagnes <br /> Complétées</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">1</p>
                            <p class="small-text">année <br /> d'expérience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">100+</p>
                            <p class="small-text">Créateurs <br /> Contact</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">100M</p>
                            <p class="small-text">Impressions<br /> générées</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">PHP/SQL</p>
                        <div class="progress-con">
                            <p class="prog-text">50%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Suite Google</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Canva</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Figma</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Communication</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Management</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mon parcours</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Janvier 2019 - Janvier 2022</p>
                    <h5>Joueur Esport Professionnel League of legends<span>(FC Nantes, Solary, Deftfox)</span></h5>
                    <p>
                    - Mise en place d'objectifs de performance <br />
                    - Préparation mentale <br />
                    - Participation au championnat national <br />
                    - Entraînements réguliers     
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - present</p>
                    <h5>Encadrement Badminton<span> - Bad a chaz</span></h5>
                    <p>
                    Encadrement des jeunes compétiteurs/loisirs une fois par semaine
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Janvier 2022 - present</p>
                    <h5>Chef de projet digital<span> - BEYOND media</span></h5>
                    <p>
                    - Gestion de projets opérationnels <br />
                        - Création de recommandations marketing <br />
                        - Talent Manager <br />
                        - Relation clients <br />
                        - Community Management <br />
                        - Démarchage
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Octobre 2018 - Juin 2021</p>
                    <h5>Gaming Academy<span> - Gaming Campus</span></h5>
                    <p>
                        - Etude de cas marketing <br />
                        - Media training en anglais <br />
                        - Prise de parole en publique <br />
                        - Gestion des émotions
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - present</p>
                    <h5>3ème année Business School<span> - Gaming Campus</span></h5>
                    <p>
                        - Création et mise en place d'un plan marketing (S0N1X) <br />
                        - Acquisition de compétence PHP/SQL
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Janvier 2020 - Avril 2021</p>
                    <h5>Coaching League of Legends<span> - Gaming School</span></h5>
                    <p>
                        - Accompagnement des élèves <br />
                        - Création de contenu pédagogique <br />
                        - Mise en place d'excercices et d'objectifs
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Blog <span>à venir..</span><span class="bg-text"></span></h2>
            </div>
            <p class="port-text">
                
            </p>
            <div class="portfolios">
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/irelia.jpg" alt="">
                    </div>
                    
                    </div>
                </div>
                
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes centres<span> d'intérets</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/badminton.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Badminton
                            </h4>
                            <p>
                                Je suis un passionné de badminton, je le pratique depuis mon plus jeune âge, la participation aux compétitions m'est essentiel cette année.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/lol.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                League of Legends
                            </h4>
                            <p>
                                Je joue à League of Legends depuis 2014, j'en ai fais mon métier pendant quelques années avant de mettre un terme à mon parcours. Ma dernière équipe en date était Solary, l'un des plus grands club français.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/sport.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Sport
                            </h4>
                            <p>
                            De manière général j'aprécie le sport et la compétition, les performances de haut niveau, peu importe le domaine, me fascine.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/actualité.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Actualité
                            </h4>
                            <p>
                                Je m'intéresse de façon régulière à l'actualité dans le monde, je lis quotidiennement courrier internationnal afin de me tenir au courant de celle-ci.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/esport.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                              Esport  
                            </h4>
                            <p>
                               Etant acteur du secteur, je suis un grand passionné d'esport sur League Of Legends/Counter-strike, je suis les compétitions assidument. 
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/parler.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Discuter
                            </h4>
                            <p>
                               Parce que parler de tout et de rien avec tout le monde, c'est la vie.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Me <span>Contacter</span><span class="bg-text">Contacter</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                    <h4>Contact</h4>
                      
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    Lyon, France
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>coullion@gaming.bs</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>Gaming Business School, Lyon</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Téléphone</span>
                                </div>
                                <p>
                                    <span>07 80 02 74 87</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues</span>
                                </div>
                                <p>
                                    <span>Français, Anglais</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://twitter.com/iWa_lol" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://konect.gg/iwa" target="_blank">
                                    <i class="fa-brands fa-kickstarter-k"></i>                         
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>