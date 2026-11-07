<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biglietto</title>
    <style>
        th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nominativo</th>
            <td><?= $this->e($nominativo) ?></td>
        </tr>
        <tr>
            <th>Numero biglietti</th>
            <td><?= $this->e($num_biglietti) ?></td>
        </tr>
        <tr>
            <th>Logo</th>
            <td>logo</td>
        </tr>
        <tr>
            <th>Data</th>
            <td><?= $this->e($data) ?></td>
        </tr>
        <tr>
            <th>Ora</th>
            <td><?= $this->e($ora) ?></td>
        </tr>
        <tr>
            <th>Costo</th>
            <td><?= $this->e($costo) ?>$</td>
        </tr>
        <tr>
            <th>Codice</th>
            <td><?= $this->e($codice) ?></td>
        </tr>
        <tr>
            <th>Zona</th>
            <td><?= $this->e($zona) ?></td>
        </tr>
        <tr>
            <th>Tipo</th>
            <td><?= $this->e($tipo) ?></td>
        </tr>
    </table>
</body>
</html>