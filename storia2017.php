<!--
	FILE: template.php
    DATE: 01-05-2014
    DESCRIPTION: Template Page
-->

<?php	//Include delle librerie
	include 'assets/php/template_function.php';
?>

<?php getHTMLSuperHead(); ?>
<html>
	
    <head>
    	<?php getHTMLHead('Storia 2015'); ?>
        <style type="text/css">
			.imgLeft {float:left !important; padding: 0 15px 0 0 !important;width: 33% !important;}
			.imgRight{float:right !important; padding: 15px 0 0 15px !important;width: 33% !important;}
			
			ul
			{
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
				<h1>Storia 2017</h1>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
           	<ul>
              		<li><a href="index.php">Home</a></li>
                  <li><a href="#">Storia 2017</a></li>
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
              		<img src="assets/img/storia/2017/gruppo_2017.jpg" alt="dummy">
                  <h2>Festascienze is us</h2>	<p text-indent="100%">

				  	Non so cosa dirvi davvero.<br>
					Cinque minuti alla vostra più difficile sfida organizzativa. Tutto si decide oggi.<br>
					<br>
					Ora voi o risorgete come squadra o cederete un centimetro alla volta, uno stand dopo l'altro fino alla disfatta.<br>
					Siete all'inferno adesso signori miei, credetemi... e potete rimanerci, farvi umiliare.<br>
					Oppure aprirvi la strada ed essere ricordati per sempre, potete scalare le pareti della festa un centimetro alla volta.<br>
					<br>
					Io però non posso farlo per voi, il mio tempo è già passato.<br>
					<br>
					Mi guardo intorno, vedo i vostri giovani volti e penso: "Certo che se potessi tornare indietro quante cose vorrei rifare per questa festa".<br>
					<br>
					Si, perché io, che ci crediate o no, ho passato notti insonni per questa festa, ho trascurato molte persone per questa festa, e l'ultimo anno
					ho trascurato anche l'università per questa festa.<br>
					<br>
					Sapete, col tempo e con l'età tante cose ci vengono tolte, ma questo fa parte della vita, ma tu lo impari solo quando quelle cose le 
					cominci a perdere, e scopri che la vita è un gioco di centimetri, e così è la festa.<br>
					<br>
					Perché in entrambi questi giochi, il margine di errore è ridottissimo. Capitelo, mezzo permesso consegnato un po' in anticipo o un po' in ritardo
					e voi non ce la fate. Mezzo problema detto troppo presto o troppo tardi e mancate l'obbiettivo, ma i centimetri che vi servono, sono intorno
					a voi.<br>
					<br>
					In questo staff si combatte per un centimetro.<br>
					In questo staff massacrate voi stessi e quelli intorno a voi per un centimetro.<br>
					Vi difendete con le unghie e con i denti per un centimetro.<br>
					<br>
					Perché sapete che quando andremo a sommare tutti quei centimetri, il totale farà la differenza tra la vittoria e la sconfitta, e voglio dirvi
					una cosa: in ogni scontro è colui il quale è disposto a morire che guadagnerà un centimetro.<br>
					Io so che se potrò avere un'esistenza appagante saraà perché sono disposto a battermi, e a morire per quel centimetro.<br>
					<br>
					In questo consiste lo staff: in quel logo che avete stampato sulle magliette, ma io non posso obbligarvi a lottare.<br>
					Guardate chi avete accanto e scommetto che ci vedrete una persona determinata, che si sacrificherà volentieri per questa squadra,
					consapevole del fatto che quando sarà il momento, voi farete lo stesso per lui.<br>
					<br>
					Perciò, o noi risorgiamo adesso, come collettivo o saremo annientati individualmente.<br>
					E' la festa... è tutto qui.<br>
            	</article>          
           </div>
    	</div>
    </div>    
</section>
                
        <!-- FOOTER -->
        <?php getHTMLFooter(); ?>
	</body>

</html>
