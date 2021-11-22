<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <title>Tarea 06</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootPrincipal/imgPrincipal/LogotipoDavid.jpg"/>
        <h1>Tarea 06</h1>
    </header>
    <main>
        
        <?php
            echo "<div style='display:block;'>";
                echo "<div>";
                    $arrayDavid=array(
                        "Zamora CF" => array(
                            "UDS Salamanca" => array(
                                "Resultado" => "3-2",
                                "T. Rojas" => 1,
                                "T. Amarilla" => 0,
                                "Penaltis" => 2 
                            ),
                            "Real Valladolid" => array(
                                "Resultado" => "2-1",
                                "T. Rojas" => 1,
                                "T. Amarilla" => 0,
                                "Penaltis" => 2 
                            ),
                            "Numancia" => array(
                                "Resultado" => "2-0",
                                "T. Rojas" => 1,
                                "T. Amarilla" => 0,
                                "Penaltis" => 2 
                            )
                        ),
                        "UDS Salamanca" => array(
                            "Zamora CF" => array(
                                "Resultado" => "2-3",
                                "T. Rojas" => 1,
                                "T. Amarilla" => 0,
                                "Penaltis" => 2 
                            ),
                            "Real Valladolid" => array(
                                "Resultado" => "0-1",
                                "T. Rojas" => 0,
                                "T. Amarilla" => 2,
                                "Penaltis" => 2 
                            ),
                            "Numancia" => array(
                                "Resultado" => "0-0",
                                "T. Rojas" => 3,
                                "T. Amarilla" => 2,
                                "Penaltis" => 0 
                            )
                        ),
                        "Real Valladolid" => array(
                            "Zamora CF" => array(
                                "Resultado" => "1-2",
                                "T. Rojas" => 1,
                                "T. Amarilla" => 0,
                                "Penaltis" => 2 
                            ),
                            "UDS Salamanca" => array(
                                "Resultado" => "1-0",
                                "T. Rojas" => 0,
                                "T. Amarilla" => 2,
                                "Penaltis" => 2 
                            ),
                            "Numancia" => array(
                                "Resultado" => "1-0",
                                "T. Rojas" => 0,
                                "T. Amarilla" => 2,
                                "Penaltis" => 0 
                            )
                        ),
                        "Numancia" => array(
                            "Zamora CF" => array(
                                "Resultado" => "2-0",
                                "T. Rojas" => 1,
                                "T. Amarilla" => 0,
                                "Penaltis" => 2
                            ),
                            "UDS Salamanca" => array(
                                "Resultado" => "0-0",
                                "T. Rojas" => 3,
                                "T. Amarilla" => 2,
                                "Penaltis" => 0 
                            ),
                            "Real Valladolid" => array(
                                "Resultado" => "0-1",
                                "T. Rojas" => 0,
                                "T. Amarilla" => 2,
                                "Penaltis" => 0  
                            )
                        ),
                    );
        
                    $tabla=array();
        
                    /*echo "<table>";
                        echo "<thead>";
                            //Hago la cabecera
                            echo "<td>Equipos</td>";
                
                            foreach ($arrayDavid as $keyLocales => $valueLocales) {
                                
                                    echo "<td>";
                                        echo $keyLocales;
                                    array_push($tabla, $keyLocales);
                                    echo"</td>";
                            }
            
                        echo "</thead>";*/
                        //Pinto los resultados y para eso recorro el array grande
                        /*foreach ($arrayDavid as $key => $value) {
                            
                            echo "<tr>";
                                
                            echo"<td>",$key,"</td>" ;
                            /*$i=0; 
                            foreach($value as $key2 => $value2){
                                
                                if($tabla[$i] == $key)
                                {
                                    echo"<td></td>";
                                }
                                    echo "<td>";
                                    foreach($value2 as $key3 => $value3)
                                    {    
                                            echo $value3;
                                    }
                                    echo "</td>";
                                $i++;  
                            }
                            echo "</tr>";   
                        }

                    echo"</table>";*/

                    $equipos=array();   
                    echo "<table>";
                        echo "<thead>";
                        echo "<th>Equipos</th>";
                        foreach ($arrayDavid as $nombreEquipo => $datosNombreEquipo) {
                            echo"<th>",$nombreEquipo,"</th>";
                            array_push($equipos, $nombreEquipo);
                        }
                        echo"</thead>";
                        echo"<tbody>";
                        foreach ($arrayDavid as $equipoLocal => $datosEquipoLocal) {
                            echo"<tr>";
                            echo"<td>",$equipoLocal,"</td>";
                            $contador=0;
                                foreach ($datosEquipoLocal as $equipoVisitante => $datosPartido) {
                                   
                                    if($equipoLocal==$equipos[$contador])
                                    {
                                        echo "<td></td>";
                                    }
                                    echo "<td>";
                                    foreach ($datosPartido as $dato => $valor) {
                                        echo $valor;
                                    }
                                    echo "</td>";
                                    $contador++;
                                }
                            echo"</tr>";
                            }
                        echo"</tbody>";
                    echo"</table>";

                echo"</div>";
                
                for ($p=0; $p < 5; $p++) { 
                    echo "<br/>";
                }

                $clasificacion=array();
                
                foreach ($arrayDavid as $equipoLocal => $value) {
                    $clasificacion[$equipoLocal]=array();
                    $clasificacion[$equipoLocal]['puntos']=0;
                    $clasificacion[$equipoLocal]['aFavor']=0;
                    $clasificacion[$equipoLocal]['enContra']=0;
                }
                

                
                echo "<div>";

                foreach ($arrayDavid as $equipoLocal => $DatosLocal) {
                    foreach ($DatosLocal as $equipoVisitante => $DatosPartido) {
                        $resultado=explode('-',$DatosPartido['Resultado']);
                        
                        if($resultado[0]>$resultado[1])
                        {
                            $clasificacion[$equipoLocal]['puntos']+=3;
                        }
                        elseif($resultado[0]==$resultado[1])
                        {
                            $clasificacion[$equipoLocal]['puntos']+=1;
                            $clasificacion[$equipoVisitante]['puntos']+=1;
                        }
                        else
                        {
                            $clasificacion[$equipoVisitante]['puntos']+=3;
                        }
                        $clasificacion[$equipoLocal]['aFavor']+=$resultado[0];
                        $clasificacion[$equipoLocal]['enContra']+=$resultado[1];
                        $clasificacion[$equipoVisitante]['aFavor']+=$resultado[1];
                        $clasificacion[$equipoVisitante]['enContra']+=$resultado[0];

                    }
                    
                }



                echo "<table>";
                        echo "<thead>";
                            //Hago la cabecera
                            echo "<td>Equipos</td>";
                            echo "<td>Puntos</td>";
                            echo "<td>Goles a favor</td>";
                            echo "<td>Goles en contra</td>";
                            echo "</thead>";
                        //Pinto los resultados y para eso recorro el array grande
                        foreach ($clasificacion as $key => $datos) {
                            
                            echo "<tr>";
                                
                                echo"<td>",$key,"</td>" ;
                                foreach ($datos as $value) {
                                    echo"<td>",$value,"</td>";
                                }
                            echo "</tr>";   
                        }

                    echo"</table>";
                    
                      
                echo "</div>";

            
?>
    
    

<?php



?>

    </main>
    <footer>
        <p>Footer de David</p>
        <a href="codigoTarea06.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
    </footer>
</body>
</html>