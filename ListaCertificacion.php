<?php
require 'Conexion.php';
        try {
            // execute the stored procedure
            $sql = "call Lista_Certificaciones();";
            // call the stored procedure
            $q = $pdo->query($sql);
        // execute the stored procedure
            $q->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
			$result =array();
             while ($r = $q->fetch()){
			$result[] = $r;
             }
			 $json = array("status" => 1, "info" => $result);
			/* Output header */
			header('Content-type: application/json');
			echo json_encode($json);

			 ?>
