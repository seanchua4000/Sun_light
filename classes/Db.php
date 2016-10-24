<?php
class Db
{
	private static $_instance = NULL;
	private $_pdo, $_query, $_error = false, $_results, $_count = 0, $_db;

	private function __clone() {}

	private function __construct()
	{
		try{
			$this->_pdo = new PDO('mysql:host=127.0.0.1; dbname=promo_page', 'root', 'password');
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public static function getInstance()
	{
		if(!isset(self::$_instance))
		{
			self::$_instance = new Db();
		}
		return self::$_instance;
	}

	public function query($sql, $params = array())
	{
		if($this->_query = $this->_pdo->prepare($sql))
		{
			$x = 1;
			if(count($params))
			{
				foreach($params as $param)
				{
					$this->_query->bindValue($x, $param);
					$x++;
				}
			}

			if($this->_query->execute())
			{
				$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
				$this->_count = $this->_query->rowCount();
			}
			else
			{
				$this->_error = true;
			}
		}
		return $this;
	}

	public function insert($table, $fields = array())
	{
		$keys = array_keys($fields);
		$values = '';
		$x = 1;

		foreach($fields as $field)
		{
			$values .='?';
			if($x < count($fields))
			{
				$values .= ', ';
			}
			$x++;
		}

		$sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";

		if(!$this->query($sql, $fields)->error())
		{
			return true;
		}
		return false;
	}

	public function results()
	{
		return $this->_results;
	}

	public function error()
	{
		return $this->_error;
	}

	public function first()
	{
		return $this->_results()[0];
	}

	public function count()
	{
		return $this->_count;
	}
}