<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reloj en tiempo real</title>
    <style>
        /* Eliminar márgenes y padding para evitar scroll */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        /* Centrar el contenido en la pantalla */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #353B3B; /* Fondo gris oscuro */
            color: white;
            font-family: Consolas, monospace;
        }

        /* Estilo para mantener el texto alineado a la izquierda y evitar el scroll */
        #clock {
            text-align: left;
            font-size: 20px;
            max-width: 600px; /* Limitar el ancho máximo del contenido */
            line-height: 1.5; /* Espaciado entre líneas para una mejor lectura */
        }

        /* Colores personalizados */
        .braces {
            color: #ffc914;
        }

        .clock-dict {
            color: #dccd79;
        }

        .keys {
            color: #c3915b;
        }

        .values {
            color: #37a3f0;
        }

    </style>
    <script>
        function updateClock() {
            const now = new Date();
            const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            const monthsOfYear = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            // Actualizar el reloj en la página, cada parte en una línea nueva
            document.getElementById('clock').innerHTML = 
                '<span class="clock-dict">clock</span>: <span class="clock-dict">dict</span> <span class="braces">{</span><br>' +
                '&nbsp;&nbsp;<span class="keys">"hour"</span>: <span class="values">' + now.getHours() + '</span>,<br>' +
                '&nbsp;&nbsp;<span class="keys">"minute"</span>: <span class="values">' + now.getMinutes() + '</span>,<br>' +
                '&nbsp;&nbsp;<span class="keys">"second"</span>: <span class="values">' + now.getSeconds() + '</span>,<br>' +
                '&nbsp;&nbsp;<span class="keys">"day"</span>: [<span class="values">' + now.getDate() + '</span>, <span class="keys">"' + daysOfWeek[now.getDay()] + '"</span>],<br>' +
                '&nbsp;&nbsp;<span class="keys">"month"</span>: <span class="keys">"' + monthsOfYear[now.getMonth()] + '"</span>,<br>' +
                '&nbsp;&nbsp;<span class="keys">"year"</span>: <span class="values">' + now.getFullYear() + '</span>,<br>' +
                '&nbsp;&nbsp;<span class="keys">"timezone"</span>: <span class="keys">"GTM-3"</span><br>' +
                '<span class="braces">}</span>';
        }

        // Actualizar el reloj cada segundo
        setInterval(updateClock, 1000);
    </script>
</head>
<body>
    <pre id="clock">
        <script>updateClock();</script>
    </pre>
</body>
</html>
