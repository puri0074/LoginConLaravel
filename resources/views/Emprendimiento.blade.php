<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi empredimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #007bff;
    color: white;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

main {
    padding: 20px;
}

.productos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
}

.producto {
    border: 1px solid #ddd;
    padding: 20px;
}

.producto img {
    max-width: 100%;
    height: auto;
}

footer {
    background-color: #f4f4f4;
    padding: 20px;
    text-align: center;
}
    </style>
</head>
<header>
    <div class="foot">
       <a href="{{ route('Conoce más de mi emprendimiento') }}" class="titulo-Mi emprendimiento">Mi emprendimiento></a>
    </div>
</header>
<body>
    <header>
        <h1>Emprendimiento XYZ</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="productos">
            <h2>Nuestros Productos</h2>
            <div class="producto">
                <img src="producto1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción breve del producto 1.</p>
                <a href="#">Ver más</a>
            </div>
            <div class="producto">
                <img src="producto2.jpg" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>Descripción breve del producto 2.</p>
                <a href="#">Ver más</a>
            </div>
            <!-- Agrega más productos aquí -->
        </section>
    </main>
    <footer>
        <p>Derechos de autor © 2024 Emprendimiento XYZ. Todos los derechos reservados.</p>
    </footer>
</body>
</html>