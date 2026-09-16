<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4 - Dia, mês e ano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercício 4 - Dia, mês e ano</h1>
        <form method="post">
            <div class="mb-3">
                <label for="dia" class="form-label">Digite o dia</label>
                <input type="number" id="dia" name="dia" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="mes" class="form-label">Digite o mês</label>
                <input type="number" id="mes" name="mes" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Digite o ano</label>
                <input type="number" id="ano" name="ano" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $dia = (int) $_POST['dia'];
            $mes = (int) $_POST['mes'];
            $ano = (int) $_POST['ano'];

            if ($ano > 2026) {
                echo "<h4>Data inválida</h4>";
                echo "<h4>Motivo: Ano maior do que o atual (2026)</h4>";
            } else {

                $data = "$dia-$mes-$ano";
                $data = date('d/m/Y', strtotime($data));

                switch ($mes) {
                    case '1':
                        if ($dia > 31) {
                            echo "<h4>Data inválida</h4>";
                            echo "<h4>Motivo: Janeiro só possui 31 dias</h4>";
                        } else {
                            echo "<h4>Data correta</h4>";
                            echo "<h4>$data</h4>";
                        }
                        break;

                    default:
                        # code...
                        break;
                }
            }
        }



        ?>
        <br>
        <a href="index.html">Retornar ao início</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>