<!DOCTYPE html>
<html lang=" en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="POST" action="processa.php">
            Número 1:<input name="v1">
            Número 2:<input name="v2">
            <select name="operações">
                <option value="mais">Soma</option>
                <option value="vezes">Multiplicação</option>
                <option value="dividido">Divisão</option>
                <option value="menos">Subtração</option>
            </select>
            <button name="Enter">Enviar</button>
        </form>
    </body>
</html>