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
                             <?php
                        if($paciente['pacSexo']=='Masculino'){
                            print "<option value='Masculino'>Masculino</option>";
                            print "<option value='Femenino'>Femenino</option>";
                        }else{
                            print "<option value='Femenino'>Femenino</option>";
                            print "<option value='Masculino'>Masculino</option>";
                        }
                    ?>
                        </select>
  <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <label> Si es mujer, esta envarazada</label><br>
            <select name="emba">
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                            <option value="No segura">No estoy segura</option>
                        </select>
    <label> Dolor en el pecho</label><br>
            <select name="dpecho">
                            <?php
                        if($paciente['pdpecho']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                </select>
            <label> Aumento de peso</label><br>
            <select name="apeso">
                            <?php
                        if($paciente['papeso']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Pérdida de peso</label><br>
            <select name="ppeso">
                            <?php
                        if($paciente['pppeso']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Dificultad respiratoria</label><br>
            <select name="drespira">
                            <?php
                        if($paciente['pdrespira']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Disturbios en la presión arterial</label><br>
            <select name="dpresion">
                            <?php
                        if($paciente['pdpresion']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Disturbios gastrointestinales</label><br>
            <select name="dgasto">
                            <?php
                        if($paciente['pdgasto']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Disturbios genitourinarios</label><br>
            <select name="dgenit">
                            <?php
                        if($paciente['pdgenit']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label>Disturbios hematológicos</label><br>
            <select name="dhema">
                            <?php
                        if($paciente['pdhema']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Disturbios linfáticos</label><br>
            <select name="dislina">
                           <?php
                        if($paciente['pdislina']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Disturbios musculoesqueléticos</label><br>
            <select name="dismusc">
                            <?php
                        if($paciente['dismusc']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Disturbios neurológicos</label><br>
            <select name="disneu">
                            <?php
                        if($paciente['disneu']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Disturbios psiquiátricos</label><br>
            <select name="dispsi">
                            <?php
                        if($paciente['pdispsi']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label>Asma</label><br>
            <select name="asma">
                            <?php
                        if($paciente['pasma']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Cáncer</label><br>
            <select name="cancer">
                            <?php
                        if($paciente['pcancer']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Desórdenes cardíacos</label><br>
            <select name="desocardi">
                            <?php
                        if($paciente['pdesocardi']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Desórdenes psiquiátricos</label><br>
            <select name="desopsi">
                            <?php
                        if($paciente['pdesoposi']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Diabetes</label><br>
            <select name="diabetes">
                            <?php
                        if($paciente['pdiabetes']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Hipertensión</label><br>
            <select name="hispertension">
                            <?php
                        if($paciente['phispertension']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Epilepsia</label><br>
            <select name="epilepsia">
                            <?php
                        if($paciente['pepilepsia']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label> Enfermedades en las manos, pies y boca</label><br>
            <select name="enfermedades">
                            <?php
                        if($paciente['penfermedades']=='Si'){
                            print "<option value='Si'>Si</option>";
                            print "<option value='No'>No</option>";
                        }else{
                            print "<option value='No'>No</option>";
                            print "<option value='Si'>Si</option>";
                        }
                    ?>
                        </select>
            <label>Actualmente, ¿toma alguna medicación? Por favor, especifique cuál y por qué</label>
                        <textarea placeholder="medicamento:" name="medicamento"><?php echo $paciente['pmedicamento'];?></textarea>

            <label>¿Tiene alguna alergia?</label>
                        <textarea placeholder="¿Tiene alergias?:" name="alergias"><?php echo $paciente['palergias'];?></textarea>
          <input type="submit" name="enviar" value="Actualizar">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>

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

