<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titolo?></title>
</head>
<body>
    <header>
        <h1><?= $titolo?></h1>
    </header>

    <?= $this->section('content')?>

    <footer>
        <section>Progetti di informatica con Plates</section>
    </footer>

</body>
</html>