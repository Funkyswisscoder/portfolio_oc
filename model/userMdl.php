<?php

    class UserManager{

        public function checkUser($pseudo){
            $con = $this->dbConnect();
            $password_in_db_hashed = $con->prepare("SELECT pwd FROM authMe WHERE pseudo = ?");
            $password_in_db_hashed->execute(array($pseudo));
            return $password_in_db_hashed;
        }

        public function createUser($pseudo,$password){
            $con = $this->dbConnect();
            $createUser = $con->prepare("INSERT INTO authMe(pseudo, pwd) VALUES(:pseudo, :pwd)");
            $createUser->execute(array(
                'pseudo'    => $pseudo,
                'pwd'       => $password
            ));
        }

        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=Mon_Portfolio;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
    }

