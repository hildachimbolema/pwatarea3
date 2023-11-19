<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel de imagenes</title>
    <link rel="stylesheet" href="style.css">
</head>
<link rel="stylesheet" href="style.css">
<body>
    <?php
        $txt_Visitas = "visitas.txt";
        if(!file_exists($txt_Visitas))
        {
            touch($txt_Visitas);
        }
        $ContenidoTxt = file_get_contents($txt_Visitas);

        if(empty($ContenidoTxt))
        {
            $visitas = 0;
        }
        else
        {
            $visitas = intval($ContenidoTxt);
        }

        $visitas++;

        file_put_contents($txt_Visitas, $visitas);
        
    ?>
    <div class="contador">
        <p>Número de visitas: <?php echo $visitas; ?></p>
    </div>
    <header class="header">
    <div class="carousel">

        <h2>Carrusel de Imágenes</h2>

        <div class="carrusel-list" id="carrusel-list">

            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
                onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>

            <div class="carrusel-track" id="track">

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/11.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/12.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/13.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/14.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/15.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im1.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im2.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im3.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im4.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im5.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
            </div>

            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>


        </div>

    </div>
    </header>
    <script src="script.js"></script> 
</body>

</html>