<?php include 'plantillas/header.php';
include 'conn.php';
$sql = "SELECT * FROM especialidades";
$r = mysqli_query($conn, $sql);
$productos = array();
	while($row = mysqli_fetch_assoc($r)){
		array_push($productos, $row);
	}
$sqll = "SELECT * FROM roll";
$r = mysqli_query($conn, $sqll);
$productoss = array();
	while($row = mysqli_fetch_assoc($r)){
		array_push($productoss, $row);
	}
?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>MEDICOS</h2>
					</div>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
						<h2>EDITAR MEDICO</h2>
						<input type="hidden" name="id" value="<?php echo $medico['idMedico'];?>" />
						<input type="numeric" name="identificacion" placeholder="Identificación" value="<?php echo $medico['medidentificacion'];?>" requerid>
						<input type="text" name="nombres" placeholder="Nombres:" value="<?php echo $medico['mednombres'];?>">
						<input type="text" name="apellidos"
                            placeholder="Apellidos:"   value="<?php echo $medico['medapellidos'];?>">
						<input type="email" name="correo" placeholder="Correo:" value="<?php echo $medico['medcorreo'];?>">
						<input type="numeric" name="telefono" placeholder="Telefono:" value="<?php echo $medico['medtelefono'];?>">
						<select name="especialidad">
							<?php
								for ($i=0; $i < count($productos) ; $i++) {
									print "<option value='".$productos[$i]["espNombre"]."'";
									print "/>".$productos[$i]["espNombre"]."</option>";
								}
							?>
						</select>
                        <select name="roll">
							<?php
								for ($i=0; $i < count($productoss) ; $i++) {
									print "<option value='".$productoss[$i]["idroll"]."'";
									print "/>".$productoss[$i]["tproll"]."</option>";
								}
							?>
						</select>
						<input type="submit" name="enviar" value="Actualizar">

					</form>
						<?php  if(!empty($errores)): ?>
							<ul>
							  <?php echo $errores; ?>
							</ul>
						<?php  endif; ?>
                    <a class="btn-regresar" href="medicos.php">Regresar</a>
				</article>
	</section>
<?php include 'plantillas/footer.php'; ?>
</body>
</html>
