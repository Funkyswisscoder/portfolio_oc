<?php

    ini_set('display_errors', 1);


    if(isset($_REQUEST['delete'])){
        $pm = new ProjectManager();
        $project = $pm->getOneProject($_REQUEST['delete'])->fetchAll()[0];
        $FORM_ACTION = '../index.php?redirectDelete=deleteProject';
    }
    
?>

<div>
    <form action="<?php echo $FORM_ACTION ?>" method="post" id="deleteSelection">
        <select name="delete" form="deleteSelection">
            <option name="projet1" value="1">projet 1</option>
            <option name="projet2" value="2">projet 2</option>
        </select>
        <input type="submit">
    </form>
</div>