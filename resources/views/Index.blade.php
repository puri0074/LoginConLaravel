<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tu Diario Personal</title>
  <style>
    /* Estilos generales */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      
    }

    body {
      display: flex;
      flex-direction: column;
      align-items: center; /* Centra verticalmente */
      justify-content: space-between; /* Espacio entre el encabezado y el pie de página */
      position: relative; /* Establece un contexto de posición para los elementos absolutos */
      min-height: 100vh; /* Garantiza que el cuerpo al menos ocupe toda la altura de la ventana */
      background-image: url('https://asset.gecdesigns.com/img/wallpapers/beautiful-fantasy-wallpaper-ultra-hd-wallpaper-4k-sr10012418-1706506236698-cover.webp'); /* Imagen de fondo */
      background-size: cover; /* Ajusta la imagen al tamaño del cuerpo */
      background-repeat: no-repeat; /* Evita que la imagen se repita */
    }
    body {
      display: flex;
      flex-direction: column;
      align-items: center; /* Centra verticalmente */
      justify-content: space-between; /* Espacio entre el encabezado y el pie de página */
      position: relative; /* Establece un contexto de posición para los elementos absolutos */
      min-height: 100vh; /* Garantiza que el cuerpo al menos ocupe toda la altura de la ventana */
    }

    /* Estilos para el header */
    header {
      background-color: green; /* Mostaza oscuro */
      color: #fff;
      text-align: right;
      padding: 20px;
      width: 100%; /* Ocupa todo el ancho */
      position: fixed; /* Mantiene fijo el encabezado */
      top: 0; /* Fijado arriba */
    }

    header nav {
      margin-top: 5px;
      text-align: center; /* Centra horizontalmente los elementos del menú */
    }

    header a {
      color: #fff;
      text-decoration: none;
      margin-right: 10px;
    }

    /* Estilos para el contenido */
    main {
      text-align: center;
      padding: 20px;
      margin-top: 150px; /* Ajusta el margen superior para evitar que el contenido se superponga con el encabezado */
    }

    /* Estilos para los títulos */
    h1 {
      color: #ff00ff; /* Fucsia */
    }

    /* Estilos para las tarjetas */
    .card-container {
      display: flex;
      flex-direction: row; /* Cambia a disposición horizontal */
      align-items: center;
      gap: 20px;
      overflow-x: auto; /* Permite desplazamiento horizontal si las tarjetas son demasiado anchas */
    }

    .card {
      width: 300px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 2px solid fuchsia;
    }

    .card img {
      width: 100%;
      height: auto;
    }

    .card-content {
      padding: 20px;
      text-align: center;
    }

    h3 {
      color: fuchsia;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="{{ route('AcercaDeMi') }}">AcercaDeMi</a>
      <a href="{{ route('Experiencia') }}">Experiencia</a>
      <a href="{{ route('Favoritos') }}">Favoritos</a>
      <a href="{{ route('logros') }}">logros</a>
      <a href="{{ route('Ocupacion') }}">Ocupacion</a>
    </nav>
  </header>
  <main>
    <h1>Bienvenido a mis que haceres Personal</h1>
    <p>Aquí describo mi blog de notas de una forma resumida y mis quehaceres a mi diario en mi entorno.</p>
    <div class="card-container">
      <div class="card">
        <img src="https://microsofters.com/wp-content/uploads/2022/05/Programando.webp">
        <div class="card-content">
          <h3>Hobbies</h3>
          <p>Mis Ratos Libres</p>
        </div>
      </div>
      <div class="card">
        <img src="https://www.canal-ar.com.ar/noticias/images/c_programar_250121.jpg">
        <div class="card-content">
          <h3>Deberes</h3>
          <p>Mis que haceres diarios</p>
        </div>  
      </div>
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSafH_XiOUxytoBPD6tHV7hVldWNA2e0_C7sw&usqp=CAU">
        <div class="card-content">
          <h3>Deporte Favorito</h3>
          <p>Futbol</p>
        </div>
      </div>
    </div>
    <div style="font-size: 40px; color: black; text-align: left;">Comunícate conmigo a mi WhatsApp
        <a href="https://wa.me/1234567890" target="_blank">
            <img src="https://th.bing.com/th/id/OIP.tMLbNzNA-Lh8pohwRouo7wHaHa?w=179&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="WhatsApp" style="width: 40px; height: 40px; vertical-align: middle; transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        </a>
    </div>
   <div style="font-size: 50px; color: white;">Ofrecemos los siguientes productos</div>
  </main>
  <footer>
    <nav>
    </nav>
  </footer>
</body>
</html>
