<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Area Privada - Administrador</title>
    <meta charset="utf-8">      <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
        <h1>Inicio</h1>
        <h2>Bienvenido <?php echo $nombre; ?>!<br /> tu nivel es: Administrador
        </h2>
        <button class="btn btn-default" onclick="location.href='./autorizar/salir'; return false;">Salir</button>
    </div>
</body>
</html>
