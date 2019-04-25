<?php
    require('./model/userMdl.php');

/*

    first creation in DB of my personal account

    $pseudo = 'Amir';
    $password = '***********';
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);


    $userInDB = $connectionManager->createUser($pseudo, $passwordHashed);
*/


    $pseudo = htmlspecialchars($_POST['pseudo']);
    $userPwd = htmlspecialchars($_POST['password']);
    if($pseudo != 'Amir'){
        echo "<h1> Wrong Username or Password</h1>";
        return;
    }

    $connectionManager = new userManager();
    $password_in_db_hashed = $connectionManager->checkUser($pseudo);

    while($datas = $password_in_db_hashed->fetch()){
        if(password_verify($userPwd,$datas['pwd'])){
                
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['connexion'] = true;
                require('./view/dashboard.php'); 
        }else{
            echo "<h1> Wrong Username or Password</h1>";
        }
    }

