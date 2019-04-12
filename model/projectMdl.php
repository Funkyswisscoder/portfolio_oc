<?php

    class ProjectManager{

        public function createProject($projectTitle, $partnerName, $framework, $tech1, $tech2, $tech3, $img_link){
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO achievements(project_name, partners_name, framework, tech_1, tech_2, tech_3, img_link) VALUES(:project_name, :partners_name, :framework, :tech_1, :tech_2, :tech_3, :img_link)');
            $req->execute(array(
                'project_name'      => $projectTitle,
                'partners_name'     => $partnerName,
                'framework'         => $framework,
                'tech_1'            => $tech1,
                'tech_2'            => $tech2,
                'tech_3'            => $tech3,
                'img_link'          => $img_link
            ));
        }

        public function getAllProjects(){
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT * FROM achievements ORDER BY id');
            $req->execute();
            return $req;
        }

        public function getOneProject($id){
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT * FROM achievements WHERE id = ? ORDER BY id');
            $req->execute(array($id));
            return $req;
        }

       public function updateOneProject($id, $projectTitle, $partnerName, $framework, $tech1, $tech2, $tech3, $img_link){
            $db = $this->dbConnect();
            $req = $db->prepare('UPDATE achievements SET project_name = :project_name, partners_name = :partners_name, framework = :framework, tech_1 = :tech_1, tech_2 = :tech_2, tech_3 = :tech_3, img_link = :img_link WHERE id = :id' );
            $req->execute(array(
                'project_name'      => $projectTitle,
                'partners_name'     => $partnerName,
                'framework'         => $framework,
                'tech_1'            => $tech1,
                'tech_2'            => $tech2,
                'tech_3'            => $tech3,
                'img_link'          => $img_link,
                'id'                => $id
            ));
        }

        public function deleteOneProject($id){
            $db = $this->dbConnect();
            $req = $db->prepare('DELETE FROM achievements WHERE id=?');
            $req->execute(array($id));
        }







        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=Mon_Portfolio;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
    }

