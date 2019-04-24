<?php     ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/goldenbook.css">
    <title>Amir Bonvin</title>
</head>
<body>
    <?php include('./view/header.php'); ?>

    <section class='ComWrapper'>
        <h3>Laissez moi un commentaire!</h3>
        <div>
            <form action="./?redirect=postCom" method="post" id="reviewForm">
                <label for="nameCome" >Votre Nom:</label><br/>
                <input type="text" name="nameCom" id="nameCom" required><br/>
                <label for="comContent">Votre Commentaire:</label><br/>
                <textarea name="comContent" id="comContent" cols="60" rows="15" required></textarea><br/>
                <input type="submit" value="Valider">
            </form>
        </div>
    </section>
    <section class='reviewWrapper'>
        <?php 
            while($data = $showComs->fetch()){

                $idCom = htmlspecialchars($data['id']);
                $name = htmlspecialchars($data['name']);
                $comContent = htmlspecialchars($data['comm']);
            ?>
            <div class='reviewPost'>
                <h3><?= $name; ?></h3>
                <p><?= $comContent; ?></p>
                <?php if(isset($_SESSION['connexion']) AND $_SESSION['connexion'] == true){ ?>
                    <a href="./?redirect=deleteCom&idCom=<?=$idCom;?>">x</a>                    
              <?php  } ?>

            </div>
        <?php } ?>
    </section>
    <section class='nextWrapper'>
        <?php if($from != 0){ ?>
            <a  href="./?redirect=goldenbook&from=<?=$from-$size < 0 ? 0 : $from-$size;?>&size=<?=$size;?>" class="nextBtn">PRECEDENT</a>
        <?php } ?>
        <?php if( (int)$from + (int)$size< (int)$getCount){ ?>
            <a  href="./?redirect=goldenbook&from=<?=$from+$size;?>&size=<?=$size;?>" class="nextBtn">SUIVANT</a>
        <?php } ?>    
    </section>

    


    <script src='./public/js/script.js'></script>
</body>
</html>