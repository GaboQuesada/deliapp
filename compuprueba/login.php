<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/animation/css/animation.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.css" >
        <link rel="stylesheet" href="../lib/alertifyjs/css/themes/semantic.css" >
        
        <link rel="stylesheet" href="css/login.css" >

        <title>Hello, world!</title>
    </head>
    <body class="text-center">
        
       

        <div id="div_carga">
            <img id="cargador" src="../img/gifcarga.gif"/>
        </div>


        <div class="centrado-porcentual">
            <div class="caja1 slideRight " id="caja1">
                
                <img class="mb-4 imgcl imcshadow" src="../img/logo.png" alt="" >
            </div>
            <div class="caja2 slideDown" id="caja2">
                <form class="form-signin">



                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-alt tamf"></i></div>
                        </div>
                        <input type="text" id="nb" class="form-control colf " placeholder="Usuario" autofocus>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key tamf"></i></div>
                        </div>
                        <input type="password" id="pb" class="form-control colf" placeholder="Contraseña" >
                    </div>


                    <button id="btnEntrar" class="btn btn btn-dark btn-block" type="button"><i class="fas fa-unlock"></i> Entrar</button>

                </form>
            </div>

        </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <!-- <script src="../lib/jquery/jquery-3.2.1.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../lib/alertifyjs/js/alertify.js" ></script>
        <script src="../lib/animation/js/animation.js" ></script>
        <script src="../js/validaciones.js" ></script>
 
        <script src="controler/new.js" ></script>
        
    

    </body>
</html>