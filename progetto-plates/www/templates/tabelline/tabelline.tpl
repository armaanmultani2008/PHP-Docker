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
<?php $this->layout('layout', [
    'titolo' => $titolo
]); ?>
    <main>
        <h1>Tabelline</h1>

        <ul>
            <?php for($i=1; $i<=10; $i++): ?>
            <li><a href="tabellina.php?numero=<?= $i ?>">Tabellina del <?= $i ?></a></li>
            <?php endfor; ?>
        </ul>
    </main>
</body>
</html>