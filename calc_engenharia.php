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
    <div class="container">
        <form method="post" action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="calc-container">
                        <h2>Cálculo 1 - Velocidade de Corte</h2>
                        <div class="mb-3">
                            <label for="d">Valor de D:</label>
                            <input type="text" name="d" id="d" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="n">Valor de n:</label>
                            <input type="text" name="n" id="n" class="form-control" required>
                        </div>
                        <input type="submit" value="Calcular" name="calc1" class="btn btn-primary">
                        <?php
                        if (isset($_POST["calc1"])) {
                            // Cálculo da Velocidade de Corte (Cálculo 1)
                            if (isset($_POST["d"]) && isset($_POST["n"])) {
                                $d = $_POST["d"];
                                $n = $_POST["n"];
                                $vc = (3.14 * $d * $n) / 1000;
                                echo "<h3>A Velocidade de Corte é: $vc</h3>";
                            } else {
                                echo "<h3>Por favor, forneça valores para D e n para calcular a Velocidade de Corte.</h3>";
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="calc-container">
                        <h2>Cálculo 2 - Força de Corte</h2>
                        <div class="mb-3">
                            <label for="ks1">Valor de Ks1:</label>
                            <input type="text" name="ks1" id="ks1" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="ap">Valor de ap:</label>
                            <input type="text" name="ap" id="ap" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="f">Valor de f:</label>
                            <input type="text" name="f" id="f" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="c">Valor de C:</label>
                            <input type="text" name="c" id="c" class="form-control" required>
                        </div>
                        <input type="submit" value="Calcular" name="calc2" class="btn btn-primary">
                        <?php
                        if (isset($_POST["calc2"])) {
                            // Cálculo da Força de Corte (Cálculo 2)
                            if (isset($_POST["ks1"]) && isset($_POST["ap"]) && isset($_POST["f"]) && isset($_POST["c"])) {
                                $ks1 = $_POST["ks1"];
                                $ap = $_POST["ap"];
                                $f = $_POST["f"];
                                $c = $_POST["c"];
                                $fc = $ks1 * $ap * pow($f, $c);
                                echo "<h3>A Força de Corte é: $fc</h3>";
                            } else {
                                echo "<h3>Por favor, forneça valores para Ks1, ap, f e C para calcular a Força de Corte.</h3>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="calc-container">
                        <h2>Cálculo 3 - Potência de Corte</h2>
                        <div class="mb-3">
                            <label for="fc">Valor de FC:</label>
                            <input type="text" name="fc" id="fc" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="vc">Valor de VC:</label>
                            <input type="text" name="vc" id="vc" class="form-control" required>
                        </div>
                        <input type="submit" value="Calcular" name="calc3" class="btn btn-primary">
                        <?php
                        if (isset($_POST["calc3"])) {
                            // Cálculo da Potência de Corte (Cálculo 3)
                            if (isset($_POST["fc"]) && isset($_POST["vc"])) {
                                $fc = $_POST["fc"];
                                $vc = $_POST["vc"];
                                $pc = ($fc * $vc) / 60000;
                                echo "<h3>A Potência de Corte é: $pc</h3>";
                            } else {
                                echo "<h3>Por favor, forneça valores para FC e VC para calcular a Potência de Corte.</h3>";
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="calc-container">
                        <h2>Cálculo 4 - Potência Efetiva do Motor</h2>
                        <div class="mb-3">
                            <label for="pc">Valor de PC:</label>
                            <input type="text" name="pc" id="pc" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="fr">Valor de FR:</label>
                            <input type="text" name="fr" id="fr" class="form-control" required>
                        </div>
                        <input type="submit" value="Calcular" name="calc4" class="btn btn-primary">
                        <?php
                        if (isset($_POST["calc4"])) {
                            // Cálculo da Potência Efetiva do Motor (Cálculo 4)
                            if (isset($_POST["pc"]) && isset($_POST["fr"])) {
                                $pc = $_POST["pc"];
                                $fr = $_POST["fr"];
                                $pm = $pc / $fr;
                                echo "<h3>A Potência Efetiva do Motor é: $pm</h3>";
                            } else {
                                echo "<h3>Por favor, forneça valores para PC e FR para calcular a Potência Efetiva do Motor.</h3>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
