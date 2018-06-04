<?php

/**
 * Connection to the database
 *
 * Class Database
 *
 */
    class Database{
        /**
         * @var $con
         */
        private $con;

        /**
         * @return Mysqli
         */
        public function connect(){
            include_once('constants.php');
            $this->con = new Mysqli(HOST, USER, PASS, DB);

            if($this->con){
                ///echo "Connected";
                return $this->con;
            }
            return "DATABASE_CONNECTION_FAIL";
        }
    }

    //$db = new Database();
    //$db->connect();