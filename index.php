<!DOCTYPE html>
<html>
<head>
    <title>Verificar Números</title>
</head>
<body>
    <form action="verificar_numeros.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Verificar">
    </form>
    <?php
    if(isset($_POST['numero'])){ 
        $numero = $_POST['numero'];
        if(is_numeric($numero)){ 
            if ($numero % 2 == 0) {
                echo "O número é par<br>";
            } else {
                echo "O número é ímpar<br>";
            }
            if (strpos($numero, '.') !== false || strpos($numero, ',') !== false) { // Verifica se o número tem casas decimais
                echo "O número não é redondo<br>";
            } else {
                echo "O número é redondo<br>";
            }
            if ($numero > 0) {
                echo "O número é positivo";
            } elseif ($numero < 0) {
                echo "O número é negativo";
            } else {
                echo "O número é neutro (zero)";
            }
        } else {
            echo "Por favor, insira um valor numérico válido.";
        }
    }
    ?>
</body>
</html>
