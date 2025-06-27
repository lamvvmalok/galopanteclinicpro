<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GalopanteClinicPro
 */
get_header();
?>

    <!-- >>>>>>>>>> Banner Part start>>>>>>>>>>> -->
    <section id="banner">
        <div class="demo-cont">
            <!-- slider start -->
            <div class="fnc-slider example-slider ">
                <div class="fnc-slider__slides">
                    <!-- slide start -->
                    <div class="fnc-slide m--active-slide justify-content-center mt-auto m-auto">
                        <div class="fnc-slide__inner" style="position: relative; overflow: hidden;">
                            <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/bici.mp4" type="video/mp4">
                                <!-- Fallback para navegadores que no soportan video -->
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner">
                                </div>
                            </div>
                            <div class="fnc-slide__content text-center ">
                                <div class="fnc-slide__heading-line">
                                    <h2 style="color:var(--primary) !important">Transformamos tu vida</h2>
                                </div>
                                <div class="fw-bold fnc-slide__heading-line mb-4">
                                    <h1>Expertos en tratamientos de obesidad</h1>
                                </div>
                                <a class="mb-4 z-999 text-start btn btn-primary  py-md-3 px-md-5" href="<?php echo esc_url(home_url('/tratamientos')); ?>">
                                    TRATAMIENTOS</a>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    
                    <div class="fnc-slide m--blend-dark">
                        <div class="fnc-slide__inner" style="position: relative; overflow: hidden;">
                            <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/conpaciente.mp4" type="video/mp4">
                                <!-- Fallback para navegadores que no soportan video -->
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner">
                                </div>
                            </div>
                            <div class="fnc-slide__content text-center ">
                                <div class="fnc-slide__heading-line">
                                    <h2 style="color:var(--primary) !important">Te acompañamos en cada etapa de tu proceso</h2>
                                </div>
                                <div class="fw-bold fnc-slide__heading-line mb-4">
                                    <h1>Un amplio equipo de profesionales especializados</h1>
                                </div>
                                <a class="mb-4 text-start z-999 btn btn-primary  py-md-3 px-md-5" href="index.html#">STAFF</a>
                            </div>
                        </div>
                    </div>
                    <div class="fnc-slide m--blend-red">
                        <div class="fnc-slide__inner" style="position: relative; overflow: hidden;">
                            <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/reunionmedicos.mp4" type="video/mp4">
                                <!-- Fallback para navegadores que no soportan video -->
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner">
                                </div>
                            </div>
                            <div class="fnc-slide__content text-center ">
                                <div class="fnc-slide__heading-line">
                                    <h2 style="color:var(--primary) !important">tu bienestar debe ser para siempre</h2>
                                </div>
                                <div class="fw-bold fnc-slide__heading-line mb-4">
                                    <h1 style="color:#fff !important">Grupos de mantenimiento y contención</h1>
                                </div>
                                <a class="mb-4 z-999 text-start btn btn-primary  py-md-3 px-md-5" href="index.html#">GRUPOS</a>
                            </div>
                        </div>
                    </div>
                    <!-- slide start -->
                    <!-- slide end -->
                </div>
                <nav class="fnc-nav">
                    <div class="fnc-nav__bgs">
                        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                        <div class="fnc-nav__bg m--navbg-dark"></div>
                        <div class="fnc-nav__bg m--navbg-red"></div>
                    </div>
                    <div class="fnc-nav__controls">
                        <button class="fnc-nav__control">
                            Tratamientos
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        
                        <button class="fnc-nav__control">
                            STAFF 
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            GRUPOS
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                       <!--  slide end -->
                    </div>
                </nav>
            </div>
            <!-- slider end -->
        </div>
    </section>
    <!-- >>>>>>>>>> Banner Part end>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> tips part Start>>>>>>>>>>> -->
    <section id="tips" class="bg-white2">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="tips_info text-center">
                            <i class="fa-regular fa-heart mb-3"></i>
                            <h3>Abordaje Integral</h3>
                            <p>Realizamos un abordaje integral del paciente con sobrepeso y obesidad, mediante el trabajo con profesionales de diferentes especialidades: cirujanos, endocrinólogos, nutriólogos, psicólogos.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="tips_info text-center">
                            <i class="fa-solid fa-stethoscope mb-3"></i>
                            <h3>Patologías</h3>
                            <p>Atendemos diversas patologías asociadas a la obesidad, como diabetes, hipertensión, síndrome de la apnea obstructiva del sueño, patologías osteoarticulares (artrosis, artritis), y demás enfermedades asociadas.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="tips_info text-center">
                            <i class="fa-solid fa-droplet mb-3"></i>
                            <h3>Rehabilitación</h3>
                            <p>Aseguramos una rehabilitación adecuada, supervisada por licenciados en fisioterapia y licenciados en educación física.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> tips part end>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> About part Start>>>>>>>>>>> -->
    <section id="About">
        <div class="container-fluid  overflow-hidden my-5 px-lg-0">
            <div class="container about px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/mujerejericio.mp4" type="video/mp4">
                                <!-- Fallback para navegadores que no soportan video -->
                                <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bisiseccion.png" style="object-fit: cover;" alt="">
                            </video>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0 about_text">
                            <div class="section-title text-start">
                                <img class="m-auto d-block img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                                <p class="text-center">Transformando vidas a través de tratamientos bariátricos</p>
                                <h1 class="text-center">Clínica de BIENESTAR y ADELGAZAMIENTO</h1>
                                <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                            </div>
                            <h6>Alcanzá una vida plena en bienestar para siempre</h6>
                            <p>Te acompañamos en cada etapa de tu proceso</p>
                            <div class="row g-4 mb-4 pb-2">
                                <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">

                                </div>
                            </div>
                            <a href="#Quote" class="btn btn-primary py-3 px-5">Contactar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> About part end>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> latest_News part Start>>>>>>>>>>> -->
<section id="latest_News" class="bg-white2" style="background: var(--primary4) !important; color: #fff;">
    <style>
        #latest_News, #latest_News * {
            color: var(--primary3) !important;
        }
        #latest_News .section-title p, #latest_News .section-title h1 {
            color: var(--primary3) !important;
        }
        /* Sombra para los h1 del slider del #banner */
        #banner .fnc-slide__content h1,
        #banner .fnc-slide__content h2 {
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7), 0 1px 0 #000;
        }
    </style>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                <p>Casos de éxito</p>
                <img class="mb-5 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
            </div>
            <div class="row g-4">
                <?php
                // Consulta para obtener posts de la categoría "latest-news"
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3, // Mostrar 3 posts
                    'category_name'  => 'testimonio', // Slug de la categoría
                    'order'          => 'DESC',
                    'orderby'        => 'date'
                );

                $latest_news = new WP_Query($args);
                $delay = 0.1; // Valor inicial para wow-delay

                if ($latest_news->have_posts()) :
                    while ($latest_news->have_posts()) : $latest_news->the_post();
                        // Obtener imagen destacada
                        $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $default_img = get_stylesheet_directory_uri() . '/img/blog_default.jpg';
                        $img_src = $featured_img ? $featured_img : $default_img;
                        
                        // Formatear la fecha
                        $post_date = get_the_date('l F jS, Y');
                ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                    <div class="latest_News_item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" width="100%" src="<?php echo esc_url($img_src); ?>" alt="<?php the_title_attribute(); ?>">
                        </div>
                        <div style="background: var(--primary2) !important;" class="Single_blog p-4 text-center border-5 border-light border-top-0">
                            <h4 class="mb-3 fw-bold"><?php the_title(); ?></h4>
                            <p><?php echo esc_html($post_date); ?></p>
                            <a style="color: var(--primary) !important;" class="fw-medium text-color" href="<?php the_permalink(); ?>">
                                Leer m&aacute;s<i class="fa fa-arrow-right ms-2" style="color: var(--primary) !important;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                        $delay += 0.2; // Incrementar delay para siguiente elemento
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<div class="col-12 text-center"><p>No latest news found</p></div>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
    <!-- >>>>>>>>>>> latest_News part end>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> newsletter part Start>>>>>>>>>>> -->
    <section id="newsletter">
        <div class="container-fluid overflow-hidden my-5 px-lg-0">
            <div class="container newsletter px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 newsletter-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 ps-lg-0">
                            <div class="section-title text-center">
                                <img class="m-auto d-block img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                                <p>Se parte de nosotros</p>
                                <h2>Unite a la comunidad</h2>
                                <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                            </div>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="email3" type="email" class="form-control" placeholder="Your Email"
                                            data-validation="email" data-content="Email has a invalid format">
                                        <label for="email">Correo electronico</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit"> Suscribirse </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/grupo.mp4" type="video/mp4">
                                <!-- Fallback para navegadores que no soportan video -->
                                <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/newsletter.jpg" style="object-fit: cover;" alt="">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> newsletter part end>>>>>>>>>>> -->
    <!-- >>>>>>>>>>> Counter part Start>>>>>>>>>>> -->
    <section id="Counter">
        <div class="container-fluid overflow-hidden my-5 px-lg-0">
            <div class="container px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-12 py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 ps-lg-0">
                            <div class="section-title text-center pb-4">
                                <p>Brindamos atención de primer nivel en el tratamiento quirúrgico de la obesidad, centrado en el paciente y su familia, con profesionales capacitados, infraestructura y equipamiento de complejidad y la última evidencia científica disponible.</p>
                                <h2>Tratamiento quirúrgico de la obesidad</h2>
                            </div>
                            <div class="row g-4">
                                <div class="col">
                                    <div class="count-col text-center">
                                        <p>Pacientes tratados</p>
                                        <h3 data-toggle="counter-up">415</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-col text-center">
                                        <p>Años atendiendo</p>
                                        <h3 data-toggle="counter-up">6</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-col text-center">
                                    <p>Profesionales involucrados</p>
                                    <h3 data-toggle="counter-up">12</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> Counter part end>>>>>>>>>>> -->
    <!-- >>>>>>>>>>> Quote part Start>>>>>>>>>>> -->
    <section id="Quote" class="bg-white">
        <div class="container-fluid overflow-hidden my-5 px-lg-0">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.png"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0">
                            <div class="section-title text-center">
                                <img class="m-auto d-block img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                                <p>Contanos sobre vos</p>
                                <h1>Queremos ser parte del rencuentro con tu felicidad.</h1>
                                <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                            </div>
                            <p class="mb-4 pb-2">Contanos tu situación para saber cómo podemos apoyarte para lograr tu bienestar. Estás muy cerca de lograr una vida plena.</p>
                            <form id="quote_form">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input id="name" type="text" class="form-control border-0"
                                            placeholder="Tu nombre" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input id="email" type="email" data-validation="email"
                                            data-content="El correo electrónico no es válido" class="form-control border-0"
                                            placeholder="Tu correo electrónico" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input id="number" type="text" data-validation="number"
                                            class="form-control border-0" placeholder="Tu teléfono"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option value="Tratamientos Bariátricos">Tratamientos Bariátricos</option>
                                            <option value="Otros">Otros</option>

                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="message" data-validation="noempty"
                                            data-content="El mensaje no puede estar vacío" class="form-control border-0"
                                            placeholder="Nota especial"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Empecemos hoy</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> Quote part end>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> Team part Start>>>>>>>>>>> -->
    <section id="Team">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="section-title text-center">
                    <img class="m-auto d-block img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                    <p>STAFF</p>
                    <h1>Conoce a nuestros especialistas</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/fender.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Dr. Conrado Fender</h5>
                                <small>Médico Cirujano General y Bariátrico</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/cabrera.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Dr. Maximiliano Cabrera</h5>
                                <small>Médico Cirujano General y Bariátrico</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/lluviera.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">M. Sc. Gonzalo Lluviera</h5>
                                <small>Especialista en Nutricional y Diabetólogo</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/ami.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Dra. Alicia Ozer Ami</h5>
                                <small>Médica Anestesióloga</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/margalef.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Lic. Sebastián Margalef</h5>
                                <small>Psicólogo. Magíster en Obesidad y Adicciones</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/equipo-cliba.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Dr. Fernando Rocha</h5>
                                <small>Médico Cirujano General y Bariátrico</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/pereyra.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Dr. Esteban Pereyra</h5>
                                <small>Anestesiólogo</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/maianti.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Lic. Romina Maianti</h5>
                                <small>Instrumentadora</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/rotti.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Lic. María Rotti</h5>
                                <small>Nutricionista</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.0s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/equipo/equipo-cliba.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Lic. Gonzalo Izaguirre</h5>
                                <small>Fisioterapeuta</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> Team part End>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> Testimonial part Start>>>>>>>>>>> -->
<section id="Testimonial">
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <img class="m-auto d-block img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                        <p>Testimonios</p>
                        <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <?php
                // Consulta para obtener posts de la categoría "destacado"
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => -1, // Mostrar todos los posts
                    'category_name'  => 'testimonio', // Slug de la categoría
                    'order'          => 'ASC',
                    'orderby'        => 'date'
                );

                $testimonials = new WP_Query($args);

                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                        // Obtener imagen destacada (con imagen de respaldo)
                        $featured_img = get_the_post_thumbnail_url();
                        $default_img = get_stylesheet_directory_uri() . '/img/testimonial-default.jpg';
                        $img_src = $featured_img ? $featured_img : $default_img;
                        
                        // Obtener cargo (usando campo personalizado)
                        $cargo = get_post_meta(get_the_ID(), 'cargo', true); // Reemplaza 'cargo' con tu meta key
                ?>
                <div class="testimonial-item text-center">
                    <img style="width: 90px; height: 90px; object-fit: cover;" 
                         class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle"
                         src="<?php echo esc_url($img_src); ?>" 
                         alt="<?php the_title_attribute(); ?>">
                    
                    <div class="testimonial-text text-center p-4">
                        <p><?php the_content(); ?></p>
                        <h5 class="mb-1"><?php the_title(); ?></h5>
                        <?php if ($cargo) : ?>
                            <span class="fst-italic"><?php echo esc_html($cargo); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No se encontraron testimonios destacados</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
    <!-- >>>>>>>>>>> Testimonial part end>>>>>>>>>>> -->

	

	<?php
		get_footer();
	?>