<?php
include("conexion.php");

$alumnos = "SELECT * FROM alumnos";
$carreras = "SELECT carrera.nombre FROM carrera INNER JOIN alumnos on carrera.idca=alumnos.idca";
$result = mysqli_query($conectar, $alumnos);
$result2 = mysqli_query($conectar, $carreras);
$j = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="usuarios.css">
    <title>Tecnológico de estudios superiores de Jocotitlán</title>
</head>

<body>

    <div id="sidemenu" class="menu-collapsed">
        <!--header-->
        <div id="header">
            <div id="title"><span>Control de alumnos</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>
        <!--profile-->
        <div id="profile">
            <div id="photo"><img src="img/encargado.png" alt=""></div>
            <div id="name"><span>Elias Salazar Reyes</span></div>
        </div>
        <!--items-->
        <div id="menu-items">
            <div class="item">
                <a href="#">
                    <div class="icon"><img src="img/maestros.png" alt=""></div>
                    <div class="title"><span>Maestros</span></div>
                </a>
                <div class="item separator"></div>
            </div>

            <div class="item">
                <a href="inicioSesion.html">
                    <div class="icon"><img src="img/cerrar.png" alt=""></div>
                    <div class="title"><span>Cerrar sesion</span></div>
                </a>
            </div>
        </div>

    </div>
    <div id="main-container">
        <span>Alumnos registrados</span>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID ALUMNO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">SEMESTRE</th>
                <th scope="col">SALON</th>
                <th scope="col">TURNO</th>
            </tr>
        </thead>
    </table>

    <div class="container-sm">


        <div class="text-center">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                //echo nl2br("\n");
                $j += 1;
            ?>




                <table class="table">

                    <tbody>
                        <script>
                            for (i = 1; i <= 1; i++) {
                                document.write("<tr>" + "<td scope='row'><strong><?php echo $j . " " ?></strong></td>" +
                                    "<td scope='row'><strong><?php echo $row["idal"] ?></strong></td>" +
                                    "<td scope='row'><strong><?php echo $row["nombre"] . " " ?><?php echo $row["ape_pat"] . " " ?><?php echo $row["ape_mat"] ?></strong></td>" +
                                    "<td scope='row'><strong><?php echo $row["semestre"] ?></strong></td>" +
                                    "<td scope='row'><strong><?php echo $row["salon"] ?></strong></td>" +
                                    "<td scope='row'><strong><?php echo $row["turno"] ?></strong></td>" +
                                    "</tr>");
                            }
                        </script>
                    </tbody>
                </table>

        </div>
    </div>


<?php } ?>


<script>
    const btn = document.querySelector('#menu-btn');
    const menu = document.querySelector('#sidemenu');
    const datos = document.querySelector('#datos');
    btn.addEventListener('click', e => {
        menu.classList.toggle("menu-expanded");
        menu.classList.toggle("menu-collapsed");
        datos.classList.toggle("contraido");
        datos.classList.toggle("extendido");
    });
</script>

</body>

</html>