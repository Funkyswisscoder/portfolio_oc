<header>
    <h4>Amir Bonvin</h4>
    <img src="./public/images/logoSIT.png" alt="logo de la société Swiss-ITech" id='logoSIT'>
    <nav>
        <ul>
            <li><a href="./index.php?redirect=home">Accueil</a></li>
            <li><a href="./index.php?redirect=portfolio">Portfolio</a></li>
            <li><a href="./index.php?redirect=goldenbook">Livre d'Or</a></li>
            <li><a href="./index.php?redirect=contact">Contact</a></li>
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
