<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Repaso Arrays</title>
</head>
<body>
    
    <main>
        <h1>Repaso Arrays</h1>
        <?php
            echo "<h5>Creación de arrays</h5>";
            $arrayvacio=array();
            //Crea un array vacio sin valores
            echo "Crea un array vacio sin valores ", var_dump($arrayvacio);
            echo"<br/>";
            //Crea un array con una posición en la que introduce el valor 10
            $array10=array(10);
            echo "Crea un array con una posición en la que introduce el valor 10 ",var_dump($array10);

            $notas=array(8,9,6,'diez',7,4);
            echo"<br/>";
            echo "<h5>Mostrar un array con formato se introduce el array entre las etiquetas 'pre'</h5>";
            
            echo "<pre>";
                print_r ($notas);
            echo "</pre>";    

            echo "<h5>El array se recorre tantas veces como como posiciones tenga ocupadas</h5>";
            for ($i=0; $i < count($notas) ; $i++) { 
                echo $notas[$i]." ";
            }
            //Se introduce en el array notas el valor MH en la posición 10
            echo"<h5>Se introduce en el array notas el valor MH en la posición 10</h5>";
            $notas[10]="MH";

            echo "<pre>";
                print_r ($notas);
            echo "</pre>";
            echo"<h5>La función count devuelve el numero de posiciones que tiene ocupadas ",
            "el array en este caso es ", count($notas),"</h5>";    
            

            //Da error
            for ($i=0; $i < count($notas) ; $i++) { 
                echo $notas[$i]." ";
            }
            echo "<br>";
            foreach($notas as $nota)
            {
                echo $nota." ";
            }
            echo"<br>";
            echo "<h5>La función isset comprueba si existe lo que se le pasa por parametro devuelve true o false</h5>";
            if(isset($notas[6]))
                echo "La posición \$notas[6] existe";
            else
                echo "La posición \$notas[6] No existe";    

            echo"<h5>La función unset destruye una o varias posiciones</h5>";
            unset($notas[1]);

                foreach($notas as $nota)
                {
                    echo $nota." ";
                }    
            
                echo"<h5>Ejmplo de array asociativo</h5>";
                $notasArrayAsociativo=array(
                    'David'=>8,
                    'Ismael'=>9,
                    'Uriel'=>6,
                    'Ivan'=>10,
                    'Aarón'=>7,
                    'Hector'=>4
                );

                echo "<pre>";
                    print_r($notasArrayAsociativo);
                echo"</pre>";

                foreach($notasArrayAsociativo as $key => $value)
                {
                    $notasArrayAsociativo[$key]+=1;
                    //$value+=1;
                }

                echo "<pre>";
                    print_r($notasArrayAsociativo);
                echo"</pre>";

                //Multidimensionales [][]

                $tabla=array();

                for ($i=0; $i <=10 ; $i++) { 
                    $tabla[$i]=array();
                    for ($j=0; $j <=10 ; $j++) { 
                        $tabla[$i][$j]=$i*$j;
                    }                  
                }

                /*echo "<pre>";
                    print_r($tabla);
                echo"</pre>";*/

                $ciclos=array(

                    "DAW" => array("PR"=>"Programación",
                        "BD" => "Bases de datos",
                        "DWES" => "Desarrollo web en entorno servidor"),
                    "DAM" => array ("PR"=>"Programación",
                        "BD" => "Bases de datos",
                        "PMDM" => "Programación multimedia y de dispositivos móviles"),
                    "ASIR" => array ("ASO"=>"Sistemas Operativos",
                        "BD" => "Bases de datos",
                        "PLAR" => "Redes"),    
                );

                foreach ($ciclos as $key => $value) {
                    echo $key,":<br>";
                    foreach ($value as $clave => $valor2) {
                        echo $valor2,"<br/>";
                    }
                    echo "<br>";
                }
            echo "<h1>Funciones para recordar</h1>";
                echo"<h5>Devuelve la posición actual de un array</h5>";
                print_r (current($ciclos));
                echo "<br>";
                echo"<h5>Avanza el puntero interno de un array</h5>";
                print_r (next($ciclos));
                echo "<br>";
                echo"<h5>Devuelve la posición actual de un array</h5>";
                print_r (current($ciclos));
                echo "<br>";
                echo "<br>";
            
                echo"<h5>Devuelve el par clave valor</h5>";
            while($ciclo = each($ciclos))
            {
                echo "<pre>";
                echo "El ciclo es ", $ciclo['key'], " Y la asignatura es <br>";
                foreach($ciclo['value'] as $iniciales => $value)
                {
                    echo $value,"<br> ";
                }
                echo "</pre>";
            }    

            echo "<br>";
                print_r (current($ciclos));

                echo "<br>";
                reset($ciclos);    

                while($ciclo = each($ciclos))
                {
                    echo "<pre>";
                    echo "El ciclo es ", $ciclo['key'], " Y la asignatura es ";
                    print_r($ciclo['value']);
                    echo "</pre>";
                }      
        ?>
    </main>
</body>
</html>