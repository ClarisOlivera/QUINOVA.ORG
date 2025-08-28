<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   body{
    background-color: antiquewhite;
   }
    
    #img1{
        height: 560px;
        width: 90%;
        display: flex;
        justify-content: center;
        align-items: center;    
        display: block;
        margin: 0 auto;
        margin-top:10%;
    }
    
    #titulo-resena {
        color: rgb(206, 160, 0);
        font-size: 50px;
        font-family: 'Georgia', serif;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        text-align: center;
        position: relative;
        z-index: -1;
    }
    
    #texto1{
        margin-top: 50px;
        font-size: 25px;
    }
   
    #bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
        display: flex;
        justify-content: center;  /* centra el conjunto horizontalmente si hace falta */
        align-items: flex-start;  /* alinea arriba del bloque */
        gap: 2rem;                /* espacio entre imagen y texto */
        padding: 50px 20px;       /* opcional: margen interno para espaciar borde */
        max-width: 90%;
        margin: 0 auto;           /* centra el bloque en la página */
    }
    #img2, #img3, #img4, #img5, #img6 {
        margin-top: 50px;
        height: 500px;
        width: 600px;
        border-radius: 25px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    #texto2, #texto3, #texto4, #texto5, #texto6 {
        font-size: 25px;
    }


    @media (max-width: 900px) {
        #img1 {
            height: auto;
            width: 98%;
            margin-top: 5%;
        }
        #bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
            max-width: 98%;
            padding: 30px 5px;
            gap: 1rem;
        }
        #img2, #img3, #img4, #img5, #img6 {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-top: 20px;
        }
        #titulo-resena {
            font-size: 36px;
        }
        #texto1, #texto2, #texto3, #texto4, #texto5, #texto6 {
            font-size: 20px;
        }
    }
    @media (max-width: 600px) {
        #img1 {
            height: auto;
            width: 100%;
            margin-top: 3%;
        }
        #bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
            flex-direction: column;
            align-items: center;
            padding: 18px 2px;
            gap: 16px;
        }
        #img2, #img3, #img4, #img5, #img6 {
            width: 90vw;
            max-width: 98vw;
            height: auto;
            margin-top: 10px;
        }
        #titulo-resena {
            font-size: 24px;
        }
        #texto1, #texto2, #texto3, #texto4, #texto5, #texto6 {
            font-size: 16px;
        }
    }
    @media (max-width: 400px) {
        #titulo-resena {
            font-size: 16px;
        }
        #texto1, #texto2, #texto3, #texto4, #texto5, #texto6 {
            font-size: 13px;
        }
        #img2, #img3, #img4, #img5, #img6 {
            width: 98vw;
        }
        #bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
            padding: 8px 0;
        }
    }
    </style>
</head>
<?php include('../include/cabecera.php'); ?> 
<body>
<main>
    <img src="../imagenescol/portada1.jpg" alt="" id="img1" >
    <div id="titulo-resena">Reseña Histórica</div>
    <div id="texto1"> 
        <center> La Unidad Educativa Elena Arze de Arze representa un pilar histórico en la educación femenina en Bolivia. <br>
        Nacida en una época en la que la mujer estaba relegada en materia educativa, esta institución emergió <br>
        como símbolo de progreso social, compromiso docente y visión transformadora. <br>
        A lo largo de más de siete décadas ha mantenido su firme propósito de formar ciudadanas íntegras, <br>
        con valores y preparación académica sólida.</center>
    </div>
    <div id="bloque2">
        <img src="../imagenescol/portada2.jpg" alt="" id="img2" >
        <div id="texto2">
            <h1>📜 Fundación e impulso inicial</h1>
            <P>En diciembre de 1946 se inicia una nueva etapa en la educación cochabambina 
            con la apertura del libro de inscripciones para un liceo destinado exclusivamente 
            a señoritas La idea se concreta gracias a la visión del Jefe del Distrito Escolar 
            Prof Humberto Camacho quien percibe la urgencia de abrir espacios de formación para 
            mujeres en un sistema tradicionalmente excluyente La institución se denomina inicialmente 
            Liceo Adela Zamudio Anexo en honor a la destacada escritora y defensora de los derechos 
            de la mujer Se alquila un local adecuado para iniciar las labores escolares marcando el 
            inicio de un proyecto que pronto superará todas las expectativas. 
            Este nacimiento se considera un acto audaz y revolucionario dentro del contexto conservador de la época</P>
        </div>
    </div>
    <div id="bloque3">
        <div id="texto3"> 
            <h1>   👩‍🏫 Comienzos del Liceo de Señoritas</h1>
            <p>El 2 de febrero de 1947 se lleva a cabo la inauguración oficial
                del Liceo de Señoritas La profesora Elena Arze de Arze es
                nombrada directora y asume el reto con firmeza y vocación 
                En su primer año académico se inscriben 254 alumnas con una 
                estructura que incluye tres primeros grados un segundo un
                tercero y un cuarto Se establece una mística de formación 
                en el esfuerzo la disciplina y la superación personal En 
                1949 se gradúa la primera promoción marcando el inicio de 
                una tradición educativa de excelencia</p>
        </div>
        <img src="../imagenescol/portada3.jpg" alt="" id="img3" >
    </div>
    <div id="bloque4">
        <img src="../imagenescol/portada4.jpg" alt="" id="img4" >
        <div id="texto4">
            <h1>🏛️ Consolidación de identidad</h1>
            <P> Este nacimiento se considera un acto audaz y revolucionario dentro del contexto
                conservador de la épocaEl 22 de septiembre de 1947 el liceo adopta el nombre 
                de Liceo de Señoritas Cochabamba fortaleciendo su vínculo con la ciudad y su 
                identidad local La accesibilidad se convierte en una de sus principales 
                características abriendo las puertas a estudiantes provenientes de distintas
                clases sociales El esfuerzo del cuerpo docente y administrativo consolida 
                su carácter fiscal lo que permite ofrecer una educación de calidad al alcance
                de muchas familias Se convierte en un referente no solo educativo sino también social y cultural</P>
        </div>
    </div>
    <div id="bloque5">
        <div id="texto5"> 
            <h1>   🕊️ Elena Arze de Arze y su legado</h1>
            <p>La profesora Elena Arze de Arze asume con entrega absoluta 
            la dirección del liceo convirtiéndose en su alma mater Su 
            liderazgo trasciende lo administrativo y se convierte en 
            un símbolo de lucha por el reconocimiento de la educación
            femenina Su empeño por conseguir una infraestructura propia
            para la institución refleja su compromiso incansable con 
            la causa educativa Fallece el 15 de junio de 1958 como
            resultado de su abnegación dejando una huella imborrable 
            en la memoria institucional En 1960 se rinde homenaje a 
            su vida renombrando la institución como Liceo Nacional de 
            Señoritas Elena Arze de Arze perpetuando su legado en cada generación</p>
        </div>
        <img src="../imagenescol/portada5.jpg" alt="" id="img5" >
    </div>
    <div id="bloque6">
        <img src="../imagenescol/portada6.jpg" alt="" id="img6" >
        <div id="texto6">
            <h1>📘 Etapa moderna</h1>
            <P> Con el cambio de milenio la institución se adapta 
                a los nuevos tiempos y el Ministerio de Educación
                y Culturas actualiza su denominación Pasa a llama rse
                Unidad Educativa Elena Arze de Arze manteniendo intactos
                sus principios pero adaptándose a los desafíos contemporáneos
                Cuenta con la Resolución N° 3682/2000 que le otorga validez 
                legal y el Código SIE 80980014 que la identifica en el sistema
                educativo nacional Su edificio escolar figura bajo el Código 
                Escolar 80980341 lo que garantiza transparencia y reconocimiento 
                oficial Continúa desarrollando una propuesta educativa integral 
                centrada en valores identidad cultural y excelencia académica</P>
        </div>
    </div>
</main>
<?php include('../include/footer.php'); ?> 
</body>
</html>