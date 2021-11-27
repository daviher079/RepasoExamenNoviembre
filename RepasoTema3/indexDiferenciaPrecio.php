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
        <form action="DiferenciaPrecio.php" method="post" name="diferenciaPrecio">
            <article>
                    <section>
                        <label for="precio">precio:</label>
                        <input type="text" name="precio" id="precio" size="30" placeholder="Precio">
                        <label for="pago">Pago:</label>
                        <input type="text" name="pago" id="pago" size="30" placeholder="pago">
                    </section>
                    <section id="botones">

                        <input type="submit" value="Enviar los Datos" name="enviado">

                    </section>
            </article>                
        </form>
    </main>
</body>
</html>