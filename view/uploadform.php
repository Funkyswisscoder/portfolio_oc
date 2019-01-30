<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Form</title>
</head>
<body>
    <form action="../index.php?redirect=createProject" method="POST">
        <label for="projectTitle">Nom du projet:</label><br/>
        <input type="text" name="projectTitle"><br/>
        <label for="">Nom du client:</label><br/>
        <input type="text" name="partnerName"><br/>
        <label for="">Framework utilisé:</label><br/>
        <input type="text" name="framework"><br/>
        <label for="projectImg">Screen du projet:</label><br/>
        <input type="file" name='projectImg'><br/>
        <label for="">Techno 1:</label><br/>
        <input type="text" name="tech1"><br/>
        <label for="">Techno 2:</label><br/>
        <input type="text" name="tech2"><br/>
        <label for="">Techno 3:</label><br/>
        <input type="text" name="tech3"><br/>
        <input type="submit" name="submit" id="submitBtn">
    </form>
</body>
</html>