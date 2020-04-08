<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'ciarpaglini', 'Austin.57', 'nopuedeser');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

