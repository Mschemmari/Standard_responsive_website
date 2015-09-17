   <?php include 'includes/header.php'; ?>
    <?php include 'includes/menu.php'; ?>

    <!-- BREADCRUMBS-->
    <div class="container-fluid site_breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="product_name pull-left">Vehículo instalado</h1>
                    <p class="breadcrumbs pull-right">Vehículo instalado</p>
                </div>
            </div>
        </div>
    </div>

    <!-- VEHICLE PAGE CONTAINER -->
    <div id="vehicle-page" class="container">
        <div class="row">
            <!-- menu -->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="panel-desplegables">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">

                        <?php foreach ($brands as $brand):?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$brand['route']?>" aria-expanded="false" aria-controls="collapse-<?=$brand['route']?>">
                                        <?=$brand['name']?> <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                </h4>
                            </div>
                            <?php if (count($brand['children']) > 0): ?>
                                <div id="collapse-<?=$brand['route']?>" class="panel-collapse collapse" role="tabpanel" >
                                    <div class="panel-body">
                                        <ul class="list-unstyled">
                                        <?php foreach ($brand['children'] as $child):?>
                                            <li><a href="#"><?=strtoupper($child['name'])?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                        <?php endforeach; ?>

                   </div>
                </div>
            </div>

            <!-- container -->
                <?php if (! empty($_GET['product'])): ?>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <h3 class="common-subtitle brand-subtitle ">Nombre brand</h3>
                        <hr>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-4">
                       <a href="#" id="toggle-image"><img id="imageresource" src="http://lorempixel.com/400/300/" data-src="http://lorempixel.com/767/500/" alt="Nombre del producto" class="img-responsive"></a>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-5">
                        <h4 class="common-subtitle product-subtitle">
                            Nombre del producto
                            <small style="display:block;width:100%">Equipo 5ta Generación</small>
                        </h4>
                        <p class="product-description">
                            Consulte a un asesor <br>
                            sobre los costos y tipos de instalación <br><br>
                            <a href="#" class="btn btn-yellow">CONSULTAR</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <br> <br>
                        <div id="thumbnail-slider" class="carousel slide" style="position:relative">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-2 col-sm-offset-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                        <div class="col-xs-3 col-sm-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                        <div class="col-xs-3 col-sm-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                        <div class="col-xs-3 col-sm-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-3  col-sm-2 col-sm-offset-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                        <div class="col-xs-3 col-sm-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                        <div class="col-xs-3 col-sm-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                        <div class="col-xs-3 col-sm-2"><a href="#x"><img src="http://placehold.it/120x120" alt="Image" class="img-responsive"></a> </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#thumbnail-slider" data-slide="prev">
                                <span>‹</span>
                            </a>
                            <a class="right carousel-control" href="#thumbnail-slider" data-slide="next">
                                <span>›</span>
                            </a>
                        </div>
                        <br>

                        <h3 class="common-subtitle">Comentarios</h3>
                        <div class="fb-comments" data-href="http://movilgas.com.ar/vehiculos-instalados?product=<?=$_GET['product']?>" data-width="100%" data-numposts="5"></div>
                    </div>
                        <!-- modal -->
                        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style=" border-radius: 0px;">
                                    <div class="modal-body" style="padding:5px">
                                        <img src="" id="imagepreview" class="img-responsive" >
                                        <button type="button" class="close" data-dismiss="modal" id="imagepreview-close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /modal -->

                <?php else: ?>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

                        <img src="images/seleccionar-marca.jpg" alt="Selecciona una marca desde el menú lateral" class="img-responsive">
                        <br>
                        <h3 class="common-subtitle">Comentarios</h3>
                        <div class="fb-comments" data-href="http://movilgas.com.ar/vehiculos-instalados" data-numposts="5" data-width="100%"></div>
                    </div>
                <?php endif; ?>

        </div>
    </div>


<?php include 'includes/footer.php'; ?>





