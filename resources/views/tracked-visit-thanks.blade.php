<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Congreso APDPE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0d2b5c;
            /* azul tipo PDF */
            color: #fff;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 40px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-placeholder {
            width: 200px;
            height: 120px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            opacity: 0.7;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        h2 {
            margin: 10px 0;
            font-size: 20px;
            font-weight: normal;
        }

        .section {
            margin-bottom: 40px;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .title {
            font-size: 20px;
            margin-bottom: 10px;
            color: #7db3ff;
        }

        .small {
            font-size: 14px;
            opacity: 0.9;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 6px;
        }

        .day {
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- HEADER -->
        <div class="header">

            <!-- 🔴 AQUI VA TU FOTO / LOGO -->
            <div class="logo-placeholder">
                <img src="{{ asset('images/unnamed.png') }}" style="max-width:200px;">
            </div>

            <h1>XIX Congreso Anual APDPE</h1>
            <h2>25 Aniversario</h2>
            <h2>“Representación, Legitimidad y Futuro”</h2>

            <p class="small">📍 Murcia, 16, 17 y 18 de Abril 2026</p>
            <p class="small">
                AUDITORIO: HOTEL NELVA<br>
                Avenida Primero de Mayo 5, 30006 Murcia
            </p>
        </div>

        <!-- INFO GENERAL -->
        <div class="section card">
            <div class="title">Información del evento</div>

            <p><strong>Fechas:</strong> 16, 17 y 18 de abril de 2026</p>

            <p><strong>Ubicación:</strong><br>
                Hotel Nelva<br>
                Avenida Primero de Mayo, 5<br>
                30006 Murcia
            </p>

            <p><strong>Organiza:</strong><br>
                APDPE (Asociación Profesional de Detectives Privados de España)
            </p>
        </div>

        <!-- PROGRAMA -->
        <div class="section">

            <div class="title">📅 Programa del Congreso</div>

            <!-- JUEVES -->
            <div class="card day">
                <strong>🔵 Jueves, 16 de abril de 2026</strong><br>
                1ª Jornada: Talento y Herramientas

                <ul>
                    <li>09:00 – Acreditaciones</li>
                    <li>09:30 – Inauguración</li>
                    <li>10:00 – Mesa redonda: “El detective ayer y hoy”</li>
                    <li>11:30 – Café / Networking</li>
                    <li>12:00 – Ponencia: “La investigación digital”</li>
                    <li>12:50 – Innovación: “Registra todo, escribe nada”</li>
                    <li>13:30 – Ponencia técnica</li>
                    <li>14:30 – Comida</li>
                    <li>16:30 – Ruta Gastronómica Misteriosa</li>
                    <li>20:30 – Cóctel 25 Aniversario</li>
                </ul>
            </div>

            <!-- VIERNES -->
            <div class="card day">
                <strong>🟣 Viernes, 17 de abril de 2026</strong><br>
                2ª Jornada: Visión Sectorial y Jurídica

                <ul>
                    <li>10:00 – Mesa redonda: desaparecidos</li>
                    <li>11:30 – Café / Networking</li>
                    <li>12:00 – Ponencia jurídica</li>
                    <li>12:50 – Blockchain y prueba digital</li>
                    <li>13:40 – Innovación genética</li>
                    <li>14:30 – Comida + Mesa especial</li>
                    <li>18:00 – Clausura oficial</li>
                    <li>21:30 – Cena de gala</li>
                </ul>
            </div>

            <!-- SABADO -->
            <div class="card day">
                <strong>🟢 Sábado, 18 de abril de 2026</strong>

                <ul>
                    <li>10:00 – 14:00 Asamblea General APDPE</li>
                </ul>
            </div>

        </div>

        <!-- CONTACTO -->
        <div class="section card">
            <div class="title">📞 Contacto</div>

            <p>
                APDPE<br>
                Pasaje Dolores, 16 Oficina 3 – Madrid<br>
                📞 917 581 399<br>
                📧 info@apdpe.es<br>
                🌐 www.apdpe.es
            </p>
        </div>

        <div class="footer">
            © Congreso APDPE 2026
        </div>

    </div>

</body>

</html>
