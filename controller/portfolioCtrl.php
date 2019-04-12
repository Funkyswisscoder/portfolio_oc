<?php
    require('./model/projectMdl.php');
    ini_set('display_errors', 1);

    $getAllPortfolio = new ProjectManager();

    $getPortfolio = $getAllPortfolio->getAllProjects();
    require('./view/portfolio.php');

