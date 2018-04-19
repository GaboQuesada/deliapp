<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="logremi.css">
        <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <body>

 <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <center> <label> Gabriel Quesada</label> </center>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
             
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Continuar...</button>
            </form><!-- /form -->
            <a href="index.php" class="forgot-password">
                Iniciar con otra cuenta?
            </a>
          
        </div><!-- /card-container -->
    </div><!-- /container -->
    </body>
</html>
