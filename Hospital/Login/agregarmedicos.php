<?php session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$nombre = filter_var(strtolower($_POST['nombres']),FILTER_SANITIZE_STRING);
	$apellidos = $_POST['apellidos'];
	$correo =  $_POST['correo'];
	$identificacion =  $_POST['identificacion'];
	$especialidad =  $_POST['especialidad'];
	$telefono =  $_POST['telefono'];
    $iduss='0';
    $idrokk=$_POST['roll'];
	$mensaje='';
	if(empty($nombre) or empty($apellidos)  or empty($identificacion)){
		$mensaje.= 'Por favor rellena todos los datos correctamente'."<br />";
	}
	else{
		try{
			$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
			die();
		}

		$statement = $conexion -> prepare(
			'SELECT * FROM medicos WHERE idMedico = :id LIMIT 1');
		$statement ->execute(array(':id'=>$identificacion));
		$resultado= $statement->fetch();

		if($resultado != false){
			$mensaje .='El nombre de usuario ya existe </br>';
		}
	}//'INSERT INTO medicos (idMedico,medidentificacion,mednombres,medapellidos,medEspecialidad,medtelefono,medcorreo,idusu,idroll)
	if($mensaje==''){
		$statement = $conexion->prepare(
		'INSERT INTO medicos (idMedico,medidentificacion,mednombres,medapellidos,
		medEspecialidad,medtelefono,medcorreo,idroll)
		values(null, :id,:nombre,:apellidos,:especialidad,:telefono,:correo,:idroll)');

		$statement ->execute(array(
		':id'=>$identificacion,
		':nombre'=> $nombre,
		':apellidos'=>$apellidos,
		':especialidad'=>$especialidad,
		':telefono'=>$telefono,
		':correo'=>$correo,
        //'idusu'=>$iduss,
        'idroll'=>$idrokk
		));
		header('Location: medicos.php');
        //print "iden: ".$identificacion."nom: ".$nombre."ap: ".$apellidos."es: ".$especialidad."tel: ".$telefono."co:".$correo."ro: ".$idrokk;

	}
}
require 'vista/agg_medicos_vista.php';
?>
