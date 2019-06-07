
<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			echo('hola');
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:biblioteca123-mysqldbserver.mysql.database.azure.com=localhost;dbname=mysqldatabase32833','mysqldbuser@biblioteca123-mysqldbserver','GARCIAnu1996',$pdo_options);
			return self::$conexion;
		}		
	} 
?>