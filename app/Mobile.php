<?php

namespace App;

use App\Interfaces\CarrierInterface;
use App\Services\ContactService;
use PDO;
use PDOException;

class Mobile
{

	protected $provider;
	
	function __construct(CarrierInterface $provider)
	{
		$this->provider = $provider;
	}


	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findByName($name);

		$this->provider->dialContact($contact);

		return $this->provider->makeCall();
	}

	public function verifyContactNotFound($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findbyName($name);

		if($contact != null){
			return false;
		}

		return true;
	}

	public function makeMessageByNumber($numero,string $message)
	{
		if( empty($numero) || empty($message) ) return;

		$contact = ContactService::findbyNumber($numero);

		$this->provider->dialContact($contact);

		return $this->provider->makeCall($message);
	}

	

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
		// 	return $conn;

		// }catch(PDOException $e) {

		// }
		$contacto = new Contact();
		if($name != $contacto->getName()){
			exit;
		}else{
			return $contacto;
		}
		// $contacto->getName();
		
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

	public static function validateNumber(string $number): bool
	{
		// logic to validate numbersc
		return is_numeric($number);//devuelve true si el argumento se puede interpretar como número y false si no lo es
	}

	public function dialContact(Contact $contact){
		$dialContact = new Contact();
		return $dialContact;
	}

	public function makeCall($mensaje = ""): Call{
		$call = new Call();
		$call->setMessage($mensaje);
		return $call;
	}


}
