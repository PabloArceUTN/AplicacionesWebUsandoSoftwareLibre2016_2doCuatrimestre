<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>
      Hola <?= is_null($name) ? 'unknow' : $name ?> <?= is_null($lastname) ? 'unknow' : $lastname ?>
    </h1>
  </body>
</html>
