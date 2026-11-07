<?php

require '../../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine('../../templates/biglietti', 'tpl');

function generateRandomString($length = 18) {
    $bytes = random_bytes(ceil($length / 2));
    return substr(bin2hex($bytes), 0, $length);
}

$nominativo = $_POST["nominativo"];
$num_biglietti = $_POST["num-biglietti"];
$data = $_POST["data"];
$ora = $_POST["ora"];
$zona = $_POST["zona"];
$tipo = $_POST["tipo"];

$costo = 0;
if ($zona === 1) $costo = 1.4;
else if ($zona === 2) $costo = 1.8;
else $costo = 2.2;

if ($tipo === 'durata-oraria') $costo += $costo/2;
else if ($tipo === 'giornaliero') $costo *= 2;

$codice = generateRandomString();

echo $template->render('biglietto',
    ['nominativo' => $nominativo,
    'num_biglietti' => $num_biglietti,
    'data' => $data,
    'ora' => $ora,
    'costo' => $costo,
    'codice' => $codice,
    'zona' => $zona,
    'tipo' => $tipo,
    ]
);