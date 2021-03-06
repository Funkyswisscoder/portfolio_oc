<?php


    session_start();


    if(isset($_GET['redirect']) AND htmlspecialchars($_GET['redirect'])){
        if($_GET['redirect'] == 'home'){
            $thisPage = 'home';
            require('./controller/landingpageCtrl.php');
        }
        else if($_GET['redirect'] == 'portfolio'){
            $thisPage = 'portfolio';
            require('controller/portfolioCtrl.php');
        }
        else if($_GET['redirect'] == 'goldenbook'){
            $thisPage = 'goldenbook';
            require('controller/goldenbookCtrl.php');
        }
        else if($_GET['redirect'] == 'contact'){
            $thisPage = 'contact';
            require('view/contactform.php');
        }
        else if($_GET['redirect'] == 'dashboard'){
            if(isset($_SESSION['connexion']) AND $_SESSION['connexion'] == 'true'){
            require('view/dashboard.php');                
            }else{
                echo "<h1>This area is only for the real admin! </h1>";
                require('./controller/landingpageCtrl.php');
            }
        }else if($_GET['redirect'] == 'login'){
            require('controller/authMe.php');
        }else if($_GET['redirect'] == 'logout'){
            session_destroy();
            $thisPage = 'home';
            header('location:./index.php');
        }else if($_GET['redirect'] == 'postCom'){
            $action = 'create';
            $nameCom = htmlspecialchars($_POST['nameCom']);
            $comContent = htmlspecialchars($_POST['comContent']);
            require('controller/goldenbookCtrl.php');
        }else if($_GET['redirect'] == 'deleteCom'){
            $action = 'delete';
            $idCom = htmlspecialchars($_GET['idCom']);
            require('controller/goldenbookCtrl.php');
        }else if($_GET['redirect'] == 'postMail'){
            $action = 'postMail';
            $to = "bonvin.amir@gmail.com"; // this is my Email address
            $from = htmlspecialchars($_POST['email']); // this is the sender's Email address
            $first_name = htmlspecialchars($_POST['first_name']);
            $last_name = htmlspecialchars($_POST['last_name']);
            $subject = "Form submission";
            $subject2 = "Copy of your form submission";
            $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . htmlspecialchars($_POST['message']);
            $message2 = "Here is a copy of your message " . $first_name . "\n\n" . htmlspecialchars($_POST['message']);

            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            require('controller/contactCtrl.php');
        }else if($_GET['redirect'] == 'repos'){
            require('controller/myGitCtrl.php');
        }
    }else if(isset($_GET['redirectCreate']) AND htmlspecialchars($_GET['redirectCreate'])){
        if($_GET['redirectCreate'] == 'createProject'){
            $action = 'create';
            $projectTitle = htmlspecialchars($_POST['projectTitle']);
            $partnerName = htmlspecialchars($_POST['partnerName']);
            $framework = htmlspecialchars($_POST['framework']);
            $img_link = htmlspecialchars($_POST['img_link']);
            $tech1 = htmlspecialchars($_POST['tech1']);
            $tech2 = htmlspecialchars($_POST['tech2']);
            $tech3 = htmlspecialchars($_POST['tech3']);
            require('controller/projectCtrl.php');
        }
    }else if(isset($_GET['redirectUpdate']) AND htmlspecialchars($_GET['redirectUpdate'])){
        if($_GET['redirectUpdate'] == 'updateProject'){
            $action = 'update';
            $projectTitle = htmlspecialchars($_POST['projectTitle']);
            $partnerName = htmlspecialchars($_POST['partnerName']);
            $framework = htmlspecialchars($_POST['framework']);
            $img_link = htmlspecialchars($_POST['img_link']);
            $tech1 = htmlspecialchars($_POST['tech1']);
            $tech2 = htmlspecialchars($_POST['tech2']);
            $tech3 = htmlspecialchars($_POST['tech3']);
            $id = htmlspecialchars($_POST['id']);
            require('controller/projectCtrl.php');
        }
    }else if(isset($_GET['redirectDelete']) AND htmlspecialchars($_GET['redirectDelete'])){
        if($_GET['redirectDelete'] == 'deleteProject'){
            $id = htmlspecialchars($_POST['delete']);
            $action = 'delete';
            require('controller/projectCtrl.php');
        }
    }else{
        $thisPage = 'home';
        require('./view/landingpage.php');
    }