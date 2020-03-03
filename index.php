<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<body>
    <section class="hero is-fullheight is-default is-bold">

    
        <!--HERO-->

        <section class="hero height500">
            <div class="hero-body">
              <div class="container">
                  <h1 class="title has-text-centered">
                    Encuentra tu traslado ideal
                  </h1>
                  <h2 class="subtitle has-text-centered">
                    Calidad y servicio...lorem...
                  </h2>
                  <div class="columns hero-form">
                    <div class="column">
                      <div class="field">
                        <div class="control has-icons-left">
                            <div class="select">
                              <select class="is-hovered">
                                <option>Lugar de origen</option>
                                <option>Opción</option>
                                <option>Opción</option>
                                <option>Opción</option>
                                <option>Opción</option>
                              </select>
                            </div>
                          <span class="icon is-small is-left">
                            <i class="fa fa-map-marker"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="column">
                        <div class="field">
                          <div class="control has-icons-left">
                              <div class="select">
                                <select class="is-hovered">
                                  <option>Lugar de destino</option>
                                  <option>Opción</option>
                                  <option>Opción</option>
                                  <option>Opción</option>
                                  <option>Opción</option>
                                </select>
                              </div>
                            <span class="icon is-small is-left">
                              <i class="fa fa-map-marker"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    <div class="column">
                      <div class="field">
                        <div class="control has-icons-left">
                          <input type="text" id="datepicker" class="input datepicker-input-style" onchange="console.log(d.getDate())" autocomplete="off" placeholder="Fecha de traslado">
                          <span class="icon is-small is-left">
                            <i class="fa fa-calendar"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="column is-1">
                      <div class="field">
                        <button class="button is-black">Buscar</button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </section>


        <!--MENSAJE INICIAL-->

        <section class="hero height500">
            <div class="hero-body">
              <div class="container has-text-centered">
                <h1 class="title">
                  Visita los mejores destinos turisticos de Cancún
                </h1>
                <h2 class="subtitle pt">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe modi quidem odio rerum nulla nihil asperiores adipisci porro voluptatum et, voluptate soluta quasi, doloremque reprehenderit, obcaecati tempora maiores minus est.
                </h2>
                <div class="buttons pt">
                    <button class="button is-black uppercase">Reserva tu transporte</button>
                    <button class="button is-white uppercase">Más información</button>
                </div>
              </div>
            </div>
        </section>


        <!--PROPUESTA DE VALOR 1-->

        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-6">
                        <h1 class="title is-2">
                            Servicio de excelencia
                        </h1>
                        <h2 class="subtitle is-6 pt">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem pariatur architecto odio beatae dolor rerum esse non.
                        </h2>
                        <p>
                          <div class="pt">
                            <button class="button is-black uppercase">Planea tu siguiente viaje</button>
                            <button class="button is-white uppercase">Reseñas</button>
                          </div>
                        </p>
                        <div class="small-spacer"></div>
                        <h5 class="title is-5">Nuestros clientes</h5>
                        <ul class="logos-clientes">
                            <li><img src="img/cliente1.png" alt=""></li>
                            <li><img src="img/cliente2.png" alt=""></li>
                            <li><img src="img/cliente3.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="column is-5 is-offset-1">
                        <figure class="image is-4by3">
                            <img src="https://picsum.photos/800/600/?random" alt="Description">
                        </figure>
                    </div>
                </div>
            </div>
        </div>


        <div class="spacer desktop-only"></div>

        <!--PROPUESTA DE VALOR 2-->

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-5">
                        <figure class="image is-4by3">
                            <img src="https://picsum.photos/800/600/?random" alt="Description">
                        </figure>
                    </div>
                    <div class="column is-6 is-offset-1">
                        <h1 class="title is-2">
                            Últimas noticias
                        </h1>
                        <h2 class="subtitle is-6 pt">
                            Let this cover page describe a product or service.
                        </h2>
                        <p class="has-text-centered">
                            <a class="button is-black uppercase">
                                CTA 2
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!--AREA DE FOOTER-->

        <?php include 'footer.php'; ?>


    </section>

      <!-- Datepicker initialization -->
    <script>
        const d = new Datepicker(document.getElementById("datepicker"));
            d.config({
            firstdate: new Date(2019, 0, 9),
            lastdate: new Date(2022, 12, 31),
            format: d => {return(months_short[d.getMonth()] + " " + d.getDate())}
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bulma.js"></script>
</body>

</html>