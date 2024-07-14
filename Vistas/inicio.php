<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanchi Games</title>
    <style>
        body {
            background-color: beige;
            font-family: Arial, sans-serif;
            color: #333;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .background-img {
            background-image: url('../Imagenes/01-1.gif');
            height: 400px;
            width: 100%;
            background-size: cover;
            background-position: center;
        }
        main {
            padding: 20px;
           
        }
        h1, h2, h3 {
            color:#e7b40c;
        }
        .game-list {
            display: flex;
            flex-wrap: wrap;
        }
        .game {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            width: calc(33% - 40px);
            box-sizing: border-box;
            text-align: center;
        }
        .game img {
            max-width: 100%;
            border-radius: 8px;
        }
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    
        .prices {
            text-align: left;
            margin-top: 20px;
        }
        form {
            margin-top: 20px;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
        }
        form input, form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form button {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .auth-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .auth-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .quotation {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            width: calc(33% - 40px);
            box-sizing: border-box;
            text-align: center;
            background-color:antiquewhite
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="#home">Inicio</a>
            <a href="#about">Sobre Nosotros</a>
            <a href="#games">Juegos</a>
            <a href="#news">Noticias</a>
            <a href="#community">Comunidad</a>
            <a href="#support">Soporte</a>
            <a href="#contact">Contacto</a>
            <a href="#login">Login</a>
            <a href="#Quotation">Cotizacion</a>
        </nav>
    </header>

    <div class="background-img"></div>

    <header>
        <h1>JJFC - INICIO</h1>
    </header>

    <main>
        <section id="home">
            <h1>Inicio</h1>
            <h1>Bienvenidos a Juanchi Games</h1>
            <p>Encuentra los mejores videojuegos y accesorios para tu consola favorita.</p>
        </section>
    </main>
</body>
<footer>
        <p>&copy; CREADO POR. JUAN JOSE FAJARDO CALDERON. JJFC</p>
</footer>
</html>
