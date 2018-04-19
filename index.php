<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/animation.css">
        <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <body>

        <div class="main">
            <header id="header">
                <img id="logoempresa" src="img/logoyovoy.png" height="90" width="90" /> 
                <img id="logodeli" src="img/logo.png" height="90" width="90" /> 

            </header>

            <div class="container">
                <center>
                    <div class="middle">
                        <div id="login">

                            <form action="javascript:void(0);" method="get">

                                <fieldset class="clearfix">

                                    <p ><span class="fa fa-user"></span><input type="text"  class="slideDown" Placeholder="Usuario" ></p> 
                                    <p><span class="fa fa-lock"></span><input type="password" class="slideRight"  Placeholder="Contraseña" ></p> 

                                    <div>
                                        <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text slideUp" href="#">Recuperar contraseña?</a></span>
                                        <span style="width:50%; text-align:right;  display: inline-block;"><input  class="slideUp"type="submit" value="Ingresar"></span>
                                    </div>

                                </fieldset>
                                <div class="clearfix"></div>
                            </form>

                            <div class="clearfix"></div>

                        </div> <!-- end login -->
                        <div id="logobox" class="logo">
                            <img class="slideExpandUp  sobralogo" src="img/logo.png" width="170" height="170"/>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </center>
            </div>

            <footer id="footer">
                <p> <i class="fab fa-react fa-spin"></i><strong>Diseño y programación:</strong>Gabriel Quesada Sánchez </p>
            </footer>
        </div>
    </body>
</html>
