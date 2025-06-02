<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferretrack - Gestión de Ventas e Inventario con IA</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
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
            <a href="index.php" class="active">Inicio</a>
            <a href="caracteristicas.php">Características</a>
            <a href="precios.php">Planes</a>
            <a href="demo.php">Demo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <div class="hero-banner">
        <div class="hero-content">
            <h2>Transforma tu negocio con Ferretrack</h2>
            <p>La solución todo en uno para gestión de ventas, inventario y análisis predictivo con IA</p>
            <div class="cta-buttons">
                <a href="demo.php" class="primary-btn">Solicitar Demo</a>
                <a href="precios.php" class="secondary-btn">Ver Planes</a>
            </div>
        </div>
    </div>

    <div class="fecha-actual">
        <?php
            $fecha_actual = date("d/m/Y H:i:s");
            echo "Fecha y hora actual: $fecha_actual";
        ?>
    </div>

    <section class="ferretrack-highlights">
        <h2>¿Por qué elegir Ferretrack?</h2>
        <div class="highlights-grid">
            <div class="highlight-card">
                <div class="icon">📊</div>
                <h3>Control Total de Inventario</h3>
                <p>Gestiona tu stock en tiempo real con alertas automáticas y reposición inteligente.</p>
            </div>
            
            <div class="highlight-card">
                <div class="icon">🤖</div>
                <h3>Inteligencia Artificial</h3>
                <p>Predice tendencias de venta y optimiza tu inventario con algoritmos de machine learning.</p>
            </div>
            
            <div class="highlight-card">
                <div class="icon">💳</div>
                <h3>Procesamiento de Ventas</h3>
                <p>Sistema completo de POS con múltiples métodos de pago y facturación electrónica.</p>
            </div>
            
            <div class="highlight-card">
                <div class="icon">📈</div>
                <h3>Analíticas Avanzadas</h3>
                <p>Dashboards interactivos con los KPI más importantes de tu negocio.</p>
            </div>
        </div>
    </section>

    <section class="tecnologias-section">
        <h2>Tecnología de Vanguardia</h2>
        <div class="tech-grid">
            <div class="tech-card">
                <h3>Arquitectura Robustaa</h3>
                <ul>
                    <li>Backend en PHP 8 con patrón MVC</li>
                    <li>Frontend con Vue.js y Bootstrap 5</li>
                    <li>Base de datos MySQL optimizada</li>
                    <li>API REST para integraciones</li>
                </ul>
            </div>
            
            <div class="tech-card">
                <h3>Seguridad Garantizada</h3>
                <ul>
                    <li>Encriptación AES-256</li>
                    <li>Autenticación de dos factores</li>
                    <li>Copias de seguridad automatizadas</li>
                    <li>Certificado SSL incluido</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="testimonios-section">
        <h2>Lo que dicen nuestros clientes</h2>
        <div class="testimonios-grid">
            <div class="testimonio-card">
                <p>"Ferretrack revolucionó nuestro control de inventario, reduciendo pérdidas en un 30% el primer mes."</p>
                <div class="cliente-info">
                    <strong>Carlos Méndez</strong>
                    <span>Distribuidora Méndez</span>
                </div>
            </div>
            
            <div class="testimonio-card">
                <p>"Las predicciones de ventas con IA nos han ayudado a optimizar compras y aumentar ganancias."</p>
                <div class="cliente-info">
                    <strong>Laura González</strong>
                    <span>Ferretería Central</span>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <h2>¿Listo para llevar tu negocio al siguiente nivel?</h2>
        <p>Ferretrack se adapta a empresas de todos los tamaños</p>
        <div class="cta-buttons">
            <a href="contacto.php" class="primary-btn">Contactar Ventas</a>
            <a href="demo.php" class="secondary-btn">Ver Demo Interactiva</a>
        </div>
    </section>

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