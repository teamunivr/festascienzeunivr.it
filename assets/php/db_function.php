<?php
	/* Info di connessione */
	$host = '62.149.150.212';
	$username = 'Sql748250';
	$password = 'exeej4bu85';
	$database = 'Sql748250_1';
	
	/* Variabili globali */
	$connection = 0;
	
	/* Variabili del sito */
	$site = 'http://www.festascienzeunivr.it';	//Indirizzo del sito
	$year = '2018';	//Anno di settaggio del sito
	
	//Social
	$facebook = 'https://www.facebook.com/FestaFineAnnoScienzeMMFFNN';
	$twitter = 'https://twitter.com/festascienzevr';
	$googleplus = 'https://plus.google.com/u/0/101593380513335031287/posts';
	$flickr = 'https://www.flickr.com/photos/festascienzeunivr/';
	$instagram = 'http://instagram.com/festascienzeunivr/';
	$youtube = 'https://www.youtube.com/user/festascienzeunivr';
		
	/**
	 * Funzione di connessione al DB
	 */
	function connect()
	{
		global $host, $username, $password, $database, $connection;
				
		if($connection)
			return true;
		
		if(!($connection = mysql_connect($host, $username, $password)))	
			die("Connessione non riuscita: " . mysql_error());
		
		if(!($confirm = mysql_select_db($database))) 
			die("Connessione non riuscita: " . mysql_error());
	}
	
	/**
	 * Funzione di disconnessione dal DB
	 */
	function disconnect()
	{			
		global $connection;
		
		if(!$connection)	
			return true;
		
		mysql_close($connection);
		$connection = false;
	}
		
	
	/**
	 *	Ottengo le informazioni di uno sponsor
	 */
	 function infoSponsor($anno, $nome)
	{	
		connect();
		 
		$query = 'SELECT * FROM Sponsor WHERE nome = \'' . $nome . '\' AND anno = \'' . $anno . '\'';
			
		if(!($result = mysql_query($query)))
			die('Query \"' . $query .'\" non valida: ' . mysql_error());
		
		$r = null; 
		while (($row = mysql_fetch_assoc($result))) {
			$r['nome'] = $row['nome'];
			$r['anno'] = $row['anno'];
			$r['titolo'] = $row['titolo'];
			$r['link'] = $row['link'];
			$r['ammontare'] = $row['ammontare'];
		}
		
		mysql_free_result($result);
		 
		disconnect();
		return $r;
	}
	
	/**
	 * Genera il codice HTML che genera gli sponsor
	 */
	function getHTMLSponsor()
	{
		global $year;
	
		connect();
		
		$query = 'SELECT * FROM Sponsor WHERE anno = ' . $year . ' ORDER BY ammontare DESC, nome ASC';
		
		if(!($result = mysql_query($query))) 
			die('Query \"' . $query .'\" non valida: ' . mysql_error());
				
	?>
		<div class="container">
			<div class=" photo-gallery">
				<?php while (($row = mysql_fetch_assoc($result))) {	?>
					<div class="photo-item type1">
              			<figure>
                   			<img src="assets/img/sponsor/<?php echo($row['anno']); ?>/sponsor_<?php echo($row['anno']); ?>_<?php echo($row['nome']); ?>.jpg" alt=""/>
                  		</figure>
                  		<div class="fig-caption"><a href="<?php echo($row['link']); ?>" onclick="window.open(this.href);return false;"><?php echo($row['titolo']); ?></a></div>
             		</div>
                <?php } ?>
			</div>
		</div>
	<?php
		mysql_free_result($result);
	
		disconnect();
	}
            		  
	/**
	 *	Inserisce una nuova news
	 */
	 function insertNews($anno, $nome, $titolo, $data, $descrizione, $contenuto)
	 {
		connect();
		 
		$query = 'INSERT INTO News (anno, nome, titolo, data, descrizione, contenuto) VALUES (\'' . $anno . '\', \'' . $nome . '\', \'' . $titolo . '\', \'' . $data . '\', \'' . $descrizione . '\', \'' . $contenuto . '\')';
		
		if(!($result = mysql_query($query))) 
			die('Query \"' . $query .'\" non valida: ' . mysql_error());
		
		
		mysql_free_result($result);
		
		disconnect();
	 }
	 
	/**
	 *	Elimina una news
	 */
	function deleteNews($anno, $nome)
	{
		connect();
		$query = 'DELETE FROM News WHERE anno = \'' . $anno . '\' AND  nome = \'' . $nome . '\'';
		
		if(!($result = mysql_query($query)))
			die('Query \"' . $query .'\" non valida: ' . mysql_error());
		
		mysql_free_result($result);
		
		disconnect();
	} 
	 
	/**
	 *	Ottengo le informazioni di una news
	 */
	function infoNews($anno,$nome)
	{
		connect();
	
		$query = 'SELECT * FROM News WHERE anno = \'' . $anno . '\' AND nome = \'' . $nome . '\'';
	
		if(!($result = mysql_query($query)))
			die('Query \"' . $query .'\" non valida: ' . mysql_error());
	
		$r = null; 
		while (($row = mysql_fetch_assoc($result))) {
			$r['titolo'] = $row['titolo'];
			$r['data'] = $row['data'];
			$r['anno'] = $row['anno'];
			$r['descrizione'] = $row['descrizione'];
			$r['contenuto'] = $row['contenuto'];
			$r['nome'] = $row['nome'];
		}
	
		mysql_free_result($result);
	
		disconnect();
		return $r;
	}
	 
	 
	/**
	 * Genera il codice HTML che genera le news in HomePage
	 */
	function getHTMLNews()
	{
		connect();
	
		$query = 'SELECT * FROM News ORDER BY data DESC, nome ASC LIMIT 4';

		if(!($result = mysql_query($query)))
			die('Query \"' . $query .'\" non valida: ' . mysql_error());
			
	?>
		<div class="col-lg-6 col-md-6 col-sm-6">
            	<h1>News</h1>
	<?php while (($row = mysql_fetch_assoc($result))) { ?>
			<div class="news-feed">
				<img src="assets/img/news/<?php echo($row['anno']); ?>/news_<?php echo($row['anno']); ?>_<?php echo($row['nome']); ?>_menu.jpg" alt="dummy">
				<a href="news.php?aa=<?php echo($row['anno']); ?>&n=<?php echo($row['nome']); ?>"><?php echo($row['titolo']); ?></a>
				<ul>
					<li><span class="fa fa-calendar"></span><?php echo($row['data']); ?></li>
				</ul>
				p><?php echo($row['descrizione']); ?></p>
			</div>
	<?php } ?>
		</div>
	<?php
		mysql_free_result($result);
	
		disconnect();
	}
	?>
