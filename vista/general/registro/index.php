<?php include_once '../../../controlador/validar.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Registro</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Botón de retroceso -->
    <div class="container mt-3">
        <a href="../iniciar/iniciar.php" class="btn btn-link text-decoration-none" aria-label="Volver al inicio">
            <i class="bi bi-house-fill fs-4 text-success"></i>
        </a>
    </div>

    <!-- Formulario -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6 col-md-4 border border-info rounded-3 p-3 mt-4 bg-light">
                <h3 class="text-center mb-3" style="font-size: 1.2rem;">Formulario</h3>
                <form action="" method="post">
                    <!-- Nombre -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control form-control-sm" type="text" name="nombre" id="nombre"
                            value="<?php echo htmlspecialchars($nombre); ?>" placeholder="Tu nombre">
                        <div class="text-danger small">
                            <?php echo $errores['nombre'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Apellido -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="apellido">Apellido</label>
                        <input class="form-control form-control-sm" type="text" name="apellido" id="apellido"
                            value="<?php echo htmlspecialchars($apellido); ?>" placeholder="Tu apellido">
                        <div class="text-danger small">
                            <?php echo $errores['apellido'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Correo -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="email">Correo Electrónico</label>
                        <input class="form-control form-control-sm" type="email" name="email" id="email"
                            value="<?php echo htmlspecialchars($email); ?>" placeholder="correo@gmail.com">
                        <div class="text-danger small">
                            <?php echo $errores['email'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Edad -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="edad">Edad</label>
                        <input class="form-control form-control-sm" type="text" name="edad" id="edad"
                            value="<?php echo htmlspecialchars($edad); ?>" placeholder="Ingresa tu edad">
                        <div class="text-danger small">
                            <?php echo $errores['edad'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Teléfono -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="telefono">Teléfono</label>
                        <input 
                            class="form-control form-control-sm" 
                            type="text" 
                            name="telefono" 
                            id="telefono" 
                            value="<?php echo htmlspecialchars($telefono); ?>" 
                            placeholder="Ingresa tu número de teléfono" 
                            maxlength="10" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                        <div class="text-danger small">
                            <?php echo $errores['telefono'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Género -->
                    <div class="input-group mb-2">
                        <label class="input-group-text" for="genero">Género</label>
                        <select class="form-select form-select-sm" name="genero" id="genero">
                            <option value="" selected>Seleccionar</option>
                            <option value="mas" <?php echo ($genero ?? '') === 'mas' ? 'selected' : ''; ?>>Masculino</option>
                            <option value="fem" <?php echo ($genero ?? '') === 'fem' ? 'selected' : ''; ?>>Femenino</option>
                            <option value="otro" <?php echo ($genero ?? '') === 'otro' ? 'selected' : ''; ?>>Otro</option>
                        </select>
                        <div class="text-danger small">
                            <?php echo $errores['genero'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="contraseña">Contraseña</label>
                        <input class="form-control form-control-sm" type="password" name="contraseña" id="contraseña"
                            value="<?php echo htmlspecialchars($contraseña); ?>" placeholder="Ingresa una contraseña">
                        <div class="text-danger small">
                            <?php echo $errores['contraseña'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Roles -->
                    <div class="input-group mb-2">
                        <label class="input-group-text" for="rol">Rol</label>
                        <select class="form-select form-select-sm" name="rol" id="rol">
                            <option value="" selected>Seleccionar</option>
                            <option value="adm" <?php echo ($rol ?? '') === 'adm' ? 'selected' : ''; ?>>Administrador</option>
                            <option value="cli" <?php echo ($rol ?? '') === 'cli' ? 'selected' : ''; ?>>Cliente</option>
                        </select>
                        <div class="text-danger small">
                            <?php echo $errores['rol'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="confirmar_contraseña">Confirmar Contraseña</label>
                        <input class="form-control form-control-sm" type="password" name="confirmar_contraseña" id="confirmar_contraseña"
                            placeholder="Confirma tu contraseña">
                        <div class="text-danger small">
                            <?php echo $errores['confirmar_contraseña'] ?? ''; ?>
                        </div>
                    </div>

                    <!-- Botón Guardar -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Mensajes de alerta -->
    <?php if ($formularioEnviado === false): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'VERIFIQUE LOS CAMPOS',
                confirmButtonText: 'Aceptar'
            });
        </script>
    <?php elseif ($formularioEnviado === true): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registro exitoso',
                text: 'Formulario enviado correctamente.',
                confirmButtonText: 'Aceptar'
            });
        </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
