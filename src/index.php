<?php
include 'assets/php/template_function.php';
?>

<!doctype html>
<html>

<head>

    <?php getHTMLHead('Home'); ?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/TimeCircles.js"></script>
    <link href="../assets/css/TimeCircles.css" rel="stylesheet">

    <style type="text/css">

        @media (max-width: 1200px) {
            #DateCountdown {
                display: none;
            }
        }

        @media (min-width: 1200px) {
            .hideit {
                display: none;
            }
        }

    </style>
</head>

<body>
<?php getHTMLHeader(); ?>
<section id="home-slider">

    <div class="container">
        <div class="home-inner">
            <div class="slider-nav" style="left: 20px; right: 20px;">

                <a id="home-prev" href="#" class="prev fa fa-chevron-left"
                   style="position: absolute; left: 0px; bottom: 0px;"></a>
                <a id="home-next" href="#" class="next fa fa-chevron-right"
                   style="position: absolute; right: 0px; bottom: 0px;"></a>

            </div>
            <div id="flex-home" class="flexslider">

                <ul class="slides">
                    <?php if (true) { ?>
                        <li>
                            <div id="DateCountdown" data-date="2019-06-07 18:30:00"
                                 style="width: 1140px; height: 390px;"></div>
                            <div class="hideit"><img src="assets/img/gallery/gallery_2017.jpg" alt="2017"></div>
                            <script>
                                $("#DateCountdown").TimeCircles({
                                    time: {
                                        Days: {text: "Giorni"},
                                        Hours: {text: "Ore"},
                                        Minutes: {text: "Minuti"},
                                        Seconds: {text: "Secondi"}
                                    }
                                });

                                var updateTime = function () {
                                    var date = $("#date").val();
                                    var time = $("#time").val();
                                    var datetime = date + ' ' + time + ':00';
                                    $("#DateCountdown").data('date', datetime).TimeCircles().start();
                                };
                                $("#date").change(updateTime).keyup(updateTime);
                                $("#time").change(updateTime).keyup(updateTime);
                            </script>


                        </li>
                    <?php } ?>
                    <li>
                        <img src="../assets/img/storia/2017/gruppo_2017.jpg" alt="2017">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2017</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2016.jpg" alt="2016">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2016</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2015.jpg" alt="2015">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2015</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2014.jpg" alt="2014">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2014</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2013.jpg" alt="2013">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2013</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2012.jpg" alt="2012">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2012</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2011.jpg" alt="2011">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2011</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2010.jpg" alt="2010">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2010</h2>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/gallery/gallery_2009.jpg" alt="2009">
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2009</h2>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</section>


<div class="clearfix"></div>

<section id="updates">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <h1>FESTASCIENZE 2019</h1>
                <br>
                <article class="latest-post detail">
                    <center>
                        <div class="album-detail album-purchase">
                            <a><h2>WE'RE WORKING FOR YOU</h2></a>
                        </div>
                    </center>
                </article>
                <!-- <a><img style="max-width: 100%; display: block; margin: auto;"
                        src="/assets/img/paginaincostruzione.jpg"></a> -->
                <!--a href="/festa2017.php"><h3 style="text-align: center;">Tutti i dettagli dell'evento qui</h3></a-->
                <br>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
                <h1>Prossimi eventi</h1>

                <div class="event-feed">
                    <div class="date">
                        <span class="day">07</span>
                        <span class="month">GIU</span>
                    </div>
                    <br><h5>FESTA SCIENZE 2019</h5>
                    <p>Festa di fine anno</p>
                </div>
            </div>

            <div class="clearfix"></div>


            <?php //getHTMLNews(); ?>
            <h1>video</h1>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="video-feed">
                        <img src="../assets/img/video/video_2017_promo.jpg" alt=""/>
                        <h6>2017 - PROMO</h6>
                        <a href="video.php?year=2017"><span class="fa fa-play"></span></a>
                    </div><!--\\video-feed-->
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="video-feed">
                        <img src="../assets/img/video/video_2016_promo.jpg" alt=""/>
                        <a href="video.php?year=2016"><span class="fa fa-play"></span></a>
                        <h6>2016 - PROMO</h6>
                    </div><!--\\video-feed-->
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="video-feed">
                        <img src="../assets/img/video/video_2015_promo.jpg" alt=""/>
                        <a href="video.php?year=2015"><span class="fa fa-play"></span></a>
                        <h6>2015 - PROMO</h6>
                    </div><!--\\video-feed-->
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="video-feed">
                        <img src="../assets/img/video/video_2014_promo.jpg" alt=""/>
                        <a href="video.php?year=2014"><span class="fa fa-play"></span></a>
                        <h6>2014 - PROMO</h6>
                    </div><!--\\video-feed-->
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="video-feed">
                        <img src="../assets/img/video/video_2013_festa.jpg" alt=""/>
                        <a href="video.php?year=2013f"><span class="fa fa-play"></span></a>
                        <h6>2013</h6>
                    </div><!--\\video-feed-->
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="video-feed">
                        <img src="../assets/img/video/video_2013_promo.jpg" alt=""/>
                        <a href="video.php?year=2013p"><span class="fa fa-play"></span></a>
                        <h6>2013 - PROMO</h6>
                    </div><!--\\video-feed-->
                </div>
            </div>

            <div class="row">


                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="video-feed">
                        <img src="../assets/img/video/video_2012_festa.jpg" alt=""/>
                        <a href="video.php?year=2012"><span class="fa fa-play"></span></a>
                        <h6>2012</h6>
                    </div><!--\\video-feed-->
                </div>
            </div>
            <!--latest videos-->
        </div>
    </div>

</section>
<?php getHTMLFooter(); ?>
</body>

</html>
