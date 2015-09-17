   <?php include 'includes/header.php'; ?>
    <?php include 'includes/menu.php'; ?>

      <!-- SLIDER - CUERPO -->
            <div class="container-fluid slide-bg">
                <div id="carousel-home" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-home" data-slide-to="1"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="images/slide1.png" alt="..." style="margin:0;width:100%">
                      <!-- <div class="carousel-caption"> ... </div> -->
                    </div>
                    <div class="item ">
                      <img src="images/slide1.png" alt="..." style="margin:0;width:100%">
                      <!-- <div class="carousel-caption"> ... </div> -->
                    </div>
                    <div class="item ">
                      <img src="images/slide1.png" alt="..." style="margin:0;width:100%">
                      <!-- <div class="carousel-caption"> ... </div> -->
                    </div>
                  </div>


                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                  </a>
                </div>
            </div>

        <div class="container">
          
            <!-- NOVEDADES -->
            <div class="row home-buttons">
                <!-- suscription form -->
                <div class="col-md-6">
                  <div class="input-group home-buttons-suscription" style="margin-right:40px">
                    <span class="input-group-addon">Novedades</span>
                    <input type="text" class="form-control form-suscription-input" placeholder="Enterate de todo lo que está pasando">
                    <span class="input-group-btn">
                      <button class="btn btn-default btn-suscription" type="button">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      </button>
                    </span>
                  </div>
                </div>

                <!-- useful link -->
                <div class="col-md-6">
                   <div class="home-buttons-button ">
                      <a href="#" class="btn btn-dark-blue">
                          <span >ESTACIONES DE CARGA</span>
                          Encontrá la estación más cercana
                      </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- CALCULADORA -->
        <div id="home-calc">
          <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="common-title">calculadora gnc</h3>
                </div>
                <div class="col-md-3">
                    <h4 class="common-subtitle"></h4>
                    <p>La calculadora de GNC muestra la conveniencia en el uso del mismo, en comparación a la Nafta.<br><strong>Ingrese los datos correspondientes y calcule el ahorro para su vehículo.</strong>
                    </p>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Precio de Nafta Super</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <img src="images/calc_01.jpg">
                      </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Precio del GNC</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <img src="images/calc_03.jpg">
                      </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Consumo Km/Litro</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <img src="images/calc_02.jpg">
                      </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kilometraje Anual</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <img src="images/calc_04.jpg">
                      </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group clearfix">
                      <a href="#" class="btn btn-yellow pull-right">CALCULAR</a>
                  </div>  
                </div>
                <div class="col-md-3">
                  <div class="calc-result">
                      <span class="calc-result-title">Gasto con gasolina</span>
                      <strong class="calc-result-value">$10.500</strong>
                      <hr>

                      <span class="calc-result-title">Gasto con GNC</span>
                      <strong class="calc-result-value">$5.800</strong>
                      <hr>

                      <span class="calc-result-title">Ahorro Anual</span>
                      <strong class="calc-result-value calc-result-final">$4.700</strong>
                  </div>
                </div>
              </div>
          </div>
        </div>

<?php include 'includes/footer.php'; ?>





