<!--
	FILE: storia2010.php
    DATE: 01-05-2014
    DESCRIPTION: Template Page
-->

<?php //Include delle librerie
include 'assets/php/template_function.php';
?>

<?php getHTMLSuperHead(); ?>
<html>

<head>
    <?php getHTMLHead('Storia 2010'); ?>
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

<!-- ------------------------- PAGE ---------------------------------- -->

<!--=================================
Home
=================================-->

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Storia 2010</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Storia 2010</a></li>
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
                    <img src="../assets/img/storia/2010/storia_2010.jpg" alt="dummy">
                    <h2>La festa del riscatto!</h2>
                    <p text-indent="100%">

                        <img class="imgLeft" src="../assets/img/storia/2010/gallery_fsu_2010_0001.jpg" alt=""/>

                        Cercando di far tesoro dall'esperienza precedente, vennero introdotte alcune modifiche
                        sostanziali nell'intero assetto organizzativo:
                        <br/>
                        * l'intera macchina part&igrave; nel febbraio 2010, ben 4 mesi prima dell'evento;
                        <br/>
                        * si pens&ograve; inoltre di introdurre stand e gazebi che potessero "salvare" momentaneamente
                        la cassa, la piastra ed i vari allestimenti in caso di pioggia.
                        <br>
                        <br/>
                        Quell'anno fu un anno di rinascita vero e proprio.
                        <img class="imgRight" src="../assets/img/storia/2010/gallery_fsu_2010_0055.jpg" alt=""/>

                        Bench&egrave; la festa 2009 si fosse spenta prematuramente, le prime ore di attivit&agrave;
                        erano bastate a far incuriosire gli studenti di scienze.
                        <br/>La dimostrazione si ebbe proprio nel 2010 che vide un incremento di partecipazione notevole
                        nello STAFF che pass&ograve; da circa 20 persone a oltre 70.
                        <br>
                        <br/>
                        Dopo gli sforzi di un anno vanificati dal tempo avverso, non fu facile trovare le energie per
                        rimettersi di nuovo in gioco in un impresa simile.
                        Basti pensare alla difficolt&agrave; nella ricerca di nuovi sponsor...i risultati disponibili
                        non erano molto incoraggianti per trovare fondi.
                        <br>
                        <br/>
                        <img class="imgLeft" src="../assets/img/storia/2010/gallery_fsu_2010_0117.jpg" alt=""/>
                        Tuttavia l'entusiasmo non manc&ograve;, anzi, gli studenti, nuovamente trainati dal solito trio
                        Walter -Wudy- Riviera, Lino Faedda e Paolo -Paolino- Erbizi tornarono ancora pi&ugrave; carichi
                        e decisi.
                        <br/>
                    </p>
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