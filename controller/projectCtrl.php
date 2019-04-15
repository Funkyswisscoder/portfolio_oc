<?php
    ini_set('display_errors', 1);
    require('./model/projectMdl.php');


    $projectManager = new ProjectManager();

    if($action == 'create'){
        $createProject = $projectManager->createProject($projectTitle,$partnerName,$framework,$tech1,$tech2,$tech3,$img_link);
        require('./view/dashboard.php');
    }else if($action == 'update'){
        $updateProject = $projectManager->updateOneProject($id, $projectTitle, $partnerName, $framework, $tech1, $tech2, $tech3, $img_link);
        header('location:./view/dashboard.php');
    }else{
        require('../view/landingpage.php');
    }

 