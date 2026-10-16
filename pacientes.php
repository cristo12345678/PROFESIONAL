<html>
    <head>
        <title>NUTRICION</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body class='bodyo'>
        <center>
            <nav class='navbar'>
                <a href="menu.php">MENU</a>
            </nav>
            <h1>BIENVENIDO(A)</h1> <br>
            <h2>CONSULTA PACINTES</h2>
        <form action="pacientes.php" method="post">
            NO_PACIENTE: <input type="text" name="NO_ADORADORA"><br>
            CONTRASEÑA: <input type="text" name="N"><br><br>
            <input type="submit" value="CONSULTAR" ><br>
            </form>
            
            <h2>RESRVA CITA</h2>
            <form action="pacientes.php" method="post">
            FECHA: <input type="date" name="FECHA"><br>
            NOMBRE: <input type="text" name="NOMBRE"><br>
            EDAD: <input type="text" name="EDAD"><br>
            DOMICILIO: <input type="text" name="N"><br><br>
            <input type="submit" value="CONSULTAR" ><br>
        </center>
    </body>
</html>