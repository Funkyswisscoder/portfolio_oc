<?php
    require('./model/projectMdl.php');
    ini_set('display_errors', 1);

    $projectManager = new ProjectManager();

    if($action == 'create'){
        $createProject = $projectManager->createProject($projectTitle,$partnerName,$framework,$tech1,$tech2,$tech3,$img_link);

        require('./view/uploadform.php');
    }else{
        require('../view/landingpage.php');
    }

 