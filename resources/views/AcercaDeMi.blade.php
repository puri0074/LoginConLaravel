<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Mí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
            margin: 0; /* Añadido para evitar espacios en blanco alrededor de la página */
            padding: 0; /* Añadido para evitar espacios en blanco alrededor de la página */
        }

        header {
            background-color: #333; /* Color de fondo del menú */
            padding: 20px;
            width: 100%;
        }

        .menu {
            display: flex;
            justify-content: center; /* Centra horizontalmente los enlaces */
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Transición suave al pasar el cursor */
        }

        .menu a:hover {
            background-color: #555; /* Color de fondo al hacer hover */
        }

        .container {
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .titulo-acercade {
            font-size: 2em; /* Tamaño de letra aumentado */
            color: #333; /* Color del texto */
            text-align: center; /* Centra horizontalmente el texto */
        }

        /* Estilos para las imágenes */
        .image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px; /* Añadido un margen inferior para separar las imágenes */
        }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <a href="{{ route('AcercaDeMi') }}" class="titulo-acercade">Acerca de Mí</a>
        </div>
    </header>
    <div class="container">
        <h1 class="mt-5">Acerca de Mí</h1>
        <p class="lead">
            ¡Hola! Soy Puri. Bienvenido a mi blog. En esta sección, encontrarás información sobre mí y mis intereses.
        </p>
        <h2>Biografía</h2>
        <img src="https://image.isu.pub/211028141307-edb4aef0c51b25579bf51272ef13cf66/jpg/page_1.jpg" alt="Biografía" class="image">
        <p>Me llamo Puri, tengo 23 años y vivo en Huanuco. Soy Estudiante de la carrera de Ingeniería de software con IA y estoy apasionado/a por ser un programador exitoso.</p>
        <h2>Intereses y pasatiempos</h2>
        <img src="https://www.elcorreogallego.es/binrepository/900x642/0c82/900d506/none/102922340/UGYW/futbol2_422-1375385_20200712220828.jpg" alt="Intereses y pasatiempos" class="image">
        <p>En mi tiempo libre, disfruto del Futbol. También me encanta leer y ver documentales.</p>
        <h2>Metas y aspiraciones</h2>
        <img src="https://edteam-media.s3.amazonaws.com/blogs/original/c08a30cb-f8ac-4b48-8d8c-d2bd61d6461d.png" alt="Metas y aspiraciones" class="image">
        <p>Una de mis metas a corto plazo es trabajar en una empresa de desarrollo web. A largo plazo, espero lograr salir del país.</p>
        <h2>Logros destacados encuentro con mis Hermanos de Arma</h2>
        <img src="https://lh3.googleusercontent.com/pw/AP1GczMSzF_wwaW8xdMsT3WLyFVaBB5KwNFn0x8TYFX-9Ci4ndMMJymRIKgUcu41HzHMWnrcNDC_3tuZCa0d4Rj59uz5968PFblxzMl7Z_bEN2qBz2VfzvTHHXvPyELJ1FV7zrYSbfR5lmHIKz6t8EKWn7ybH7i7eLNnYoNn9fYh4O2nrlTZyqhWB-WEH2ysiE8EytV4EVrIK3QjVc0W0TG3Jx4eDR2uxV1B61qBd0PVt6_zaiu_IJ_RZuc_DAJX8hdbwDeLOPC4KBTb7nz0OduJywulZxcQrTkBNqJ8kuxwno_Rwy_sc-0n1ecqugsqWVRUSCH5SA8mK3P0whxfDLhmOJ0taew_D8R8KTMF5tRWOuYAkxr4lUvk7NwCo08005mfXfhsh3CKscCHnfgaJDYDAqHDqzzlVv-NyL72-aJe6y87IjFrKJm8Rt2NjmdSQLHYYZ-wzSSZ5x0tfd0iRhxn0d1vAqVm7gnkh8uSXsb1W9KUaUQYVlXShOsbQvWAMbYMfIWRjGe0Y30_S6Cn3xAxYIYwXKYyaoDJAYRL8Y-wF6lKFGXSCtnkBwHAdH6zQXKwrpo2Fa5CpFQJHdO1Lgr6V4VfimeiDKHUN3OkJ2K718SnJaAnjWl8AxiwJvn-zf-518iGj_jPqDKCLjjDRsSOrzRcQCL66NtyebndZpMG_gSVXEJxxCf8pW1-vxp3ecSll9kqAR_tAAJcxXctwFRzD2mBjYms93EhOuNc8oraOUPUaeTznEQ5oN_H0W5HZj1kydtWxFJvB3Dc6v8gMy-cnQC6r4yVBU2rTOefzL6jQ85LyK0xvRv7HLZ534nbRk0ezaNm3bhZa-BSLeIJQ0JMsV1h_hVJqYwoAugdd5txBLrTY0ZX59dFn8dYGa_uzq72UP-z_7FlWBjfwN52eN3UgszYLsg=w1040-h480-s-no-gm?authuser=0" alt="Logros destacados" class="image">
        <ul>
            <li>Licenciado en FF.AA</li>
            <img src="https://lh3.googleusercontent.com/pw/AP1GczNvf9zaKuVFS8kvjYsPPlnCMeFN53xx7t7_lM1jwBFt7LITa4msptNLxWjvZHzu4qSAZEcM-lPrz0UCguXCQWhw34JCYl9DaoFgbIgLBovZKE6lIcKd_-j6arZgEC2Zqxej9VhwYfEPBiPHWrXoy8uB436v3Qe8BNBFNDalPVpOlzI6E8AV3hP_0yTertuDpo-D3mGCyPZxSf6zhWbiS_GNJ_8zUDWClwNFknFmSjayhBx5ai1J73LlHgg7FoRLaYWHmAV9Go54hAhRCucswPLejb8ZZa0Ch7oRVpsLVCn0aZS9nOfWMVvB3ZflNECKkO-EIzHNEuVquVyuJkbg51Il13bCUK7q_UG6Y2cEbpfgbuYIwSyiJ6P22vUZjHoDJ-R7QyTgrKzXEvZP2XAT3ys_K_htu_mA93IbsDT5rXE8fDzjgkAsnSsAyB3IoekeVM6htya_noR2Ee3niT3AV2W4ZZ8EHan59-gNoWt1Q5oBadVIpLCYu9lUWOZNn_PQbOvTUuUmtEQF98Zij8Kjw9Vs_L4R6FIfdBrufCjkTHMVLo8ewyve8wxBtMhaey3sJrfwcuxECAE6MQ-SaSuELVy7j80NM6KpRYVPkVziyMMvMH1AkjJp4dZEtPELDIoJnH9DRPL3aIfyk7oEwMHYqoQogMRq_kxff-QX2zNoZ0bzl173IWUHlL1cOXeu7YP_Cmy3peXg-Em7rNP9s6bAktDI80KrwFRpCN5AwUjMx5BIB7tHdEKwUUUHwWRrOC00ZNj-WFgAxqd20ig3zM6u8X3by3PsBLqVdkhr_KBBRo-8La92mVSa9luUHng53A8-xvp4FnPe26GVD5uf2gw1Lr0VBlMCEOQNIQ2RrfL5KY3_Q3CBdOKoT-IKQA3gDKb0yv0ZTiMuuLSdiJxM7yhChybsRWA=w1216-h913-s-no-gm?authuser=0" alt="Biografía" class="image">
        </ul>
        <a href="/" class="btn btn-primary">Volver a la página principal</a> <!-- Botón para volver a la página principal -->
    </div>
</body>
</html>