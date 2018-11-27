<?php
require 'Conexion.php';
  $contador = 0;
  try {
            //Llamar el procedimineto Almacenado
        $sql = "call Lista_Facilitadores();";
            // Preparar la consulta
        $stmt = $pdo->prepare($sql);
            // Ejecutar la consulta
        $stmt->execute();
		//selecciona el modo de recepcion del arreglo
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
				$json = array("status" => 0, "Mensaje" => "Error");
				header('Content-type: application/json');
				echo json_encode($json);
				
			}
			

			 ?>
