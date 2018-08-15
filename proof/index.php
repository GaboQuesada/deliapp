<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h4>Con Ajax</h4><hr>
        <form enctype="multipart/form-data" method="post" name="fileinfo" id="fileinfo">
            <label style="width: 185px;">Nombre:</label>
            <input type="tel"  name="nombre" id="nombre"  />
            
            <br/>
            <label style="width: 185px;">Edad:</label>
            <input type="number" name="edad" id="edad" />
            <input type="submit" value="Enviar" />
        </form>
        
       <h4>Sin Ajax</h4><hr>
       <form enctype="multipart/form-data" method="post" name="fileinfo2" action="model/model.php" id="fileinfo2">
            <label style="width: 185px;">Nombre:</label>
            <input type="text"  name="nombre" id="nombre"  />
            
            <br/>
            <label style="width: 185px;">Edad:</label>
            <input type="text" name="edad" id="edad" />
            <br/>
            <input type="submit" value="Enviar" />
        </form>

    </body>
    <script src="../lib/jquery/jquery-3.2.1.min.js"></script>
    <script src="conh/constructor.js"></script>
</html>
