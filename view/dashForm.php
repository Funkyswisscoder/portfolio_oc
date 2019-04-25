<?php 


    if(isset($_REQUEST['edit'])){
        $pm = new ProjectManager();
        $project = $pm->getOneProject($_REQUEST['edit'])->fetchAll()[0];
    }
    if(!isset($FORM_ACTION)){
        echo '<b style="color:red">SETTING $FORM_ACTION IS REQUIRED FOR THE DASHFORM TO WORK!</b>';
        return;
    }
    
?>
<form action="<?php echo $FORM_ACTION ?>" method="post" id='createProject'>

    <div>
        <?php if(isset($_REQUEST['edit'])){ ?>
            <input type="text" name="id" value="<?php echo $_REQUEST['edit']; ?>" style="display:none">
        <?php }?>
        <input type="text" name="projectTitle" placeholder="Nom du Projet" required value="<?php echo isset($project) ? $project['project_name'] : ''; ?>">
        <input type="text" name="partnerName" placeholder="Nom du Client" required value="<?php echo isset($project) ? $project['partners_name'] : ''; ?>">
        <input type="text" name="framework" placeholder="Framework utilisé" required value="<?php echo isset($project) ? $project['framework'] : ''; ?>">
    </div>

    <div>
        <input type="text" name="tech1" placeholder="Mise en page" required value="<?php echo isset($project) ? $project['tech_1'] : ''; ?>">
        <input type="text" name="tech2" placeholder="Languages Frontend" required value="<?php echo isset($project) ? $project['tech_2'] : ''; ?>">
        <input type="text" name="tech3" placeholder="Languages Backend" required value="<?php echo isset($project) ? $project['tech_3'] : ''; ?>">
    </div>

    <div>
        <label for="projectImg">Screen du projet:</label><br/>
        <select name="img_link" form="createProject" id="selectImg">
        <?php
            $arrimg = scandir('./public/images');
            
            
            $arrimg = array_slice($arrimg,2,count($arrimg)-2); //remove . and ..
            foreach($arrimg as $img){
                echo '<option value="../public/images/'.$img.'">'.explode('.',$img)[0].'</option>';
            }
        ?>
        </select>
    </div>
    <input type="submit" name="submit" class="submitBtn">

</form>