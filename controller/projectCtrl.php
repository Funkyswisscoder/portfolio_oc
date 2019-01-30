<?php
    require('./model/projectMdl.php');
    $projectManager = new ProjectManager();

    if($action == 'create'){
        $createProject = $projectManager->createProject();
    }