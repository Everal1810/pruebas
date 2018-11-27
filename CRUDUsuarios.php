<?php
require 'Conexion.php';
  $contador = 0;

		
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);
		    $Accion	= 	$body['Accion'];
		switch($Accion)
		{
			Case 1:
					$Rol	= 	$body['Rol'];
					$Usuario	= 	$body['Usuario'];
					$Nombre	= 	$body['Nombre'];
					$Apellido	= 	$body['Apellido'];
					$Correo	= 	$body['Correo'];
					$Telefono	= 	$body['Telefono'];
					  try {
		$sql = "call CRUD_Usuario(1, null, ?, ?, ?, ?, 1, ?, ?, 0);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(Array($Rol,$Usuario,$Nombre,$Apellido,$Correo,$Telefono));
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        } 
		catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
			$result =array();
             while ($r = $stmt->fetch()){
			$result[] = $r;
			$contador ++; 
             }
			 if($contador >0){
				$json = array("status" => 1, "Mensaje" => "Exito","info" => $result);
				header('Content-type: application/json');
				echo json_encode($json);
			
			}
			else
			{
				$json = array("status" => 0, "Mensaje" => "Datos no Guardados");
				header('Content-type: application/json');
				echo json_encode($json);
				
			}
						  
			break;
			
			Case 2:
			$id	= 	$body['Usuario'];
		try {
		$sql = "call CRUD_Usuario(2, ?, null, null, null, null, null, null, null, null);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(Array($id));
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        } 
		catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
			$result =array();
             while ($r = $stmt->fetch()){
			$result[] = $r;
			$contador ++; 
             }
			 if($contador >0){
				$json = array("status" => 1,"info" => $result);
				header('Content-type: application/json');
				echo json_encode($json);
			
			}
			else
			{
				$json = array("status" => 0, "Mensaje" => "Datos no Guardados");
				header('Content-type: application/json');
				echo json_encode($json);
				
			}
			
			break;
			
			Case 3:	
					$id	= 	$body['IdUsuario'];
					$Rol	= 	$body['Rol'];
					$Usuario	= 	$body['Usuario'];
					$Nombre	= 	$body['Nombre'];
					$Apellido	= 	$body['Apellido'];
					$Correo	= 	$body['Correo'];
					$Telefono	= 	$body['Telefono'];
					  try {
		$sql = "call CRUD_Usuario(3, ?, ?, ?, ?, ?, 1, ?, ?, 0);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(Array($id,$Rol,$Usuario,$Nombre,$Apellido,$Correo,$Telefono));
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        } 
		catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
			$result =array();
             while ($r = $stmt->fetch()){
			$result[] = $r;
			$contador ++; 
             }
			 if($contador >0){
				$json = array("status" => 1, "Mensaje" => "Exito");
				header('Content-type: application/json');
				echo json_encode($json);
			
			}
			else
			{
				$json = array("status" => 0, "Mensaje" => "Datos no Guardados");
				header('Content-type: application/json');
				echo json_encode($json);
				
			}

			break;
			Case 4:
						$id	= 	$body['IdUsuario'];
		try {
		$sql = "call CRUD_Usuario(4, ?, null, null, null, null, null, null, null, null);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(Array($id));
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        } 
		catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
			$result =array();
             while ($r = $stmt->fetch()){
			$result[] = $r;
			$contador ++; 
             }
			 if($contador >0){
				$json = array("status" => 1,"info" => $result);
				header('Content-type: application/json');
				echo json_encode($json);
			
			}
			else
			{
				$json = array("status" => 0, "Mensaje" => "Datos no Guardados");
				header('Content-type: application/json');
				echo json_encode($json);
				
			}
			
			break;
			Case 5:
		try {
		$sql = "call CRUD_Usuario(5, null, null, null, null, null, null, null, null, null);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        } 
		catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
			$result =array();
             while ($r = $stmt->fetch()){
			$result[] = $r;
			$contador ++; 
             }
			 if($contador >0){
				$json = array("status" => 1,"info" => $result);
				header('Content-type: application/json');
				echo json_encode($json);
			
			}
			else
			{
				$json = array("status" => 0, "Mensaje" => "Datos no Guardados");
				header('Content-type: application/json');
				echo json_encode($json);
				
			}
			
			break;
			
			
			
		}	
	}

			

			 ?>

