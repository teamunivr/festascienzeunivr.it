<?php
include 'assets/php/template_function.php';
if (isset($_GET["year"]))
    $year = $_GET["year"];
getHTMLSuperHead();

// per aggiungere foto anno nuovo, aggiungere anno all'array!
$years = array("2018", "2017", "2016", "2015", "2014", "2013", "2012", "2011", "2010", "2009");

if (isset($_GET["year"]) && in_array($year, $years)) {
    /* Di seguito il codice per la visualizzazione della galleria */
    ?>
    <html>
    <head>
        <?php getHTMLHead('Gallery ' . $year); ?>
        <style>
            a {
                color: #CCC;
            }

            a:hover {
                color: #17d95b;
            }

            #scrollUp {
                bottom: 20px;
                right: 2%;
                opacity: 0.6;
                outline: none;
                height: 38px; /* Height of image */
                width: 38px; /* Width of image */
                background: url(../assets/img/icon/top.png) no-repeat;
                max-width: 100%;
            }

            #scrollUp:hover {
                outline: none;
                opacity: 1;
            }

            .photo-item {
                overflow: hidden;
                position: relative;
                text-align: center;
                float: left;
                width: 18%;
                height: 18%;
                margin-left: 1%;
                margin-right: 1%;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
    <?php getHTMLHeader(); ?>
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1>gallery</h1>
                    <h5>Anno <?php echo $year ?></h5>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="photo-gallery">
                        <?php $photos = scandir("assets/img/gallery/" . $year . "/");
                        foreach ($photos as $photo) {
                            if (pathinfo($photo, PATHINFO_EXTENSION) != "jpg") continue; ?>
                            <div class="photo-item type1">
                                <a href="assets/img/gallery/<? echo $year ?>/<? echo $photo ?>"
                                   rel="prettyPhoto[gallery]">
                                    <img class="lazyimg-responsive"
                                         data-original="assets/img/gallery/<?php echo $year ?>/thumbs/<?php echo $photo ?>"/>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php getHTMLFooter(); ?>
    <script type="text/javascript" charset="utf-8">

        $(document).ready(function () {
            $("a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'fast', /* fast/slow/normal */
                slideshow: 2000, /* false OR interval time in ms */
                autoplay_slideshow: false, /* true/false */
                opacity: 0.80, /* Value between 0 and 1 */
                show_title: true, /* true/false */
                allow_resize: true, /* Resize the photos bigger than viewport. true/false */
                default_width: 500,
                default_height: 344,
                counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
                theme: 'dark_rounded', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
                horizontal_padding: 20, /* The padding on each side of the picture */
                hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
                wmode: 'opaque', /* Set the flash wmode attribute */
                autoplay: true, /* Automatically start videos: True/False */
                modal: false, /* If set to true, only the close button will close the window */
                deeplinking: false, /* Allow prettyPhoto to update the url to enable deeplinking. */
                overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
                keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
                changepicturecallback: function () {
                }, /* Called everytime an item is shown/changed */
                callback: function () {
                }, /* Called when prettyPhoto is closed */
            });
        });

        jQuery(document).ready(function () {
            $("img").lazyload({
                threshold: 500,
                failurelimit: 50,
                effect: "fadeIn"
            });
        });

        $(function () {
            $.scrollUp({
                scrollName: 'scrollUp', // Element ID
                topDistance: '300', // Distance from top before showing element (px)
                topSpeed: 300, // Speed back to top (ms)
                animation: 'fade', // Fade, slide, none
                animationInSpeed: 200, // Animation in speed (ms)
                animationOutSpeed: 200, // Animation out speed (ms)
                scrollText: '', // Text for element
                activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
        });

    </script>
    </body>
    </html>
<?php } else {  /* Di seguito il codice per la visualizzazione delle anteprime della galleria */ ?>
    <html>
    <head>
        <?php getHTMLHead('Gallery'); ?>
        <style>
            a {
                color: #CCC;
            }

            a:hover {
                color: #17d95b;
            }

            .photo-item {
                overflow: hidden;
                position: relative;
                text-align: center;
                float: left;
                width: 98%;
                margin-left: 1%;
                margin-right: 1%;
                margin-bottom: 40px;
            }

            .photo-item .fig-caption {
                position: absolute;
                left: 0;
                bottom: 0%;
                font-size: 20px;
                font-family: oswald;
                display: block;
                width: 100%;
                line-height: 24px;
                padding: 10px 0px;
            }
        </style>
    </head>
    <body>
    <?php getHTMLHeader(); ?>
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1>gallery</h1>
                    <h5>photo gallery</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class=" photo-gallery">
                        <?php foreach ($years as $year) { ?>
                            <div class="photo-item type5">
                                <figure>
                                    <a href="gallery.php?year=<?php echo $year ?>">
                                        <img src="assets/img/gallery/gallery_<?php echo $year ?>.jpg" alt=""/>
                                    </a>
                                </figure>
                                <div class="fig-caption">
                                    <a href="gallery.php?year=<?php echo $year ?>">Anno <?php echo $year ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php getHTMLFooter(); ?>
    </body>
    </html>
<?php } ?>
