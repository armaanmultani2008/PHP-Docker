<?php

require '../../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine('../../templates/biglietti', 'tpl');

echo $template->render('acquisto-biglietti',
    []
);