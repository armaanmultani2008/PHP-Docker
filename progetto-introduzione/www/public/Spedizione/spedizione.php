<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dettagli Spedizione</title>

    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid;
            padding: 0.4rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        function correggi_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            return htmlspecialchars($data);
        }

        $tipo_spedizione = correggi_input($_GET['tipo_spedizione']);

        $costo_kg = ($tipo_spedizione == 'Standard') ? 3 : 5;

        $style_table = "style='display:none'";
        $style_errore = "style='display:none'";

        $nome = "";
        $peso_pacco = 0;
        $invio_aereo = null;
        $costo_totale = 0;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(!empty($_POST['nome']) && !empty($_POST['peso-pacco'])) {
                $nome = correggi_input($_POST['nome']);
                $peso_pacco = correggi_input($_POST['peso-pacco']);
                $invio_aereo = $_POST['invio-aereo'] ?? null;

                $costo_totale = $costo_kg * $peso_pacco;

                $style_table = "";
            }
            else {
                $style_errore = "style='color:red'";
            }
        }
    ?>

    <h2>Inserisci dettagli spedizione:</h2>

    <p>Tipologia spedizione scelta: <b><?=$tipo_spedizione?></b></p>

    <p <?=$style_errore?>>Attenione: compilari tutti i campi.</p>

    <form action="<?=$_SERVER['PHP_SELF']?>?tipo_spedizione=<?=$tipo_spedizione?>" method="post">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="inserisci il tuo nome...">

        <br><br>

        <label for="peso-pacco">Peso del pacco (kg):</label>
        <select name="peso-pacco" id="peso-pacco">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>

        <br><br>

        <input type="checkbox" name="invio-aereo" value="invio-aereo" id="invio-aereo">
        <label for="invio-aereo">Sì (costo aggiuntivo)</label>

        <br><br>

        <button type="submit">Calcola spedizione</button>
    </form>

    <div <?=$style_table?>>
        <br><br>

        <table>
            <tr>
                <th>Nome: </th>
                <td><?=$nome?></td>
            </tr>
            <tr>
                <th>Tipologia di spedizione: </th>
                <td><?=$tipo_spedizione?></td>
            </tr>
            <tr>
                <th>Peso del pacco: </th>
                <td><?=$peso_pacco?> kg</td>
            </tr>
            <tr>
                <th>Costo per kg: </th>
                <td><?=$costo_kg?> $</td>
            </tr>
            <tr>
                <th>Costo totale: </th>
                <td><?=$costo_totale?> $</td>
            </tr>
        </table>

        <p>Prenotazione avvenuta con successo!</p>
    </div>

    <br>
    <a href="home.php">Torna alla pagina Home</a>
</body>
</html>