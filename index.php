<!DOCTYPE html>
<html lang=es>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Wunderman</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1 id="titulo">Landing Page</h1>
      <span id="facebook">SEGUÍ CONECTADO</span>
      <img src="facebook.png" id="facebookImg"/>
    </header>
    <section id="sectionBanner">
      <img src="http://www.alcym.com.ar/img/productos/color-gris-humo-amp.jpg" id="banner" />
    </section>
    <section id="contSubtitle">
      <h2 id="subtitle">Soy un Hero!</h2>
    </section>
    <section id="ContainerBox">
      <article>
        <img src="http://www.alcym.com.ar/img/productos/color-gris-humo-amp.jpg" />
        <div class="contInfoArticle">
          <h4>Lorem Ipsum</h4>
          <p>Lorem Ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation
          </p>
      </div>
      </article>
      <article>
        <img src="http://www.alcym.com.ar/img/productos/color-gris-humo-amp.jpg" />
        <div class="contInfoArticle">
          <h4>Lorem Ipsum dolor sit amet, consectetur.</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt.
          </p>
        </div>
      </article>
      <article>
        <img src="http://www.alcym.com.ar/img/productos/color-gris-humo-amp.jpg" />
        <div class="contInfoArticle">
          <h4>Lorem Ipsum</h4>
          <p>Lorem Ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
        </div>
      </article>
      <article>
        <img src="http://www.alcym.com.ar/img/productos/color-gris-humo-amp.jpg" />
        <div class="contInfoArticle">
          <h4>Lorem Ipsum</h4>
          <p>Lorem Ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation
          </p>
        </div>
      </article>
    </section>
    <section id="formSection">
      <h3 style="text-align:center">Formulario</h3>
      <hr>
      <div id="contForm">
        <form action="index.html" method="post" name="form" id="frm">
          <div id="containerNames">
            <div id="containerName">
              <div class="col-3">
                <input class="effect inputsStyles marginBottom10" onFocusout="changeLabel('nameLabel','nameInput')" type="text" name="name" id="nameInput" onfocus="deleteError('errorName','nameInput')" />
                <label id="nameLabel">Nombre</label>
              </div>
              <span  class="errorForm" id="errorName"></span>
            </div>
            <div id="containerLastname">
              <div class="col-3">
                <input type="text" class="effect inputsStyles marginBottom10" onFocusout="changeLabel('lastnameLabel','lastnameInput')"  name="lastname" id="lastnameInput"  onfocus="deleteError('errorLastname','lastnameInput')" />
                <label id="lastnameLabel">Apellido</label>
              </div>
              <span id="errorLastname" class="errorForm"></span>
            </div>
          </div>
          <div id="containerEmail">
            <div class="col-3">
              <input type="text" class=" effect inputsStyles marginBottom10" onFocusout="changeLabel('emailLabel','emailInput')" name="name" id="emailInput" onfocus="deleteError('errorEmail','emailInput')" />
              <label id="emailLabel">e-Mail</label>
            </div>
            <span class="errorForm" id="errorEmail"></span>
          </div>
          <div id="containerLocation">
            <div id="contDptoInput">
              <select class="selectInput inputsStyles marginBottom10"  onchange="loadLocation()" name="departamento" id="dptoInput"  onfocus="deleteError('errorDptos','dptoInput')">
                <option value="" selected>Departamento</option>
                <option value="Artigas">Artigas</option>
                <option value="Canelones">Canelones</option>
                <option value="Montevideo">Montevideo</option>
                <option value="Salto">Salto</option>
              </select>
              <br><span class="errorForm"  id="errorDptos">Debe seleccionar un departamento</span>
            </div>
            <div id="contLocationInput">
              <select class="inputsStyles selectInput marginBottom10" name="localidades" id="locationInput"  onfocus="deleteError('errorLocation','locationInput')">
                <option value="" selected>Localidad</option>
              </select>
              <br><span class="errorForm" id="errorLocation">Debe seleccionar una localidad</span>
            </div>
          </div>
          <div id="containerCiTerminos">
            <div id="contciInput">
              <div class="col-3">
                <input  class="effect inputsStyles marginBottom10" onFocusout="changeLabel('ciLabel','ciInput')" type="text" name="ci" id="ciInput"  onfocus="deleteError('errorCi','ciInput')" />
                <label id="ciLabel">C.I.</label>
                <span class="errorForm" id="errorCi"></span>
              </div>
            </div>
            <div id="contCondition" class="marginBottom10">
              <input type="checkbox" id="checkConditions" checked  onclick="deleteError('errorConditions','checkConditions')" />
              <span>Acepto las bases y condiciones</span>
              <span class="errorForm" id="errorConditions">Debe aceptar los terminos y condiciones</span>
            </div>
          </div>
          <div id="containerButton">
            <input type="button" id="sendButton" value="ENVIAR" onclick="validate()" />
          </div>
        </form>
      </div>
    </section>
  </body>
  <script type="text/javascript" src="js/datos.js"></script>
  <script type="text/javascript" src="js/validateCi.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

</html>
