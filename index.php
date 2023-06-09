<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  </head>
  <body>
	<?php
		require 'insereBanco.php';
	?>

    <section class="home">
      <section class="div1">
        <article class="article1">
          <div class="logo"></div>
          <div class="title">
            <h1 class="h1_title">LIDERANÇA EM SOLUÇÕES DE ENGENHARIA</h1>
          </div>
          <div class="text">
            <p class="paragraph2">
              Trabalhamos envolvidos em diversas áreas de atuação, como manter os alimentos frescos,
              fornecer temperaturas interiores confortáveis para edifícios comerciais e permitir a
              produção de energia renovável.
            </p>
          </div>
          <div class="subtilte1">
            <h3 class="text2">ACESSE ABAIXO NOSSOS MATERIAIS ÚTEIS</h3>
          </div>
          <div class="links">
            <a href="'/" class="iconParagraph">
                <svg  class="iconDownload" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                <path
                  id="Caminho_8"
                  data-name="Caminho 8"
                  d="M4,19H20V12h2v8a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V12H4ZM14,9h5l-7,7L5,9h5V3h4Z"
                  transform="translate(-2 -3)"
                  fill="#008ff4"
                  />
                </svg>
              Catálogos e Flyers
            </a>
            <a href="'/" class="iconParagraph">
                <svg class="iconDownload" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                <path
                  id="Caminho_8"
                  data-name="Caminho 8"
                  d="M4,19H20V12h2v8a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V12H4ZM14,9h5l-7,7L5,9h5V3h4Z"
                  transform="translate(-2 -3)"
                  fill="#008ff4"
                  />
                </svg>
              IOMs
            </a>
            <a href="'/" class="iconParagraph">
                <svg class="iconDownload" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                <path
                  id="Caminho_8"
                  data-name="Caminho 8"
                  d="M4,19H20V12h2v8a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V12H4ZM14,9h5l-7,7L5,9h5V3h4Z"
                  transform="translate(-2 -3)"
                  fill="#008ff4"
                  />
                </svg>
              Quick Instalation
            </div>
          </a>
        </article>
      </section>
      <section class="div2">
        <article class="article2">
          <div class="box2">
            <div class="header_form">
              <h1 class="title2">
                TEM ALGUMA DÚVIDA OU PRECISA DE ALGUM OUTRO MATERIAL ESPECÍFICO?
              </h1>
              <p class="paragraph3">Solicite abaixo</p>
            </div>
            <div class="form">
              <form onsubmit="return validarForm()" id="myform">
                <input class="inputForm" id="nome" name="nome" type="text" placeholder="Nome">
                <input class="inputForm" id="telefone" name="telefone" type="tel"  placeholder="Telefone"/>
                <input class="inputForm" id="email" name="email" type="text" placeholder="E-mail"/>
                <input class="inputForm" id="assunto" name="assunto" type="text" placeholder="Assunto"/>
                <textarea class="areaText" id="mensagem" name="mensagem" type="area" placeholder="Mensagem"></textarea>
                <button class="buttonSubmit" type="submit">Enviar</button>
            </form>
          </div>
          </div>
        </article>
        <footer>
          <a>
            <svg class="iconeDuo" xmlns="http://www.w3.org/2000/svg" width="30.743" height="15.468" viewBox="0 0 30.743 15.468">
              <g id="Grupo_44" data-name="Grupo 44" transform="translate(-955 -4059.031)">
              <g id="duo_" data-name="duo " transform="translate(904.4 4050.955)">
                <path id="Caminho_3" data-name="Caminho 3" d="M59.732,20.516c.026-.216.115-.68.156-.853l2.181-9.981a1.329,1.329,0,0,0-1.478-1.594h0A2.229,2.229,0,0,0,58.709,9.83l-.718,3.076a1.253,1.253,0,0,0-.243-.66,1.3,1.3,0,0,0-.474-.37,3.036,3.036,0,0,0-1.019-.2,3.116,3.116,0,0,0-1.614.414,6.912,6.912,0,0,0-2.552,2.488,9.874,9.874,0,0,0-.842,1.735,11.091,11.091,0,0,0-.486,1.8,9.61,9.61,0,0,0-.162,1.689,4.927,4.927,0,0,0,.287,1.715,3.049,3.049,0,0,0,.694,1.146,2.656,2.656,0,0,0,.983.636,3,3,0,0,0,1.081.2,2.565,2.565,0,0,0,1.069-.185,3.479,3.479,0,0,0,1.486-1.18,8.125,8.125,0,0,0,.473-.787,2.627,2.627,0,0,0,.793,1.568,2.414,2.414,0,0,0,1.442.606,3,3,0,0,0,1.2-.088c.254-.1.495-.392.141-.79A2.755,2.755,0,0,1,59.732,20.516ZM57.58,14.8l-.939,4.431a4.105,4.105,0,0,1-.653,1.457,1.29,1.29,0,0,1-1.069.579,1.256,1.256,0,0,1-.639-.254,1.168,1.168,0,0,1-.3-.468,6.952,6.952,0,0,1,.04-2.81,12.478,12.478,0,0,1,.65-2.19c.652-1.635,1.622-1.994,1.985-2.042a.852.852,0,0,1,.785.282.978.978,0,0,1,.2.717Z" fill="#fff"/>
                <path id="Caminho_4" data-name="Caminho 4" d="M248.981,44.931a.019.019,0,0,1-.02-.018c-.168-1.968-1.174-2.952-2.89-2.952a4.146,4.146,0,0,0-1.891.409,5.352,5.352,0,0,0-1.57,1.089,6.757,6.757,0,0,0-1.147,1.532,12.1,12.1,0,0,0-1.329,3.576,8.427,8.427,0,0,0-.134,1.5,5.257,5.257,0,0,0,.3,1.783,2.94,2.94,0,0,0,.735,1.111,2.783,2.783,0,0,0,1.124.624,5.09,5.09,0,0,0,1.437.193,4.15,4.15,0,0,0,1.982-.5,5.2,5.2,0,0,0,1.648-1.461,9.178,9.178,0,0,0,1.17-2.447,10.985,10.985,0,0,0,.545-2.973.02.02,0,0,1,.01-.016,2.838,2.838,0,0,0,1.322-1.242c.15-.327-.026-.453-.2-.37A2.237,2.237,0,0,1,248.981,44.931Zm-1.928,1.833a.019.019,0,0,1,.014.022,11.058,11.058,0,0,1-.4,1.831,8.038,8.038,0,0,1-.612,1.475,3.478,3.478,0,0,1-.758.975,1.4,1.4,0,0,1-.844.351,1.043,1.043,0,0,1-.9-.323,1.24,1.24,0,0,1-.213-.595,9.206,9.206,0,0,1,.927-4.572,6.635,6.635,0,0,1,.874-1.476,1.672,1.672,0,0,1,1.167-.7.809.809,0,0,1,.612.273.783.783,0,0,1,.236.485.018.018,0,0,1-.013.019.972.972,0,0,0-.488.415,1.466,1.466,0,0,0-.19.783C246.468,46.307,246.663,46.654,247.053,46.764Z" transform="translate(-168.985 -30.232)" fill="#fff"/>
                <path id="Caminho_5" data-name="Caminho 5" d="M155.679,51.419c.022-.185,1.485-6.981,1.485-6.981a1.4,1.4,0,0,0-1.372-1.7,1.969,1.969,0,0,0-1.926,1.561l-1.243,5.867a4.1,4.1,0,0,1-.653,1.457,1.29,1.29,0,0,1-1.069.579.634.634,0,0,1-.549-.218.779.779,0,0,1-.175-.466,3.729,3.729,0,0,1,.1-.913l1.283-6.059a1.5,1.5,0,0,0-1.466-1.809h0a1.847,1.847,0,0,0-1.808,1.468l-1.249,5.96a7.446,7.446,0,0,0-.185,1.5,2.755,2.755,0,0,0,.717,2.117,2.5,2.5,0,0,0,1.758.66,4.142,4.142,0,0,0,.787-.081,3.122,3.122,0,0,0,.856-.313,3.568,3.568,0,0,0,1.637-1.779l.013-.006h-.008l.008-.013s0,.009,0,.013h0a2.62,2.62,0,0,0,.791,1.553,2.414,2.414,0,0,0,1.442.606,3,3,0,0,0,1.2-.088c.254-.1.495-.392.141-.79A2.774,2.774,0,0,1,155.679,51.419Zm-3.056.83v0l0,0Z" transform="translate(-85.875 -30.928)" fill="#fff"/>
              </g>
            </g>
          </svg>
        </a>
          
        </footer>
      </section>
    </section>
    <script src="./script.js"></script>

  </body>
</html>
