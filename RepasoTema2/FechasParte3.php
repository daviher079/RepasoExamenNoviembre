<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>REPASO TEMA 2 PARTE 3</title>
</head>
<body>
    <header>
        <h1>REPASO TEMA 2 PARTE 3</h1>
        
    </header>
    
    <main>
    <h2>FECHAAAAAS</h2>
        <?php
            
            $fecha=time();

            echo "La función time() devuelve los milisegundos transcurridos desde el ",
            "1/1/1970 hasta la actualidad ",$fecha,"<br>";

            //ZONA HORARIA SERVIDOR

            
            echo "<br> función para modificar la hora del servidor es date_default_timezone_set('zona')";
            date_default_timezone_set("Europe/Sarajevo");
            echo "<br> Función para saber la hora del servidor ", date_default_timezone_get();
            date_default_timezone_set("Europe/Madrid");
            echo "<br> Función date('formato de la fecha', fecha a poner el formato) ",
            "para poner una fecha con formato ", date ('d-m-y h:i:s', time());

            echo "
                <br>opciones par mostrar una fecha:<br><br>
                'd' &nbsp;&nbsp;&nbsp;&nbsp; 01 a 31<br>
                'D' &nbsp;&nbsp;&nbsp;&nbsp; Mon hasta Sun<br>
                'j' &nbsp;&nbsp;&nbsp;&nbsp; 1 a 31<br>
                'l' &nbsp;&nbsp;&nbsp;&nbsp; Sunday hasta Saturday<br>
                'z' &nbsp;&nbsp;&nbsp;&nbsp; dia del año de 0 a 365<br>
                'W' &nbsp;&nbsp;&nbsp;&nbsp; Semana del año<br>
                'F' &nbsp;&nbsp;&nbsp;&nbsp; January hasta December<br>
                'm' &nbsp;&nbsp;&nbsp;&nbsp; 01 hasta 12<br>
                'Y' &nbsp;&nbsp;&nbsp;&nbsp; Un año con 4 digitos<br>
                'y' &nbsp;&nbsp;&nbsp;&nbsp; Un año con 2 digitos<br>
                'a' &nbsp;&nbsp;&nbsp;&nbsp; am o pm<br>
                'g' &nbsp;&nbsp;&nbsp;&nbsp; Formato 12 horas sin ceros<br>
                'G' &nbsp;&nbsp;&nbsp;&nbsp; Formato 24 horas sin ceros<br>
                'h' &nbsp;&nbsp;&nbsp;&nbsp; Formato 12 horas con ceros<br>
                'H' &nbsp;&nbsp;&nbsp;&nbsp; Formato 24 horas con ceros<br>
                'i' &nbsp;&nbsp;&nbsp;&nbsp; Formato minutos con ceros<br>
                's' &nbsp;&nbsp;&nbsp;&nbsp; Formato segundos con ceros<br>
            ";

            //strtotime
            echo "<br>","Cumpleaños de Ismael","<br>";

            $cumple= strtotime('01-07-27');
            //establece la fecha en segundos
            
            echo "<br> La función strtotime devuelve los milisegundos que han transcurrido "
            ," desde el 1/1/1970 hasta la fecha pasada por parametro el formato por el que",
            " se debe pasar en el formato 'y-m-d' ",$cumple,"<br>";
            echo date('d-m-y h:i:s',$cumple), "<br>";

            
            
            echo "<br><br>",date ('d-m-y h:i:s', strtotime("+ 1 week 2 hours")), "<br>";
            echo date ('d-m-y h:i:s', strtotime("next Monday")), "<br>";   
            $diaObjeto=new DateTime();
            $diaObjeto2=new DateTime('2021-01-01');
            echo "Un objeto de tipo fecha se crea con el contructor DateTime",
            "<br> los objetos de tipo DateTime pueden acceder a funciones como diff"
            ,"<br> Esta función calcula la diferencia con format le da el formato de salida";
            echo ($diaObjeto2->diff($diaObjeto))->format('%R%a days');
           
            $diaMKtime= mktime(5,42,50,10,6,2021);
            echo "<br/>", date ('d-m-y h:i:s', $diaMKtime);

            echo "<br>";
            echo "Devuelve un array con todos los datos de la fecha del día actual";
            print_r (getdate());
            $pruebaDia=getdate();
            echo "<br>",$pruebaDia['wday'];
        ?>


</main>
    <footer>Footer de David</footer>
</body>
</html>