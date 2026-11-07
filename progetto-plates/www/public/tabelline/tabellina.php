<?php

require '../../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine('../../templates/tabelline', 'tpl');

$numero = $_GET['numero'] ?? 1;
if (!is_numeric($numero)) {
    $numero = 1;
}
if ($numero < 1) {
    $numero = 1;
}
if ($numero > 10) {
    $numero = 10;
}

$titolo = "Tabellina del $numero";

echo $template->render('tabellina',
    [
        'numero' => $numero,
        'titolo' => $titolo
    ]
);