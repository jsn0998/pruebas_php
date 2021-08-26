<?php

namespace App\Services;

use App\Contact;
use App\Interfaces\CarrierInterface;
use PDO;
use PDOException;

class ContactService implements CarrierInterface
{


	
	public static function findByName($name): Contact
	{
		// queries to the db
	// 	global $conn;
	// 	global $result_out;
	// 	$name = mb_ereg_replace("/[^a-zа-яё0-9/-]/", "", $name);
	// try {
	// 	$select = $conn->query("SELECT nombre FROM contacto where nombre = '$name')");
	// 	$select->setFetchMode(PDO::FETCH_OBJ);
	// 	$items = $select->fetchAll();
	// 	unset($select);
	// 	$row_num = count($items);
	// 	$obj = (object) array('result' => true, 'count' => "Registros encontrados" . $row_num, 'items' => $items);
	// 	echo json_encode($obj);
	// 	$result_out = true;
	// 	return $select;
	// }catch(PDOException $e) {
	// 	echo $e;
	// }
	$contacto = new Contact();
		if($name != $contacto->getName()){
			exit;
		}
		// $contacto->getName();
		return $contacto;
	}

	public static function findbyNumber($numero): Contact
		{
			// queries to the db
		// 	global $conn;
		// 	global $result_out;
		// 	$name = mb_ereg_replace("/[^a-zа-яё0-9/-]/", "", $name);
		// try {
		// 	$select = $conn->query("SELECT numero FROM contacto where numero = $numero)");
		// 	$select->setFetchMode(PDO::FETCH_OBJ);
		// 	$items = $select->fetchAll();
		// 	unset($select);
		// 	$row_num = count($items);
		// 	$obj = (object) array('result' => true, 'count' => "Registros encontrados" . $row_num, 'items' => $items);
		// 	echo json_encode($obj);
		// 	$result_out = true;
		// 	return $conn;

		// }catch(PDOException $e) {

		// }
		$contacto = new Contact();
		if($numero != $contacto->getNumero()){
			exit;
		}else{
			return $contacto;
			// $call = new Call();
			// $call->setMessage($message);
			// return $call;
		}
		
	}



	public static function validateNumber($number): bool
	{
		// // logic to validate numbers
		// return is_numeric($number);//devuelve true si el argumento se puede interpretar como número y false si no lo es

		$contacto = new Contact();
		if($number != $contacto->getNumero()){
			return false;
		}else{
			return true;
		}
	}

	
}