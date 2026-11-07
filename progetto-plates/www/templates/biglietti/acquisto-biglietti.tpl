<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acquisto Biglietti</title>
</head>
<body>
    <h2>Acquista Biglietti</h2>

    <form action="/biglietti/biglietto.php" method="post">
        <br>
        <label for="nominativo">Nominativo: </label>
        <input id="nominativo" name="nominativo" type="text" required>

        <br>
        <label for="num-biglietti">Numero biglietti: </label>
        <select id="num-biglietti" name="num-biglietti" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <br>
        <label for="data">Data:</label>
        <input id="data" name="data" type="date" required>

        <br>
        <label for="ora">Ora:</label>
        <input id="ora" name="ora" type="time" required>

        <br>
        <label for="zona">Zona: </label>
        <select id="zona" name="zona" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>

        <br>
        <label for="tipo">Tipo: </label>
        <select id="tipo" name="tipo" required>
            <option value="corsa-singola">Corsa singola</option>
            <option value="durata-oraria">Durata oraria</option>
            <option value="giornaliero">Giornaliero</option>
        </select>

        <br>
        <button type="submit">Invia</button>
    </form>
</body>
</html>