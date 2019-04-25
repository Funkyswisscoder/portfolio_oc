<?php

        require('./model/projectMdl.php');
    $pm = new ProjectManager();


    if(isset($_REQUEST['delete'])){
        $pm = new ProjectManager();
        $project = $pm->getOneProject($_REQUEST['delete'])->fetchAll()[0];
        $FORM_ACTION = '../index.php?redirectDelete=deleteProject';
    }
    
?>

<div>
    <form action="./index.php?redirectDelete=deleteProject" method="post" id="deleteSelection">
        <select name="delete" form="deleteSelection">
        <?php      
            $projects = $pm->getAllProjects()->fetchAll();
            foreach($projects as $p){
                echo '<option value="'.$p['id'].'">'.$p["project_name"].'</option>';
            }
            ?>
        </select>
        <input type="submit">
    </form>
</div>