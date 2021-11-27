<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>REPASO TEMA 2 PARTE 1</title>
</head>
<body>
    <header>
        <h1>REPASO TEMA 2 PARTE 1</h1>
        
    </header>
    
    <main>
    <h2>Declaración de variables</h2>
        <?php
            //Declaración de variable
            $miVariable=7;
            echo "<br/><h2>Ejemplo de var_dump()</h2>";
            //muestra el tipo de dato que se le pasa y el valor que tiene la variable
            echo "La funcion var_dump devuelve el contenido de la variable y su tipo"
            , var_dump($miVariable),"<br/>";



            //TIPO DE DATOS BOOLEANOS
            $bolean=true;
            echo "<br/><h2>Ejemplo de variable de tipo boolean</h2>";
            echo "La variable boolean es: ", gettype($bolean), 
            " tiene el valor de ", $bolean,"<br>";

            //gettype devuelve el tipo de dato que es la variable
            $bolean2=false;
            echo "<br/>La variable boolean2 es: ", gettype($bolean2),
            " tiene el valor de ", $bolean2;
            echo "<br/>";
            var_dump($bolean2);

            echo"<br> le pregunto a isbool ", is_bool($bolean2),"<br/>";
            // is_bool comprueba si el tipo de dato es un booleano devuelve true o false
            


            //TIPO DE DATOS FLOAT
            echo "<br/><h2>Ejemplo de variable de tipo float</h2>";
            echo"<h5>Prueba Float</h5>";
            $pruebafloat=12.567;
            echo "La variable \$pruebafloat es: ", gettype($pruebafloat), 
            " y su valor es ", $pruebafloat;
            echo " Le pregunto con is_float() y devuelve ";
            echo is_float($pruebafloat)," porque es true<br>";
            // is_float comprueba si el tipo de dato es un float devuelve true o false

            echo"<h5>Prueba Numero completo en base decimal</h5>";
            $numbaseCientifica=2.52e10;
            //muestra el numero completo en base decimal
            echo "Ejemplo de numero completo en base decimal ",
            $numbaseCientifica," y se trata como un float ya",
            " que devuelve true cuando se pregunta si la variable",
            " \$numbaseCientifica is_float ", is_float($numbaseCientifica),"<br>";
            //y lo cuenta como float

            echo"<h5>Prueba valor hexadecimal</h5>";
            $hex=0xFE;
            echo"La variable hexadecimal es de tipo ",  gettype($hex), " y su valor es ", $hex,"<br/>"; 
            //Los valores hexadecimales los calcula como enteros

            // el valor, la base en la que está y a cual la quieres convertir 
            echo "<br/> Se convierte desde el valor de origen (decimal) a hexadecimal",
            " con la función base_convert(variable, base a la que quieres convertir, base de la variable)",
            " El resultado es: ",base_convert($hex,10,16),". <br/>";

            echo"<br/>Una variable se comprueba que sea de tipo tipo numerico",
            " con la función is_numeric ",is_numeric($hex),"<br/>";



        
            //VARIABLES DE TIPO STRING
            echo "<br/><h2>Ejemplo de variable de tipo string</h2>";
            $cadena="8.324";
            echo "la variable cadena es ", gettype($cadena), " tiene el valor de ", $cadena;
            echo "<br> le pregunto con is_string() ", is_string($cadena),"<br>";
            //is_string comprueba si el tipo de dato es un string devuelve true o false
            



            //VARIABLES DE TIPO NULL
            echo "<br/><h2>Ejemplo de variable de tipo null</h2>";
            $nulo=null;
            echo "la variable nulo es de tipo : ", gettype($nulo), " tiene el valor de "
            , var_dump($nulo);
            echo "<br> Se comprueba si es una variable de tipo NULL con la función is_null "
            ,is_null($nulo),"<br/>";




            //Cambiar tipo de dato
            echo "<br/><h2>Ejemplo de conversiones</h2>";
            echo "<h5>Ejemplo de conversión con el uso de la funcion settype</h5>";
            echo "La variable hex anteriormente declarada es ",gettype($hex), 
            " y con la funcion settype(miVariable, tipodeDatoaAConverir) y ",
            "devuelve true o false si ha podido hacer la conversión o no. "; 
            settype($hex, "float");
            //En el primer paramentro de la función se le pasa la variable a 
            //convertir y en el segundo se le pasa el tipo de dato al que se va a convertir
            echo "Por lo tanto ahora la variable \$hex es de tipo ",
            gettype($hex), ".<br>";
            
            //convertir variables
            echo "<h5>Ejemplo de conversión sumando int + double (Conversión implicita)</h5>";
            $a=4;
            $b=2.5;
            $s= $a + $b;
            echo "La variable \$a con valor ",$a," es de tipo ",gettype($a),
            " se le suma la variable \$b con valor ",$b
            ," y tipo ",gettype($b)," y el resultado se almacena en \$s ",
            $s, " que es un tipo ", gettype($s), 
            ". Por lo tanto se está haciendo una conversión implicita.";

            //cast 
            echo "<h5>Ejemplo de conversión sumando int + double (Conversión explicita)</h5>";
            $casting= $a + (int) $b;

            echo "El ejemplo se realiza haciendo un casting y se almacena el resultado ",
            "en la variable \$casting con valor ",$casting, " que es de tipo ", gettype($casting), 
            ". Se suma la variable \$a con valor ",$a," y de tipo ",gettype($a),
            " a la varaible \$b de valor ", $b," y de tipo ",gettype($b),
            ". Se le hace un casting para convertirla a entero '(int)\$b'",
            " para que el resultado sea de tipo ",gettype($casting),". <br><br/>";




            //Variables por referencia
            echo"<h2>Variables por referencia</h2>";

            $d=5;
            $e=&$d;
            echo "La variable \$d se inicia con valor ",$d," y se crea la variable",
            " \$e que se pasa el valor de \$d a \$e. Esto se consigue con (&\$d) ",
            "así la variable \$e siempre tendrá el valor que contenga la variable \$d "
            ,"por lo tanto si se hacen cambios en \$d tambien se verá afectada la variable ",
            "\$e.";
            
            echo "<br><br> Por ejemplo si a \$d le sumas 1 (\$d=\$d+1) el resultado de \$d es ",
            $d=$d +1," y el de \$e es ",$e," <br/><br/>";
            
            


            // VARIABLES ESPECIALES o (SUPERGLOBALES o PREDEFINIDAS)
            echo "<h2>Variables Especiales (Superglobales)</h2>";
            echo "<p>\$_SERVER contiene información sobre el entorno del servidor web y de ejecución</p>";
            print_r($_SERVER);

            echo "<p>\$_GET \$_POST y \$_COOKIE contienen las variables que se han pasado ",
            "al guión actual utilizando respectivamente los métodos, HTTP POST y COOKIES HTTP </p>";
            //print_r ($_POST);
            //print_r ($_GET);
            //print_r ($_COOKIE);
            echo "<p> \$_REQUEST junta en uno solo el contenido de los tres arrays anteriores ",
            "\$_GET \$_POST y \$_COOKIE </p>";
            //print_r($_REQUEST);
            echo "<p> \$_ENV contiene las variables que se puedan haber pasado a PHP",
            " desde el entorno en que se ejecuta</p>";
            print_r($_ENV);

            echo "<p>\$_FILES Contiene los ficheros que se puedan haber pasado a PHP ",
            "desde el entorno en que se ejecuta</p>";


            echo "<p>\$_SESSION Contiene las variables de sesión disponibles para el guión actual</p>";
            print_r($_SESSION);
            echo "<br>";   
            //Prueba de variables globales locales y estaticas   
            echo "<h2>Prueba de variables globales locales y estaticas</h2>";
            $a =1;
            function ambito()
            {
                global $a;
                echo "Prueba con variable global ", $a;
            }    
            
            
            function contador()
            {
                static $c=0;
                $c++;
                echo "<br>Prueba con variables estaticas ",$c;
            }

            ambito();
            contador();
            contador();    
            echo "<p>En la segunda llamada a la función contador al ser \$c una variable 
            estatica esta se incrementará siempre una vez cada vez que sea llamada la función</p>";
            //Constante, booleanos, entero, float y cadena
            
            echo "<h2>Ejemplo de constantes</h2>";

            define("USUARIO", "David");
            //forma de declarar una constante funcion define el primer argumento para el nombre de la función el segundo para el valor que contendrá
            echo USUARIO;
            //Otra forma de declarar una constante, es una forma menos usada    
            const NOMBRE="Juan";
            echo "<br/>",NOMBRE;

            echo "<h2>incluir ficheros</h2>";
            
            include("./Saludo.php");
            echo "<p>Cuando la funcion require no encuentra el fichero que se le
            pasa se detiene la ejecución. En cambio si se le pasa el fichero por 
            medio de la funcion include si este no se encuentra le ejecución del 
            fichero no se detendrá</p>";
 
        ?>

        <h2>Ejemplo de como mostrar el codigo del fichero variables.php</h2>
        <!--echo "Saludo desde ".basename($_SERVER['SCRIPT_FILENAME']); EL NOMBRE DEL FICHERO QUE SE ESTA EJECUTANDO EN ESE MOMENTO-->
        <p>
            basename devuelve el ultimo componente de una ruta y en $_SERVER['SCRIPT_FILENAME']
            está contenido la ruta donde está el fichero almacenado.
            La función highlight muestra el codigo que contiene el fichero que se le ha 
            pasado como argumento
        </p>    
        <a href="codigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>">Ver Codigo PHP</a>



        
    </main>
    <footer>Footer de David</footer>
</body>
</html>