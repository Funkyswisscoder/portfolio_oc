<?php
    ini_set('display_errors', 1);
    require('../model/userMdl.php');
/*

    first creation in DB of my account

    $pseudo = 'Amir';
    $password = '***********';
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);


    $userInDB = $connectionManager->createUser($pseudo, $passwordHashed);
*/


    $pseudo = htmlspecialchars($_POST['pseudo']);
    $userPwd = htmlspecialchars($_POST['password']);


    $_SESSION['pseudo'] = $pseudo;


    $connectionManager = new userManager();
    $password_in_db_hashed = $connectionManager->checkUser($pseudo);

    while($datas = $password_in_db_hashed->fetch()){
        if($pseudo == 'Amir'){
            if(password_verify($userPwd,$datas['pwd'])){
                $_SESSION['connexion'] = true;
                require('../controller/projectCtrl.php'); 
            }else{
                echo "<h1> Wrong Username or Password</h1>";
            }
        }
    }