<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamientos Bariátricos - Believe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Scoped styles para la página de tratamientos */

        .tratamientos-abordaje{
            background: var(--primary4);
        }

        .tratamientos-marchand-section {
            font-family: 'Montserrat', sans-serif;
            background: #fff;
            padding: 0;
        }
        .tratamientos-marchand-section .tm-container {
            /*max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;*/
        }
        .tm-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            letter-spacing: -1px;
        }
        .tm-subtitle {
            font-size: 1.2rem;
            color: #ff931e;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
        }
        .tm-block {
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 48px;
            overflow: hidden;
        }
        .tm-block.reverse {
            flex-direction: row-reverse;
        }
        .tm-block-img {
            flex: 1 1 320px;
            min-width: 320px;
            max-width: 480px;
            height: 320px;
            background-size: cover;
            background-position: center;
        }
        .tm-block-content {
            flex: 2 1 400px;
            padding: 40px 32px;
        }
        .tm-features {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            margin-top: 32px;
        }
        .tm-feature {
            flex: 1 1 220px;
            background: var(--primary3);
            border-radius: 12px;
            padding: 24px 18px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .tm-feature i {
            font-size: 2.2rem;
            color: var(--primary2);
            margin-bottom: 12px;
        }
        .tm-feature h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1a1a1a;
        }
        .tm-feature p {
            font-size: 1rem;
            color: #444;
        }
        .tm-list {
            list-style: none;
            padding: 0;
            margin: 0 0 24px 0;
        }
        .tm-list li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #333;
        }
        .tm-list li:before {
            content: '\f058';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: #ff931e;
            position: absolute;
            left: 0;
            top: 2px;
        }
        .tm-cta {
            text-align: center;
            margin: 60px 0 0 0;
        }
        .tm-cta-btn {
            display: inline-block;
            background: #ff931e;
            color: #fff;
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 30px;
            padding: 16px 48px;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: background 0.2s, color 0.2s;
            margin-top: 18px;
        }
        .tm-cta-btn:hover {
            background: #2c5282;
            color: #fff;
        }
        @media (max-width: 900px) {
            .tm-block, .tm-block.reverse {
                flex-direction: column;
            }
            .tm-block-img, .tm-block-content {
                max-width: 100%;
                min-width: 0;
                width: 100%;
                height: 220px;
            }
            .tm-block-content {
                padding: 24px 12px;
            }
        }
        /* Ocultar el título de la entrada solo en esta página */
        .entry-title { display: none !important; }

        .tratamientos-efectivos{
            background: var(--primary4);
        }

        .tratamientos-cta{
            background: var(--primary4);
            padding: 5%;
        }

        .pt-5 {
            margin: 0px !important;
        }
    </style>
</head>
<body>

<!-- ======================================== -->
<!-- SECCIÓN PRINCIPAL - HEADER -->
<!-- ======================================== -->
<div class="tratamientos-marchand-section">
    <div class="tm-container">
        <div class="tm-title">Tratamientos Bariátricos</div>
        <div class="tm-subtitle">Transformando vidas</div>



        <!-- ======================================== -->
        <!-- SECCIÓN 1: ABORDAJE INTEGRAL -->
        <!-- ======================================== -->
        <div class="tm-block tratamientos-abordaje">
            <div class="tm-block-img" style="position: relative; overflow: hidden;">
                <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                    <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/reunionmedicos.mp4" type="video/mp4">
                    <!-- Fallback para navegadores que no soportan video -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                </video>
            </div>
            <div class="tm-block-content">
                <h2 class="tm-title" style="font-size:2rem;color:var(--primary);">Abordaje Integral</h2>
                <p style="color:white;">Nuestro enfoque multidisciplinario garantiza un tratamiento completo adaptado a tus necesidades individuales.</p>
                <div class="tm-features">
                    <div class="tm-feature">
                        <i class="fas fa-users"></i>
                        <h3>Equipo Especializado</h3>
                        <p>Cirujanos, endocrinólogos, nutriólogos, psicólogos y especialistas trabajan juntos para tu bienestar integral.</p>
                    </div>
                    <div class="tm-feature">
                        <i class="fas fa-stethoscope"></i>
                        <h3>Patologías Asociadas</h3>
                        <p>Abordamos condiciones relacionadas como diabetes, hipertensión y apnea del sueño con protocolos personalizados.</p>
                    </div>
                    <div class="tm-feature">
                        <i class="fas fa-heartbeat"></i>
                        <h3>Rehabilitación</h3>
                        <p>Programas de seguimiento y rehabilitación física para una recuperación completa y sostenible.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======================================== -->
        <!-- SECCIÓN 2: VENTAJAS ÚNICAS -->
        <!-- ======================================== -->
        <div class="tm-block reverse tratamientos-ventajas">
            <div class="tm-block-img" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/quote.jpg');"></div>
            <div class="tm-block-content">
                <h2 class="tm-title" style="font-size:2rem;">Ventajas Únicas</h2>
                <p>Por qué elegir nuestro programa de tratamientos bariátricos:</p>
                <ul class="tm-list">
                    <li>Respaldo del sistema de salud nacional ante eventuales complicaciones</li>
                    <li>Seguimiento personalizado con atención 24/7 durante todo el proceso</li>
                    <li>Planes de financiación adaptados a tu situación económica</li>
                    <li>Atención integral para pacientes de todo el país</li>
                    <li>Experiencia centrada en tu comodidad y seguridad</li>
                </ul>
            </div>
        </div>

        <!-- ======================================== -->
        <!-- SECCIÓN 3: TRATAMIENTOS EFECTIVOS -->
        <!-- ======================================== -->
        <div class="tm-block tratamientos-efectivos">
            <div class="tm-block-img" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/single_blog_1.jpg');"></div>
            <div class="tm-block-content">
                <h2 class="tm-title" style="font-size:2rem;color:var(--primary);">Tratamientos Efectivos</h2>
                <p style="color:white;">Soluciones comprobadas para el manejo de la obesidad con los mejores resultados.</p>
                <div class="tm-features">
                    <div class="tm-feature">
                        <i class="fas fa-procedures"></i>
                        <h3>Cirugía Bariátrica</h3>
                        <p>El tratamiento más efectivo actualmente para la obesidad, con resultados sostenibles a largo plazo y seguimiento especializado.</p>
                        <ul class="tm-list">
                            <li>Procedimientos mínimamente invasivos por laparoscopía</li>
                            <li>Recuperación más rápida con menor dolor postoperatorio</li>
                            <li>Alta hospitalaria temprana y retorno a actividades</li>
                            <li><strong>Manga gástrica:</strong> Reducción del tamaño del estómago</li>
                            <li><strong>Bypass gástrico:</strong> Redirección del sistema digestivo</li>
                        </ul>
                    </div>
                    <div class="tm-feature">
                        <i class="fas fa-apple-alt"></i>
                        <h3>Balón Gástrico</h3>
                        <p>Alternativa no quirúrgica para quienes buscan un procedimiento menos invasivo con resultados significativos.</p>
                        <ul class="tm-list">
                            <li>Procedimiento ambulatorio sin internación</li>
                            <li>Duración aproximada de 20 minutos</li>
                            <li>Completamente indoloro y sin anestesia general</li>
                            <li>Recuperación inmediata y retorno a actividades</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======================================== -->
        <!-- SECCIÓN 4: NUESTRO PROCESO -->
        <!-- ======================================== -->
        <div class="tm-block reverse tratamientos-proceso">
            <div class="tm-block-img" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/team-1.jpg');"></div>
            <div class="tm-block-content">
                <h2 class="tm-title" style="font-size:2rem;">Nuestro Proceso</h2>
                <p>Un camino cuidadosamente diseñado para tu transformación:</p>
                <ul class="tm-list">
                    <li><strong>Evaluación:</strong> Consulta inicial con nuestro equipo para analizar tu caso y determinar las mejores opciones.</li>
                    <li><strong>Preparación:</strong> Estudios necesarios para evaluar tu estado de salud y prepararte para el tratamiento.</li>
                    <li><strong>Plan Personal:</strong> Desarrollo de un plan de tratamiento específico para tus necesidades y objetivos.</li>
                    <li><strong>Seguimiento:</strong> Acompañamiento continuo para asegurar resultados óptimos y sostenibles.</li>
                </ul>
            </div>
        </div>

        <!-- ======================================== -->
        <!-- SECCIÓN 5: CALL TO ACTION -->
        <!-- ======================================== -->
        <div class="tm-cta tratamientos-cta">
            <h2 class="tm-title" style="font-size:2rem;color:var(--primary);">Comienza tu transformación</h2>
            <p style="color:white;">Nuestro equipo está listo para acompañarte en este viaje hacia una vida más saludable y plena.</p>
            <a href="#" class="tm-cta-btn">Solicitar una evaluación</a>
        </div>
    </div>
</div>

</body>
</html>