<?php
/* Info di connessione */
$host = '62.149.150.212';
$username = 'Sql748250';
$password = 'exeej4bu85';
$database = 'Sql748250_1';

/* Variabili del sito */
$site = 'http://www.festascienzeunivr.it';    //Indirizzo del sito
$year = '2018';    //Anno di settaggio del sito

//Social
$facebook = 'https://www.facebook.com/FestaFineAnnoScienzeMMFFNN';
$twitter = 'https://twitter.com/festascienzevr';
$flickr = 'https://www.flickr.com/photos/festascienzeunivr/';
$instagram = 'http://instagram.com/festascienzeunivr/';
$youtube = 'https://www.youtube.com/user/festascienzeunivr';

function connect() {
    global $host, $username, $password, $database;

    $connection = null;
    if ($connection)
        return true;

    if (!($connection = mysqli_connect($host, $username, $password)))
        die("Connessione non riuscita: " . mysqli_error($connection));

    if (!($confirm = mysqli_select_db($connection, $database)))
        die("Connessione non riuscita: " . mysqli_error($connection));

    return $connection;
}

/**
 * Funzione di disconnessione dal DB
 * @param $connection
 */
function disconnect($connection): void {
    mysqli_close($connection);
    return;
}

function getSponsors() {
    global $year;
    $connection = connect();
    $query = 'SELECT * FROM Sponsor WHERE anno = ' . $year . ' ORDER BY ammontare DESC, nome ASC';

    if (!($result = mysqli_query($connection, $query)))
        die('Query \"' . $query . '\" non valida: ');

    disconnect($connection);
    return mysqli_fetch_assoc($result);
}

function getHTMLSponsor($result) {
    ?>
    <div class="container">
        <div class=" photo-gallery">
            <?php
            foreach ($result as $row) { ?>
                <div class="photo-item type1">
                    <figure>
                        <img src="assets/img/sponsor/<?php echo($row['anno']); ?>/sponsor_<?php echo($row['anno']); ?>_<?php echo($row['nome']); ?>.jpg"
                             alt=""/>
                    </figure>
                    <div class="fig-caption"><a href="<?php echo($row['link']); ?>"
                                                onclick="window.open(this.href);return false;"><?php echo($row['titolo']); ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div> <?
}

function insertNews($anno, $nome, $titolo, $data, $descrizione, $contenuto) {
    $connection = connect();

    $query = 'INSERT INTO News (anno, nome, titolo, data, descrizione, contenuto) VALUES (\'' . $anno . '\', \'' . $nome . '\', \'' . $titolo . '\', \'' . $data . '\', \'' . $descrizione . '\', \'' . $contenuto . '\')';

    if (!($result = mysqli_query($connection, $query)))
        die('Query \"' . $query . '\" non valida: ' . mysqli_error($connection));

    mysqli_free_result($result);
    disconnect($connection);
}

function deleteNews($anno, $nome) {
    $connection = connect();
    $query = 'DELETE FROM News WHERE anno = \'' . $anno . '\' AND  nome = \'' . $nome . '\'';

    if (!($result = mysqli_query($connection, $query)))
        die('Query \"' . $query . '\" non valida: ' . mysqli_error($connection));

    mysqli_free_result($result);
    disconnect($connection);
}

function infoNews($anno, $nome) {
    $connection = connect();
    $query = 'SELECT * FROM News WHERE anno = \'' . $anno . '\' AND nome = \'' . $nome . '\'';

    if (!($result = mysqli_query($connection, $query)))
        die('Query \"' . $query . '\" non valida: ' . mysqli_error($connection));

    $r = null;
    while (($row = mysqli_fetch_assoc($result))) {
        $r['titolo'] = $row['titolo'];
        $r['data'] = $row['data'];
        $r['anno'] = $row['anno'];
        $r['descrizione'] = $row['descrizione'];
        $r['contenuto'] = $row['contenuto'];
        $r['nome'] = $row['nome'];
    }

    mysqli_free_result($result);
    disconnect($connection);
    return $r;
}

function getHTMLNews() {
    $connection = connect();

    $query = 'SELECT * FROM News ORDER BY data DESC, nome ASC LIMIT 4';

    if (!($result = mysqli_query($connection, $query)))
        die('Query \"' . $query . '\" non valida: ' . mysqli_error($connection));

    ?>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <h1>News</h1>
        <?php while (($row = mysqli_fetch_assoc($result))) { ?>
            <div class="news-feed">
                <img src="assets/img/news/<?php echo($row['anno']); ?>/news_<?php echo($row['anno']); ?>_<?php echo($row['nome']); ?>_menu.jpg"
                     alt="dummy">
                <a href="news.php?aa=<?php echo($row['anno']); ?>&n=<?php echo($row['nome']); ?>"><?php echo($row['titolo']); ?></a>
                <ul>
                    <li><span class="fa fa-calendar"></span><?php echo($row['data']); ?></li>
                </ul>
                <p><?php echo($row['descrizione']); ?></p>
            </div>
        <?php } ?>
    </div>
    <?php
    mysqli_free_result($result);

    disconnect($connection);
}

?>
