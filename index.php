<?php
    ini_set('display_errors', 1);



    if(isset($_GET['redirect']) AND htmlspecialchars($_GET['redirect'])){
        if($_GET['redirect'] == 'home'){
            require('view/landingpageCtrl.php');
        }
        else if($_GET['redirect'] == 'portfolio'){
            require('controller/portfolioCtrl.php');
        }
        else if($_GET['redirect'] == 'partners'){
            require('view/partners.php');
        }
        else if($_GET['redirect'] == 'contact'){
            require('view/contactform.php');
        }
    }else if(isset($_GET['redirectCreate']) AND htmlspecialchars($_GET['redirectCreate'])){
        if($_GET['redirectCreate'] == 'createProject'){
            $action = 'create';
            $projectTitle = $_POST['projectTitle'];
            $partnerName = $_POST['partnerName'];
            $framework = $_POST['framework'];
            $img_link = $_POST['img_link'];
            $tech1 = $_POST['tech1'];
            $tech2 = $_POST['tech2'];
            $tech3 = $_POST['tech3'];
            require('controller/projectCtrl.php');
        }
    }else if(isset($_GET['redirectUpdate']) AND htmlspecialchars($_GET['redirectUpdate'])){
        if($_GET['redirectUpdate'] == 'updateProject'){
            $action = 'update';
            $projectTitle = $_POST['projectTitle'];
            $partnerName = $_POST['partnerName'];
            $framework = $_POST['framework'];
            $img_link = $_POST['img_link'];
            $tech1 = $_POST['tech1'];
            $tech2 = $_POST['tech2'];
            $tech3 = $_POST['tech3'];
            $id = $_POST['id'];
            require('controller/projectCtrl.php');
        }
    }else if(isset($_GET['redirectDelete']) AND htmlspecialchars($_GET['redirectDelete'])){
        if($_GET['redirectDelete'] == 'deleteProject'){
            $action = 'delete';
        }
    }

    else{
        require('./view/landingpage.php');
    }