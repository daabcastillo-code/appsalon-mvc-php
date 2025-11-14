<h1 class="nombre-pagina">Recuperar Password</h1>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>
<p class="descripcion-pagina">Coloca tu nuevo password</p>

<form class="formulario" method="POST">
        <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu password" name="password">
    </div>
<input type="submit" class="boton" value="Guardar Nuevo Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesion</a>
    <a href="/crear-cuenta">¿aun no tienes una cuenta? Crear una</a>
</div>