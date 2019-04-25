<?php
    ini_set('display_errors', 1);

    class CommentsManager{

        public function createComm($name, $comm){
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO GoldenBook ( name, comm) VALUES(:name, :comm)');
            $req->execute(array(
                'name'      => $name,
                'comm'     => $comm,
            ));
        }

        public function getCount(){
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT COUNT(*) FROM GoldenBook');
            $req->execute();
            return $req;
        }

        public function deleteOneComm($id){
            $db = $this->dbConnect();
            $req = $db->prepare('DELETE FROM GoldenBook WHERE id=?');
            $req->execute(array($id));
        }

        public function getCommsPaginated($from,$size){
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT * FROM GoldenBook ORDER BY id DESC LIMIT :from, :size');
            $req->bindParam(':from', $from, PDO::PARAM_INT);
            $req->bindParam(':size', $size, PDO::PARAM_INT);

            $req->execute();
            return $req;
        }







        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=Mon_Portfolio;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
    }