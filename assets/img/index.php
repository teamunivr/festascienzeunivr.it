    <?php
	include 'assets/utils/template_function.utils';
?>

<!doctype html>
<html>
	
    <head>
     
    	<?php getHTMLHead('Home'); ?>
        
       	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/TimeCircles.js"></script>
		<link href="assets/css/TimeCircles.css" rel="stylesheet">
        
       	<style type="text/css">

			@media (max-width:1200px){
				#DateCountdown {
					display: none;
				}
			}
			
			@media (min-width:1200px){
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
            
                <a id="home-prev" href="#" class="prev fa fa-chevron-left" style="position: absolute; left: 0px; bottom: 0px;"></a>
                <a id="home-next" href="#" class="next fa fa-chevron-right" style="position: absolute; right: 0px; bottom: 0px;"></a>
                
            </div>
            <div id="flex-home" class="flexslider">
                
                <ul class="slides">
                    <?php if(false) { ?>
                	<li> 
                    	<div id="DateCountdown" data-date="2018-06-08 19:00:00" style="width: 1140px; height: 390px;"></div>
                        <div class="hideit"><img src="assets/img/gallery/gallery_2016.jpg" alt="2016" ></div>
					  	<script>
							$("#DateCountdown").TimeCircles({ time: {
								Days: { text: "Giorni" },
								Hours: { text: "Ore" },
								Minutes: { text: "Minuti" },
								Seconds: { text: "Secondi" }
							}});
							
							var updateTime = function(){
								var date = $("#date").val();
								var time = $("#time").val();
								var datetime = date + ' ' + time + ':00';
								$("#DateCountdown").data('date', datetime).TimeCircles().start();
							}
							$("#date").change(updateTime).keyup(updateTime);
							$("#time").change(updateTime).keyup(updateTime);
						</script>
                        

                    </li>
                    <?php } ?>
                    <li> 
                        <img src="assets/img/storia/2017/gruppo_2017.jpg" alt="2017" >
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2017</h2>
                        </div>
                    </li>
					<li> 
                        <img src="assets/img/gallery/gallery_2016.jpg" alt="2016" >
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2016</h2>
                        </div>
                    </li>
					<li> 
                        <img src="assets/img/gallery/gallery_2015.jpg" alt="2015" >
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2015</h2>
                        </div>
                    </li>
                    <li> 
                        <img src="assets/img/gallery/gallery_2014.jpg" alt="2014" >
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2014</h2>
                        </div>
                    </li>
                    <li> 
                        <img src="assets/img/gallery/gallery_2013.jpg" alt="2013" >
                        <div class="flex-caption">
                            <h2> Festa di fine anno 2013</h2>
                        </div>
                    </li>
                    <li>
                    	<img src="assets/img/gallery/gallery_2012.jpg" alt="2012" >
                    	<div class="flex-caption">
                            <h2> Festa di fine anno 2012</h2>
                        </div>
                    </li>
                    <li> 
                    <img src="assets/img/gallery/gallery_2011.jpg" alt="2011" >
                    	<div class="flex-caption">
                            <h2> Festa di fine anno 2011</h2>
                        </div>
                    </li>
                    <li> 
                    <img src="assets/img/gallery/gallery_2010.jpg" alt="2010" >
                    	<div class="flex-caption">
                            <h2> Festa di fine anno 2010</h2>
                        </div>
                    </li>
                    <li>
                    <img src="assets/img/gallery/gallery_2009.jpg" alt="2009" >
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
				<h1>FESTASCIENZE 2018</h1>
				<br>
				<a href="/main/festa2017.php"><img style="max-width: 100%; display: block; margin: auto;" src="/assets/img/shosho_in_progress.png"></a>
				<!--a href="/festa2017.php"><h3 style="text-align: center;">Tutti i dettagli dell'evento qui</h3></a-->
				<br>
			</div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            	<h1>Prossimi eventi</h1>
                <?php /*			  
                <!--<div class="event-feed">
                	<div class="date">
                    	<span class="day">22</span>
                        <span class="month">MAG</span>
                    </div>
                    <br><h5>Inizio pre-consumazioni</h5>
                    <p>Vendita Pre-Consumazioni</p>
                </div>
                
                <div class="event-feed">
                	<div class="date">
                    	<span class="day">30</span>
                        <span class="month">MAG</span>
                    </div>
                    <br><h5>Fine Iscrizioni</h5>
                    <p>Concorso #SCIELFIE</p>
                </div>
                
                <div class="event-feed">
                	<div class="date">
                    	<span class="day">31</span>
                        <span class="month">MAG</span>
                    </div>
                    <br><h5>Inizio Votazioni</h5>
                    <p>Concorso #SCIELFIE</p>
                </div>
                
                <div class="event-feed">
                	<div class="date">
                    	<span class="day">05</span>
                        <span class="month">GIU</span>
                    </div>
                    <br><h5>Fine pre-consumazioni</h5>
                    <p>Vendita Pre-Consumazioni</p>
                </div>-->
				//*/ ?>
                
                <div class="event-feed">
                	<div class="date">
                    	<span class="day">08</span>
                        <span class="month">GIU</span>
                    </div>
                    <br><h5>FESTA SCIENZE 2018</h5>
                    <p>Festa di fine anno</p>
                </div>
                
                <!--<div class="more-events">	
                    <a href="#"><b class=" fa fa-calendar"></b>Browse more events</a>
                    <div class="has"></div>
                </div>--><!--\\more-events-->
               
         		<div class="clearfix"></div>
                
            <!--</div><!--latest events-->
			
			
			<?php //getHTMLNews(); ?>  
  
            <!--<div class="col-lg-3 col-md-3 col-sm-3">-->
            	<h1>video</h1>
                
				<div class="video-feed">
                	<img src="assets/img/video/video_2016_promo.jpg" alt=""/>
                    <a href="video.php?year=2016"><span class="fa fa-play"></span></a>
                    <h6>2016 - PROMO</h6>
                </div><!--\\video-feed-->
				
				<div class="video-feed">
                	<img src="assets/img/video/video_2015_promo.jpg" alt=""/>
                    <a href="video.php?year=2015"><span class="fa fa-play"></span></a>
                    <h6>2015 - PROMO</h6>
                </div><!--\\video-feed-->
				
                <div class="video-feed">
                	<img src="assets/img/video/video_2014_promo.jpg" alt=""/>
                    <a href="video.php?year=2014"><span class="fa fa-play"></span></a>
                    <h6>2014 - PROMO</h6>
                </div><!--\\video-feed-->

				<div class="video-feed">
                	<img src="assets/img/video/video_2013_festa.jpg" alt=""/>
                    <a href="video.php?year=2013f"><span class="fa fa-play"></span></a>
                    <h6>2013</h6>
                </div><!--\\video-feed-->
                
                <div class="video-feed">
                	<img src="assets/img/video/video_2013_promo.jpg" alt=""/>
                    <a href="video.php?year=2013p"><span class="fa fa-play"></span></a>
                    <h6>2013 - PROMO</h6>
                </div><!--\\video-feed-->
            	
                <div class="video-feed">
                	<img src="assets/img/video/video_2012_festa.jpg" alt=""/>
                    <a href="video.php?year=2012"><span class="fa fa-play"></span></a>
                    <h6>2012</h6>
                </div><!--\\video-feed-->
                               
            </div><!--latest videos-->
        </div>
    </div>   
         
</section>
        <?php getHTMLFooter(); ?>
	</body>

</html>
