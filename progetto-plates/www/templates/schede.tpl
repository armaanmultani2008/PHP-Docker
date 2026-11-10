<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabelline</title>
</head>
<body>
<?php
    /**
    * @var $titolo
    * @var $persone
    */
?>
    <?php $this->layout('layout', [
        'titolo' => $titolo
    ]); ?>
    <main>

        <ul>
            <?php foreach($persone as $key => $persona): ?>
            <li><a href="scheda.php?id=<?=$key?>"><?= $persona['nome'] . ' ' . $persona['cognome'] ?></a></li>
            <?php endforeach; ?>
        </ul>

    </main>
</body>
</html>