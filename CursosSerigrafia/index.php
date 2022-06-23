<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>ENTRADA DE USUARIO</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/general.css" />
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" type="text/css" href="css/responsivo.css"/>
  <link rel="icon" type="img/vnd.microsoft.icon" href="img/favicon.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div id="pagina">   
<header >
  <div class="fondo-header">
    <div id="encabezado" class="encabezado">
      <div id="centrarencabezado" class="slider">
        <div class="slider_2">
          <a target="_blank">
            <img class="img1" src="img/encabezado.png">
          </a>
        </div>
        <div class="slider_4">
          <div class="slider_3">
            <div>
              <img src="img/imagen01.jpg" alt="">
            </div>
            <div>
              <img src="img/imagen02.jpg" alt="">
            </div>
            <div>
              <img src="img/imagen03.jpg" alt="">
            </div>
            <div>
              <img src="img/imagen04.jpg" alt="">
            </div>
          </div><!--Cierre ul_3-->
        </div><!--Cierre ul_4-->
      </div>
    </div>
  </div> <!-- /fondo-header-->
</header > <!-- /encabezado-->

<section id="content" class="content cuadro_index contenido-fondo">
      <div id="centercontent">
        <div id="secciones" class="secciones">
          <section id="datos_actualizados">
        <h2>Usuarios Plataforma</h2>
        <form action="controles/logear.php" method="POST">
          <div>
            <div>
              <input type="text" name="usuario" placeholder="Usuario"/>
            </div>
            <input type="password" name="passw" placeholder="Contraseña"/>
          </div>
          <button type="submit" class="myButton">Entrar</button>
        </form>

      </section>
    </div>
  </div>
   </section>

<footer id="pie" class="pie">
      <hr>
      <div class="fondo">
        <div id="centrarpie">
          <div id="menu_pie" class="menu_pie">
            <div class="ul">
              
              <div id="centrarla">
                  <a href="https://www.facebook.com/groups/3121548774782288/members/" target="_blank" class="link-social Facebook"></a>
              </div>  <!-- /centrarla --> 

              <div id="centrarla">
                <a href="https://www.instagram.com/irvingarroyo/?hl=es" target="_blank" class="link-social Instagram"></a>
              </div>  <!-- /centrarla -->   

              <div id="centrarla">
                <a href="https://www.youtube.com/c/IrvingGiovanniElCamaleon" target="_blank"><span class="link-social Youtube"></span></a>
              </div>  <!-- /centrarla -->

              <div id="centrarla">
                  <a href="" target="_blank"><span class="link-social2 Chat"></span></a>
                  <a href="" target="_blank"><span class="link-social3 Contacto"></span></a>
                  <a href="" target="_blank"><span class="link-social4 Mail"></span></a>
              </div>  <!-- /centrarla --> 
              
            </div>  
          </div> <!-- /menu_pie-->

          <div id="contenido_pie" class="contenido_pie">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at placerat eros. Etiam lacinia placerat ullamcorper. Donec volutpat elementum tristique. Praesent eu tellus vitae ipsum blandit mattis. Ut fringilla hendrerit erat at scelerisque. Duis dui est, pulvinar non venenatis non, consequat vel ex. Curabitur lobortis vehicula diam ac ornare.      
            </p>
          </div> <!-- /contenido_pie-->
        </div>
        <hr>
      </div> <!-- /fondo-->
    </footer> <!-- /pie-->
</div>
</body>
    <?//php si pongo ' or '1' y en passwor '1 entras

    ?>
    </html>