<?php     
    
    ini_set('display_errors', 1); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/portfolio_oc/public/css/style.css">
    <link rel="stylesheet" href="/portfolio_oc/public/css/dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <div class="sticky-left">
        <div id="addPjct"><a href="/portfolio_oc/view/dashboard.php?action=1">Add</a></div>
        <div id="updatePjct"><a href="/portfolio_oc/view/dashboard.php?action=2">Update</a></div>
        <div id="removePjct"><a href="/portfolio_oc/view/dashboard.php?action=3">Delete</a></div>
    </div>
    <section class="main">
    <?php
        if(!isset($_GET['action']))
            return;
        if($_GET['action'] == "1"){
            $FORM_ACTION = '../index.php?redirectCreate=createProject';
            include('../view/dashForm.php');
        }else if ($_GET['action'] == "2"){
                include('../view/dashUpdateForm.php');
        }else if ($_GET['action'] == "3"){
            require('../view/dashDeleteForm.php');
        }
        else {
            echo 'CACA';
        }
    ?>

    </section>
</body>
</html>