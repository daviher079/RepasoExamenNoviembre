<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Realiza un programa que le introduzca un valor de un producto con 2 decimales y posteriormente
        un valor con el que pagar por encima (Valor del producto 6.33€ y ha pagado con 10€) Muestra el
        número mínimo de monedas con las que puedes: devolver el cambio
    -->
    <main>
        <?php
            //Guardo en dos variables lo que recojo a traves del metodo POST
            //Una vez guardadas las multiplico por 100 para posteriormente hacer las cuentas más comodo
            $precio=($_POST['precio'])*100;
            $pago=($_POST['pago'])*100;

            //Calculo la diferencia que tiene que devolver precio y pago
            $diferencia= $pago-$precio;

           
            //Guardo en un array asociativo cada moneda con su valor y las monedas que devolverá el algoritmo
            $arrayAsociativo=array(
                "monedasDos"=>array(
                    "valor"=>200,
                    "moneda"=>0
                ),
                "monedaUno"=>array(
                    "valor"=>100,
                    "moneda"=>0
                ),
                "moneda50Cts"=>array(
                    "valor"=>50,
                    "moneda"=>0
                ),
                "moneda20Cts"=>array(
                    "valor"=>20,
                    "moneda"=>0
                ),
                "moneda10Cts"=>array(
                    "valor"=>10,
                    "moneda"=>0
                ),
                "moneda05Cts"=>array(
                    "valor"=>5,
                    "moneda"=>0
                ),
                "moneda02Cts"=>array(
                    "valor"=>2,
                    "moneda"=>0
                ),
                "moneda01Cts"=>array(
                    "valor"=>1,
                    "moneda"=>0
                ),
                
            );

            
            echo "<h1>La diferencia entre el producto comprado y el dinero entregado es. ".(($diferencia)/100)."€</h1><br/>";
            
            //Se recorre el array asociativo y en cada interaccion que hace se comprueba si
            //si el valor de cada moneda es mayor o igual que la diferencia en caso de ser mayor o igual
            //se hace una llamada a la función que devuelve en su primera posición el numero de monedas
            //y se modifica el valor de la propiedad $arrayAsociativo[$key]['moneda'] y se modifica el
            //la difencia con la segunda posición del array que devuelve una función

            foreach ($arrayAsociativo as $key => $value) {
                
                if($diferencia>=$arrayAsociativo[$key]['valor'])
                {
                    $arrayAsociativo[$key]['moneda']=devuelveMoneda($arrayAsociativo[$key]['valor'], $diferencia)[0];
                    $diferencia=devuelveMoneda($arrayAsociativo[$key]['valor'], $diferencia)[1];
                }
                
            }

            //Se lee el array y se comprueba que cada iteración la posicion del array 
            //$arrayAsociativo[$monedaNumero]['moneda'] sea diferente a 0 para poder mostrarla

            foreach ($arrayAsociativo as $monedaNumero => $value) {
                if($arrayAsociativo[$monedaNumero]['moneda']!=0)
                {
                    echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$arrayAsociativo[$monedaNumero]['moneda']."</strong> monedas de <strong>".$monedaNumero."</strong></p><br/>";
                }
            }

           
            //La funcion devuelveMoneda calcula el numero de monedas de una moneda que se
            //tienen que devolver y cual será la diferencia que queda en todo momento devuelve 
            //un array de dos posiciones
            function devuelveMoneda($valorMoneda, $dif)
            {
                
                $miArray= Array();
                $moneda=0;
                while($dif>= $valorMoneda)
                {
                   
                    $dif -= $valorMoneda;
                    $moneda++;
                }
                $miArray[0]=$moneda;
                $miArray[1]=$dif;
                return $miArray;
            }

        ?>
    </main>
</body>
</html>