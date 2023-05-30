<?php
    // class DataBase{
    //     public static function connection(){            
    //         $hostname = "localhost";
    //         $port = "3306";
    //         $database = "dbappwebinv";
    //         $username = "root";
    //         $password = "";
	// 		$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
	// 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 		return $pdo;
	// 	}
	// }
    class DataBase{
        public static function connection(){
            $hostname = "entrymc.mysql.database.azure.com";
            $port = "3306";
            $database = "dbappwebinv";
            $username = "admon";
            $password = "Super123";
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA => 'assets/db/DigiCertGlobalRootCA.crt.pem'
            );
			$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password,$options);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}    
?>
