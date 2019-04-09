<?php
include 'assets/utils/template_function.utils';
getHTMLSuperHead();
?>
<html>
<head>
    <?php getHTMLHead('Info'); ?>
    <style>
        .category li a:hover {
            color: #17d95b;
        }
    </style>
</head>
<body>
<?php getHTMLHeader(); ?>
<section class="breadcrumb">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Info</h1>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Info</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <article class="latest-post detail">
                    <center>
                        <div class="album-detail album-purchase">
                            <a><h2>STAY TUNED</h2></a>
                        </div>
                        <!-- <h2>Programma serata</h2>
                        <ul class="category">
                            <li><a><h3><span class="fa fa-clock-o"></span> 18.30 Apertura cancelli</h3></a></li>
                            <li><a><h3><span class="fa fa-clock-o"></span> 19.00 - 20.30 Shosho spritz</h3></a></li>
                            <li><a><h3><span class="fa fa-clock-o"></span> 18.30 - 21.30 Area di ricerca</h3></a></li>
                            <li><a><h3><span class="fa fa-clock-o"></span> 22.00 Inizio live "Muppets Cover Band"</h3>
                                </a></li>
                            <li><a><h3><span class="fa fa-clock-o"></span> 1.00 Chiusura cancelli</h3></a></li>
                        </ul> -->

                    </center>
                </article>
            <!-- </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <article class="latest-post detail">
                    <div class="album-detail album-purchase">
                        <a><h3>MUSICA</h3></a>
                    </div>
                    <ul class="category">
                        <li>
                            <a href="https://www.facebook.com/killexdj" onClick="window.open(this.href);return false;">
                                <h4><span class="fa fa-music"></span> DJ EXE</h4>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.muppetscoverband.it/" onClick="window.open(this.href);return false;">
                                <h4><span class="fa fa-music"></span> Muppets Cover Band</h4>
                            </a>
                        </li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <article class="latest-post detail">
                    <div class="album-detail album-purchase">
                        <a><h3>STAND</h3></a>
                    </div>
                    <ul class="category">
                        <li><a><h4><span class="fa fa-beer"></span> Birre</h4></a></li>
                        <li><a><h4><span class="fa fa-glass"></span> Bibite &and; Drink</h4></a></li>
                        <li><a><h4><span class="fa fa-cutlery"></span> Cucina</h4></a></li>
                        <li><a><h4><span class="fa fa-euro"></span> Cassa</h4></a></li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <article class="latest-post detail">
                    <div class="album-detail album-purchase">
                        <a><h3>SERVIZI</h3></a>
                    </div>
                    <ul class="category">
                        <li><a><h4>
                                <span class="fa fa-male">
                                </span><span class="fa fa-female"></span>
                                    <span class="fa fa-wheelchair"></span> Bagni</h4></a></li>
                        <li><a><h4><span class="fa fa-ambulance"></span> Pronto Soccorso</h4></a></li>
                        <li><a><h4><span class="fa fa-shield"></span> Security</h4></a></li>
                        <li><a><h4><span class="fa fa-picture-o"></span> Angolo Foto</h4></a></li>
                    </ul>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-lg12 col-md-12 col-sm-12">
                <article class="latest-post detail">
                    <div class="album-detail album-purchase">
                        <a><h3>Locandina 2017</h3></a>
                    </div>
                    <a href="../assets/img/info/locandina2016.jpg" target="_blank">
                        <img src="../assets/img/locandina.jpg" width="100%"/>
                    </a> -->
                </article>
            </div>
        </div>
</section>
<?php getHTMLFooter(); ?>
</body>
</html>