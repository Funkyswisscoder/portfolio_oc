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
        <div id="addPjct"><a href="dashboard.php?action=1">Add</a></div>
        <div id="updatePjct"><a href="dashboard.php?action=2">Update</a></div>
        <div id="removePjct"><a href="dashboard.php?action=3">Delete</a></div>
    </div>
    <section class="main">
    <?php
        if(!isset($_GET['action']))
            return;
        if($_GET['action'] == "1"){
            include('../view/dashForm.php');
        }else if ($_GET['action'] == "2"){
            if(isset($_POST['edit'])){
                include('../view/dashForm.php');
            } else {
                ?>
                <div>
            <form action="dashboard.php?action=2" method="post">
            <select name="edit">
                <option value="1">caca</option>
                <option value="2">pipi</option>
            </select>
            <input type="submit">
            </form>
        </div>
        <?php
            }
            
            
            
        }
    ?>
    </section>
</body>
</html>