<?php
session_start();
include ("acceso_db.php");
   
?>
<?php 
    if(isset($_SESSION['usuario'])) { 
?> 
        Bienvenido: <a href="perfil.php?id=<?=$_SESSION['idusuario']?>"><strong><?=$_SESSION['usuario']?></strong></a><br /> 
        <a href="logout.php">Cerrar Sesión</a> 
<?php 
    } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pagina principal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="js/jquery.core.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.scripts.js"></script>
</head>
<body>
<div id="wrap">
  <div class="top_corner"></div>
  <div id="main_container">
    <div id="header">
      <div id="menu">
        <ul>
          <li><a class="current" href="index.html">Inicio</a></li>
          <li><a href="entrar.php">Entrar  </a></li>
          <li><a href="registrace.php">Registrarce</a></li>
          <li><a href="#">Que ofrecemos</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
    </div>
    <div class="middle_banner">
      <div class="featured_slider">
        <div id="featured_border" class="jcarousel-container">
          <div id="featured_wrapper" class="jcarousel-clip">
            <ul id="featured_images" class="jcarousel-list">
              <li><img src="images/slider_photo.jpg" width="965" height="280" alt="" /></li>
              <li><img src="images/slider_photo2.jpg" width="965" height="280" alt="" /></li>
              <li><img src="images/slider_photo3.jpg" width="965" height="280" alt="" /></li>
              <li><img src="images/slider_photo2.jpg" width="965" height="280" alt="" /></li>
            </ul>
          </div>
          <div id="featured_positioner_desc" class="jcarousel-container">
            <div id="featured_wrapper_desc" class="jcarousel-clip">
              <ul id="featured_desc" class="jcarousel-list">
                <li>
                  <div>
                    <p>Bienvenido al sistema domotico inteligente para el mejoramiento y control en edificaciones unifamiliares.</p>
                  </div>
                </li>
                <li> <p>fPara el municipio Barinas del estado Barinas </p>
                  <div></div>
                </li>
                <li><div></div>
                </li>
                <li><div></div>
                </li>
              </ul>
            </div>
          </div>
          <ul id="featured_buttons" class="clear_fix">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="center_content">
      <div class="home_section_left"> <img src="images/icon1.gif" alt="" class="home_section_icon" border="0" />
        <h2 class="home_title">Camara de Video vigilancia</h2>
        <div class="home_section_thumb"> <img src="images/home_section_thumb1.jpg" alt="" border="0" /></div>
       
        <a href="camaravigilancia.html" class="mas"><img src="images/more.gif" alt="" border="0" /></a>
        <div class="clear"></div>
      </div>
      <div class="home_section_left"> <img src="images/icon2.gif" alt="" class="home_section_icon" border="0" />
        <h2 class="home_title">Modulo de alarma</h2>
        <div class="home_section_thumb"> <img src="images/home_section_thumb2.jpg" alt="" border="0" /></div>
        <a href="moduloalarma.html" class="mas"><img src="images/more.gif" alt="" border="0" /></a>
        <div class="clear"></div>
      </div>
      <div class="home_section_left"> <img src="images/icon3.gif" alt="" class="home_section_icon" border="0" />
        <h2 class="home_title">Modulo de reportes</h2>
        <div class="home_section_thumb"> <img src="images/home_section_thumb3.jpg" alt="" border="0" /></div>
        <a href="moduloreportes.html" class="mas"><img src="images/more.gif" alt="" border="0" /></a>
        <div class="clear"></div>
      </div>
      <div class="left_block_wide"><a href="#"></a> <a href="#"></a> <a href="#"></a></div>
      <div class="right_block">
	  
	  
	  

      </div>
      <div class="clear"></div>
	  
   <style>

        *{

            font-size: 14px;

            font-family: sans-serif;

        }

        form.registro{

            background: none repeat scroll 0 0 #F1F1F1;

            border: 1px solid #DDDDDD;

            margin: 0 auto;

            padding: 20px;

            width: 278px;

            box-shadow:0px 0px 20px black; 

            border-radius:10px; 

            position:relative;

            top:30px;

        }

        form.registro div {

            margin-bottom: 15px;

            overflow: hidden;

        }

        form.registro div label {

            display: block;

            float: left;

            line-height: 25px;

        }

        form.registro div input[type="text"], form.registro div input[type="password"] {

            border: 1px solid #DCDCDC;

            float: right;

            padding: 4px;

        }

        form.registro div input[type="submit"] {

            background: none repeat scroll 0 0 #DEDEDE;

            border: 1px solid #C6C6C6;

            float: right;

            font-weight: bold;

            padding: 4px 20px;

        }

        .error{

            color: red;

            font-weight: bold;

            margin: 10px;

            text-align: center;

        }

</style>
                </h3>
                  <h3>
                    <title>REGISTRATE YA!!</title>
                  </h3>
                  <h3>
                    <form action="" method="post" class="registro">
					
					
					 <div><label>Usuario:</label>
                        
                      <input type="text" name="usuario"></div>
					  
					   <div><label>Contraseña:</label>
                        
                      <input type="password" name="password"></div>
					  
					   <div><label>nombre:</label>
                        
                      <input type="text" name="nombre"></div>
					  
					   <div><label>apellido:</label>
                        
                      <input type="text" name="apellido"></div>
					  
					  					   <div><label>cedula:</label>
                        
                      <input type="text" name="cedula"></div>
					  
					  
					   <div><label>Repetir contraseña:</label>
                        
                      <input type="password" name="repassword"></div>
					  
					  
					  <div>
					                        <input type="submit" name="enviar" value="Registrar"></div>
                      <b>REGISTRO DE ESTUDIANTES</b>
                    </form>


					  
					  
	
					  

   <?php
   
   include ("conexion.php");

if(isset($_POST['enviar']))



{

    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')

    {

        echo 'Por favor llene todos los campos.';

    }

    else

    {

        $sql = 'SELECT * FROM usuarios';

        $rec = mysql_query($sql);

        $verificar_usuario = 0;


      
        while($result = mysql_fetch_object($rec))

        {

            if($result->usuario == $_POST['usuario'])

            {

                $verificar_usuario = 1;

            }

        }

 

        if($verificar_usuario == 0)

        {

            if($_POST['password'] == $_POST['repassword'])

            {

                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$cedula = $_POST['cedula'];
				

                $sql = "INSERT INTO usuarios (usuario,password,nombre,apellido,cedula) VALUES ('$usuario','$password','$nombre','$apellido','$cedula')";

                mysql_query($sql);

 

                echo 'Usted se ha registrado correctamente.';

            }

            else

            {

                echo 'Las claves no son iguales.';

            }

        }

        else

        {

            echo 'Este usuario ya esta registrado.';

        }

    }

}

?>
</body>
</html> 
                    

</body>
</html>