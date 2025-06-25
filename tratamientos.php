<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamientos Bariátricos - Believe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Variables con tu paleta de colores */
                .entry-header{
			display: none;
		}
        
        .entry-content{
            margin: 0px !important;
        }
        .mt-5 {
          margin: 0px !important;
        }

        .post, .page {
            margin: 0px !important;
        }
        :root {
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        
        /* Estilos base minimalistas usando tu paleta */
        .tratamientos-minimal {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark);
            line-height: 1.7;
            background-color: #ffffff;
            overflow-x: hidden;
        }
        
        .tratamientos-minimal .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Tipografía con personalidad */
        .tratamientos-minimal h1, 
        .tratamientos-minimal h2, 
        .tratamientos-minimal h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            letter-spacing: -0.5px;
            line-height: 1.2;
        }
        
        .tratamientos-minimal h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }
        
        .tratamientos-minimal h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            color: var(--dark);
        }
        
        .tratamientos-minimal h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        .tratamientos-minimal p {
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 1.5rem;
        }
        
        /* Sección Hero con tus colores */
        .tratamientos-minimal .hero {
            min-height: 80vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--light) 0%, rgba(247, 250, 252, 0.95) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .tratamientos-minimal .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary2);
        }
        
        @keyframes floatBackground {
            0% { transform: translate(0, 0); }
            25% { transform: translate(-5%, 5%); }
            50% { transform: translate(-10%, 0); }
            75% { transform: translate(-5%, -5%); }
            100% { transform: translate(0, 0); }
        }
        
        .tratamientos-minimal .hero-content {
            max-width: 700px;
            position: relative;
            z-index: 2;
        }
        
        .tratamientos-minimal .hero-subtitle {
            font-size: 1.2rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--secondary);
            margin-bottom: 1rem;
        }
        
        /* Secciones con espaciado elegante */
        .tratamientos-minimal .section {
            padding: 100px 0;
        }
        
        .tratamientos-minimal .section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
        }
        
        .tratamientos-minimal .section-header h2 {
            display: inline-block;
        }
        
        .tratamientos-minimal .section-header h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: var(--secondary);
            margin: 20px auto;
        }
        
        /* Tarjetas minimalistas con tus colores */
        .tratamientos-minimal .approach-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .tratamientos-minimal .approach-card {
            text-align: center;
            padding: 40px 30px;
            background: var(--light);
            border-radius: 8px;
            transition: var(--transition);
            border: 1px solid rgba(45, 55, 72, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .tratamientos-minimal .approach-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--secondary);
            transform: scaleX(0);
            transform-origin: left;
            transition: var(--transition);
        }
        
        .tratamientos-minimal .approach-card:hover::before {
            transform: scaleX(1);
        }
        
        .tratamientos-minimal .approach-icon {
            width: 80px;
            height: 80px;
            background: rgba(44, 82, 130, 0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: var(--transition);
        }
        
        .tratamientos-minimal .approach-card:hover .approach-icon {
            background: rgba(255, 147, 30, 0.1);
            transform: translateY(-5px);
        }
        
        .tratamientos-minimal .approach-icon i {
            font-size: 2.5rem;
            color: var(--dark);
            transition: var(--transition);
        }
        
        .tratamientos-minimal .approach-card:hover .approach-icon i {
            color: var(--secondary);
        }
        
        .tratamientos-minimal .approach-card h3 {
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        /* Sección de ventajas con tu paleta */
        .tratamientos-minimal .advantages-section {
            background: var(--light);
            position: relative;
        }
        
        .tratamientos-minimal .advantages-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        @media (max-width: 992px) {
            .tratamientos-minimal .advantages-content {
                grid-template-columns: 1fr;
            }
        }
        
        .tratamientos-minimal .advantages-list {
            list-style: none;
        }
        
        .tratamientos-minimal .advantages-list li {
            padding: 15px 0;
            padding-left: 60px;
            position: relative;
            border-bottom: 1px solid rgba(45, 55, 72, 0.05);
            opacity: 0;
            animation: fadeInLeft 0.6s forwards;
            color: var(--dark);
        }
        
        .tratamientos-minimal .advantages-list li:nth-child(1) { animation-delay: 0.2s; }
        .tratamientos-minimal .advantages-list li:nth-child(2) { animation-delay: 0.3s; }
        .tratamientos-minimal .advantages-list li:nth-child(3) { animation-delay: 0.4s; }
        .tratamientos-minimal .advantages-list li:nth-child(4) { animation-delay: 0.5s; }
        .tratamientos-minimal .advantages-list li:nth-child(5) { animation-delay: 0.6s; }
        
        .tratamientos-minimal .advantages-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 15px;
            width: 40px;
            height: 40px;
            background: white;
            color: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--secondary);
            transition: var(--transition);
        }
        
        .tratamientos-minimal .advantages-list li:hover::before {
            background: var(--secondary);
            color: white;
            transform: rotate(10deg);
        }
        
        .tratamientos-minimal .advantages-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(45, 55, 72, 0.05);
            transition: var(--transition);
        }
        
        .tratamientos-minimal .advantages-image:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(45, 55, 72, 0.1);
        }
        
        .tratamientos-minimal .advantages-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        /* Tarjetas de tratamiento con tu paleta */
        .tratamientos-minimal .treatments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 40px;
        }
        
        @media (max-width: 768px) {
            .tratamientos-minimal .treatments-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .tratamientos-minimal .treatment-card {
            background: var(--primary);
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(45, 55, 72, 0.03);
            transition: var(--transition);
            border: 1px solid rgba(45, 55, 72, 0.03);
            position: relative;
            overflow: hidden;
        }
        
        .tratamientos-minimal .treatment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--accent);
            transform: scaleY(0);
            transform-origin: top;
            transition: var(--transition);
        }
        
        .tratamientos-minimal .treatment-card:hover::before {
            transform: scaleY(1);
        }
        
        .tratamientos-minimal .treatment-card h3 {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .tratamientos-minimal .treatment-card h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--accent);
            transition: var(--transition);
        }
        
        .tratamientos-minimal .treatment-card:hover h3::after {
            width: 80px;
        }
        
        .tratamientos-minimal .treatment-features {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .tratamientos-minimal .treatment-features li {
            padding: 10px 0;
            padding-left: 35px;
            position: relative;
            opacity: 0;
            animation: fadeInLeft 0.6s forwards;
            color: var(--dark);
        }
        
        .tratamientos-minimal .treatment-features li:nth-child(1) { animation-delay: 0.3s; }
        .tratamientos-minimal .treatment-features li:nth-child(2) { animation-delay: 0.4s; }
        .tratamientos-minimal .treatment-features li:nth-child(3) { animation-delay: 0.5s; }
        .tratamientos-minimal .treatment-features li:nth-child(4) { animation-delay: 0.6s; }
        .tratamientos-minimal .treatment-features li:nth-child(5) { animation-delay: 0.7s; }
        
        .tratamientos-minimal .treatment-features li::before {
            content: '\f105';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent);
            font-size: 1.4rem;
            transition: var(--transition);
        }
        
        .tratamientos-minimal .treatment-features li:hover::before {
            transform: translateX(5px);
        }
        
        /* Proceso Section con tu paleta */
        .tratamientos-minimal .process-steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 60px;
        }
        
        .tratamientos-minimal .process-step {
            background: white;
            border-radius: 8px;
            padding: 40px 30px;
            width: 250px;
            box-shadow: 0 10px 30px rgba(45, 55, 72, 0.03);
            transition: var(--transition);
            text-align: center;
            position: relative;
            border: 1px solid rgba(45, 55, 72, 0.03);
        }
        
        .tratamientos-minimal .process-step:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(45, 55, 72, 0.08);
        }
        
        .tratamientos-minimal .step-number {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background: white;
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            border: 2px solid var(--primary);
            transition: var(--transition);
        }
        
        .tratamientos-minimal .process-step:hover .step-number {
            background: var(--primary);
            color: white;
        }
        
        /* CTA Section con tus colores */
        .tratamientos-minimal .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            padding: 100px 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .tratamientos-minimal .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary);
        }
        
        .tratamientos-minimal .cta-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .tratamientos-minimal .btn {
            display: inline-block;
            padding: 16px 40px;
            background: white;
            color: var(--primary);
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }
        
        .tratamientos-minimal .btn:hover {
            background: transparent;
            color: white;
            border-color: white;
            transform: translateY(-5px);
        }
        
        /* Animaciones */
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .tratamientos-minimal h1 {
                font-size: 2.5rem;
            }
            
            .tratamientos-minimal h2 {
                font-size: 2rem;
            }
            
            .tratamientos-minimal .hero {
                min-height: 70vh;
            }
        }
    </style>
</head>
<body>
    <div class="tratamientos-minimal">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-subtitle">Transformando vidas</div>
                    <h1>Tratamientos Bariátricos</h1>
                    <p>Una solución integral para el abordaje del sobrepeso y la obesidad, con un enfoque humano y profesional que prioriza tu bienestar en cada etapa del proceso.</p>
                </div>
            </div>
        </section>

        <!-- Abordaje Integral Section -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <h2>Abordaje Integral</h2>
                    <p>Nuestro enfoque multidisciplinario garantiza un tratamiento completo adaptado a tus necesidades individuales</p>
                </div>
                
                <div class="approach-grid">
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Equipo Especializado</h3>
                        <p>Cirujanos, endocrinólogos, nutriólogos, psicólogos y especialistas trabajan juntos para tu bienestar integral.</p>
                    </div>
                    
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3>Patologías Asociadas</h3>
                        <p>Abordamos condiciones relacionadas como diabetes, hipertensión y apnea del sueño con protocolos personalizados.</p>
                    </div>
                    
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Rehabilitación</h3>
                        <p>Programas de seguimiento y rehabilitación física para una recuperación completa y sostenible.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ventajas Section -->
        <section class="section advantages-section">
            <div class="container">
                <div class="section-header">
                    <h2>Ventajas Únicas</h2>
                    <p>Por qué elegir nuestro programa de tratamientos bariátricos</p>
                </div>
                
                <div class="advantages-content">
                    <div class="advantages-text">
                        <ul class="advantages-list">
                            <li>Respaldo del sistema de salud nacional ante eventuales complicaciones</li>
                            <li>Seguimiento personalizado con atención 24/7 durante todo el proceso</li>
                            <li>Planes de financiación adaptados a tu situación económica</li>
                            <li>Atención integral para pacientes de todo el país</li>
                            <li>Experiencia centrada en tu comodidad y seguridad</li>
                        </ul>
                    </div>
                    
                    <div class="advantages-image">
                        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Atención médica personalizada">
                    </div>
                </div>
            </div>
        </section>

        <!-- Tratamientos Efectivos Section -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <h2>Tratamientos Efectivos</h2>
                    <p>Soluciones comprobadas para el manejo de la obesidad con los mejores resultados</p>
                </div>
                
                <div class="treatments-grid">
                    <div class="treatment-card">
                        <h3>Cirugía Bariátrica</h3>
                        <p>El tratamiento más efectivo actualmente para la obesidad, con resultados sostenibles a largo plazo y seguimiento especializado.</p>
                        
                        <ul class="treatment-features">
                            <li>Procedimientos mínimamente invasivos por laparoscopía</li>
                            <li>Recuperación más rápida con menor dolor postoperatorio</li>
                            <li>Alta hospitalaria temprana y retorno a actividades</li>
                        </ul>
                        
                        <h4>Tipos de cirugía:</h4>
                        <ul class="treatment-features">
                            <li><strong>Manga gástrica:</strong> Reducción del tamaño del estómago</li>
                            <li><strong>Bypass gástrico:</strong> Redirección del sistema digestivo</li>
                        </ul>
                    </div>
                    
                    <div class="treatment-card">
                        <h3>Balón Gástrico</h3>
                        <p>Alternativa no quirúrgica para quienes buscan un procedimiento menos invasivo con resultados significativos.</p>
                        
                        <ul class="treatment-features">
                            <li>Procedimiento ambulatorio sin internación</li>
                            <li>Duración aproximada de 20 minutos</li>
                            <li>Completamente indoloro y sin anestesia general</li>
                            <li>Recuperación inmediata y retorno a actividades</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proceso Section -->
        <section class="section" style="opacity: 1; transform: translateY(0px); transition: opacity 0.8s, transform 0.8s;background: var(--dark);">
            <div class="container">
                <div class="section-header">
                    <h2 style="color: var(--primary);">Nuestro Proceso</h2>
                    <p style="color: var(--primary);">Un camino cuidadosamente diseñado para tu transformación</p>
                </div>
                
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h3>Evaluación</h3>
                        <p>Consulta inicial con nuestro equipo para analizar tu caso y determinar las mejores opciones.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h3>Preparación</h3>
                        <p>Estudios necesarios para evaluar tu estado de salud y prepararte para el tratamiento.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h3>Plan Personal</h3>
                        <p>Desarrollo de un plan de tratamiento específico para tus necesidades y objetivos.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h3>Seguimiento</h3>
                        <p>Acompañamiento continuo para asegurar resultados óptimos y sostenibles.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Comienza tu transformación</h2>
                    <p>Nuestro equipo está listo para acompañarte en este viaje hacia una vida más saludable y plena.</p>
                    <a href="#" class="btn">Solicitar una evaluación</a>
                </div>
            </div>
        </section>

        <script>
            // Animaciones al hacer scroll
            document.addEventListener('DOMContentLoaded', function() {
                // Observar elementos para animaciones
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, { threshold: 0.1 });
                
                // Observar secciones
                document.querySelectorAll('.tratamientos-minimal .section').forEach(section => {
                    section.style.opacity = 0;
                    section.style.transform = 'translateY(30px)';
                    section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                    observer.observe(section);
                });
                
                // Observar tarjetas
                document.querySelectorAll('.tratamientos-minimal .approach-card, .tratamientos-minimal .treatment-card, .tratamientos-minimal .process-step').forEach(card => {
                    card.style.opacity = 0;
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    observer.observe(card);
                });
                
                // Animación para elementos de lista
                const listItems = document.querySelectorAll('.tratamientos-minimal .advantages-list li, .tratamientos-minimal .treatment-features li');
                listItems.forEach(item => {
                    item.style.opacity = 0;
                    item.style.transform = 'translateX(-20px)';
                    item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    observer.observe(item);
                });
            });
        </script>
    </div>
</body>
</html>