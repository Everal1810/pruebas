<?php
require 'Conexion.php';
  $contador = 0;
  try {
		
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);
		    $Catalogo	= 	$body['IdCatalogo'];
			$Nivel 		=	$body['Nivel'];
			
	}
            // execute the stored procedure
            $sql = "call CertificacionNivel(?,?);;";
            // call the stored procedure
         	   $stmt = $pdo->prepare($sql);
        // pass value to the command
        // execute the stored procedure
        $stmt->execute(Array($Catalogo,$Nivel));
         $stmt->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
			$result =array();
             while ($r = $stmt->fetch()){
			$result[] = $r;
			$contador ++; 
             }
			 if($contador >0){
				$json = array("status" => 1, "info" => $result);
				header('Content-type: application/json');
				echo json_encode($json);
			}
			else
			{
				$json = array("status" => 0, "Mensaje" => "Sin Datos");
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($json);
				
			}
			

			 ?>
