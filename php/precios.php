<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferretrack - Planes y Precios</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .pricing-plans {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .plan-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .plan-card.popular {
            border: 2px solid var(--accent-color);
            position: relative;
        }

        .popular-tag {
            position: absolute;
            top: -10px;
            right: 20px;
            background: var(--accent-color);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .plan-name {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .plan-price {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 1rem 0;
        }

        .plan-price span {
            font-size: 1rem;
            color: #666;
        }

        .plan-features {
            margin: 2rem 0;
        }

        .plan-features li {
            margin-bottom: 0.8rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .plan-features li:before {
            content: "✓";
            color: var(--secondary-color);
            position: absolute;
            left: 0;
        }

        .plan-button {
            display: block;
            text-align: center;
            padding: 0.8rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .primary-plan {
            background: var(--accent-color);
            color: white;
        }

        .primary-plan:hover {
            background: #c0392b;
        }

        .secondary-plan {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .secondary-plan:hover {
            background: var(--primary-color);
            color: white;
        }

        .enterprise-contact {
            text-align: center;
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: var(--light-color);
            border-radius: 8px;
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
            <a href="precios.php" class="active">Planes</a>
            <a href="demo.php">Demo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <main class="pricing-main">
        <section class="pricing-hero">
            <h2>Planes a Medida para tu Negocio</h2>
            <p>Elige el paquete que mejor se adapte a tus necesidades</p>
        </section>

        <div class="pricing-plans">
            <div class="plan-card">
                <h3 class="plan-name">Básico</h3>
                <p>Perfecto para pequeños negocios</p>
                <div class="plan-price">$49<span>/mes</span></div>
                <ul class="plan-features">
                    <li>Gestión de inventario básica</li>
                    <li>Sistema POS estándar</li>
                    <li>Hasta 1,000 productos</li>
                    <li>1 usuario administrador</li>
                    <li>Reportes básicos</li>
                    <li>Soporte por correo electrónico</li>
                </ul>
                <a href="#" class="plan-button secondary-plan">Empezar</a>
            </div>

            <div class="plan-card popular">
                <div class="popular-tag">POPULAR</div>
                <h3 class="plan-name">Profesional</h3>
                <p>Para negocios en crecimiento</p>
                <div class="plan-price">$99<span>/mes</span></div>
                <ul class="plan-features">
                    <li>Gestión avanzada de inventario</li>
                    <li>POS con múltiples métodos de pago</li>
                    <li>Hasta 10,000 productos</li>
                    <li>Hasta 5 usuarios</li>
                    <li>Analíticas avanzadas</li>
                    <li>Predicciones básicas de ventas</li>
                    <li>Soporte prioritario</li>
                </ul>
                <a href="#" class="plan-button primary-plan">Elegir Plan</a>
            </div>

            <div class="plan-card">
                <h3 class="plan-name">Empresarial</h3>
                <p>Para múltiples sucursales</p>
                <div class="plan-price">$199<span>/mes</span></div>
                <ul class="plan-features">
                    <li>Inventario multialmacén</li>
                    <li>POS multicaja</li>
                    <li>Productos ilimitados</li>
                    <li>Usuarios ilimitados</li>
                    <li>IA para predicción de ventas</li>
                    <li>Integraciones API</li>
                    <li>Soporte 24/7</li>
                </ul>
                <a href="#" class="plan-button secondary-plan">Contratar</a>
            </div>
        </div>

        <div class="enterprise-contact">
            <h3>¿Necesitas una solución personalizada?</h3>
            <p>Contamos con planes empresariales totalmente personalizables para grandes organizaciones con necesidades específicas.</p>
            <a href="contacto.php" class="primary-btn">Contactar Ventas</a>
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