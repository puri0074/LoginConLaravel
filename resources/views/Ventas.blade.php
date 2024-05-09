<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
    <style>
        body, header, section, footer {
            text-align: center; /* Para centrar todo el contenido */
        }

        h1, h2, h3 {
            text-align: center; /* Para centrar los títulos */
        }

        /* Estilos adicionales para mejorar la presentación */
        header nav ul {
            list-style-type: none;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        .producto {
            display: inline-block;
            margin: 20px;
            text-align: left; /* Alinea el contenido del producto a la izquierda */
            overflow: auto; /* Para limpiar los flotantes */
        }

        footer {
            position: relative; /* Cambia a posición relativa */
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px 0;
            margin-top: 20px; /* Agrega margen superior para evitar superposición */
        }

        body {
            overflow: auto; /* Permite el desplazamiento vertical */
        }

        /* Añadir un estilo para limpiar los flotantes */
        .clear:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Establece un ancho máximo y ajusta la altura automáticamente */
        .producto img {
            max-width: 300px;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tienda de Ropa</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="productos">
        <h2>Nuestros Productos</h2>
        <!-- Aquí puedes listar tus productos con imágenes, descripciones y precios -->
        <div class="producto">
            <img src="https://cdn0.matrimonios.cl/article/1846/original/1280/png/56481-portada-2022-10-24t130128-324.webp" alt="Vestido elegante">
            <img src="https://falabella.scene7.com/is/image/FalabellaPE/17396774_1?wid=800&hei=800&qlt=70" alt="Zapatillas">
            <img src="https://i1.wp.com/invitadaperfecta.es/wp-content/uploads/2017/09/Look-invitada-boda-de-d%C3%ADa-con-vestido-midi-de-Asos-en-verde-y-zapatos-de-Salo-Madrid-15.jpg?ssl=1" alt="Vestido elegante">
            <h3>Vestidos Elegantes y Zapatillas</h3>
            <p>Descripción del vestido...</p>
            <p>Precio: $99.99</p>
            <button>Agregar al carrito</button>
        </div>
        <!-- Repite la estructura para otros productos -->
        <div class="clear"></div> <!-- Añade un elemento para limpiar los flotantes -->
    </section>

    <section id="contacto">
        <h2>Contacto</h2>
        <p>¿Tienes alguna pregunta? ¡Contáctanos!</p>
        <form action="enviar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Tienda de Ropa</p>
    </footer>
</body>
</html>
