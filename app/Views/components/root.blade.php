<?= helper('html') ?>

<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <?= link_tag('cork/src/bootstrap/css/bootstrap.min.css') ?>
 <title>Titulo para todas las plantillas</title>
</head>

<body>
 <p>
  Esta es la prueba de fuego para poder usar blade
 </p>
 @yield('main-content')
</body>

</html>
