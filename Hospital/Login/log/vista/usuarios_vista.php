<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}

$consulta = $conexion -> prepare("
	SELECT * FROM usuarios INNER JOIN medicos INNER JOIN roll ON usuarios.idmed=medicos.idMedico and medicos.idroll=roll.idroll");

$consulta ->execute();
$consulta = $consulta ->fetchAll();
if(!$consulta){
	$mensaje .= 'NO HAY USUARIOS PARA MOSTRAR';
}
?>
<?php include 'plantillas/header.php'; ?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>USUARIOS</h2>
					</div>
					<a class="agregar" href="registrarusuarios.php">Agregar Usuarios</a>
						<table class="tabla">
						  <tr>
							<th>Nombres</th>
							<th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Trabajador</th>
                            <th colspan="2">Opciones</th>
						  </tr>
						<?php foreach ($consulta as $Sql): ?>
						<tr>
							<?php echo "<td>". $Sql['mednombres']. "</td>"; ?>
                            <?php echo "<td>". $Sql['medapellidos']. "</td>"; ?>
                            <?php echo "<td>". $Sql['usuario']. "</td>"; ?>
                            <?php echo "<td>". $Sql['tproll']. "</td>"; ?>
                            <?php echo "<td class='centrar'>"."<a href='actualizarusuario.php?id=".$Sql['id']."' class='editar'>Editar</a>". "</td>"; ?>
						  <?php echo "<td class='centrar'>"."<a href='eliminar_usuario.php?id=".$Sql['id']."' class='eliminar'>Eliminar</a>". "</td>"; ?>
						</tr>
						<?php endforeach; ?>
					</table>
							<?php  if(!empty($mensaje)): ?>
							  <ul>
								  <?php echo $mensaje; ?>
							  </ul>
							<?php  endif; ?>
				</article>
	</section>
<?php include 'plantillas/footer.php'; ?>
</body>
</html>
