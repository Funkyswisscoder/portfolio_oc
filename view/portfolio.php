<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/portfolio.css">
    <title>Portfolio</title>
</head>
<body>
    <?php 
        while($data = $getPortfolio->fetch()){

            $title = htmlspecialchars($data['project_name']);
            $client = htmlspecialchars($data['partners_name']);
            $framework = htmlspecialchars($data['framework']);
            $tech1 = htmlspecialchars($data['tech_1']);
            $tech2 = htmlspecialchars($data['tech_2']);
            $tech3 = htmlspecialchars($data['tech_3']);
            $imgLink = htmlspecialchars($data['img_link']);
    ?>
    <section class="pageWrapper">
        <div class="firstPart">
            <img src="./portfolio_oc/<?= $imgLink;?>" alt="portfolio image" class="portImg">
            <h2 class="portTitle"><?= $title;?></h2>
        </div>
        <div class="portInfo">
            <div class="portTech">
                <h4>Technologies:</h4>
                <ul>
                    <li><?= $tech1;?></li>
                    <li><?= $tech2;?></li>
                    <li><?= $tech3;?></li>
                </ul>
            </div>
            <div class="client">
                <h4>Client:</h4>
                <p><?= $client;?></p>
            </div>
        </div>
    
    </section>
    <?php }; ?>
</body>
</html>