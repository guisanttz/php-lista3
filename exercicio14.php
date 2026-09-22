<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 14 - Palíndromo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercício 14 - Palíndromo</h1>
        <form method="post">
            <div class="mb-3">
                <label for="palavra" class="form-label">Digite uma palavra</label>
                <input type="text" id="palavra" name="palavra" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <br>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $palavra = trim($_POST['palavra']);
            $palavra = strtolower(str_replace(" ", "", $palavra));
            $palavraInvertida = strrev($palavra);

            if($palavra == $palavraInvertida){
                echo "<h4>$palavra<h4>";
                echo "<h4>" . $palavraInvertida . "<h4>";
                echo "<h4>É um palíndromo<h4>";
            } else {
                echo "<h4>$palavra<h4>";
                echo "<h4>" . $palavraInvertida . "<h4>";
                echo "<h4>Não é um palíndromo<h4>";
            }

        }

        ?>
        <a href="index.html">Retornar ao início</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>