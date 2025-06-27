<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GalopanteClinicPro
 */

?>

	<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>La clínica</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<?php wp_head(); ?>
    <!-- >>>Favicon>>> -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" rel="icon" type="image/png">
    <!-- >>>Google Web Fonts>>> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <!-- >>>Icon Font Stylesheet>>> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- >>>Libraries Stylesheet>>> -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- >>> Bootstrap Stylesheet>>> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- >>> main css Stylesheet>>> -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css?ver=<?php echo filemtime(get_stylesheet_directory() . '/css/style.css'); ?>" rel="stylesheet">

    <style>
    /* Responsive navbar: scroll horizontal y ajuste de fuente */
    @media (max-width: 991.98px) {
        .navbar-nav {
            flex-wrap: nowrap !important;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            font-size: 1rem;
            gap: 0.5rem;
        }
        .navbar-nav .nav-link {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            font-size: 1rem !important;
        }
    }
    @media (max-width: 600px) {
        .navbar-nav .nav-link {
            font-size: 0.95rem !important;
            padding-left: 0.7rem !important;
            padding-right: 0.7rem !important;
        }
    }
    </style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- >>>>>>>>>>> pre loader part Start>>>>>>>>>>> -->
    <div class="pageLoad">
        <div class="inner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- >>>>>>>>>>> pre loader part end>>>>>>>>>>> -->
    <!-- >>>>>>>>>>> header part Start>>>>>>>>>>> -->
    <section id="header" class="bg-white2">
        <div class="container-fluid p-0 ">
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                        <small class="fa fa-map-marker-alt text-color me-2"></small>
                        <small>Montevideo, Uruguay</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-3">
                        <small class="far fa-clock text-color me-2"></small>
                        <small>Lunes a viernes: 8 a 20 h / Sábados: 8 a 14 h</small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                        <small class="fa fa-phone-alt text-color me-2"></small>
                        <small>(598) 098 479 685</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <a class="btn bg-light1  btn-sm-square text-color me-1" href="https://www.facebook.com/clibauruguay/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="btn bg-light1  btn-sm-square  text-color me-1" href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a class="btn bg-light1 btn-sm-square text-color me-1" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a class="btn bg-light1 btn-sm-square text-color me-0" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> header part end>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> Navbar part Start>>>>>>>>>>> -->
    <nav class="bg-white navbar navbar-expand-lg  navbar-light sticky-top p-0">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
        </a>
        <button type="button" class="bg-white navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="Believebg navr collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-item nav-link active">Inicio</a>
                <a href="#" class="nav-item nav-link">Tratamientos</a>
                <a href="#" class="nav-item nav-link">Quiénes somos</a>
                <a href="#" class="nav-item nav-link">Nuestro equipo</a>

            </div>
            <a href="#" class=" Get py-4 px-lg-5 d-none d-lg-block">Agendá una consulta<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- >>>>>>>>>>> Navbar part end>>>>>>>>>>> -->