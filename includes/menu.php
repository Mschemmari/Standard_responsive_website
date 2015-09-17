<!-- #header -->
<div id="header" class="container">
    <div class="row">
        <!-- desktop version -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs hidden-sm clearfix">
            <div class="pull-left">
                <img src="images/logo.jpg" class="img-responsive">
            </div>
            <div class="pull-right">
                <img src="images/header.jpg" class="img-responsive">
            </div>
        </div>

        <!-- mobile version -->
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg  img-responsive-center">
            <img src="images/logo.jpg" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg  img-responsive-center">
            <img src="images/header.jpg" class="img-responsive">
        </div>
    </div>
</div>

<!-- #menu -->
<nav id="menu" class="navbar navbar-custom" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse navbar-main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="empresa.php">LA EMPRESA</a></li>
                    <li class="hidden-xs"> <a href="productos.php" id="mega-menu-link">PRODUCTOS <b class="caret"></b></a> </li>
                    <li class="hidden-sm hidden-md hidden-lg dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTOS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php $categories_processed = $categories['kits'] + $categories['valvulas'] + $categories['reductores'] + $categories['otros']?>
                            <?php foreach ($categories_processed as $cat): ?>
                                <li class="important"><a href="<?=$cat['route']?>"><?=$cat['name']?></a></li>
                                <?php foreach ($cat['children'] as $cat_child): ?>
                                <li><a href="<?=$cat_child['route']?>"><?=$cat_child['name']?></a></li>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="#">MAYORISTAS</a></li>
                    <li><a href="contacto1.php">CONTACTOS</a></li>
                    <li>
                        <form class="navbar-form search-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control search-input hidden-md hidden-lg hidden-sm" placeholder="Buscar.." name="string" id="string">
                                <div class="input-group-btn">
                                    <button class="btn search-submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div>
</nav>

<!-- #mega-menu -->
<div id="mega-menu" class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="mega-menu-background">
                <ul class="multi-column">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <ul class="multi-column-dropdown">
                                <?php foreach ($categories['kits'] as $row): ?>
                                <li class="important"><a href="<?=$row['route']?>"><?=$row['name']?></a></li>
                                    <?php foreach ($row['children'] as $child): ?>
                                    <li class="<?=($request == $child['route']) ? 'active' : '' ?>"><a href="<?=$child['route']?>"><?=$child['name']?></a></li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <ul class="multi-column-dropdown">
                                <?php foreach ($categories['valvulas'] as $row): ?>
                                <li class="important"><a href="<?=$row['route']?>"><?=$row['name']?></a></li>
                                    <?php foreach ($row['children'] as $child): ?>
                                    <li class="<?=($request == $child['route']) ? 'active' : '' ?>"><a href="<?=$child['route']?>"><?=$child['name']?></a></li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <ul class="multi-column-dropdown">
                                <?php foreach ($categories['reductores'] as $row): ?>
                                <li class="important"><a href="<?=$row['route']?>"><?=$row['name']?></a></li>
                                    <?php foreach ($row['children'] as $child): ?>
                                    <li class="<?=($request == $child['route']) ? 'active' : '' ?>"><a href="<?=$child['route']?>"><?=$child['name']?></a></li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <ul class="multi-column-dropdown">
                                <?php foreach ($categories['otros'] as $row): ?>
                                <li class="important"><a href="<?=$row['route']?>"><?=$row['name']?></a></li>
                                    <?php foreach ($row['children'] as $child): ?>
                                    <li class="<?=($request == $child['route']) ? 'active' : '' ?>"><a href="<?=$child['route']?>"><?=$child['name']?></a></li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
