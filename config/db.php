<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'xxxxxxxx', 'xxxxxxx', 'xxxxxxxx');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

