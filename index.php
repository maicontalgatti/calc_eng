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
                            <input type="text" name="d" id="d" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="n">Valor de n:</label>
                            <input type="text" name="n" id="n" class="form-control">
                        </div>
                        <input type="submit" value="Calcular" name="calc1" class="btn btn-primary">
                        <h3 id="result1"></h3>
                    </div>
                </div>

                <div class="col-md-6">
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
                        <h3 id="result2"></h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
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
                        <h3 id="result3"></h3>
                    </div>
                </div>

                <div class="col-md-6">
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
                        <h3 id="result4"></h3>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        // Verifica o preenchimento dos campos antes de habilitar o botão "Calcular"
        function checkFields() {
            const calc1Fields = ["d", "n"];
            const calc2Fields = ["ks1", "ap", "f", "c"];
            const calc3Fields = ["fc", "vc"];
            const calc4Fields = ["pc", "fr"];

            const calc1Filled = checkCalcFields(calc1Fields);
            const calc2Filled = checkCalcFields(calc2Fields);
            const calc3Filled = checkCalcFields(calc3Fields);
            const calc4Filled = checkCalcFields(calc4Fields);

            const calc1Button = document.querySelector('input[name="calc1"]');
            const calc2Button = document.querySelector('input[name="calc2"]');
            const calc3Button = document.querySelector('input[name="calc3"]');
            const calc4Button = document.querySelector('input[name="calc4"]');

            calc1Button.disabled = !calc1Filled;
            calc2Button.disabled = !calc2Filled;
            calc3Button.disabled = !calc3Filled;
            calc4Button.disabled = !calc4Filled;
        }

        // Verifica se todos os campos de um cálculo estão preenchidos
        function checkCalcFields(fields) {
            return fields.every(field => {
                const input = document.getElementById(field);
                return input.value.trim() !== "";
            });
        }

        // Adiciona evento de verificação aos campos de entrada
        const inputs = document.querySelectorAll("input[type='text']");
        inputs.forEach(input => {
            input.addEventListener("keyup", checkFields);
        });
    </script>
</body>
</html>
