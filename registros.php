<?php

?>

<!DOCTYPE html>
<head>
    <title>Tesjo</title>
    <!-- enlazamos el documento js-->
    <script src="funciones.js"></script>
    <!--enlazamos el documento css-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="boton3d.css">
</head>
<body>
    <h1>Registro de alumnos</h1>
    <div style="background-image: url() no-repeat center top;">

    </div>
    <form action="registroAlumnos.php" method="post" id="container">
        <fieldset>
            <legend>Ingrese los datos del alumno</legend>
            <div>Lista Carrera</div><br><br>
                <select name="id">
                    <option value=1>Arquitectura</option>
                    <option value=2>Contador Público</option>
                    <option value=3>Ing. Electromecánica</option>
                    <option value=4>Ing. en Animación Digital y Efectos Visuales</option>
                    <option value=5>Ing. en Gestión Empresarial</option>
                    <option value=6>Ing. en Materiales</option>
                    <option value=7>Ing. en Sistemas Computacionales</option>
                    <option value=8>Ing. Industrial</option>
                    <option value=9>Ing. Mecatrónica</option>
                    <option value=10>Ing. Química</option>
                    <option value=11>Licenciatura en Turismo</option>
                    <option value=12>Ing. en Logística</option>
                </select><br><br>
            <!--Id de la carrera:<input name="" type="number" id="idCarrera"><br><br>-->
            Nombre:<input name="nombre" type="text" id="Nombre"><br><br>
            Apellido paterno:<input name="apepat" type="text" id="apellido paterno"><br><br>
            Apellido materno: <input name="apemat" type="text" id="apellido materno"><br><br>
            <!--Semestre:<input name="semestre" type="text" id="Semestre"><br><br>-->
            <div>Semestre</div><br>
                <select name="semestre">
                    <option value="Primero">Primero</option>
                    <option value="Segundo">Segundo</option>
                    <option value="Tercero">Tercero</option>
                    <option value="Cuarto">Cuarto</option>
                    <option value="Quinto">Quinto</option>
                    <option value="Sexto">Sexto</option>
                    <option value="Septimo">Septimo</option>
                    <option value="Octavo">Octavo</option>
                    <option value="Noveno">Noveno</option>
                    <option value="Decimo">Decimo</option>
                </select><br><br>
            <!--Salon:<input name="salon" type="text" id="Salon"><br><br>-->
            <!--Turno:<input name="turno" type="text" id="Turno"><br><br>-->
            <div>Turno</div><br>
                <select name="turno">
                    <option value=1>Matutino</option>
                    <option value=2>Vespertino</option>
                </select><br><br>
            <!--input type="submit" id="enviar" value="Enviar"><br><br-->
            <div class="center">
                <a class="pushme">
                    <span> <input class="inner" type="submit" id="enviar"></span>
                </a>
            </div>
        </fieldset>
    </form>
</body>