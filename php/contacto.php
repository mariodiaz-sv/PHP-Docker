<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferretrack - Contacto</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .contact-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info {
            background: var(--light-color);
            padding: 2rem;
            border-radius: 8px;
        }

        .contact-info h3 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .contact-method {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: var(--secondary-color);
        }

        .contact-details h4 {
            margin: 0 0 0.3rem 0;
        }

        .contact-details p {
            margin: 0;
            color: #666;
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .contact-form h3 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
        }

        .form-group textarea {
            min-height: 120px;
        }

        .map-container {
            grid-column: span 2;
            height: 400px;
            background: #f5f5f5;
            border-radius: 8px;
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .map-container {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>
    <header class="ferretrack-header">
        <div class="logo-container">
            <h1>Ferretrack</h1>
            <span class="tagline">Gestión Inteligente para tu Negocio</span>
        </div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="caracteristicas.php">Características</a>
            <a href="precios.php">Planes</a>
            <a href="demo.php">Demo</a>
            <a href="contacto.php" class="active">Contacto</a>
        </nav>
    </header>

    <main class="contact-main">
        <section class="contact-hero">
            <h2>Estamos aquí para ayudarte</h2>
            <p>Contáctanos para más información o soporte técnico</p>
        </section>

        <div class="contact-container">
            <div class="contact-info">
                <h3>Información de Contacto</h3>
                
                <div class="contact-method">
                    <div class="contact-icon">📧</div>
                    <div class="contact-details">
                        <h4>Correo Electrónico</h4>
                        <p>info@ferretrack.com</p>
                        <p>soporte@ferretrack.com</p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">📱</div>
                    <div class="contact-details">
                        <h4>Teléfono</h4>
                        <p>+1 234 567 890 (Ventas)</p>
                        <p>+1 987 654 321 (Soporte)</p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">🏢</div>
                    <div class="contact-details">
                        <h4>Oficinas</h4>
                        <p>Av. Principal 1234</p>
                        <p>Ciudad, País</p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">🕒</div>
                    <div class="contact-details">
                        <h4>Horario de Atención</h4>
                        <p>Lunes a Viernes: 9:00 - 18:00</p>
                        <p>Sábados: 9:00 - 13:00</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3>Envíanos un Mensaje</h3>
                <form action="procesar_contacto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <select id="asunto" name="asunto">
                            <option value="ventas">Información sobre productos</option>
                            <option value="soporte">Soporte técnico</option>
                            <option value="facturacion">Facturación</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" required></textarea>
                    </div>
                    
                    <button type="submit" class="primary-btn">Enviar Mensaje</button>
                </form>
            </div>
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.6789!2d-0.123456!3d39.987654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDU5JzE1LjYiTiAwwrAwNyczMi4wIlc!5e0!3m2!1sen!2sus!4v1234567890123!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </main>

    <footer class="ferretrack-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Ferretrack</h3>
                <p>La solución integral para la gestión moderna de negocios.</p>
            </div>
            
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>info@ferretrack.com</p>
                <p>+1 234 567 890</p>
            </div>
            
            <div class="footer-section">
                <h3>Desarrollador</h3>
                <p>Sistema creado por Mario Díaz</p>
                <p>© <?php echo date("Y"); ?> Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
</body>
</html>