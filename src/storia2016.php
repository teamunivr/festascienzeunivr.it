<!--
	FILE: template.php
    DATE: 01-05-2014
    DESCRIPTION: Template Page
-->

<?php //Include delle librerie
include 'assets/php/template_function.php';
?>

<?php getHTMLSuperHead(); ?>
<html>

<head>
    <?php getHTMLHead('Storia 2015'); ?>
    <style type="text/css">
        .imgLeft {
            float: left !important;
            padding: 0 15px 0 0 !important;
            width: 33% !important;
        }

        .imgRight {
            float: right !important;
            padding: 15px 0 0 15px !important;
            width: 33% !important;
        }

        ul {
            padding: 0px;
            margin-left: 20px;
        }

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

<!-- =================================Home================================= -->
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Storia 2016</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Storia 2015</a></li>
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
                    <img src="assets/img/gallery/gallery_2016.jpg" alt="dummy">
                    <h2>Festa del 2016</h2>
                    <p text-indent="100%">

                        È stata fatta una festa.
                </article>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php getHTMLFooter(); ?>
</body>

</html>
