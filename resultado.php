<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Mastermind Numérico</title>
</head>
<body>
    <div class="result">
      <?php if ($won): ?>
        <h3>¡Correcto! El número era <?= htmlspecialchars($secret) ?>.</h3>
      <?php else: ?>
        <h3>¡Has perdido! El número era <?= htmlspecialchars($secret) ?>.</h3>
      <?php endif; ?>
    </div>
<a href="index.php">Volver a jugar</a>

</body>
</html>