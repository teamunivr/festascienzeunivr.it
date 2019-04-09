<!--
	FILE: news.php
    DATE: 02-05-2014
    DESCRIPTION: News Page
-->

<?php //Include delle librerie
include 'assets/utils/template_function.utils';
?>

<?php getHTMLSuperHead(); ?>
<html>

<head>
    <?php getHTMLHead('News'); ?>
    <style>
        a {
            color: #CCC;
        }

        a:hover {
            color: #17d95b;
        }
    </style>
</head>

<body>
<!-- HEADER -->
<?php getHTMLHeader(); ?>

<!-- ------------------------- PAGE ---------------------------------- -->

<?php
if (!(isset($_GET['aa']) && isset($_GET['n']))) {
    die("Si � verificato un errore, controllare di essere arrivati a questa pagina tramite un link corretto!");
    return 0;
}
$info = infoNews($_GET['aa'], $_GET['n']);
if ($info == -1) {
    die("Si � verificato un errore, controllare di essere arrivati a questa pagina tramite un link corretto!");
    return 0;
}
?>

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>News</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="news.php?aa=<?php echo($info['anno']); ?>&n=<?php echo($info['nome']); ?>">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <article class="latest-post detail">
                    <img src="assets/img/news/<?php echo($info['anno']); ?>/news_<?php echo($info['anno']); ?>_<?php echo($info['nome']); ?>.jpg"
                         alt="dummy">
                    <h2><?php echo($info['titolo']); ?></h2>
                    <ul>
                        <li><span class="fa fa-calendar"></span><?php echo($info['data']); ?></li>
                    </ul>
                    <?php echo($info['contenuto']); ?>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- ----------------------- END PAGE -------------------------------- -->

<!-- FOOTER -->
<?php getHTMLFooter(); ?>
</body>

</html>