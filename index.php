<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
    <form method="POST" action="">
            <label for="base_triangulo">Digite o valor da base de triângulo retângulo (em unidade de comprimento genérica)</label>
            <input type="number" id="base_triangulo" name="base_triangulo" required> 
            <br />
            <br />
            <label for="altura_triangulo">Digite o valor da altura de triângulo retângulo (em unidade de comprimento genérica)</label>
            <input type="number" id="altura_triangulo" name="altura_triangulo" required> 
            <br />
            <br />
            <label for="limite_area">Digite um valor limite para a área</label>
            <input type="number" id="limite_area" name="limite_area" required> 
            <br />
            <br />
            <button type="submit" name="calcular_area">Calcular Área</button>
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['calcular_area'])) {
                $base = $_POST['base_triangulo'];
                $altura = $_POST['altura_triangulo'];
                $limiteArea = $_POST['limite_area'];
                $area = ($base * $altura) /2;
                echo "<p> A área do triangulo é: ", $area, " u.c<sup>2</sup> (unidades de comprimento)</p>";
                if($area > $limiteArea) {
                    echo "<p> A área é maior que o limite de " . $limiteArea . " u.c<sup>2</sup></p>";
                } else {
                    echo "<p> A área é menor ou igual que o limite de ". $limiteArea . " u.c<sup>2</sup></p>";
                }
            }
        }
        ?>
    </body>
</html>