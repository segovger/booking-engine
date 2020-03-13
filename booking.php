<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<body>

        <div class="spacer"></div>

        <!--FORMULARIO-->

        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column">

                          <div class="field">
                            <label class="label">Lugar de origen</label>
                            <div class="control">
                              <div class="select">
                                <select>
                                  <option>Select dropdown</option>
                                  <option>With options</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Lugar de destino</label>
                            <div class="control">
                              <div class="select">
                                <select>
                                  <option>Select dropdown</option>
                                  <option>With options</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Fecha</label>
                            <div class="control has-icons-left">
                              <input type="text" id="datepicker" class="input datepicker-input-style" onchange="console.log(d.getDate())" autocomplete="off" placeholder="Fecha de traslado">
                              <span class="icon is-small is-left">
                                <i class="fa fa-calendar"></i>
                              </span>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Horario</label>
                            <div class="control">
                              <div class="select">
                                <select>
                                  <option>Select dropdown</option>
                                  <option>With options</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">No. de telefono</label>
                            <div class="control">
                              <input class="input" type="number" placeholder="No. de telefono">
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Precio</label>
                            <div class="control">
                              <input class="input" type="text" placeholder="Precio">
                            </div>
                          </div>                      
                          
                          <div class="field is-grouped">
                            <div class="control">
                              <button class="button is-dark">Reservar</button>
                            </div>
                          </div>


                    </div>
                    <div class="column">
                    </div>
                </div>
            </div>
        </div>
    




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


</body>
</html>


<?php include 'footer.php'; ?>