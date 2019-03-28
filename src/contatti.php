<?php
include 'assets/php/template_function.php';
getHTMLSuperHead();
?>
<html>
<head>
    <?php getHTMLHead('Contatti'); ?>
    <style>
        a {
            color: #CCC;
        }

        a:hover {
            color: #17d95b;
        }

        input, button, select, textarea {
            color: #878787;
        }
    </style>
</head>
<body>
<?php getHTMLHeader(); ?>
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>contatti</h1>
                <h5>dove siamo<h5>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">contatti</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div id="google-map" class="contact-map" data-theme="white" data-address="Verona, Strada le grazie 15"
                     data-zoomlvl="16" data-maptype="HYBRID"></div>
                <br></br>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <h3>Università degli Studi di Verona</h3>
                <p>Area Scienze e Ingegneria</p>
                <p>Strada le Grazie 15 - 37134 Verona</p>
                <b class=" fa fa-envelope"></b>
                <p><a href="mailto:info@festascienzeunivr.it">info@festascienzeunivr.it</a></p>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDn_mgxXa6Ipmr_GTE2oUzLMQABQDtddwQ"></script>
<?php getHTMLFooter(); ?>
</body>
</html>