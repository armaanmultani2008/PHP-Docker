<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prenota Pizzeria</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
    <style>
        body {
            padding: 1.5rem 2rem;
        }
    </style>
</head>
<body>
    <h2>Prenota da myPizza</h2>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="sistemazione">Tipo di sistemazione:</label>
        <select id="sistemazione" name="sistemazione">
            <option value=" " disabled selected>seleziona</option>
            <option value="tavolo da 2">Tavolo da 2</option>
            <option value="tavolo da 4">Tavolo da 4</option>
            <option value="tavolo da 8">Tavolo da 8</option>
            <option value="esterno">Esterno</option>
        </select>

        <br><br>

        <label for="pizza">Pizza:</label>
        <select id="pizza" name="pizza">
            <option value=" " disabled selected>seleziona</option>
            <option value="Quattro Stagioni">Quattro Stagioni</option>
            <option value="Margherita">Margherita</option>
            <option value="Diavola">Diavola</option>
            <option value="Prosciutto Cotto">Prosciutto Cotto</option>
            <option value="Prosciutto Crudo">Prosciutto Crudo</option>
            <option value="Salame">Salame</option>
            <option value="Salsiccia">Salsiccia</option>
        </select>

        <br><br>

        <label for="aggiunte">Seleziona le eventuali aggiunte:</label>
        <div id="aggiunte">
            <input type="checkbox" id="prosciutto" name="aggiunte" value="prosciutto">
            <label for="prosciutto">Prosciutto</label><br>

            <input type="checkbox" id="ricotta" name="aggiunte" value="ricotta">
            <label for="ricotta">Ricotta</label><br>

            <input type="checkbox" id="salsiccia" name="aggiunte" value="salsiccia">
            <label for="salsiccia">Salsiccia</label>
        </div>

        <br><br>

        <label for="impasto">Seleziona il tipo di impasto:</label>
        <div id="impasto">
            <input type="radio" id="senza-glutine" value="senza glutine" name="impasto">
            <label for="senza-glutine">Senza Glutine</label><br>

            <input type="radio" id="normale" value="normale" name="impasto">
            <label for="normale">Normale</label>
        </div>

        <br><br>

        <button type="submit">Prenota</button>
    </form>

    <?php
        if (empty($_POST['sistemazione']) || empty($_POST['pizza'])
            || empty($_POST['impasto']))
            echo "<h3>Inserire tutti i dati</h3>";
        else {
            $sistemazione = $_POST['sistemazione'];
            $pizza = $_POST['pizza'];
            $aggiunte = (isset($_POST['aggiunte'])) ? $_POST['aggiunte'] : 'niente';
            $impasto = $_POST['impasto'];

            echo "<h3>La pizza $pizza con impasto $impasto e aggiunte di $aggiunte,
                è stata correttamente prenotata con sistemazione $sistemazione</h3>";
        }
    ?>
</body>
</html>
