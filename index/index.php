<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Me urge vender</title>

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
                    <a class="navbar-brand" href="index.php">Me urge vender</a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">Contáctame</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Half Page Image Background Carousel Header -->
        <div id="myCarousel" class="carousel" >
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
                    <div class="fill" style="background-image:url('imgs-slider/1.jpg');"></div>
                    <div class="carousel-caption">
                        <!--<h2>Caption 1</h2>-->
                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('imgs-slider/5.jpg');"></div>
                    <div class="carousel-caption">
                        <!--<h2>Caption 2</h2>-->
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('imgs-slider/4.jpg');"></div>
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

        </div>
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-lg-12" style="padding-top: 3%">
                    <div  class="well well-sm" >
                        <span style="font-size: 24px"><strong>Compra - Venta</strong> de Inmobiliaria</span><br>
                        <p>Selecciona la opción de tu preferencia, llena el formulario y publica tu venta o compra.
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="col-lg-6 col-md-6">
                        <span style="font-size: 24px">Me urge <strong>Comprar!</strong></span><br>
                        <button type="button" id="btncomprar" class="btn btn-success btn-circle btn-xli"><i class="fa fa-money fa-4x"></i></button>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <span style="font-size: 24px">Me urge <strong>Vender!</strong></span><br>
                        <button  type="button" id="btnvender" class="btn btn-success btn-circle btn-xli"><i class="fa fa-building fa-4x"></i></button>
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
        <div class="modal fade" id="mdlcomprar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog"  >
                <div class="modal-content">
                    <div class="modal-header">
                        <span style="font-size: 24px">Nueva <strong>Compra</strong></span>
                    </div>
                    <div class="modal-body">
                        <h4>- Datos del predio:</h4>
                        <form style="padding-left: 25px; padding-right: 25px">
                            <div class="form-group">
                                <label class="control-label">Colonia:</label>
                                <input class="form-control compdata" id="c_colonia" type="text"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Precio:</label>
                                <input class="form-control compdata" id="c_precio" type="text" placeholder="0.00" />
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Medidas del terreno:</label>
                                <input class="form-control compdata" id="c_medidas" type="text" placeholder="ej. 30m x 100m"/>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Numero de habitaciones:</label>
                                <input class="form-control compdata" id="c_habitaciones" type="number" min="1" placeholder="" style="width: 100px" onpaste="return  false"/>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Numero de baños:</label>
                                <input class="form-control compdata" id="c_banos" type="number" min="0" placeholder="" style="width: 100px" onpaste="return  false"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Numero de pisos:</label>
                                <input class="form-control compdata" id="c_pisos" type="number" min="1" placeholder="" style="width: 100px" onpaste="return  false"/>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Este inmueble cuenta con:</label><br>
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" id="chk_jardin"> Jardin
                                    </label>
                                </div>
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" id="chk_patio"> Patio
                                    </label>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <h4>- Datos del vendedor:</h4>
                        <form style="padding-left: 25px; padding-right: 25px">
                            <div class="form-group">
                                <label class="control-label">Nombre:</label>
                                <input class="form-control compdata" id="c_nombre" type="text" onkeypress="return validkey(event);"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Telefono:</label>
                                <input class="form-control compdata" id="c_telefono" type="text" style="width: 350px" onpaste="return false"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Correo electronico:</label>
                                <input class="form-control compdata" id="c_email" type="text" style="width: 350px"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Direccion:</label>
                                <input class="form-control compdata" id="c_direccion" type="text"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Colonia:</label>
                                <input class="form-control compdata" id="c_ccolonia" type="text" style="width: 350px"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Codigo postal:</label>
                                <input class="form-control compdata" id="c_cp" type="text" style="width: 100px" onpaste="return false"/>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="guardarcompra" class="btn btn-success btn-circle btn-lg"><i class="fa fa-check"></i></button>
                        <button type="button" id="cancelarcompra" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="modal fade" id="mdlvender" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span style="font-size: 24px">Nueva <strong>Venta</strong></span>
                    </div>
                    <div class="modal-body">
                        <h4>- Datos del predio:</h4>
                        <form style="padding-left: 25px; padding-right: 25px">
                            <div class="form-group">
                                <label class="control-label">Colonia:</label>
                                <input class="form-control ventdata" id="v_colonia" type="text"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Precio:</label>
                                <input class="form-control ventdata" id="v_precio" type="text" placeholder="0.00" />
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Medidas del terreno:</label>
                                <input class="form-control ventdata" id="v_medidas" type="text" placeholder="ej. 30m x 100m"/>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Numero de habitaciones:</label>
                                <input class="form-control ventdata" id="v_habitaciones" type="number" min="1" placeholder="" style="width: 100px" onpaste="return  false"/>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Numero de baños:</label>
                                <input class="form-control ventdata" id="v_banos" type="number" min="0" placeholder="" style="width: 100px" onpaste="return  false"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Numero de pisos:</label>
                                <input class="form-control ventdata" id="v_pisos" type="number" min="1" placeholder="" style="width: 100px" onpaste="return  false"/>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Este inmueble cuenta con:</label><br>
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" id="vhk_jardin"> Jardin
                                    </label>
                                </div>
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" id="vhk_patio"> Patio
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Este inmueble puede tener acceso a los servicios de:</label><br>
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" id="vhk_telefono"> Telefono
                                    </label>
                                </div>
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" id="vhk_internet"> Internet
                                    </label>
                                </div>
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" id="vhk_tvpaga"> TV de paga
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Imagen(es) del inmueble:</label>
                                <span id="textoValor" class="text-muted"><em>Maximo 3 imagenes</em></span>
                                <input type="file" id="files" name="files[]" accept="image/x-png, image/gif, image/jpeg" multiple />
                                <output id="list-files"></output>
                            </div>
                        </form>
                        <hr>
                        <h4>- Datos del vendedor:</h4>
                        <form style="padding-left: 25px; padding-right: 25px">
                            <div class="form-group">
                                <label class="control-label">Nombre:</label>
                                <input class="form-control ventdata" id="v_nombre" type="text" onkeypress="return validkey(event);"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Telefono:</label>
                                <input class="form-control ventdata" id="v_telefono" type="text" style="width: 350px" onpaste="return false"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Correo electronico:</label>
                                <input class="form-control ventdata" id="v_email" type="text" style="width: 350px"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Direccion:</label>
                                <input class="form-control ventdata" id="v_direccion" type="text"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Colonia:</label>
                                <input class="form-control ventdata" id="v_ccolonia" type="text" style="width: 350px"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Codigo postal:</label>
                                <input class="form-control ventdata" id="v_cp" type="text" style="width: 100px" onpaste="return false"/>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="guardarventa" class="btn btn-success btn-circle btn-lg"><i class="fa fa-check"></i></button>
                        <button type="button" id="cancelarventa" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-times"></i></button>
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

        <!-- Valid Campos Franz -->
        <script src="../utilerias/validCampoFranz.js"></script>

        <!-- Numeric -->
        <script src="../utilerias/jquery.numeric.js"></script>


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
