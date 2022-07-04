<?php 
namespace App\Models;

class Form
{
	protected $email;
	protected $phone;
	protected $message;
	
    public function getForm()
	{
		$this->email = 'hello@world.com';
		$this->phone = '+7 707 700 70 70';
		$this->message = 'Hello World';
	}

	public function getEmail()
	{
		return $this->email;
	}
	
	public function getPhone()
	{
		return $this->phone;
	}
	
	public function getMessage()
	{
		return $this->message;
	}

	public function setForm($email, $phone, $message)
	{
		$this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
	}
}