<?php

namespace App;


class Call
{
	private $message;
	
	function __construct()
	{
		# code...
	}

	public function getMessage()
    {
        return $this->message;
    }
 
    public function setMessage($message)
    {
        $this->name = $message;
    }
}