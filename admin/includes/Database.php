<?php
    require_once("config.php");
    class Database{
        /** class properties **/
        public $connection;
        /** class methods **/
        public function open_db_connection(){
          $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
          if(mysqli_connect_errno()){
              printf("Connectie mislukt: %s\n",mysqli_connect_errno());
              exit();
          }
        }
        function __construct(){
            $this->open_db_connection();
        }
    }
    $database = new Database();
?>
