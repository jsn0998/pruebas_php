<?php

namespace App;


class Contact
{
	private $name;
	private $numero;

	function __construct()
	{
		$this->name = "Fernando";
		$this->numero = "0951785541";
	}

	public function getName()
    {
        return $this->name;
    }
 
    public function setName($email)
    {
        $this->name = $email;
	}

	public function getNumero()
    {
        return $this->numero;
    }
 
    public function setNumero($numero)
    {
        $this->numero = $numero;
	}
	
}