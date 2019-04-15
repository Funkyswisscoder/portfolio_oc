<?php
    ini_set('display_errors', 1);
    require('../model/projectMdl.php');
    $pm = new ProjectManager();
?>
<div>
    <form action="/portfolio_oc/view/dashboard.php?action=2" method="post">
        <select name="edit">
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
<?php
    
    

    if(isset($_REQUEST['edit'])){
        $project = $pm->getOneProject($_REQUEST['edit'])->fetchAll()[0];
        $FORM_ACTION = '../index.php?redirectUpdate=updateProject';
        include('../view/dashForm.php');
    }
?>



