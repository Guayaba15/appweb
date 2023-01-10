<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js"> </script>

<?php if ($entrar == "admin") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '-BIENVENIDO-',
                text: 'al sistema <?php echo $_SESSION['user'] ?>',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'menu.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "estandar") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '-BIENVENIDO-',
                text: 'al sistema <?php echo $_SESSION['user'] ?>',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'menu.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "error1") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '-Usuario o contraseña incorrectos-',
                text: 'por favor no verifique',
                showConfirmButton: false,
                timer: 1500
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "error") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '-Ups! Ha ocurrido un error-',
                text: ':(',
                showConfirmButton: false,
                timer: 1500
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "insert_alum") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se registro correctamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'alumnos1.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "insert_contact") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se registro correctamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'contactos.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "insert_user") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se registro correctamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'usuarios.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "actualizar_alum") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se actualizo el alumno exitosamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'alumnos1.php';
            })
        }
        mensaje();
    </script>


<?php } elseif ($entrar == "actualizar_contact") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se actualizo el contacto exitosamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'contactos1.php';
            })
        }
        mensaje();
    </script>




<?php } elseif ($entrar == "eliminar_alumn") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se elimino exitosamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'alumnos1.php';
            })
        }
        mensaje();
    </script>
    <?php } elseif ($entrar == "eliminar_contacto") { ?>

<script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se elimino exitosamente',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'contactos1.php';
        })
    }
    mensaje();
</script>
<?php } elseif ($entrar == "eliminar_usuario") { ?>

<script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se elimino exitosamente',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'usuarios1.php';
        })
    }
    mensaje();
</script>


<?php } elseif ($entrar == "actualizar_usua") { ?>
    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se actualizo el usuario exitosamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function(){
                location.href = 'usuarios.php'
            })
        }
        mensaje();
    </script>
<?php } ?>