<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
$Metodos = new Usuarios();
$Metodos->validateSession();
$Id = $_GET['Id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Eliminar Docente</h1>
    <form method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        <p>Estas seguro de eliminar al Docente?</p>
        <input type="submit" value="Eliminar Docente">
    </form>
</body>

</html>