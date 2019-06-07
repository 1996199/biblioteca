
<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			echo('hola');
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=biblioteca123-mysqldbserver.mysql.database.azure.com;dbname=mysqldatabase32833','mysqldbuser@biblioteca123-mysqldbserver','GARCIAnu1996',$pdo_options);
			return self::$conexion;
		}		
	} 
?>