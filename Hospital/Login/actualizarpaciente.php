<?php session_start();
	if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
	}


	require 'funciones.php';
    require 'conn.php';

	try{
		$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
	}catch(PDOException $e){
		echo "ERROR: " . $e->getMessge();
		die();
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id = limpiarDatos($_POST['id']);
		$identificacion = limpiarDatos($_POST['identificacion']);
		$nombres = limpiarDatos($_POST['nombres']);
		$apellidos = limpiarDatos($_POST['apellidos']);
		$fechaNacimiento = limpiarDatos($_POST['fechaNacimiento']);
		$sexo = limpiarDatos($_POST['sexo']);
        $emb = limpiarDatos($_POST['emba']);
        $dpecho = limpiarDatos($_POST['dpecho']);
        $apeso = limpiarDatos($_POST['apeso']);
        $ppeso = limpiarDatos($_POST['ppeso']);
        $drespira = limpiarDatos($_POST['drespira']);
        $dpresion = limpiarDatos($_POST['dpresion']);
        $dgasto = limpiarDatos($_POST['dgasto']);
        $dgenit = limpiarDatos($_POST['dgenit']);
        $dhema = limpiarDatos($_POST['dhema']);
        $dislina = limpiarDatos($_POST['dislina']);
        $dismusc = limpiarDatos($_POST['dismusc']);
        $disneu = limpiarDatos($_POST['disneu']);
        $dispsi = limpiarDatos($_POST['dispsi']);
        $asma = limpiarDatos($_POST['asma']);
        $cancer = limpiarDatos($_POST['cancer']);
        $desocardi = limpiarDatos($_POST['desocardi']);
        $desoposi = limpiarDatos($_POST['desopsi']);
        $diabetes = limpiarDatos($_POST['diabetes']);
        $hispertension = limpiarDatos($_POST['hispertension']);
        $epilepsia = limpiarDatos($_POST['epilepsia']);
        $enfermedades = limpiarDatos($_POST['enfermedades']);
        $medicamento = limpiarDatos($_POST['medicamento']);
        $alergias = limpiarDatos($_POST['alergias']);

		$statement = $conexion->prepare(
		"UPDATE pacientes
        SET pacIdentificacion = :identificacion,
		pacNombre =:nombres,
		pacApellidos =:apellidos,
		pacFechaNacimiento =:fechaNacimiento,
		pacSexo =:sexo,
        pemba=:emb,
        pdpecho=:dpecho,
        papeso=:apeso,
        pppeso=:ppeso,
        pdrespira=:drespira,
        pdpresion=:dpresion,
        pdgasto=:dgasto,
        pdgenit=:dgenit,
        pdhema=:dhema,
        pdislina=:dislina,
        dismusc=:dismusc,
        disneu=:disneu,
        pdispsi=:dispsi,
        pasma=:asma,
        pcancer=:cancer,
        pdesocardi=:desocardi,
        pdesoposi=:desoposi,
        pdiabetes=:diabetes,
        phispertension=:hispertension,
        pepilepsia=:epilepsia,
        penfermedades=:enfermedades,
        pmedicamento=:medicamento,
        palergias=:alergias
		WHERE idPaciente = :id");

		$statement ->execute(array(
        ':identificacion'=>$identificacion,
		':nombres'=>$nombres,
		':apellidos'=>$apellidos,
		':fechaNacimiento'=>$fechaNacimiento,
		':sexo'=>$sexo,
        ':id'=> $id,
        ':emb'=>$emb,
        ':dpecho'=>$dpecho,
        ':apeso'=>$apeso,
        ':ppeso'=>$ppeso,
        ':drespira'=>$drespira,
        ':dpresion'=>$dpresion,
        ':dgasto'=>$dgasto,
        ':dgenit'=>$dgenit,
        ':dhema'=>$dhema,
        ':dislina'=>$dislina,
        ':dismusc'=>$dismusc,
        ':disneu'=>$disneu,
        ':dispsi'=>$dispsi,
        ':asma'=>$asma,
        ':cancer'=>$cancer,
        ':desocardi'=>$desocardi,
        ':desoposi'=>$desoposi,
        ':diabetes'=>$diabetes,
        ':hispertension'=>$hispertension,
        ':epilepsia'=>$epilepsia,
        ':enfermedades'=>$enfermedades,
        ':medicamento'=>$medicamento,
        ':alergias'=>$alergias
        ));
        header('Location: pacientes.php');
/*print "0: ".$emb;
print " 1: ".$dpecho;
print " 2: ".$apeso;
print " 3: ".$ppeso;
print " 4: ".$drespira;
print " 5: ".$dpresion;
print " 6: ".$dgasto;
print " 7: ".$dgenit;
print " 8: ".$dhema;
print " 9: ".$dislina;
print " 10: ".$dismusc;
print " 11: ".$disneu;
print " 12: ".$dispsi;
print " 13: ".$asma;
print " 14: ".$cancer;
print " 15: ".$desocardi;
print " 16: ".$desoposi;
print " 17: ".$diabetes;
print " 18: ".$hispertension;
print " 19: ".$epilepsia;
print " 20: ".$enfermedades;
print " 21: ".$medicamento;
print " 22: ".$alergias;*/

	}else{
		$id_paciente = id_numeros($_GET['idPaciente']);
		if(empty($id_paciente)){
			header('Location: pacientes.php');
		}
		$paciente = obtener_paciente_id($conexion,$id_paciente);

		if(!$paciente){
			header('Location: pacientes.php');
		}
		$paciente =$paciente[0];
	}
/*$sql = "SELECT * FROM pacientes WHERE id=".$id;
	$r = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($r);
$nombre = $data["pmedicamento"];
$nombre = $data["nombre"];*/
	require 'vista/actulizarpaciente_vista.php';
?>
