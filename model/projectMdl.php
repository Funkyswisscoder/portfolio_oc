<?php

    class ProjectManager{

        public function createProject($projectTitle, $partnerName, $framework, $tech1, $tech2, $tech3, $projectImg){
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO achievements(project_name, partners_name, framework, tech1, tech2, tech3, project_img) VALUES(:project_name, :partners_name, :framework, :tech1, :tech2, :tech3, :project_img)');
            $req->execute(array(
                'project_name'      => $projectTitle,
                'partners_name'     => $partnerName,
                'framework'         => $framework,
                'tech1'             => $tech1,
                'tech2'             => $tech2,
                'tech3'             => $tech3,
                'project_img'       => $projectImg
            ));
        }








        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=Mon-portfolio;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
    }