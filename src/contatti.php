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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.279756173976!2d10.99693621573749!3d45.4036979454993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5fa577681de3%3A0xbc519a650a7df744!2sUniversit%C3%A0+degli+Studi+di+Verona+-+Dipartimento+di+Informatica+-+C%C3%A0+Vignal+2!5e0!3m2!1sit!2sit!4v1553787537866" width="100%" height="450px" frameborder="0" style="bottom" allowfullscreen></iframe>
                <!-- <div id="google-map" class="contact-map" data-theme="white" data-address="Verona, Strada le grazie 15"
                     data-zoomlvl="16" data-maptype="HYBRID"></div> -->
                <br>
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

<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDn_mgxXa6Ipmr_GTE2oUzLMQABQDtddwQ"></script> -->
<?php getHTMLFooter(); ?>
</body>
</html>