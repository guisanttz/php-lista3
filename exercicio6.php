<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 6 - Número Arredondado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercício 6 - Número Arredondado</h1>
        <form method="post" action="exercicio6.php">
            <div class="mb-3">
                <label for="valor" class="form-label">Digite um valor decimal</label>
                <input type="number" step="0.01" inputmode="decimal" name="valor" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <br>
        <a href="index.html">Retornar o início</a>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $valor = $_POST['valor'];
            echo "<h4>Arredondado para cima: " . ceil($valor) . "</h4>"; // Arredonda para cima
            echo "<h4>Arredondado para baixo: " . floor($valor) . "</h4>"; // Arredonda para baixo
            echo "<h4>Arredondado normalmente: " . round($valor) . "</h4>"; // Arredonda normalmente
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>