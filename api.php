<?php
header('Content-Type: application/json');
require_once 'lib/imdb/imdb.class.php';
$URL = $_GET["url"];
$IMDB = new IMDB($URL);
if ($IMDB->isReady) {
    echo json_encode($IMDB->getAll());
} else {
    echo 'Movie not found.';
}
exit;