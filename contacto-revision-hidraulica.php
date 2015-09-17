<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<!-- BREADCRUMBS -->
<div class="container-fluid site_breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="product_name pull-left">Contactos</h1>
                <p class="breadcrumbs pull-right">Contactos</p>
            </div>
        </div>
    </div>
</div>
<!-- FIN BREADCRUMBS -->

<!-- sidebar de contactos -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <?php include 'includes/sidebar_contacto.php'; ?>
        </div>
        <!--  -->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h3 class="title_default"><span>TURNO POR REVISIÓN HIDRÁULICA</span></h3>
            <div class="form">
                <form>
                    <label>Nombre y Apellido</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Teléfono</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Email</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Vehículo</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Modelo</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Motor</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Año</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Año</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Kilometraje</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">

                    <label>Dominio</label>
                    <input type="text" name="" id="input" class="form-control" value="" pattern="" title="">



                    <div class="btn_contact_form">
                        <button type="button" class="btn btn-default pull-right">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- sidebar de contactos -->

<!-- mapa google -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="direccion_contacto">Av del barco centenera 3191, CABA  |   Teléfono:  49184005 / 49184002   |  Horario de atención, Lunes a Viernes de 9 a 18 horas y Sabados de 9 a 13 horas.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <iframe width="100%" height="280" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Avenida%20del%20Barco%20Centenera%203191%2C%20CABA%2C%20Ciudad%20Autonoma%20de%20Buenos%20Aires%2C%20Argentina&key=AIzaSyDwGhNSsxV74C4h5q2ZKUykwLSTeQ4OPl8" allowfullscreen></iframe>
    </div>
</div>
<!-- fin mapa google -->
<?php include 'includes/footer.php'; ?>