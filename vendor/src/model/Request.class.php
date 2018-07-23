<?php
#!/usr/bin/env php

namespace Src\Model{
	class Request
	{
		public static function feed(){
			$raw = file_get_contents("http://blog.voudeernanitur.com.br/feed/");
			
			$xml = new \SimpleXMLElement($raw);
			
			return $xml;
		}
		
		public static function createUser(){
			//validate all fields 
			if(empty($_POST["name"])|| empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["confirm"])):
				return json_encode(array("callback" => "Preencha os campos obrigatórios", "status" => 400));
			endif;
			
			//filter fields
			if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)):
				return json_encode(array("callback" => "E-mail inválido", "status" => 400));
			endif;
			
			//validate passwords
			if($_POST["confirm"] != $_POST["password"]):
				return json_encode(array("callback" => "As senhas não coincidem", "status" => 400));
			endif;
			
			//validate username
			if(false === ctype_alnum($_POST["username"])):
				return json_encode(array("callback" => "Nome de usuário inválido", "status" => 400));
			endif;
			
			//validate field in database
			$database = new \Src\Database\ConnectionMSQl;
			
			$select = $database->driver()->prepare(
				"SELECT id FROM account WHERE (email = :email) OR (username = :username)"
			);
			$select->bindValue(":email", $_POST["email"]);
			$select->bindValue(":username", $_POST["username"]);
			$select->execute();
			
			if($select->rowCount() > 0):
				return json_encode(array("callback" => "Usuário / E-mail já cadastrado", "status" => 400));
			endif;
			
			$insert = $database->driver()->prepare(
				"INSERT INTO account 
				(name, username, secret, email, status, moderator) 
				VALUES 
				(:name, :username, :secret, :email, :status, :moderator)"
			);
			$insert->bindValue(":name", $_POST["name"]);
			$insert->bindValue(":username", $_POST["username"]);
			$insert->bindValue(":secret", sha1($_POST["password"]));
			$insert->bindValue(":email", $_POST["email"]);
			$insert->bindValue(":status", 1);
			$insert->bindValue(":moderator", 1);
			$insert->execute();
			
			if($insert):
				return json_encode(array("status" => 200));
			endif;
		}
		
		/**
		* @description run Requests and executes called method
		* @note that method can't be modified
		* /add new rules above it
		*/
		public static function __exec($arg){
			if(method_exists("\Src\Model\Request", $arg)){
				echo self::$arg();
			}else{
				echo "[1001] Error to the processing";
			}
		}
	}
}