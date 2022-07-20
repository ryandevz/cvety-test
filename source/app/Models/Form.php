<?php 
namespace App\Models;
use Nette\Database\Connection;

class Form
{	
    public function getForm()
	{
		try {
			$dsn = 'mysql:host=' . DB_HOST .';dbname=' . DB_DATABASE;
			$database = new Connection($dsn, DB_USERNAME, DB_PASSWORD);
	
			$query = $database->fetchAll('SELECT * FROM form');

			return $this->query = $query;
		} catch (\Throwable $th) {
			return $this->query = 'error';
		}
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
		try {
			$dsn = 'mysql:host=' . DB_HOST .';dbname=' . DB_DATABASE;
			$database = new Connection($dsn, DB_USERNAME, DB_PASSWORD);
	
			$database->query('INSERT INTO form ?', [
				'email' => $email,
				'phone' => $phone,
				'message' => $message,
			]);

			$this->status = 'inserted';
		} catch (\Throwable $th) {
			$this->status = 'error';
		}
	}
}