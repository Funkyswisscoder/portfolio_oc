<header>
    <h3>Amir Bonvin</h3>
    <img src="./public/images/logoSIT.png" alt="logo de la société Swiss-ITech" id='logoSIT'>
    <a href="#menu" id="toggle"><span></span></a>
    <nav id='menu'>
        <ul>
            <li><a href="./index.php?redirect=home" <?php if(isset($thisPage) AND $thisPage == 'home'){echo "id='bottomBorder'";} ?>>Accueil</a></li>
            <li><a href="./index.php?redirect=portfolio" <?php if(isset($thisPage) AND $thisPage == 'portfolio'){echo "id='bottomBorder'";} ?>>Portfolio</a></li>
            <li><a href="./index.php?redirect=goldenbook" <?php if(isset($thisPage) AND $thisPage == 'goldenbook'){echo "id='bottomBorder'";} ?>>Livre d'Or</a></li>
            <li><a href="./index.php?redirect=contact" <?php if(isset($thisPage) AND $thisPage == 'contact'){echo "id='bottomBorder'";} ?>>Contact</a></li>
        <?php
        if(isset($_SESSION['connexion'])){ 
            echo "<li class='loginLink' id='dashLink'><a href='./index.php?redirect=dashboard'>Dashboard</a></li>";
            echo "<li class='loginLink' id='logout'><a href='./index.php?redirect=logout'>Logout</a></li>";
        }else{
            echo "<li class='loginLink' id='loginLink'>Login</li>";
        } 
        ?>

        </ul>
    </nav>
</header>
<section class='formContainer'>
    <div class="form-wrapper" id="formWrapper" style="display:none">
        <form action="./?redirect=login" method="POST">
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" value="Valider">
        </form>
    </div>
</section>
<script src='./public/js/header.js'></script>
