<html>
<head>
<meta charset="UTF-8">
<title>Proyecto CRUD</title>
<link media="all" href="css/style.css" rel="stylesheet" type="text/css"></link>
<script type="text/JavaScript">
function borra_cliente(id) {
var answer = confirm('¿Estás seguro que deseas borrar el cliente?');
if (answer) {
// si el usuario hace click en ok,
// se ejecutar borra.php
window.location = 'borra.php?id=' + id;
}
}
</script>
</head>
<body>
<div id="wrapper">
<div id="header">
<div id="logo">
<img class="TamImg" src="img/logo_web.jpeg"></img>
</div>
<div id="title">
Manager Emulation LOL
</div>
</div>
<div id="content">
<?php
$default = 'lista'; //nuestra página por defecto.
$accion = isset($_GET['accion']) ? $_GET['accion'] : $default; //obtenemos la
//página que queremos mostrar.
$accion = basename($accion); //nos quedamos con el nombre.
if (!file_exists($accion . '.php')) { //comprobamos que el fichero exista
$accion = $default; //si no existe mostramos la página por defecto
//NOTA: Podíamos mostrar la página 404
}
include( $accion . '.php'); //y ahora mostramos la pagina llamada
?>
</div>
<div id="footer">
<div id="subtitle">
    <p class="BotIzquierda"> #MELOL</p>
    <p class="BotDerecha"> Alejandro Rodríguez Moreno </p>
</div>
</div>
</div>
</body>
</html>