<!--
	FILE: costi.php
    DATE: 01-05-2014
    DESCRIPTION: Costi Page
-->

<?php //Include delle librerie
include 'assets/php/template_function.php';
?>

<?php getHTMLSuperHead(); ?>
<html>

<head>
    <?php getHTMLHead('Prezzi'); ?>
    <link href="assets/fonts/font3/font-awesome.css" rel="stylesheet">
</head>

<body>
<!-- HEADER -->
<?php getHTMLHeader(); ?>

<!-- ------------------------- PAGE ---------------------------------- -->

<!--=================================
bread crums
=================================-->
<section class="breadcrumb">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Prezzi</h1>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Prezzi</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<!--=================================
Costi
=================================-->

<section id="blog">
    <div class="container">
        <div class="row">

            <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                <article class="latest-post detail">
                    <div class="album-detail album-purchase">
                        <a><h3>IN PRECONSUMAZIONE</h3></a>
                    </div>
                    <ul class="category">
                        <li><a><h4><span class="fa fa-beer"></span><span class="fa fa-plus"></span><span
                                            class="fa fa-beer"></span> Birra + Birra <span
                                            class="fa fa-arrow-right"></span> 4 &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-beer"></span><span class="fa fa-plus"></span><span
                                            class="fa fa-cutlery"></span>Birra + Panino <span
                                            class="fa fa-arrow-right"></span> 4 &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-bitbucket"></span><span class="fa fa-plus"></span><span
                                            class="fa fa-cutlery"></span> Bibita + Panino <span
                                            class="fa fa-arrow-right"></span> 3 &euro;</h4></a></li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <article class="latest-post detail">
                    <div class="album-detail album-purchase">
                        <a><h3>IN SERATA</h3></a>
                    </div>
                    <ul class="category">
                        <li><a><h4><span class="fa fa-cutlery"></span>Panino <span class="fa fa-arrow-right"></span> 3
                                    &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-cutlery"></span> Trancio di pizza <span
                                            class="fa fa-arrow-right"></span> 3 &euro; (x2 5&euro;) </h4></a></li>
                        <li><a><h4><span class="fa fa-cutlery"></span> Panzerotto <span
                                            class="fa fa-arrow-right"></span> 2 &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-beer"></span> Birra <span class="fa fa-arrow-right"></span> 3
                                    &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-bitbucket"></span> Bibita <span class="fa fa-arrow-right"></span>
                                    2,50 &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-glass"></span> Spritz <span class="fa fa-arrow-right"></span> 2,50
                                    &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-glass"></span> Cocktail <span class="fa fa-arrow-right"></span> 4
                                    &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-bitbucket"></span> Shottino <span
                                            class="fa fa-arrow-right"></span> 0.50 &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-glass"></span> Prosecco <span class="fa fa-arrow-right"></span> 2
                                    &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-tint"></span> Acqua <span class="fa fa-arrow-right"></span> 1
                                    &euro;</h4></a></li>
                        <li><a><h4><span class="fa fa-coffee" aria-hidden="true"></span> Caff&Egrave <span
                                            class="fa fa-arrow-right"></span> 1 &euro;</h4></a></li>

                    </ul>
                </article>
            </div>
        </div> -->

        <div class="col-lg-12 col-md-12 col-sm-12">
            <article class="latest-post detail">
                <center>
                    <div class="album-detail album-purchase">
                        <a><h2>STAY TUNED</h2></a>
                    </div>
                    <!-- <ul class="category">
                        <div class="album-detail album-purchase">
                            <a><h3 id="pioggia">PIOGGIA ALCOLICA</h3></a>
                        </div>
                        <li><a><h4>Se dovesse piovere:</h4></a></li>
                        <li><a><h3><span class="fa fa-beer"></span><span class="fa fa-plus"></span><span
                                            class="fa fa-beer"></span> Birra + Birra <span
                                            class="fa fa-arrow-right"></span> 5 &euro;</h3></a></li>
                        <li><a><h3><span class="fa fa-beer"></span><span class="fa fa-plus"></span><span
                                            class="fa fa-beer"></span> Birra + Panino <span
                                            class="fa fa-arrow-right"></span> 5 &euro;</h3></a></li>
                        <li><a><h4>e se la pioggia dovesse continuare per un'ora:</h4></a></li>
                        <li><a><h3><span class="fa fa-beer"></span><span class="fa fa-plus"></span><span
                                            class="fa fa-beer"></span> Birra + Birra <span
                                            class="fa fa-arrow-right"></span> 4,50 &euro;</h3></a></li>
                        <li><a><h4>per tutto il resto della serata!</h4></a></li>


                    </ul>

                    <ul class="category">
                        <div class="album-detail album-purchase">
                            <a><h3 id="dolcinovita">NOVIT&Agrave;... SAPORITE</h3></a>
                        </div>
                        <li><a><h4>in serata, insieme ad un buon panino con la salamella</h4></a></li>
                        <li><a><h3>cosa manca?</h3></a></li>
                        <li><a><h3>Lo volete un consiglio?</h3></a></li>
                        <li><a><h3>Fate un giro in Ca' Vignal e prendete qualche panino in pre-consumazione!</h3></a>
                        </li>
                        <li><a><h2>NON VE NE PENTIRETE!</h2></a></li>
                    </ul> -->
                </center>
            </article>
        </div>


    </div>
</section>

<!-- ----------------------- END PAGE -------------------------------- -->

<!-- FOOTER -->
<?php getHTMLFooter(); ?>
</body>

</html>