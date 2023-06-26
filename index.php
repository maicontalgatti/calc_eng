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
    <!-- O conteúdo da calculadora está envolvido em uma div com a classe "container" -->
    <div class="container">
        <form method="post" action="">
            <div class="row">
                <div class="col-md-6">
                    <!-- Cálculo 1 - Velocidade de Corte -->
                    <div class="calc-container">
                        <h2>Cálculo 1 - Velocidade de Corte</h2>
                        <!-- Campo de entrada para o valor de D -->
                        <div class="mb-3">
                            <label for="d">Valor de D:</label>
                            <input type="text" name="d" id="d" class="form-control">
                        </div>
                        <!-- Campo de entrada para o valor de n -->
                        <div class="mb-3">
                            <label for="n">Valor de n:</label>
                            <input type="text" name="n" id="n" class="form-control">
                        </div>
                        <!-- Botão de submit para calcular o resultado -->
                        <input type="submit" value="Calcular" name="calc1" class="btn btn-primary" disabled>
                        <!-- Elemento para exibir o resultado do cálculo -->
                        <h3 id="result1"></h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Cálculo 2 - Força de Corte -->
                    <div class="calc-container">
                        <h2>Cálculo 2 - Força de Corte</h2>
                        <!-- Campos de entrada para os valores de Ks1, ap, f e C -->
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
                        <!-- Botão de submit para calcular o resultado -->
                        <input type="submit" value="Calcular" name="calc2" class="btn btn-primary" disabled>
                        <!-- Elemento para exibir o resultado do cálculo -->
                        <h3 id="result2"></h3>
                    </div>
                </div>
            </div>

            <!-- ... Restante do código com os outros cálculos ... -->

        </form>
    </div>
    <script>
        // Função para verificar se todos os campos estão preenchidos e habilitar o botão de submit
        function checkFields() {
            // Lista dos campos de cada cálculo
            const calc1Fields = ["d", "n"];
            const calc2Fields = ["ks1", "ap", "f", "c"];

            // Verificar se todos os campos do cálculo 1 estão preenchidos
            const calc1Filled = checkCalcFields(calc1Fields);

            // Verificar se todos os campos do cálculo 2 estão preenchidos
            const calc2Filled = checkCalcFields(calc2Fields);

            // Obter os botões de submit dos cálculos
            const calc1Button = document.querySelector('input[name="calc1"]');
            const calc2Button = document.querySelector('input[name="calc2"]');

            // Habilitar ou desabilitar o botão de submit com base nos campos preenchidos
            calc1Button.disabled = !calc1Filled;
            calc2Button.disabled = !calc2Filled;
        }

        // Função para verificar se todos os campos de um cálculo estão preenchidos
        function checkCalcFields(fields) {
            // Verificar se todos os campos da lista estão preenchidos
            return fields.every(field => {
                // Obter o valor do campo de entrada
                const input = document.getElementById(field);
                // Verificar se o valor do campo está vazio ou não
                return input.value.trim() !== "";
            });
        }

        // Adicionar evento de verificação aos campos de entrada
        const inputs = document.querySelectorAll("input[type='text']");
        inputs.forEach(input => {
            input.addEventListener("keyup", checkFields);
        });

        // Desabilitar os botões de submit ao carregar a página
        window.addEventListener("load", function() {
            const calc1Button = document.querySelector('input[name="calc1"]');
            const calc2Button = document.querySelector('input[name="calc2"]');
            calc1Button.disabled = true;
            calc2Button.disabled = true;
        });
    </script>
</body>
</html>
