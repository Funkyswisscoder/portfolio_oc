<?php

    ini_set('display_errors', 1);
    require('./model/CommModel.php');

        $cm = new CommentsManager();

        if(isset($action) && $action == 'create'){
            if(trim(strlen($comContent)) > 0){
                $postCom = $cm->createComm($nameCom, $comContent);                   
            }else{
                echo '<h2>You need to put your name and some content</h2>';
            } 
        }else if(isset($action) && $action == 'delete'){
            $deleteCom = $cm->deleteOneComm($idCom);
        }


        $from = isset($_GET['from']) ? $_GET['from'] : 0;
        $size = isset($_GET['size']) ? $_GET['size'] : 2;
        $showComs = $cm->getCommsPaginated($from,$size);    
        $getCount = $cm->getCount()->fetch()[0]; 

        require('./view/goldenbook.php'); 

