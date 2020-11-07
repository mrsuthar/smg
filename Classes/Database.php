<?php
class Database {

                public static $host = "127.0.0.1";
                public static $dbname = "sms";
                public static $uname = "root";
                public static $pass = "";


        private static function connect() 
        {
                $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8",self::$uname,self::$pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
        }

        public static function query($query, $params = array()) 
        {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);
                $data = $statement->fetchAll();
                return $data;
        }
        public static function update($query) 
        {
                $statement = self::connect()->prepare($query);
                $statement->execute();
                return $statement->rowCount();
        }

}