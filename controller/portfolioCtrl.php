<?php
    ini_set('display_errors', 1);
    require('./model/projectMdl.php');


    $getAllPortfolio = new ProjectManager();

    $getPortfolio = $getAllPortfolio->getAllProjects();
    require('./view/portfolio.php');

