<?php
    require('./model/projectMdl.php');


    $getAllPortfolio = new ProjectManager();

    $getPortfolio = $getAllPortfolio->getAllProjects();
    require('./view/portfolio.php');

