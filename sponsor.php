<!--
	FILE: sponsor.php
    DATE: 03-05-2014
    DESCRIPTION: Sponsor Page
-->

<?php	//Include delle librerie
	include 'assets/php/template_function.php';
?>

<?php getHTMLSuperHead(); ?>
<html>
	
    <head>
    	<?php getHTMLHead('Sponsor'); ?>
	</head>

	<body>
    	 <!-- HEADER -->
        <?php getHTMLHeader(); ?>
                
        <!-- ------------------------- PAGE ---------------------------------- -->

	<section class="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
            		<h1>Sponsor</h1>
					<h5>I nostri sponsor del <?php echo($year); ?></h5>
				</div>
            
				<div class="col-lg-6 col-md-6 col-sm-6">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="sponsor.php">Sponsor</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="gallery">
		<div class="container">
       	 	<div class="row">
			 	<?php
					getHTMLSponsor();
			 	?>
        	</div>
    	</div> 
	</section>
    
        <!-- ----------------------- END PAGE -------------------------------- -->
                
        <!-- FOOTER -->
        <?php getHTMLFooter(); ?>
	</body>

</html>
