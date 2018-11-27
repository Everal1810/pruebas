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
					$tipoRegistro	= 	$body['Descripcion'];


					  try {
		$sql = "call CRUD_TipoRegistro(1, null, ?, null);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(Array($tipoRegistro));
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
			
			Case 2:
			$id	= 	$body['idregistro'];
		try {
		$sql = "call CRUD_TipoRegistro(2,null, ?,null);";
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
					$id	= 	$body['idregistro'];
					$tipoRegistro	= 	$body['Descripcion'];
					$estado	= 	$body['Estado'];
	
	
					  try {
		$sql = "call CRUD_TipoRegistro(3, ?, ?,?);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(Array($id,$tipoRegistro,$estado));
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
									$id	= 	$body['idregistro'];
		try {
		$sql = "call CRUD_TipoRegistro(4, ?,null,null);";
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
		$sql = "call CRUD_TipoRegistro(5, null, null, null);";
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
			
			break;
			
		}	
	}

			

			 ?>
