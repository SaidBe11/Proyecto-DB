<?php include ('conexion.php');

$carrera = "SELECT carrera.nombre FROM carrera inner join alumnos on (carrera.idca=1 and alumnos.idca=1) and alumnos.idal=1";
$alumno = "SELECT nombre, ape_pat, ape_mat FROM alumnos where idal=1";
$consultaCa = mysqli_query($conectar, $carrera);
$consultaAl = mysqli_query($conectar, $alumno);
$resultadoCa = mysqli_fetch_assoc($consultaCa);
$resultadoAl = mysqli_fetch_assoc($consultaAl);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Perfil del alumno</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="sidemenu" class="menu-collapsed">
        <!--header-->
        <div id="header">
            <div id="title"><span>Perfil Alumno</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <!--profile-->
        <div id="profile">
            <div id="photo"><img src="img/usuario.jpeg" alt=""></div>
            <div id="name"><span><?php  echo $resultadoAl["nombre"]." ".$resultadoAl["ape_pat"]." ".$resultadoAl["ape_mat"] ?></span></div>
        </div>

        <!--items-->
        <div id="menu-items">
            <div class="item">
                <a href="carga.php">
                    <div class="icon"><img src="img/registro.png" alt=""></div>
                    <div class="title"><span>Carga academica</span></div>
                </a>
                <div class="item separator"></div>
            </div>
            <div class="item">
                <a href="inicioSesion.html">
                    <div class="icon"><img src="img/cerrar.png" alt=""></div>
                    <div class="title"><span>Cerrar sesion</span></div>
                </a>
                <div class="item separator"></div>
            </div>
        </div>
    </div>

    <div id="main-container"><span>Datos del Alumno</span></div>

    <div id="datos" class="contraido">
        <h2 id="titulo nombre">Nombre</h2>
        <h2 id="nombre"><?php echo $resultadoAl["nombre"] ?></h2>
        <h2 id="ape_pat">Apellido paterno</h2>
        <h2 id="apellido_pat"><?php echo $resultadoAl["ape_pat"] ?></h2>
        <h2 id="ape_mat">Apellido materno</h2>
        <h2 id="apellido_mat"><?php echo $resultadoAl["ape_mat"] ?></h2>
        <h2 id="carrera">Carrera</h2>
        <h2 id="nombre_carrera"><?php echo $resultadoCa["nombre"] ?></h2>
        <div id="imagen"><img src="img/usuario.jpeg" alt=""></div>
    </div>

    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        const datos = document.querySelector('#datos');
        btn.addEventListener('click',e=>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            datos.classList.toggle("contraido");
            datos.classList.toggle("extendido");
        });
    </script>
    
</body>
</html>
