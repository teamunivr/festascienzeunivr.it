<?php
include 'assets/utils/templates.utils';
$year = $_GET["year"];

// agggiungere video qui
$videos = array(
    "2012" => array("https://www.youtube.com/embed/aLP5eyXwXds", "Festa", "2012"),
    "2013p" => array("https://www.youtube.com/embed/NOoAxnZqrRY", "Promo", "2013"),
    "2013f" => array("https://www.youtube.com/embed/-fuBJLkJb5I", "Festa", "2013"),
    "2014" => array("https://www.youtube.com/embed/GP7RTNIUCtI", "Promo", "2014"),
    "2015" => array("https://www.youtube.com/embed/qU1RkUrZmOs", "Promo", "2015"),
    "2016" => array("https://www.youtube.com/embed/Sn6ALtTR0Fg", "Promo", "2016"),
    "2017" => array("https://www.youtube.com/embed/rbVVCaPmRso", "Promo", "2017"),
);

if (!isset($videos[$year])) {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
    die("Errore: video non esistente");
}
$video = $videos[$year];
getHTMLSuperHead();
?>
<html>
<head>
    <?php getHTMLHead('Promo Festa ' . $year); ?>
</head>
<body>
<?php getHTMLHeader(); ?>
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1><?php echo $video[1] ?></h1>
                <h5>Festa Scienze (UniVR) <?php echo $video[2] ?></h5>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#"><?php echo $video[1] ?> - Festa Scienze (UniVR) <?php echo $video[$year] ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section id="video-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="responsive-vimeo">
                    <iframe src="<?php echo $video[0] ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php getHTMLFooter(); ?>
</body>
</html>