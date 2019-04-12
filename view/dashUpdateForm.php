<div>
    <form action="/portfolio_oc/view/dashboard.php?action=2" method="post">
        <select name="edit">
            <option value="1">projet 1</option>
            <option value="2">projet 2</option>
        </select>
        <input type="submit">
    </form>
</div>
<?php
    ini_set('display_errors', 1);
    

    if(isset($_REQUEST['edit'])){
        $pm = new ProjectManager();
        $project = $pm->getOneProject($_REQUEST['edit'])->fetchAll()[0];
        $FORM_ACTION = '../index.php?redirectUpdate=updateProject';
        include('../view/dashForm.php');
    }
?>



