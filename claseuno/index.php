<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo - Numero01</title>
	<body>
	   <h1>Bienvenido a mi primera clase php</h1>
      <?php
          /*COMENTARIOS*/
          echo "Hola soy un script de PHP";
          //esto es un comentario de php de una sola linea
          /*
            esto es un comentario de varias lineas
            linea1
            linea2
            linea3
          */

          print "Hola a Mi primera Clase de PHP";

          print ("<p> Esto es un parrafo mediante php<p>");

          print ("<p> Esto es un segundo parrafo mediante php<p>");

          print ("<ul>
                      <li>PHP</li>
                      <li>Laravel</li>
                      <li>Cake PHP desde PHP</li>
                 </ul>");

           //Declarando variables
           /*Variable como String*/
           $mi_variable = "Hola variables";
           echo $mi_variable;

           /*Variables como Integer*/
           print("<br>");
           $dinero = 100;
           echo $dinero;

           $dinero = $dinero+50;
           print("<br>");
           echo $dinero;

           /*Castellano*/
           print("<br>");
           print("<h3>Referencia de Idioma</h3>");
           $mensaje_es="Hola";
           $mensaje_en="Hi!";
           $idioma = "es";
           $mensaje = "mensaje_" . $idioma;
           print $$mensaje;

           /*Ingles*/
           print("<h3>Referencia de Idioma Ingles</h3>");

           $idioma = "en";
           $mensaje = "mensaje_" . $idioma;
           print $$mensaje; //como si devolviera una cadena

           /*Constantes*/
           print("<br>");
           print("<h3>Constantes</h3>");
           define ("CONSTANTE","hola constante");
           print CONSTANTE;

           print("<br>");
           define ("PI",3.141516);

           define ("APP_DOMINIO","ejemplo.com");
           define ("DB_HOST","192.168.2.14");
           define ("DB_HOSTNAME","CECOMPPHP");
           define ("DB_USU","mestrada");
           define ("DB_PASS","123456789");

           print PI;
           print ("<br>");
           print APP_DOMINIO;
           print ("<br>");
           print DB_HOST;
           print ("<br>");
           print DB_HOSTNAME;
           print ("<br>");
           print DB_USU;
           print ("<br>");
           print DB_PASS;

           /*Estructura de control*/
           print("<br>");
           print("<h3>Estructura de Control</h3>");
           $sexo = "M";
           $nombre = "Marco Estrada Lopez";

           if ($sexo == "F") {
           	   $saludo = "Bienvenido, ";
           }else{
           	   $saludo = "Bienvenido, ";
           }
           $saludo = $saludo . $nombre;
           print($saludo);

           /*Estructura de Switch*/
           print("<br>");
           print("<h3>Estructura de Switch</h3>");

           $extension = "PDF";

           switch ($extension) {
           	case 'PDF':
           		$tipo ="Documento de Adobe Reader";
           		break;

           	case 'HTML':
           		$tipo ="Documento de Lenguaje de Marcado";
           		break;

           	case 'XLS':
           		$tipo ="Documento de Microsoft Excel";
           		break;

           	default:
           		$tipo ="Otro Tipo de Documento";
           		break;
           }

           echo "El documento es: " . $tipo;

           print("<br>");
           print("<h3>Estructura de Repetitivas</h3>");

           /*Estructura de While*/
           print("<ul>\n");
           $i = 1;

           while ($i <=5) {
               print ("<li> Lista $i </li>");
               $i++;
           }

           print ("</ul>\n");


           /*Estructura de Do-While*/
           print("<br>");
           $i = 1;
           print ("<ul>\n");

           do {
               print ("<li> Lista $i </li>");
               $i++;
           } while ($i <= 5);

           print ("</ul>\n");

           /*Estructura FOR*/
           print("<br>");

           print ("<ul>\n");

           //almacenar el count en una variable
           //$variable = count($lista);
           /*for ($i=1; $i <=$variable ; $i++) {
           	   print ("<li> Lista $i </li>");
           }
           print ("</ul>\n");
           */

           for ($i=1; $i <=5 ; $i++) {
           	   print ("<li> Lista $i </li>");
           }
           print ("</ul>\n");

           /*TABLA DE MULTIPLICAR*/

           for ($i=1; $i <=12 ; $i++) {
           	    $multiplicar = 5 * $i;
           	   print ("<li>  5 * $i  = $multiplicar </li>");
           }
           print ("</ul>\n");
///////////////////////////////////////
           print("Ejemplo 2 bucles for: Tabla");
           for ($i=1; $i <=12 ; $i++) {
           	    echo "<h3> Tabla de $i </h3>";

                for ($j=1; $j <=12 ; $j++) {
           	    echo "$i x $j  = " . ($i*$j) . "<br>";
           	   }
           }

           print("<h3> Declarando Funciones </h3>");

           function suma($a,$b)
           {
           	   return $a + $b;
           }
           $numero_funcion = suma(2,4);
           echo $numero_funcion;

           /*Parametros por referencia*/

           function incrementador(&$a)
           {
           	$a = $a + 1;
           }

           $a = 10;
           print("<br>");
           incrementador($a);
           echo $a;

      //Cierre de PHP
           /*Cliente: id, Servidor:name*/
      ?>
      <p>Loren input dolor sit meet.
      He is amazing, beautiful, and bitch
      He <br> is...
      </p>

      <ul>
          <li>PHP</li>
          <li>Laravel</li>
          <li>Cake PHP desde PHP</li>
      </ul>

      <form action="post.php" method="get" accept-charset="utf-8">

             <p> Su nombre : <input type="text" id="nombre" name="p_nombre"></p>
             <p> Su edad : <input type="text" id="edad" name="p_edad" ></p>
             <p><input type="submit" value="Enviar" ></p>

      </form>


    </body>
</head>
</html>
