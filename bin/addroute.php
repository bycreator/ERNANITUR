<?php
error_reporting(0);
/**
* @Router loads class that manager all routers
* @Auth loads class to internal / external
* /authentication
* @Request loads class that manager internal / external
* /requests
*/
use \Src\Core\Router;
use \Src\Model\Auth;
use \Src\Model\Request;



ob_start();

session_start();

//Home Page
Router::route(SYS[0], function(){	
	include_once("public/index.php");
});
Router::execute($_SERVER['REQUEST_URI']);

//Dashboard Login
Router::route(SYS[0]."panel/auth(|/)", function(){	
	include_once("public/dashboard/login.php");
});
Router::execute($_SERVER['REQUEST_URI']);

//Dashboard Home
Router::route(SYS[0]."panel(|/)", function(){	
	Auth::isLogged("account", SYS[0]."panel/auth/");
	
	include_once("public/dashboard/home.php");
});
Router::execute($_SERVER['REQUEST_URI']);

//Dashboard Create account
Router::route(SYS[0]."panel/create-user(|/)", function(){	
	Auth::isLogged("account", SYS[0]."panel/auth/");
	
	include_once("public/dashboard/accountCreate.php");
});
Router::execute($_SERVER['REQUEST_URI']);

/**
* @description auto run for internal Request
*/

Router::route(SYS[0]."panel/post/(\w+)", function($action){	
	Request::__exec($action);
});
Router::execute($_SERVER['REQUEST_URI']);

ob_end_flush();