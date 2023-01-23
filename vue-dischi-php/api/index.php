<?php
// realizzo la struttura dell'api

include_once __DIR__ . '/../database/index.php';
// nel dubbio che il path sia corretto posso fare un var_dump di verifica e aggiungendo api all'url per visualizzarlo
// include_once mi permette di includere questo file solo una volta così non rischio di creare doppioni
// var_dump($database);

header('Content-type: application/json');
// specifica al browser come leggere il file quando viene aperto. Quando vieni aperto, leggi tutto sotto forma json e non con altri linguaggi di programmazione

echo json_encode ($database);
// trasformo l'array multidimensionale che ho importato in forato json

?>