<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Documento con Header Fijo</title>
<style>
  /* Estilos del header fijo */
  #superior {
    display: flex;
    background-color: rgb(40, 40, 100);
    height: 200px; /* Ajusta según tus elementos */
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* Asegura que esté siempre visible */
  }

  /* Empuja el contenido hacia abajo evitando que se superponga */
  body {
    background-color: bisque;
    margin: 0;
    padding-top: 200px; /* Debe coincidir con la altura del header */
    display: flex;
    flex-direction: column;
  }

  /* El resto de tus estilos quedan igual */
  #logo {
    width: 100px;
    height: 100px;
    border-radius: 50px;
    margin: 25px 20px 0 20px;
    animation: girar 7s linear infinite;
    text-shadow: 0px 4px 5px black;
  }
  @keyframes girar {
    100% { transform: rotate(360deg); }
  }
  #titulo {
    font-size: 50px;
    color: white;
    margin-top: 50px;
    animation: rebote 3s ease forwards;
  }
  @keyframes rebote {
    0% { transform: translateY(-100px); opacity: 0; }
    60% { transform: translateY(20px); opacity: 1; }
    80% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
  }
  #paginas {
    display: flex;
    color: black;
    margin-left: auto;
    margin-right: 20px;
    align-items: center;
  }
  #paginas a {
    color: black;
    background-color: bisque;
    padding: 8px 16px;
    border-radius: 5px;
    transition: background-color 0.3s, font-size 0.3s ease;
    margin: 8px;
    font-size: 45px;
  }
  #paginas a:hover {
    background-color: #887c7c;
    font-size: 50px;
  }
  .contenido-lema {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 90px;
    margin-top: 200px;
    width: 70%;
    animation: deslizar 3s ease-out forwards;
  }
  .lema {
    font-size: 100px;
    color: rgb(40, 40, 100);
    animation: deslizar 3s ease-out forwards;
  }
  .sublema {
    font-size: 50px;
    color: rgb(40, 40, 100);
    display: block;
    animation: deslizar 3s ease-out forwards;
  }
  .caja-derecha {
    width: 450px;
    height: 450px;
    background-color: rgb(40, 40, 100);
    border-radius: 12px;
    animation: aparecer 2s ease-in-out forwards;
    opacity: 0;
  }
  .caja-derecha img {
    width: 100%;
    height: 100%;
    border-radius: 12px;
  }
  #asunte {
    margin: 40px auto;
    padding: 20px;
    max-width: 600px;
    width: 90%;
    box-sizing: border-box;
    margin-bottom: 15vh;
  }
  @keyframes deslizar {
    from { transform: translate(100vw); }
    to { transform: translate(0); }
  }
  @keyframes aparecer {
    from { transform: scale(0); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
  }
  .valores {
    font-size: 45px;
    color: rgb(40, 40, 100);
    margin-left: 90px;
  }
  #inferior {
    background-color: rgb(40, 40, 100);
    height: 10%;
    position: fixed;
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }
  .valores-footer {
    color: bisque;
    font-size: 45px;
    text-align: center;
  }
  @media (max-width: 768px) {
    #superior, #inferior {
      flex-direction: column;
      height: auto;
      text-align: center;
      position: static;
    }
    body {
      padding-top: 0;
    }
    #logo {
      margin: 10px auto;
    }
    #titulo {
      font-size: 30px;
    }
    #titulo:hover {
      font-size: 40px;
    }
    #paginas {
      flex-direction: column;
      align-items: center;
      margin: 10px 0;
    }
    #paginas a {
      font-size: 30px;
      margin: 5px 0;
    }
    #paginas a:hover {
      font-size: 35px;
    }
    .contenido-lema {
      flex-direction: column;
      width: auto;
      margin-left: 20px;
      margin-top: 150px;
      align-items: flex-start;
    }
    .lema {
      font-size: 50px;
    }
    .sublema {
      font-size: 30px;
      margin-top: 10px;
    }
    .caja-derecha {
      width: 100px;
      height: 100px;
      margin-left: 0;
      margin-top: 20px;
    }
    .valores-footer {
      font-size: 30px;
    }
  }
</style>
</head>
<body>
  <header>
    <div id="superior">
      <img src="../imagenescol/logo.jpeg" alt="logo" id="logo" />
      <h1 id="titulo">"Elena Arce"</h1>
      <nav id="paginas">
        <a href="nosotros.php">nosotros</a>
        <a href="historia.php">historia</a>
        <a href="ambientes.php">ambientes</a>
        <a href="contacto.php">Contacto</a>
        <a href="primerform.php">Inicia Sesión</a>
      </nav>
    </div>
  </header>

  <section>
    <div class="contenido-lema">
      <div>
        <h2 class="lema">lema 2025</h2>
        <h3 class="sublema">"Fortalecer la comunión<br /> que impulsa nuestra misión</h3>
      </div>
      <div class="caja-derecha">
        <img src="../imagenescol/imagen22.jpeg" alt="Imagen 2">
      </div>
    </div>
  </section>

  <section id="asunte">
    <form action="archivo2.php" method="post">
      <label for="asuntito">ASUNTO:</label><br>
      <input type="text" name="asuntito" id="asuntito" required style="width: 100%;"><br><br>
      <label for="come">COMENTARIO:</label><br>
      <textarea name="come" id="come" rows="5" required style="width: 100%;"></textarea><br><br>
      <input type="submit" value="Enviar" style="font-size: 16px; padding: 8px 16px;">
    </form>
  </section>

  <footer>
    <div id="inferior">
      <h4 class="valores-footer">
        <p>&copy; Colegio Elena Arze de Arze</p>
      </h4>
    </div>
  </footer>
</body>
</html>..