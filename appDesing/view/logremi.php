<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/animation.css"/>
        <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
      

          <link rel="stylesheet" href="../css/logremi.css">

        <script type="text/javascript" src="../lib/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <body>
        <header id="header">
            <img  src="../img/logo.png" height="70" width="70" /> 
            <img  src="../img/logoyovoy.png" height="90" width="90" /> 


        </header>
        <div class="container  boxmain">
            <div class="card card-container">
               
                <img id="profile-img" class="profile-img-card slideExpandUp pulse" src="../img/profil.jpg" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <center> <label> Adriana Villanueva</label> </center>
                    <input type="password" id="inputPassword" class="form-control slideLeft" placeholder="Contraseña" required>

                    <button class="btn btn-lg btn-primary btn-block btn-signin slideRight" type="submit">Continuar...</button>
                </form><!-- /form -->
                <a href="../index.php" class="forgot-password slideUp">
                    Iniciar con otra cuenta?
                </a>

            </div><!-- /card-container -->
        </div><!-- /container -->
        <footer id="footer">
            <p> <i class="fab fa-react fa-spin"></i><strong>Diseño y programación:</strong>Gabriel Quesada Sánchez </p>
        </footer>
    </body>
</html>
