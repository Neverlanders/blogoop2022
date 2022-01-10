<?php
    class User{
        public static function find_all_users(){
            global $database;
            $result = $database->query("SELECT * FROM users");
            return $result;
        }
        /***
        Functie find_user_by_id($user_id)
         ***/
        public static function find_user_by_id($user_id){
            global $database;
            $result = $database->query("SELECT * FROM users WHERE id=$user_id");
            return $result;
        }
    }
?>