<?php 

    class DB {

        //properti
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        public function __construct()
        {
            echo "construct";
        }

        //method
        public function selectData()
        {
            echo 'select data';
        }

        public function getDatabase()
        {
            return $this->database;
        }

        public static function insertData()
        {
            echo "static function";
        }

    
    }
    DB::insertData ();

    // $db =new DB;

    // echo '<br>';

    // echo $db->host;

    // echo '<br>';

    // echo $db->getDatabase();



?>