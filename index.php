<!-- Projeto para mostrar recursos básicos do PHP -->
<!-- Executar no terminal: php -S localhost:8000 -->

<?php
$title = "Bom Dia";

$show = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Display de valor de Variável -->
    <h1>
        <?php echo $title ?>
    </h1>

    <!-- Display Condicional -->
    <?php
    if ($show == true) {
        echo "<p>Elemento Secreto</p>";
    }
    ?>

    <!-- Display Listas -->
    <ul>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<li>Item {$i}</li>";
        }
        ?>
    </ul>

    <!-- Se tiverem interesse em pesquisar -->
    <!-- PHP Partials - Componentes e Rotas -->
</body>

</html>