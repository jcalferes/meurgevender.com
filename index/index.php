<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>meurgevender</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/half-slider.css" rel="stylesheet">

        <!-- Boostrap Btn Circle -->
        <link href="../bootstrap/css/bootstrap-btncircle.css" rel="stylesheet">

        <!-- Font Awenson -->
        <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Alertify -->
        <link href="../alertify/themes/alertify.core.css" rel="stylesheet">
        <link href="../alertify/themes/alertify.default.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="border-radius: 0px 0px 5px 5px;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img alt="" src="imgs/logo.png" height="25" /></a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="">Acerca de</a>
                        </li>
                        <li>
                            <a href="">Servicios</a>
                        </li>
                        <li>
                            <a href="">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Half Page Image Background Carousel Header -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('imgs/1.jpg');"></div>
                    <div class="carousel-caption">
                        <!--<h2>Caption 1</h2>-->
                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('imgs/5.jpg');"></div>
                    <div class="carousel-caption">
                        <!--<h2>Caption 2</h2>-->
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('imgs/4.jpg');"></div>
                    <div class="carousel-caption">
                        <!--<h2>Caption 3</h2>-->
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </header>

        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-lg-12" style="padding-top: 3%">
                    <div  class="well well-sm" >
                        <span style="font-size: 24px"><strong>Compra - Venta</strong> de Inmobiliaria</span><br>
                        <p>Selecciona la opción de tu preferencia, llena el formulario y publica tu venta o compra.
                            ¡Así de fácil!
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="col-lg-6 col-md-6">
                        <span style="font-size: 24px">Me urge <strong>Comprar!</strong></span><br>
                        <button type="button" id="btncomprar" class="btn btn-primary btn-circle btn-xli"><i class="fa fa-umbrella fa-5x"></i></button>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <span style="font-size: 24px">Me urge <strong>Vender!</strong></span><br>
                        <button  type="button" id="btnvender" class="btn btn-danger btn-circle btn-xli"><i class="fa fa-umbrella fa-5x"></i></button>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; meurgevender 2014</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->
        <!-- Modal -->
        <div class="modal fade" id="mdlcomprar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" style="width: 90%" >
                <div class="modal-content">
                    <div class="modal-header">
                        <span style="font-size: 24px">Nueva <strong>Compra</strong></span>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="guardarcompra" class="btn btn-primary btn-circle btn-lg">OK</button>
                        <button type="button" id="cancelarcompra" class="btn btn-default btn-circle btn-lg">X</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="modal fade" id="mdlvender" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" style="width: 90%">
                <div class="modal-content">
                    <div class="modal-header">
                        <span style="font-size: 24px">Nueva <strong>Venta</strong></span>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="guardarventa" class="btn btn-danger btn-circle btn-lg">OK</button>
                        <button type="button" id="cancelarventa" class="btn btn-default btn-circle btn-lg">X</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- jQuery Version 1.11.0 -->
        <script src="../bootstrap/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <!-- Alertify JS -->
        <script src="../alertify/lib/alertify.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });
        </script>

        <!-- Js -->
        <script src="js/index.js"></script>
    </body>
</html>
