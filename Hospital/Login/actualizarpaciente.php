<?php session_start();
	if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
	}

	require 'funciones.php';

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


		$statement = $conexion->prepare(
		"UPDATE pacientes
        SET pacIdentificacion = :identificacion,
		pacNombre =:nombres,
		pacApellidos =:apellidos,
		pacFechaNacimiento =:fechaNacimiento,
		pacSexo =:sexo
		WHERE idPaciente = :id");

		$statement ->execute(array(
        ':identificacion'=>$identificacion,
		':nombres'=>$nombres,
		':apellidos'=>$apellidos,
		':fechaNacimiento'=>$fechaNacimiento,
		':sexo'=>$sexo,
        ':id'=> $id
        ));
        header('Location: pacientes.php');
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
	require 'vista/actulizarpaciente_vista.php';
?>
