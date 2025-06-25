<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GalopanteClinicPro
 */

?>
      <!-- Footer -->
    <footer id="Footer">
        <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <!-- Columna de Contacto -->
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Contacto</h4>
                        
                        <!-- Dirección -->
                        <div class="contact-item" style="display: flex;align-items: center;">
                            <i class="fa fa-map-marker-alt contact-icon" style="width: 10%;"></i>
                            <div class="contact-text" style="padding: 2%;">
                                Isabelino Bosch 2529<br>
                                Smart Clinic<br>
                                Montevideo, Uruguay (mapa)
                            </div>
                        </div>
                        
                        <!-- Teléfonos -->
                        <div class="contact-item" style="display: flex;align-items: center;">
                            <i class="fa fa-phone-alt contact-icon" style="width: 10%;"></i>
                            <div class="contact-phone" style="padding: 2%;display: grid;">
                                <a class="telefon" href="tel:+598098479685">(598) 098 479 685</a>
                                <a class="telefon" href="tel:+59847238169">(598) 4723 8169</a>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="contact-item" style="display: flex;align-items: center;">
                            <i class="fa fa-envelope contact-icon" style="width: 10%;"></i>
                            <div class="contact-text" style="padding: 2%;display: grid;">
                                <a class="telefon" href="mailto:info@cliba.uy">info@cliba.uy</a>
                            </div>
                        </div>
                        
                        <!-- Redes Sociales -->
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    
                    <!-- Otras columnas -->
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Breast Cancer Guide</h4>
                        <a class="btn btn-link" href="#">Breast Cancer Types</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Related to Breast</h4>
                        <a class="btn btn-link" href="#">Control Cancer Risk</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Newsletter</h4>
                        <p>Reciba nuestro boletín informativo sobre el cáncer de mama</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <form id="newsletter-form" novalidate class="row">
                                <div class="input-field mb-2">
                                    <input id="email" class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email"
                                        placeholder="Your email address" required>
                                </div>
                                <div class="input-field">
                                    <button type="submit"
                                        class="btn btn-primary w-100 py-3">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://galopante.uy/">Galopante Media</a>, Todos los derechos reservados.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- >>>>>>>>>>> Footer part end>>>>>>>>>>> -->
    <!-- >>>>>>>>>>> Back to Top part Start>>>>>>>>>>> -->
    <a href="index.html#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- >>>>>>>>>>> Back to Top part end>>>>>>>>>>> -->


    <!-- >>>> jquery Script >>>> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- >>>> bootstrap Script >>>> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- >>>> wow Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/wow/wow.min.js"></script>
    <!-- >>>> fontawesome Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/font/fontawesome.js"></script>
    <!-- >>>> easing Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/easing/easing.min.js"></script>
    <!-- >>>> waypoints Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
    <!-- >>>> counterup Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/counterup/counterup.min.js"></script>
    <!-- >>>> owl carousel Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- >>>> lightbox Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>
    <!-- >>>> form Script >>>> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/form/xvalidation.js"></script>
    <script>
        $(document).ready(function () {
            $("#quote_form").xvalidation({
                theme: "materialize"
            });
            $("#quote_form").submit(function (evt) {
                evt.preventDefault();
                evt.stopPropagation();
                if ($("#quote_form").data().xvalidation.methods.validate()) {
                    swal("Submitted!", "You clicked the button!", "success");
                }
                return false;
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#form").xvalidation({
                theme: "materialize"
            });
            $("#form").submit(function (evt) {
                evt.preventDefault();
                evt.stopPropagation();
                if ($("#form").data().xvalidation.methods.validate()) {
                    swal("Submitted!", "You clicked the button!", "success");
                }
                return false;
            });
        });
    </script>
    <!-- >>>> sweetalert Script >>>> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Main Script -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

	<?php wp_footer(); ?>
</body>

</html>



