<?php include 'plantillas/header.php';


$sqlll = "SELECT * FROM roll";
	$rrr = mysqli_query($conn, $sqlll);
	$ro = array();
	while($rowww = mysqli_fetch_assoc($rrr)){
		array_push($ro, $rowww);
}
?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>USUARIOS</h2>
					</div>
					<form class="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="login">
                            <h2>REGISTRAR USUARIOS</h2><br/>
                            <input type="text" name="usuario"placeholder="Usuario" autofocus/>
                            <input type="text" name="password" placeholder="Contraseña" />
                            <input type="text" name="password2" placeholder="Repita su contraseña" />
                            <select name="roll">
                                <option value="0">-Tipo del producto-</option>
							<?php
								for ($i=0; $i < count($ro) ; $i++) {
									print "<option value='".$ro[$i]["idroll"]."'";
									print "/>".$ro[$i]["tproll"]."</option>";
								}
							?>

                            </select>
                            <input type="submit" value="Registrar" />
                            <?php  if(!empty($errores)): ?>
                              <ul>
                                  <?php echo $errores; ?>
                              </ul>
                            <?php  endif; ?>
                          </form>
				</article>
	</section>
<?php include 'plantillas/footer.php'; ?>
</body>
</html>
