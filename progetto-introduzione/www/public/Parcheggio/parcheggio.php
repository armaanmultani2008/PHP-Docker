<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Calcolo Costi Parcheggio</title>
</head>

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            padding: 0;
            margin: 0;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            vertical-align: top;
        }
    </style>
<body>
    <?php
        function correggi_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $tipo_veicolo = correggi_input($_GET['veicolo']) ?? '';
        $costo_orario = ($tipo_veicolo == 'Automobile') ? 2 : 1;

        $nome = "";
        $ore = 0;
        $costo_totale = 0;
        $style_form = "";
        $style_table = "style='display:none'";
        $style_error = "style='display:none'";

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = correggi_input($_POST['nome']);
            $ore= correggi_input($_POST['ore']);

            if($nome != "" && $ore > 0) {
                $style_form = "style='display:none'";
                $style_table = "";
                $costo_totale= $costo_orario * $ore;
            }
            else {
                $style_error = "style='color:red'";
            }
        }
    ?>
    <h2>Prenotazione Parcheggio</h2>
    <p>Veicolo selezionato: <b><?php echo $tipo_veicolo?></b></p>

    <form action="<?=$_SERVER['PHP_SELF']?>?veicolo=<?=$tipo_veicolo?>" method="post" <?php echo $style_form?>>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome">

        <br><br>

        <label for="ore">Numero di ore:</label>
        <select id="ore" name="ore">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>

        <br><br>

        <button type="submit">Calcola prezzo</button>
    </form>

    <div <?php echo $style_table?>>
        <h3>Riepilogo della prenotazione</h3>
        <table>
            <tr>
                <th>Nome cliente:</th>
                <td><?php echo $nome?></td>
            </tr>
            <tr>
                <th>Tipologia di veicolo:</th>
                <td><?php echo $tipo_veicolo?></td>
            </tr>
            <tr>
                <th>Numero di ore:</th>
                <td><?php echo $ore?></td>
            </tr>
            <tr>
                <th>Costo orario:</th>
                <td><?php echo $costo_orario?></td>
            </tr>
            <tr>
                <th><b>Costo totale:</b></th>
                <td><b><?php echo $costo_totale?></b></td>
            </tr>
        </table>
        <p>Prenotazione effettuata con successo!</p>
    </div>

    <p <?php echo $style_error?>>Errore! Inserisci tutti i dati!</p>

    <br>

    <a href='home.php'>Torna alla home</a>
</body>
</html>
