<?php include 'plantillas/header.php'; ?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>PACIENTES</h2>
					</div>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
						<h2>EDITAR PACIENTES</h2>
						<input type="hidden" name="id" value="<?php echo $paciente['idPaciente'];?>" />
						<input type="numeric" name="identificacion" placeholder="Identificación" value="<?php echo $paciente['pacIdentificacion'];?>" requerid>
						<input type="text" name="nombres" placeholder="Nombres:" value="<?php echo $paciente['pacNombre'];?>">
						<input type="text" name="apellidos"
                            placeholder="Apellidos:"   value="<?php echo $paciente['pacApellidos'];?>">
						<input type="date" name="fechaNacimiento" placeholder="Fecha Nacimiento:" value="<?php echo $paciente['pacFechaNacimiento'];?>">
                        <select name="sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
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

