
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>INSTRUVIA - site de formation en ligne</title>
        
<!-- 

Sentra Template

https://templatemo.com/tm-518-sentra

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>



        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#formations">Formations</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <img src="img/logon.png" height="120" width="200">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#formations">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Depot Formations
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>

        <div class="page-content">
            <section id="formations" class="content-section">
                <div class="text-content">
                    <h1>Depot d'une formation</h1>
                    <div class="section-heading">
                    
                        <form action="#" method="post">
                        <div class="featured-button button">
                        <a href="#edit">Deposer votre formation</a><br><br><br>
                        </div>
                        <I-- Champ de texte pour l avis --></I-->
                        <label for="avis">Votre Formation:</label> <br>
                        <textarea id="avis" name="avis" rows="6"  cols="100" required placeholder="Entrez votre formation ici..."*></textarea>
                        <I-- Sélecteur de formation ..><br><br><br>
                        <label for="formation">Choisissez une formation :</label>
                        <select id="formation" name="formation" required>
                        <option value="' disabled selected-- Sélectionner --"></option> <option value="html_css" selected>Developpement Web</option>
                        <option value="javascript">Developpement Mobile</option>
                        <option value="php">Intelligence Artificielle et Machine learning</option>
                        <option value="python" >CyberSecurité</option>
                        <option value="python" >Big Data et Data Engineering</option>
                        <option value="python" >Base de Donnée</option>
                        <option value="python" >IoT (Internet des objets)</option>
                        <option value="python" >Developpement de logiciel   </option>
                        </select>
                        <br><br><br>
                        <div class="boutons-container">
                        <button type="submit" class="bouton-confirmer">Confirmer</button>
                        <br><br><br><br><br><br><br>
                        </div>
                        </form>  
                        
                    </div>
            
          
            </section>
            
            
                  
                   
                    
                </div>
            </section>
            <section class="footer">
                <p>Copyright &copy; 2024 Instruvia 
                 </p>
            </section>
        </div>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>