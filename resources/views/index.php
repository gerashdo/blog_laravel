<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenid@</title>
</head>
<body>
    <h1>Bienvenido al sistema <b><?php echo $nombre ?></b></h1>
    <h3>Materias</h3>
    <ul>
        <!-- <?php foreach ($materias as $materia) {
            echo "<li>$materia</li>";
        }
        ?> -->

        <?php foreach ($materias as $materia): ?>
            <li><?php echo e($materia) ?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>