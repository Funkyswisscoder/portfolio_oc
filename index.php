<?php
    ini_set('display_errors', 1);


    session_start();


    if(isset($_GET['redirect']) AND htmlspecialchars($_GET['redirect'])){
        if($_GET['redirect'] == 'home'){
            require('./controller/landingpageCtrl.php');
        }
        else if($_GET['redirect'] == 'portfolio'){
            require('controller/portfolioCtrl.php');
        }
        else if($_GET['redirect'] == 'goldenbook'){
            require('controller/goldenbookCtrl.php');
        }
        else if($_GET['redirect'] == 'contact'){
            require('view/contactform.php');
        }
        else if($_GET['redirect'] == 'dashboard'){
            if(isset($_SESSION['connexion']) AND $_SESSION['connexion'] == 'true'){
            require('view/dashboard.php');                
            }else{
                echo "<h1>DON'T YOU EVEN TRY BITCH! </h1>";
                require('./controller/landingpageCtrl.php');
            }
        }else if($_GET['redirect'] == 'login'){
            require('controller/authMe.php');
        }else if($_GET['redirect'] == 'logout'){
            session_destroy();
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
            $id=$_POST['delete'];
            $action = 'delete';
            require('controller/projectCtrl.php');
        }
    }else{
        require('./view/landingpage.php');
    }