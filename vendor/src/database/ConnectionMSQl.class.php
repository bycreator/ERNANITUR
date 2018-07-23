<?php
#!/usr/bin/env php

namespace Src\Database;
class ConnectionMSQl{
	
	public static $pdo = '';
	
	public static function driver(){
		try{
				self::$pdo = new \PDO("mysql:host=localhost;dbname=ernanitur;charset=utf8", "root", "");
				self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				return self::$pdo;
		}catch(\PDOException $e){
			echo $e;
		}
	}
	
	public static function lastId(){
		return self::$pdo->lastInsertId()[0];
	}
}


