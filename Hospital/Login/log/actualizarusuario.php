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
        $usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
	   $password2 = $_POST['password2'];
        $agusu = $_POST['agusu'];

        $password = hash('sha512',$password);
		$password2 = hash('sha512',$password2);
		if($password2 != $password){
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}

		$statement = $conexion->prepare(
		"UPDATE usuarios SET
        usuario = :usuario,
		pass =:pass
		WHERE id = :id");

		$statement ->execute(array(
        ':usuario'=>$usuario,
		':pass'=>$password2,
        ':id'=> $id
        ));
        header('Location: usuarios.php');
	}else{
		$id_usuario = id_numeros($_GET['id']);
		if(empty($id_usuario)){
			header('Location: usuarios.php');
		}
		$user = obtenerUser_id($conexion,$id_usuario);

		if(!$user){
			header('Location: usuarios.php');
		}
		$user =$user[0];
	}
	require 'vista/actualizarusuario.php';
?>

