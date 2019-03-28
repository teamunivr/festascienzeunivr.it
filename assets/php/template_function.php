<!-- 
   _____         _        ____       _                    _   _       _
  |  ___|__  ___| |_ __ _/ ___|  ___(_) ___ _ __  _______| | | |_ __ (_)_   ___ __
  | |_ / _ \/ __| __/ _` \___ \ / __| |/ _ \ '_ \|_  / _ \ | | | '_ \| \ \ / / '__|
  |  _|  __/\__ \ || (_| |___) | (__| |  __/ | | |/ /  __/ |_| | | | | |\ V /| |
  |_|  \___||___/\__\__,_|____/ \___|_|\___|_| |_/___\___|\___/|_| |_|_| \_/ |_|

		 www.festascienzeunvir.it -- Sito Ufficiale dell'Evento

	Benvenuti sul fantastico (???) sito dell'evento più atteso dell'anno [citazione necessaria]
	
	Sei un web developer ?
	Hai voglia di scrivere codice in PHP ? (a tutti piace!)
	Ti entusiarma lavorare "a gratis" ma per una buona causa ?
	Vuoi darci una mano a migliorare questo schifo (ehm, fantastico capolavoro di web desing) ? 
	Allora che aspetti, manda una mail a info@festascienzeunivr.it! (o meglio, contattaci in altri modi che tanto le mail non le leggiamo) 

	DIOCAN SE FA SCHIFO STO CODICE
	Copyright (c) 2017 Staff organizzatore festascienzeunivr.it 
	
-->
<?php
include 'assets/php/db_function.php';

function getHTMLSuperHead() {
    echo "<!DOCTYPE html>";
}

/**
 * Funzione che genera il codice HTML da mettere tra i tag <HEAD> </HEAD>
 */
function getHTMLHead($title) {
    ?>
    <title><?php echo($title); ?> :: Festa Scienze UniVR</title>

    <meta charset="UTF-8">
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no"/>

    <!--Icone per la home-->
    <meta name="application-name" content="FestaScienzeUnivr"/>
    <meta name="msapplication-TileColor" content="#83382b"/>
    <meta name="msapplication-square70x70logo" content="assets/img/icon/apple-touch-icon-120x120.png"/>
    <meta name="msapplication-square150x150logo" content="assets/img/icon/apple-touch-icon-120x120.png"/>
    <meta name="msapplication-wide310x150logo" content="assets/img/icon/apple-touch-icon-120x120.png"/>
    <meta name="msapplication-square310x310logo" content="assets/img/icon/apple-touch-icon-120x120.png"/>

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.vegas.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/green.css">

    <!--Icone per la home-->
    <link href="assets/img/icon/apple-touch-icon-60x60.png" rel="apple-touch-icon"/>
    <link href="assets/img/icon/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76"/>
    <link href="assets/img/icon/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120"/>
    <link href="assets/img/icon/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152"/>
    <link rel="apple-touch-icon-precomposed" href="assets/img/icon/apple-touch-icon-76x76.png"/>

    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <?php
}

function getHTMLHeader() {
    global $facebook, $twitter, $youtube, $instagram;
    ?>
    <header>
        <div class="social-links">
            <div class="container">
                <ul class="social">
                    <li><a href="<?php echo($facebook); ?>" onClick="window.open(this.href);return false;"><span
                                    class="fa fa-facebook"></span></a></li>
                    <li><a href="<?php echo($twitter); ?>" onClick="window.open(this.href);return false;"><span
                                    class="fa fa-twitter"></span></a></li>
                    <li><a href="<?php echo($youtube); ?>" onClick="window.open(this.href);return false;"><span
                                    class="fa fa-youtube"></span></a></li>
                    <li><a href="<?php echo($instagram); ?>" onClick="window.open(this.href);return false;"><span
                                    class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>

        <nav class="navbar yamm navbar-default">
            <div class="container container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa icon-bar"></i>
                        <i class="fa icon-bar"></i>
                        <i class="fa icon-bar"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <div class="logo">FESTA DI <span>FINE ANNO</span></div>
                        <div class="slogan" align="right">Area Scienze e Ingegneria (UniVR)</div>
                    </a>

                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" style="margin-right: 0;">
                        <li><a href="index.php">Home </a></li>
                        <li class="yamm-fw dropdown"><a href="#">Storia <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">

                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="yamm-blog">
                                                    <a href="storia2017.php"><img
                                                                src="assets/img/storia/storia_2017_menu.jpg" alt="2017"></a>
                                                    <h4><a href="storia2017.php">2017</a></h4>
                                                    <p>"Festascienze is us"</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2016.php"><img
                                                                        src="assets/img/storia/storia_2016.jpg"
                                                                        alt="2016"></a>
                                                            <h4><a href="storia2016.php">2016</a></h4>
                                                            <p>"Memento audere semper"</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2015.php"><img
                                                                        src="assets/img/storia/storia_2015.jpg"
                                                                        alt="2015"></a>
                                                            <h4><a href="storia2015.php">2015</a></h4>
                                                            <p>"Let's be ohana"</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2014.php"><img
                                                                        src="assets/img/storia/storia_2014.jpg"
                                                                        alt="2014"></a>
                                                            <h4><a href="storia2014.php">2014</a></h4>
                                                            <p>"Don't stop believin'"</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2013.php"><img
                                                                        src="assets/img/storia/storia_2013.jpg"
                                                                        alt="2013"></a>
                                                            <h4><a href="storia2013.php">2013</a></h4>
                                                            <p>"The show must go on"</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2012.php"><img
                                                                        src="assets/img/storia/storia_2012.jpg"
                                                                        alt="2012"></a>
                                                            <h4><a href="storia2012.php">2012</a></h4>
                                                            <p>"Ho'oponopono"</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2011.php"><img
                                                                        src="assets/img/storia/storia_2011.jpg"
                                                                        alt="2011"></a>
                                                            <h4><a href="storia2011.php">2011</a></h4>
                                                            <p>"Shosholoza"</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2010.php"><img
                                                                        src="assets/img/storia/storia_2010.jpg"
                                                                        alt="2010"></a>
                                                            <h4><a href="storia2010.php">2010</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="yamm-blog-detail clearfix">
                                                            <a href="storia2009.php"><img
                                                                        src="assets/img/storia/storia_2009.jpg"
                                                                        alt="2009"></a>
                                                            <h4><a href="storia2009.php">2009</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="to-page" href="storia.php"
                                                   style="text-align:right; color:#17d95b !important">Vedi tutti gli
                                                    anni</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li class="yamm-fw dropdown"><a href="#">Gallery <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">

                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2017.jpg" alt="2017"/>
                                                    <a href="gallery.php?year=2017"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2017</h5>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2016_menu.jpg" alt="2016"/>
                                                    <a href="gallery.php?year=2016"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2016</h5>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2015_menu.jpg" alt="2015"/>
                                                    <a href="gallery.php?year=2015"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2015</h5>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2014_menu.jpg" alt="2014"/>
                                                    <a href="gallery.php?year=2014"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2014</h5>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2013_menu.jpg" alt="2013"/>
                                                    <a href="gallery.php?year=2013"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2013</h5>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2012_menu.jpg" alt="2012"/>
                                                    <a href="gallery.php?year=2012"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2012</h5>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2011_menu.jpg" alt="2011"/>
                                                    <a href="gallery.php?year=2011"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2011</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2010_menu.jpg" alt="2010"/>
                                                    <a href="gallery.php?year=2011"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2010</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="video-feed">
                                                    <img src="assets/img/gallery/gallery_2009_menu.jpg" alt="2009"/>
                                                    <a href="gallery.php?year=2009"><span
                                                                class="fa fa-picture-o"></span></a>
                                                    <h5>2009</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="to-page" href="gallery.php"
                                           style="text-align:right; color:#17d95b !important">Vedi tutti gli anni</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="info.php">Info</a></li>
                        <li><a href="costi.php">Prezzi</a></li>
                        <li><a href="sponsor.php">Sponsor </a></li>
                        <!--<li><a href="arearicerca.php" >A. Ricerca</a></li>-->
                        <li><a href="contatti.php">Contatti </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <ul class="vegas-slides hidden">
        <li><img data-fade='2000' src="assets/img/BG/bg_1.jpg" alt=""/></li>
        <li><img data-fade='2000' src="assets/img/BG/bg_2.jpg" alt=""/></li>
        <li><img data-fade='2000' src="assets/img/BG/bg_3.jpg" alt=""/></li>
        <li><img data-fade='2000' src="assets/img/BG/bg_4.jpg" alt=""/></li>
        <li><img data-fade='2000' src="assets/img/BG/bg_5.jpg" alt=""/></li>
        <li><img data-fade='2000' src="assets/img/BG/bg_6.jpg" alt=""/></li>
    </ul>

    <?php
}

function getHTMLFooter() {
    ?>
    <?php /*
    <section id="latest-blog">

    <div class="container">
    <div class="row">
    <h1>Concorsi</h1>
          
    <div class="col-lg-4 col-md-4 col-sm-4">
    <article class="blog-post">
    <img src="assets/img/concorsi/concorso_2014_scielfie_menu.jpg" alt=""/>
    <div class="hover">
    <!--<a href="concorso.php?id=1">-->
    <a href="concorso2014.php">
    <h2>#SCIELFIE</h2>
    <p>2014</p>
    </a> 
    </div>
    </article>
    </div><!--\\blog-post-->
          
    <div class="col-lg-4 col-md-4 col-sm-4">
    <article class="blog-post">
    <img src="assets/img/concorsi/concorso_2013_mmsi_menu.jpg" alt=""/>
    <div class="hover">
    <!--<a href="concorso.php?id=0">-->
    <a href="concorso2013.php">
    <h2>Miss & Mister Scienze-Ingegneria</h2>
    <p>2013</p>
    </a>   
    </div>
    </article>
    </div><!--\\blog-post-->
          
          
    </div>
    </div>
    </section>
    -->*/ ?>
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h4><span class="fa fa-sitemap"></span>naviga il sito</h4>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul class="sitemap">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="storia.php">STORIA</a></li>
                                <li><a href="gallery.php">GALLERY</a></li>
                                <li><a href="info.php">INFO</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul class="sitemap">
                                <li><a href="costi.php">PREZZI</a></li>
                                <li><a href="sponsor.php">SPONSOR</a></li>
                                <li><a href="contatti.php">CONTATTI</a></li>
                                <li><a href="joinstaff.php">STAFF</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!--\\column-->
                <!-- 
                    <div class="col-lg-3 col-md-3 col-sm-3">
                    <h4><span class="fa fa-twitter"></span>Ultimi Tweet</h4>
                    <div class="latest-tweet"></div>
                    </div>-->
                <!--
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h4><span class="fa fa-flickr"></span>Flicker Feed</h4>
                    <iframe src="http://www.flickr.com/slideShow/index.gne?group_id=&user_id=124119012@N07&set_id=72157644143832779&tags=Cars,Lotus,Exige" frameBorder="0" width="250" height="150" scrolling="no"></iframe>
                    <br>
                    <br/>
                </div>-->

                <!--<div class="col-lg-3 col-md-3 col-sm-3">
                    <h4><span class="fa fa-envelope"></span>Registrati alla newsletter</h4>
                    <form id="newsletter" action="newsletter.php" method="post">
                    <input name="mail" placeholder="Inserisci qui la tua mail" />
                    <button class="submit-btn">submit</button>
                    </form>
                    </div>-->

            </div><!--\\row-->
            <p>
            <center>&copy; <?php echo date("Y") ?> Festa scienze UniVR</center>
            </p>
        </div><!--\\container-->
    </footer>


    <script type="text/javascript" src="https://nibirumail.com/docs/scripts/nibirumail.cookie.min.js"></script>
    <script src="/assets/js/jquery-1.9.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.lazyload.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/jquery.mousewheel.min.js"></script>
    <script src="/assets/js/jquery.easing-1.3.pack.js"></script>
    <script src="/assets/js/jflickrfeed.min.js"></script>
    <script src="/assets/js/jquery.flexslider-min.js"></script>
    <script src="/assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="/assets/js/tweetable.jquery.min.js"></script>
    <script src="/assets/js/jquery.prettyPhoto.js"></script>
    <script src="/assets/jPlayer/jquery.jplayer.min.js"></script>
    <script src="/assets/jPlayer/add-on/jplayer.playlist.min.js"></script>
    <script src="/assets/js/jquery.vegas.min.js"></script>
    <script src="/assets/js/jquery.calendar-widget.js"></script>
    <script src="/assets/js/jquery.mb.YTPlayer.js"></script>
    <script src="/assets/js/main.js"></script>


<?php } ?>
