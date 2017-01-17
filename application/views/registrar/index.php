<!DOCTYPE html>
<html>
<head>
    <title>Registrar Usuario</title>
    <meta charset="utf-8">      <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/extra/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/extra/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/extra/css/login-styles.css">
    <script src="/extra/js/jquery-1.11.3.min.js"></script>
    <script src="/extra/bootstrap/js/bootstrap.min.js"></script>
    <script src="/extra/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/extra/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="/extra/js/validator.min.js"></script>

</head>

<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>REGISTRAR NUEVO USUARIO</h3><hr />
        </div>
        <div class="card-block">
        <form class="form-horizontal" enctype="multipart/form-data" role="form" data-toggle="validator" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">(*) Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required data-error="Email es inválido" value="<?php echo @$email?>">
                    <div class="help-block with-errors"><?php echo isset($error)?($error.' : '.@$email):'';?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="fechanac">(*) Cumpleaños:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="fechanac" name="fechanac" value="<?php echo @$fechanac?>" required>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#fechanac').datepicker({
                            format: "dd/mm/yyyy",
                            language: "es",
                            autoclose: true});
                    });
                </script>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">(*) Nombres:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo @$nombre?>" required >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellidos">(*) Apellidos:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo @$apellidos?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="telefono">Teléfono:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo @$telefono?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="clave">Contraseña:</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese Contraseña" data-minlength="6" required>
                    <div class="help-block">Mínimo 6 caracteres</div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="reclave">Confirme Contraseña:</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="reclave" name="reclave" placeholder="Confirme Contraseña" required data-match="#clave" data-match-error="Las contraseñas no coinciden">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Crear Usuario</button>
                    <button class="btn btn-default" onclick="location.href='./autorizar'; return false;">Retornar</button>
                </div>
            </div>
        </form>

        </div><!-- /card-container -->
    </div>
</div><!-- /container -->

</body>
</html>