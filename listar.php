<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp6_backend</title>
</head>

<body>


  <style>
    html {
      font-family: montserrat, arial, helvetica, sans-serif;
      background-color: lightgrey;
    }

    table {
      border-color: white;

    }

    h1 {
      text-decoration: underline;
    }

    h3 {
      font-family: monospace;
    }


    footer {
      font-family: 'Courier New', Courier, monospace;
    }
  </style>

  <h1>Tienda de ropa</h1>

  <h2>Lista de ropa</h2>

  <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
  <table border="1">

    <tr>
      <th>ID</th>
      <th>PRENDA</th>
      <th>MARCA</th>
      <th>TALLE</th>
      <th>PRECIO</th>
    </tr>
    <?php
    $conexion = mysqli_connect("127.0.0.1", "root", "");

    mysqli_select_db($conexion, "tienda");

    $consulta = "SELECT*FROM ropa";

    $datos = mysqli_query($conexion, $consulta);

    while ($reg = mysqli_fetch_array($datos)) { ?>
      <tr>
        <td><?php echo $reg['articulo']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
      </tr>
    <?php } ?>
  </table>

  <h4>Mediante código PHP, consultar a la base de datos lo siguiente:</h4>
  <p>a. Listar todos los registros:</p>

  <table border="1">
    <tr>
      <th>ID</th>
      <th>PRENDA</th>
      <th>MARCA</th>
      <th>TALLE</th>
      <th>PRECIO</th>
    </tr>

    <?php
    $consulta = "SELECT*FROM ropa";

    $datos = mysqli_query($conexion, $consulta);

    while ($reg = mysqli_fetch_array($datos)) { ?>
      <tr>
        <td><?php echo $reg['articulo']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
      </tr>

    <?php } ?>
  </table>

  <p>b. Listar todos los registros cuyo tipo de prenda sea 'buzo':</p>

  <table border="1">
    <tr>
      <th>ID</th>
      <th>PRENDA</th>
      <th>MARCA</th>
      <th>TALLE</th>
      <th>PRECIO</th>
    </tr>
    <?php
    $consulta = "SELECT*FROM ropa WHERE prenda = 'buzo'";
    $datos = mysqli_query($conexion, $consulta);
    while ($reg = mysqli_fetch_array($datos)) { ?>
      <tr>
        <td><?php echo $reg['articulo']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
      </tr>
    <?php } ?>
  </table>
  <p>c. Listar todos los registros cuya marca sea 'nike':</p>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>PRENDA</th>
      <th>MARCA</th>
      <th>TALLE</th>
      <th>PRECIO</th>
    </tr>
    <?php
    $consulta = "SELECT*FROM ropa WHERE marca = 'nike'";
    $datos = mysqli_query($conexion, $consulta);
    while ($reg = mysqli_fetch_array($datos)) { ?>
      <tr>
        <td><?php echo $reg['articulo']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
      </tr>
    <?php } ?>
  </table>
  <p>d. Listar todos los registros cuyo precio sea mayor a '500':</p>
  </table>

  <table border="1">
    <tr>
      <th>ID</th>
      <th>PRENDA</th>
      <th>MARCA</th>
      <th>TALLE</th>
      <th>PRECIO</th>
    </tr>
    <?php
    $consulta = "SELECT*FROM ropa WHERE precio > 500";
    $datos = mysqli_query($conexion, $consulta);
    while ($reg = mysqli_fetch_array($datos)) { ?>
      <tr>
        <td><?php echo $reg['articulo']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
      </tr>
    <?php } ?>
  </table>

</body>

<hr>

<footer>Angie Caprarulo para Potrero Digital Backend</footer>

</html>