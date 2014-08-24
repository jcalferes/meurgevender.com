<?php
include './dao/indexdao.php';
$dao = new indexdao();
include '../DaoConnection/coneccion.php';
$datos = $dao->dameImagenesSlider();
$datosItem = $dao->dameImagenesSlider();
if ($datos == false) {
    echo "<h1> " . mysql_error() . "</h1>";
} else {
    ?>

    <ol class="carousel-indicators"><?php
        $datos3 = 1;
        $item = 0;
        while ($rs = mysql_fetch_array($datosItem)) {
            if ($datos3 == 1) {
                $datos3 = $datos3 + 1;
                ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $item; ?>" class="active"></li>
                <?php
            } else {
                ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $item; ?>"></li>
                <?php
            }
            $item = $item + 1;
        }
        ?>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <?php
        $datos1 = 1;
        while ($rs = mysql_fetch_array($datos)) {
            $datosImagen = split("/", $rs["ruta"]);
            if ($datos1 == 1) {
                $datos1 =2;
                ?>
                <div class="item active">
                    <!--Set the first background image using inline CSS below.--> 
                    <div class="fill" style="background-image:url('<?php echo $datosImagen[2] . "/" . $datosImagen[3]; ?>');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="item">
                    <!--Set the first background image using inline CSS below.--> 
                    <div class="fill" style="background-image:url('<?php echo $datosImagen[2] . "/" . $datosImagen[3]; ?>');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <?php
            }
        }
        ?>  
    </div>
    <?php
}