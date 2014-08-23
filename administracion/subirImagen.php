<html>
    <head>
        <title>title</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css"/>
        <link rel="stylesheet" href="../font-awesome-4.1.0/css/font-awesome.css"/>
        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
        <script src="js/index.js"></script>
    </head>
    <body style="background-color: #c1c5c7">
        <div class="container" style="background-color: white">
            <header>
                <br>
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Me urge Vender/Comprar</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#" id="lnkVentas">Ventas casas</a></li>
                                <li><a href="#" id="lnkCompras">Comprar Casas</a></li>
                                <li><a href="subirImagen.php" id="lnkCompras">Subir Imagen Slider</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Cerrar Cession</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!--seccion de las tablas-->
            <form enctype="multipart/form-data" action="guardarImagen.php" method="POST">
                <input name="uploadedfile" type="file" required="true"/>
                <br>
                <input type="submit" value="Subir archivo" class="btn btn-success"/>
            </form>
            <table id="table" class="table table-hover">
            </table>
        </div>
        <script src="js/imagenes.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <link rel="stylesheet" href="js/magnific-popup.css"/>
    </body>
</html>
