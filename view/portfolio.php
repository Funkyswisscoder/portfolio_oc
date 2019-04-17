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

    <section class="pageWrapper">

            <?php 
                include('./view/header.php'); 

                while($data = $getPortfolio->fetch()){

                    $title = htmlspecialchars($data['project_name']);
                    $client = htmlspecialchars($data['partners_name']);
                    $framework = htmlspecialchars($data['framework']);
                    $tech1 = htmlspecialchars($data['tech_1']);
                    $tech2 = htmlspecialchars($data['tech_2']);
                    $tech3 = htmlspecialchars($data['tech_3']);
                    $imgLink = htmlspecialchars($data['img_link']);
            ?>
        <div class='mySlides fade'>
            <div class="firstPart ">
                <img src="./portfolio_oc/<?= $imgLink;?>" alt="portfolio image" class="portImg">
                <h2 class="portTitle"><?= $title;?></h2>
            </div>
            <div class="portInfo">
                <div class="portTech">
                    <h4>Technologies:</h4>
                    <p>Structure/Animations:<?= $tech1;?></p>
                    <p>Language Frontend:<?= $tech2;?></p>
                    <p>Language Backend:<?= $tech3;?></p>
                </div>
                <div class="client">
                    <h4>Client:</h4>
                    <p><?= $client;?></p>
                </div>
            </div>
        </div>

        <?php }; ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
    </div>
    <script src='./public/js/script.js'></script>
</body>
</html>