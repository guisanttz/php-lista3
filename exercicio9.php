<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 9 - Frase sem Espaços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercício 9 - Frase sem Espaços</h1>
        <form method="post">
            <div class="mb-3">
                <label for="frase" class="form-label">Digite uma frase</label>
                <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <br>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $frase = $_POST['frase'];

            echo "<h4>Frase original: $frase</h4>";
            echo "<h4>Frase sem espaço inicial e final: " . trim($frase) . "</h4>";
            echo "<h4>Frase sem espaços: " . str_replace(' ', '', $frase) . "</h4>";
        }

        ?>
        <a href="index.html">Retornar ao início</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>