<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .calc-container {
            background-color: #f8f9fa;
            border: 1px solid black;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Cálculo 1 - Velocidade de Corte
        if (isset($_POST["calc1"])) {
            $d = $_POST["d"];
            $n = $_POST["n"];

            $vc = (3.14 * $d * $n) / 1000;

            echo "<h3>Resultado Cálculo 1 - Velocidade de Corte: " . $vc . "</h3>";
        }

        // Cálculo 2 - Força de Corte
        if (isset($_POST["calc2"])) {
            $ks1 = $_POST["ks1"];
            $ap = $_POST["ap"];
            $f = $_POST["f"];
            $c = $_POST["c"];

            $fc = $ks1 * $ap * pow($f, $c);

            echo "<h3>Resultado Cálculo 2 - Força de Corte: " . $fc . "</h3>";
        }

        // Cálculo 3 - Potência de Corte
        if (isset($_POST["calc3"])) {
            $fc = $_POST["fc"];
            $vc = $_POST["vc"];

            $pc = ($fc * $vc) / 60000;

            echo "<h3>Resultado Cálculo 3 - Potência de Corte: " . $pc . "</h3>";
        }

        // Cálculo 4 - Potência Efetiva do Motor
        if (isset($_POST["calc4"])) {
            $pc = $_POST["pc"];
            $fr = $_POST["fr"];

            $pm = $pc / $fr;

            echo "<h3>Resultado Cálculo 4 - Potência Efetiva do Motor: " . $pm . "</h3>";
        }
    }
    ?>

    <div class="container">
        <form method="post" action="">
            <div class="row">
                <div class="col-md-6">
                    <!-- Cálculo 1 - Velocidade de Corte -->
                    <div class="calc-container">
                        <h2>Cálculo 1 - Velocidade de Corte</h2>
                        <div class="mb-3">
                            <label for="d">Valor de D:</label>
                            <input type="text" name="d" id="d" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="n">Valor de n:</label>
                            <input type="text" name="n" id="n" class="form-control">
                        </div>
                        <input type="submit" value="Calcular" name="calc1" class="btn btn-primary">
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Cálculo 2 - Força de Corte -->
                    <div class="calc-container">
                        <h2>Cálculo 2 - Força de Corte</h2>
                        <div class="mb-3">
                            <label for="ks1">Valor de Ks1:</label>
                            <input type="text" name="ks1" id="ks1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="ap">Valor de ap:</label>
                            <input type="text" name="ap" id="ap" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="f">Valor de f:</label>
                            <input type="text" name="f" id="f" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="c">Valor de C:</label>
                            <input type="text" name="c" id="c" class="form-control">
                        </div>
                        <input type="submit" value="Calcular" name="calc2" class="btn btn-primary">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Cálculo 3 - Potência de Corte -->
                    <div class="calc-container">
                        <h2>Cálculo 3 - Potência de Corte</h2>
                        <div class="mb-3">
                            <label for="fc">Valor de FC:</label>
                            <input type="text" name="fc" id="fc" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="vc">Valor de VC:</label>
                            <input type="text" name="vc" id="vc" class="form-control">
                        </div>
                        <input type="submit" value="Calcular" name="calc3" class="btn btn-primary">
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Cálculo 4 - Potência Efetiva do Motor -->
                    <div class="calc-container">
                        <h2>Cálculo 4 - Potência Efetiva do Motor</h2>
                        <div class="mb-3">
                            <label for="pc">Valor de PC:</label>
                            <input type="text" name="pc" id="pc" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="fr">Valor de FR:</label>
                            <input type="text" name="fr" id="fr" class="form-control">
                        </div>
                        <input type="submit" value="Calcular" name="calc4" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
