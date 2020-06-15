<html>
    <head>
    <?php include("head.php"); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>

    <body>
        <?php include("nav.php"); ?>

        <div class="coverImg" >
          <div class="coverText">
            <p class="lightText">
            OFRECEMOS</p>
            <p class="bolderText">
              Planes de vigilancia, prevención y control de Covid19 en el trabajo.
            </p>
            <p class="lightText2">
                Somos Merger Group Peru, con nuestra división de "Merger Consulting"
                buscamos generar soluciones competitivas para la gestión de calidad,
                medio ambiente, Seguridad y Salud en el Trabajo.
            </p>
          </div>

        </div>

        <div class="section1">
          <h2 class="title2"> Nuestra asesoría incluye</h2>
          <div class="parentGrid4">
            <div class="div1Grid4">
              <h3>Plan de Vigilancia, Prevención y Control del Covid-19 en el Trabajo</h3>
              <p>
                Las empresas deben elaborar un plan de vigilancia sanitaria en el trabajo, de acuerdo con la RM 239-2020-MINSA y modificatorias. Adicionando los protocolos sectoriales.
              </p>
            </div>
            <div class="div2Grid4">
              <h3>Tramite hasta registro del plan y la emisión de la constancia por SISCOVID</h3>
              <p>
                Si tu empresa pertenece a un sector de la fases 1 y 2 de reanudación de actividades no esenciales, tras la declaratoria de estado de emergencia por coronavirus, puede reiniciar operaciones previa autorización del Ministerio de Salud (Minsa) y cumpliendo los protocolos sanitarios y criterios de focalización territorial de su respectivo sector.
              </p>
            </div>
            <div class="div3Grid4">
              <h3>Capacitación del personal, incluido el Comité SST o Supervisor SST</h3>
              <p>
                Es un órgano bipartito y paritario constituido por representantes del empleador y de los trabajadores, con las facultades y obligaciones previstas por la legislación y la práctica nacional, destinado a la consulta regular y periódica de las actuaciones del empleador en materia de prevención de riesgos.

            </div>
            <div class="div4Grid4">
              <h3>Además</h3>
              <ul>
                <li>📌Pisos desinfectantes</li>
                <li>📌Pediluvio</li>
                <li>📌Barreras físicas para transporte y comercio</li>
                <li>📌Avisos y señaletica personalizado (con logo de tu empresa)</li>
                <li>📌Guias graficas y flyers informativos</li>
              </ul>
            </div>
          </div>

        </div>


        <div class="section2">
          <div class="parentGrid2">
            <div class="div1Grid2"> <img src="images/vision.jpeg" alt="Eventos" width="70%" ></div>
            <div class="div2Grid2">
              <h3>Titulo</h3>
              <p>En Latinoamérica y el Perú se vienen desarrollando diferentes iniciativas que impulsan cambios que la</p>
            </div>
          </div>

        </div>


        <div class="section3">
          <div class="parentGrid2">
            <div class="div1Grid2">
              <h3>Titulo</h3>
              <p>En Latinoamérica y el Perú se vienen desarrollando diferentes iniciativas que impulsan cambios que la</p>
            </div>
            <div class="div2Grid2">
              <img src="images/vision.jpeg" alt="Eventos" width="70%" >
            </div>
          </div>
        </div>



            <div id="seccion4">

                <h2 class="title2"> Titulo </h2>
                <div class="quoteP">
                  <p>En Latinoamérica y el Perú se vienen desarrollando diferentes iniciativas que impulsan cambios que la</p>
                </div>


                <div id="gallery-1" class="gallery">
                    <div class="photo" id="photo-l">
                        <img src="img/eventos/galery2.jpeg">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="img/eventos/galery3.jpeg">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="img/eventos/galery4.jpeg">
                    </div>

                    <div class="photo" id="photo-l">
                        <img src="img/eventos/galery5.jpeg">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="img/eventos/galery6.jpeg">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="img/eventos/galery7.jpeg">
                    </div>
                </div>


                <div id="gallery-2" class="gallery">
                    <div class="photo" id="photo-l">
                        <img src="img/eventos/galery4.jpeg">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="img/eventos/galery5.jpeg">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="img/eventos/galery1.jpeg">
                    </div>

                    <div class="photo" id="photo-l">
                        <img src="img/eventos/galery1.jpeg">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="img/eventos/galery3.jpeg">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="img/eventos/galery2.jpeg">
                    </div>

                </div>

                <div class="dots-group">
                    <span  class="dot" id="1" onclick="currentSlide(1)" ></span>
                    <span class="dot" id="2" onclick="currentSlide(2)"></span>
                </div>
            </div>

        <section class="sectionQuote">
          <p>
            Tu labor como ciudadano responsable, es fundamental para el desarrollo sostenible en nuestra sociedad.
          </p>
        </section>


        <?php include("footer.php"); ?>
    </body>
</html>

<style>
/**  seccion 1 **/
#seccion1{
    text-align: center;

}

#seccion1 p{
    margin-top: 10px;
    padding-left: 15% ;
    padding-right: 15% ;
    font-size: 15pt;

}

#seccion1 h1{
    font-size:40pt;
    font-weight:bold;
    margin-top: 0;
}

@media screen and (max-width: 600px) {
}
</style>


<style>
/**  seccion 1 **/
#seccion2{
    margin-bottom: 50px;
    text-align: center;
}

#seccion2 h2{
    margin-top: 70px;
    font-weight:bold;
    color: #1D4E9B;
}

@media screen and (min-width: 601px) {

    #gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 30px;
        grid-row-gap: 30px;
        align-items: center;
    }

    #gallery img{
        height: 100%;
        margin: auto;
    }


    .photo{
        height: 300px;
        overflow: hidden;
        width: 350px;
        overflow-x: hidden;


    }
}

@media screen and (max-width: 600px) {
    #gallery {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-template-rows: repeat(6, 1fr);
        grid-column-gap: 30px;
        grid-row-gap: 30px;
        align-items: center;
        margin: 50px 30 50px 30px;

    }

    #gallery img{
        height: 100%;
        margin: auto;
    }

    #photo{
        height: 300px;
        overflow: hidden;

    }
}

.dots-group{
    margin-top: 30px;
    text-align: center;

}

.dot {
    height: 15px;
    width: 15px;
    background-color: coral;
    border-radius: 50%;
    display: inline-block;
}

.dot:hover{
    background-color: purple;
}

</style>



<style>
    /* Seccion 4 */
    #seccion4{
        text-align: center;
        margin-bottom: 80px;
    }


    #seccion4 hr{
        border: 0.4pt solid #1D4E9B;
        margin-bottom:2%;
    }

    /* Monitor de PC*/
    @media screen and (min-width: 601px) {
    .gallery{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        margin-left: 130px;
        margin-right: 130px;
        justify-items: center;
        align-items: center;

    }

    .gallery img{
        height: 100%;
        margin: auto;
    }



    #photo-l{
        height: 270px;
        overflow: hidden;
        margin-bottom: 15px;
    }

    #photo-c{
        height: 270px;
        overflow: hidden;
        margin-bottom: 15px;
    }

    #photo-r{
        height: 270px;
        overflow: hidden;
        margin-bottom: 15px;
    }

    .dots-group{
        margin-top: 30px;
    }

    .dot {
        height: 15px;
        width: 15px;
        background-color: coral;
        border-radius: 50%;
        display: inline-block;
    }

    .dot:hover{

      background-color: purple;

    }

}
    /* Smatphone */
    @media screen and (max-width: 600px) {
        .gallery{
            margin-top: 50px;
            margin-bottom: 50px;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: repeat(3, 1fr);
            grid-column-gap: 0px;
            grid-row-gap:5px;
            margin-left: 10px;
            margin-right: 10px;
            overflow: hidden;
        }

        #photo-l{
        height: 300px;
        overflow: hidden;
        }

        #photo-c{
            height: 300px;
            overflow: hidden;
        }

        #photo-r{
            height: 300px;
            overflow: hidden;
        }

        .gallery img{
            height: 100%;
            margin: auto;

        }
    }
</style>

<script>

    $(document).ready(function(){
    $(".gallery").hide();
    $("#gallery-1").show();
    });

    $(document).ready(function(){
        $(".dot").click(function(evt){
            var gallery_id="#gallery-"+$(this).attr("id");
            $(".gallery").hide();
            $(gallery_id).show();
        });
    });
</script>
