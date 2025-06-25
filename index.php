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
                        <div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/1.png) no-repeat center/cover;"
                            class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner">
                                </div>
                            </div>
                            <div class="fnc-slide__content text-center ">
                                <div class="fnc-slide__heading-line">
                                    <h2>Conducirte a una vida de bienestar para siempre"</h2>
                                </div>
                                <div class="fw-bold fnc-slide__heading-line mb-4">
                                    <h1>expertos en liberate del sobrepeso</h1>
                                </div>
                                <a class="mb-4 z-999 text-start btn btn-primary  py-md-3 px-md-5" href="index.html#">
                                    TRATAMIENTOS</a>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    
                    <div class="fnc-slide m--blend-dark">
                        <div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/2.png) no-repeat center/cover;"
                            class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner">
                                </div>
                            </div>
                            <div class="fnc-slide__content text-center ">
                                <div class="fnc-slide__heading-line">
                                    <h2>Para acompañarte en cada etapa de tu proceso.</h2>
                                </div>
                                <div class="fw-bold fnc-slide__heading-line mb-4">
                                    <h1>Un amplio equipo de profesionales especializados</h1>
                                </div>
                                <a class="mb-4 text-start z-999 btn btn-primary  py-md-3 px-md-5" href="index.html#">STAFF</a>
                            </div>
                        </div>
                    </div>
                    <div class="fnc-slide m--blend-red">
                        <div style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/3.png) no-repeat center/cover;"
                            class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner">
                                </div>
                            </div>
                            <div class="fnc-slide__content text-center ">
                                <div class="fnc-slide__heading-line">
                                    <h2>Para que tu adelgazamiento se transforme en una vida plena</h2>
                                </div>
                                <div class="fw-bold fnc-slide__heading-line mb-4">
                                    <h1>Grupos de mantenimiento y contención</h1>
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
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 text-center about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0 about_text">
                            <div class="section-title text-start">
                                <img class="m-auto d-block img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                                <p class="text-center">Compain about the awareness of Breast Cancer</p>
                                <h1 class="text-center">Breast Cancer Health Center</h1>
                                <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                            </div>
                            <h6>Help to Fight With Breast Cancer</h6>
                            <p>Breast Cancer is the most common cancer in women, worldwide. Bangladesh has one of the
                                highest incidences of breast cancer in Asia. In the case of Bangladeshi women, aged
                                between 15-44 years, breast cancer has the highest prevalence of 19.3 per 100000
                                compared to any other type of cancer. The best way to fight this cancer is to detect it
                                early and start appropriate treatment.</p>
                            <a class="more d-block py-2" href="index.html#">Leer mas</a>
                            <div class="row g-4 mb-4 pb-2">
                                <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="1000" value="50" class="slider" id="myRange">
                                        <div class="count m-auto">
                                            <p>$<span id="demo"></span></p>
                                        </div>
                                        <script>
                                            var slider = document.getElementById("myRange");
                                            var output = document.getElementById("demo");
                                            output.innerHTML = slider.value;

                                            slider.oninput = function () {
                                                output.innerHTML = this.value;
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <a href="about.html" class="btn btn-primary py-3 px-5">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>> About part end>>>>>>>>>>> -->

    <!-- >>>>>>>>>>> latest_News part Start>>>>>>>>>>> -->
<section id="latest_News" class="bg-white2">
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
                        <div class="Single_blog p-4 text-center border-5 border-light border-top-0">
                            <h4 class="mb-3 fw-bold"><?php the_title(); ?></h4>
                            <p><?php echo esc_html($post_date); ?></p>
                            <a class="fw-medium text-color" href="<?php the_permalink(); ?>">
                                Leer m&aacute;s<i class="fa fa-arrow-right ms-2"></i>
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
                                <p>Suscríbase a nuestras novedades</p>
                                <h2>únete a la comunidad</h2>
                                <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                            </div>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="email3" type="email" class="form-control" placeholder="Your Email"
                                            data-validation="email" data-content="Email has a invalid format">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit"> Subscribe </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/newsletter.jpg"
                                style="object-fit: cover;" alt="">
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
                                        <p>Breast Cancers</p>
                                        <h3 data-toggle="counter-up">1,425,054</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-col text-center">
                                        <p>People Helped</p>
                                        <h3 data-toggle="counter-up">3,124,982</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-col text-center">
                                        <p>Cancers Removed</p>
                                        <h3 data-toggle="counter-up">625</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div style="border: none;" class="count-col text-center">
                                        <p>Countries Served</p>
                                        <h3 data-toggle="counter-up">27</h3>
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
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/quote.jpg"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0">
                            <div class="section-title text-center">
                                <img class="m-auto d-block img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape.png" alt="">
                                <p> Comparte tus problemas con nosotros</p>
                                <h1>Please Don't hesitate</h1>
                                <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                            </div>
                            <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                erat amet</p>
                            <form id="quote_form">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input id="name" type="text" class="form-control border-0"
                                            placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input id="email" type="email" data-validation="email"
                                            data-content="Email has a invalid format" class="form-control border-0"
                                            placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input id="number" type="text" data-validation="number"
                                            class="form-control border-0" placeholder="Your Phone Number"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option selected>Select A Topic (optional)</option>
                                            <option value="1">Breast Cancer</option>
                                            <option value="2">Sexual Health</option>
                                            <option value="3">Urinary tract</option>
                                            <option value="2">Osteoporosis</option>
                                            <option value="2">Diabetes</option>
                                            <option value="2">Menstrual Problem</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="message" data-validation="noempty"
                                            data-content="Message cannot be empty" class="form-control border-0"
                                            placeholder="Special Note"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Consultar</button>
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
                    <p>Doctores</p>
                    <h1>Conoce a nuestros especialistas</h1>
                    <img class="d-block m-auto pb-4 img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shape2.png" alt="">
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-1.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Lic. María Rotti</h5>
                                <small>La Lic. María Rotti, Nutricionista e integrante del equipo de Cliba, nos brinda información importante sobre las cifras de la obesidad a nivel general y su relacionamiento con la forma en la que nos alimentamos.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Dr. Maximiliano Cabrera</h5>
                                <small>
									El Dr. Maximiliano Cabrera, Médico Cirujano General y Bariátrico e integrante del equipo de Cliba, brinda detalles sobre los procedimientos que ofrece nuestra clínica.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href="index.html"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0 text-color">Dr. Conrado Fender</h5>
                                <small>Dr. Conrado Fender, integrante del equipo de Cliba, nos cuenta más sobre los procedimientos quirúrgicos en los que consiste la cirugía bariátrica, el mejor tratamiento para la obesidad de grado moderado a severo.</small>
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
                        <p>Casos de éxito</p>
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