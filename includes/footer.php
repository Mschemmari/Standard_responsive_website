<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <footer class="footer_row">
                <!-- columna -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="list-unstyled">
                        <li><a href="">Home</a></li>
                        <li><a href="">La empresa</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Estaciones de carga</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>
                <!-- columna -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <address>
                        <h4><span>Central</span></h4>
                        <p>Av. del Barco Centenera 3191, CABA.</p>
                        <p>Teléfono:  0221 422-6555</p>
                        <p>info@movilgas.com.ar</p>
                    </address>
                </div>
                <!-- columna -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="social">
                        <h4><span>Seguínos</span></h4>
                        <a href=""><img src="images/fb.png" alt="Image"></a>
                        <a href=""><img src="images/ml.png" alt="Image"></a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div id="fb-root"></div>
</div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- Facebook -->
        <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script type="text/javascript">
            $( document ).ready(function() {
               $('.sidebar_contacto>li>a').click(function(event) {
                   $('.sidebar_contacto>li').addClass('.active');
               });
            });
        </script>
        <!-- Main js -->
        <script src="js/main.js"></script>

    </body>
</html>