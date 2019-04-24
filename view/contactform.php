<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/contactform.css">
    <title>Contact</title>
</head>
<body>
    <?php include('./view/header.php'); ?> 

    <section class='mailingStyle'>
        <form action="./?redirect=postMail" method="post">
            <h2>Formulaire de contact:</h2>
            Nom:<br>
            <input type="text" name="first_name" class="contactInp" required><br>
            Prénom:<br>
            <input type="text" name="last_name" class="contactInp" required><br>
            Email:<br>
            <input type="text" name="email" class="contactInp" required><br>
            Message:<br>
            <textarea rows="10" name="message" cols="45" required></textarea><br>
            <input type="submit" name="submit" value="Submit" class='submitBtn contactInp'>
        </form>
        <div class="mapWrapper">
           <div id="map"></div>
           <h4>Adresse: Rue Rotschild 50, 1202 Genève, Suisse</h4>
           <h4>E-mail: amir@evolutio-dev.ch</h4>
        </div>     
         
    </section>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz9r8WZ94IhiMqljzxutwv4LzrVhGHObM&callback=initMap"></script> 
    <script src='./public/js/maps.js'></script>    
    <script src='./public/js/script.js'></script>
</body>
</html>