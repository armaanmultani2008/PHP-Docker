<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Area Riservata</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
    <style>
        body {
            padding: 2rem;
            margin: 1.5rem;
        }
    </style>
</head>
<body>
    <?php
        echo "<h1>Accesso all'area Riservata</h1>";
        echo "<form action='controllo.php' method='post'>";

        echo '<label for="username">Username:</label>';
        echo '<input type="text" name="username" id="username" required>';

        echo "<br><br>";

        echo '<label for="password">Password:</label>';
        echo '<input type="password" name="password" id="password" required>';
        echo "<p id='requisiti-password'>* deve contenere min 8 caratteri</p>";
        echo "<p id='requisiti-password'>* deve contenere almeno una lettera maiuscola</p>";
        echo "<p id='requisiti-password'>* deve contenere almeno una cifra numerica</p>";

        echo '<button type="submit">Invia</button>';
        echo '</form>';
    ?>
</body>
</html>