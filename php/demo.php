<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferretrack - Demo Interactiva</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .demo-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .demo-form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .demo-form h3 {
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

        .demo-video {
            background: #f5f5f5;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .demo-video img {
            width: 100%;
            height: auto;
        }

        .play-button {
            position: absolute;
            width: 60px;
            height: 60px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .play-button:hover {
            transform: scale(1.1);
        }

        .play-button:before {
            content: "";
            width: 0;
            height: 0;
            border-top: 12px solid transparent;
            border-left: 20px solid white;
            border-bottom: 12px solid transparent;
            margin-left: 5px;
        }

        .demo-features {
            grid-column: span 2;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .demo-feature {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .demo-feature h4 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .demo-container {
                grid-template-columns: 1fr;
            }
            
            .demo-features {
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
            <a href="demo.php" class="active">Demo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <main class="demo-main">
        <section class="demo-hero">
            <h2>Descubre Ferretrack en Acción</h2>
            <p>Experimenta cómo nuestro sistema puede transformar tu negocio</p>
        </section>

        <div class="demo-container">
            <div class="demo-form">
                <h3>Solicita una Demo Personalizada</h3>
                <form action="procesar_demo.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono">
                    </div>
                    
                    <div class="form-group">
                        <label for="interes">¿Qué te interesa conocer?</label>
                        <select id="interes" name="interes">
                            <option value="inventario">Gestión de Inventario</option>
                            <option value="ventas">Sistema de Ventas</option>
                            <option value="ia">Funciones de IA</option>
                            <option value="todo">Todo el Sistema</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="comentarios">Comentarios Adicionales</label>
                        <textarea id="comentarios" name="comentarios" rows="4"></textarea>
                    </div>
                    
                    <button type="submit" class="primary-btn">Solicitar Demo</button>
                </form>
            </div>
            
            <div class="demo-video">
                <img src="images/demo-screenshot.jpg" alt="Captura de pantalla de Ferretrack">
                <div class="play-button" onclick="window.location.href='https://youtu.be/demo'"></div>
            </div>
            
            <div class="demo-features">
                <div class="demo-feature">
                    <h4>Demo Interactiva</h4>
                    <p>Accede a un entorno de prueba real donde podrás explorar todas las funciones del sistema.</p>
                </div>
                
                <div class="demo-feature">
                    <h4>Tour Guiado</h4>
                    <p>Nuestros especialistas te guiarán a través de las características clave del sistema.</p>
                </div>
                
                <div class="demo-feature">
                    <h4>Casos de Estudio</h4>
                    <p>Descubre cómo negocios similares al tuyo han implementado Ferretrack con éxito.</p>
                </div>
                
                <div class="demo-feature">
                    <h4>Preguntas y Respuestas</h4>
                    <p>Tendrás la oportunidad de resolver todas tus dudas con nuestro equipo técnico.</p>
                </div>
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