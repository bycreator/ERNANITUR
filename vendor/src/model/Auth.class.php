<?php
#!/usr/bin/env php

namespace Src\Model{
	class Auth
	{
		public function accountLogin($arg = array()){
			//validate all fields 
			if(empty($arg["email"]) || empty($arg["secret"])):
				return "Preencha todos os campos.";
			endif;
			
			//filter fields
			if(!filter_var($arg["email"], FILTER_VALIDATE_EMAIL)):
				return "E-mail inválido.";
			endif;
			
			//validate authentication
			$database = new \Src\Database\ConnectionMSQl;
			
			$auth = $database->driver()->prepare("SELECT id FROM account WHERE (email = :email) AND (secret = :secret)");
			$auth->bindValue(":email", $arg["email"]);
			$auth->bindValue(":secret", sha1($arg["secret"]));
			$auth->execute();
			
			if($auth->rowCount() < 1):
				return "Conta não encontrada";
			else:
				//prepares area with account data
				$_SESSION["account"] = $auth->fetch()[0];
				
				header("Location: ". SYS[0]. "panel/");
			endif;
		}
		
		public function isLogged($session = '', $redirect = ''){
			if(!isset($_SESSION[$session])):
				header("Location: {$redirect}");
			endif;
		}
	}
}