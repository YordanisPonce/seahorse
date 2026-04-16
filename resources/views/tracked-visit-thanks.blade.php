<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Congreso APDPE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        :root {
            --bg-main: #0d2b5c;
            --bg-soft: rgba(255, 255, 255, 0.06);
            --bg-card: rgba(255, 255, 255, 0.08);
            --border-soft: rgba(255, 255, 255, 0.14);
            --text-main: #ffffff;
            --text-soft: rgba(255, 255, 255, 0.82);
            --accent: #7db3ff;
            --accent-2: #c9defd;
            --shadow: 0 18px 40px rgba(0, 0, 0, 0.22);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: var(--text-main);
            background:
                radial-gradient(circle at top right, rgba(74, 144, 226, 0.22), transparent 28%),
                radial-gradient(circle at bottom left, rgba(255, 255, 255, 0.08), transparent 22%),
                linear-gradient(180deg, #10366f 0%, #0d2b5c 45%, #0a234a 100%);
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 48px 20px 60px;
        }

        .header {
            text-align: center;
            margin-bottom: 38px;
            padding: 28px 24px 34px;
            border: 1px solid var(--border-soft);
            border-radius: 24px;
            background: linear-gradient(180deg, rgba(255,255,255,.07), rgba(255,255,255,.03));
            box-shadow: var(--shadow);
            backdrop-filter: blur(10px);
        }

        .logo-placeholder {
            width: 220px;
            min-height: 130px;
            margin: 0 auto 22px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-placeholder img {
            max-width: 220px;
            max-height: 130px;
            object-fit: contain;
            display: block;
        }

        .logo-note {
            border: 1px dashed rgba(255,255,255,.28);
            border-radius: 16px;
            width: 220px;
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 12px;
            color: rgba(255,255,255,.65);
            padding: 12px;
        }

        h1 {
            margin: 0;
            font-size: 34px;
            line-height: 1.15;
            letter-spacing: .3px;
        }

        h2 {
            margin: 10px 0 0;
            font-size: 21px;
            font-weight: 400;
            color: var(--accent-2);
        }

        .hero-subtitle {
            margin-top: 12px;
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
        }

        .small {
            font-size: 15px;
            color: var(--text-soft);
            margin: 12px 0 0;
            line-height: 1.7;
        }

        .section {
            margin-bottom: 32px;
        }

        .card {
            background: linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.05));
            border: 1px solid var(--border-soft);
            padding: 24px;
            border-radius: 20px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            backdrop-filter: blur(8px);
        }

        .title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 22px;
            margin-bottom: 16px;
            color: var(--accent);
            font-weight: 700;
            letter-spacing: .2px;
        }

        .title svg,
        .day-title svg,
        .meta-item svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            stroke: currentColor;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .info-item {
            background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 16px;
            padding: 18px;
        }

        .info-item strong {
            display: block;
            margin-bottom: 8px;
            color: #fff;
            font-size: 15px;
        }

        .info-item p {
            margin: 0;
            color: var(--text-soft);
            line-height: 1.65;
            font-size: 14px;
        }

        .program-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .day-card {
            position: relative;
            overflow: hidden;
        }

        .day-card::before {
            content: "";
            position: absolute;
            inset: 0 auto 0 0;
            width: 5px;
            border-radius: 20px;
            background: linear-gradient(180deg, #7db3ff, #c9defd);
        }

        .day-card.day-blue::before {
            background: linear-gradient(180deg, #4fa4ff, #8cd0ff);
        }

        .day-card.day-purple::before {
            background: linear-gradient(180deg, #a978ff, #d2bbff);
        }

        .day-card.day-green::before {
            background: linear-gradient(180deg, #4ed49a, #99f0c8);
        }

        .day-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 19px;
            font-weight: 700;
            margin-bottom: 6px;
            padding-left: 6px;
        }

        .day-subtitle {
            color: var(--accent-2);
            margin: 0 0 16px;
            font-size: 15px;
            padding-left: 6px;
        }

        ul.schedule {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul.schedule li {
            padding: 12px 0 12px 18px;
            border-bottom: 1px solid rgba(255,255,255,.08);
            position: relative;
            color: var(--text-soft);
            line-height: 1.5;
            font-size: 14px;
        }

        ul.schedule li:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        ul.schedule li::before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: var(--accent);
            position: absolute;
            left: 0;
            top: 19px;
            box-shadow: 0 0 0 4px rgba(125, 179, 255, 0.12);
        }

        .talk {
            display: inline-block;
            margin-top: 4px;
            color: #ffffff;
            font-weight: 600;
            line-height: 1.5;
        }

        .speaker {
            display: inline-block;
            margin-top: 4px;
            color: rgba(255,255,255,.78);
            line-height: 1.55;
            font-size: 13px;
        }

        .contact-box p {
            margin: 0;
            color: var(--text-soft);
            line-height: 1.9;
            font-size: 15px;
        }

        .meta-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
            margin-top: 18px;
        }

        .meta-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.12);
            color: var(--text-soft);
            font-size: 14px;
        }

        .footer {
            text-align: center;
            margin-top: 36px;
            font-size: 14px;
            color: rgba(255,255,255,.72);
        }

        @media (max-width: 900px) {
            .info-grid,
            .program-grid {
                grid-template-columns: 1fr;
            }

            .day-card.day-green {
                grid-column: auto !important;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 18px;
            }

            .title {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <div class="logo-placeholder">
                <img src="{{ asset('images/unnamed.png') }}" alt="Logo Congreso APDPE">
                {{--
                <div class="logo-note">
                    Aquí va la imagen / logo del congreso
                </div>
                --}}
            </div>

            <h1>XIX Congreso Anual APDPE</h1>
            <h2>25 Aniversario</h2>
            <div class="hero-subtitle">“Representación, Legitimidad y Futuro”</div>

            <div class="meta-row">
                <div class="meta-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M8 2v4M16 2v4M3 10h18M5 6h14a2 2 0 0 1 2 2v11a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a2 2 0 0 1 2-2Z"/>
                    </svg>
                    Murcia, 16, 17 y 18 de abril de 2026
                </div>

                <div class="meta-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M12 21s6-5.2 6-11a6 6 0 1 0-12 0c0 5.8 6 11 6 11Z"/>
                        <circle cx="12" cy="10" r="2.5"/>
                    </svg>
                    Hotel Nelva · Murcia
                </div>
            </div>

            <p class="small">
                AUDITORIO: HOTEL NELVA<br>
                Avenida Primero de Mayo 5, 30006 Murcia
            </p>
        </div>

        <div class="section card">
            <div class="title">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M4 19h16M6 17V7m6 10V5m6 12v-8"/>
                </svg>
                Información del evento
            </div>

            <div class="info-grid">
                <div class="info-item">
                    <strong>Fechas</strong>
                    <p>16, 17 y 18 de abril de 2026</p>
                </div>

                <div class="info-item">
                    <strong>Ubicación</strong>
                    <p>Hotel Nelva<br>Avenida Primero de Mayo, 5<br>30006 Murcia</p>
                </div>

                <div class="info-item">
                    <strong>Organiza</strong>
                    <p>APDPE (Asociación Profesional de Detectives Privados de España)</p>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="title">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M8 2v4M16 2v4M3 10h18M5 6h14a2 2 0 0 1 2 2v11a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a2 2 0 0 1 2-2Z"/>
                </svg>
                Programa del Congreso
            </div>

            <div class="program-grid">
                <div class="card day-card day-blue">
                    <div class="day-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                            <path d="M12 3v18M3 12h18"/>
                        </svg>
                        Jueves, 16 de abril de 2026
                    </div>
                    <p class="day-subtitle">1ª Jornada: Talento y Herramientas</p>

                    <ul class="schedule">
                        <li><strong>09:00 – Acreditaciones</strong></li>

                        <li>
                            <strong>09:30 – Inauguración</strong><br>
                            <span class="speaker">Antonio Labrador Barquilla</span><br>
                            <span class="speaker">Francisco Lucas Ayala</span><br>
                            <span class="speaker">Antonio José Gambín</span><br>
                            <span class="speaker">Francisco Pulido Catalán</span><br>
                            <span class="speaker">Jorge Salgueiro Rodríguez</span>
                        </li>

                        <li>
                            <strong>10:00 – Mesa redonda</strong><br>
                            <span class="talk">“El detective ayer y hoy: del oficio tradicional al entorno actual”</span><br>
                            <span class="speaker">Francisco Iglesias</span><br>
                            <span class="speaker">Luis Iglesias Asuar</span><br>
                            <span class="speaker">Cristian García</span><br>
                            <span class="speaker">Gabriel Sánchez</span><br>
                            <span class="speaker">Javier Regidor</span>
                        </li>

                        <li><strong>11:30 – Café / Networking</strong></li>

                        <li>
                            <strong>12:00 – Ponencia</strong><br>
                            <span class="talk">“La investigación digital”</span><br>
                            <span class="speaker">Juan Lorenzo del Real Jiménez</span><br>
                            <span class="speaker">Antonio Suárez Yáñez</span>
                        </li>

                        <li>
                            <strong>12:50 – Ventana de innovación</strong><br>
                            <span class="talk">“Registra todo, escribe nada”</span><br>
                            <span class="speaker">Axel Toribio</span>
                        </li>

                        <li>
                            <strong>13:30 – Ponencia técnica</strong><br>
                            <span class="talk">“Escenario híbrido de investigación”</span><br>
                            <span class="speaker">Fernando Mairata de Anduiza</span>
                        </li>

                        <li><strong>14:30 – Comida (Hotel Nelva)</strong></li>

                        <li>
                            <strong>16:30 – Ruta Gastronómica Misteriosa</strong><br>
                            <span class="speaker">Degustación de tapas locales, recorrido por Murcia, concurso fotográfico, dulce típico o helado, foto grupal y premio</span>
                        </li>

                        <li>
                            <strong>20:30 – Cóctel 25 Aniversario</strong><br>
                            <span class="speaker">Photocall, música y networking</span>
                        </li>
                    </ul>
                </div>

                <div class="card day-card day-purple">
                    <div class="day-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                            <path d="M12 3v18M3 12h18"/>
                        </svg>
                        Viernes, 17 de abril de 2026
                    </div>
                    <p class="day-subtitle">2ª Jornada: Visión Sectorial y Jurídica</p>

                    <ul class="schedule">
                        <li>
                            <strong>10:00 – Mesa redonda</strong><br>
                            <span class="talk">“Las peculiaridades de la búsqueda de desaparecidos involuntarios. Principales aspectos a tener en cuenta”</span><br>
                            <span class="speaker">Guardia Civil</span><br>
                            <span class="speaker">Antonio Suárez Yáñez</span><br>
                            <span class="speaker">Joaquín Amills</span><br>
                            <span class="speaker">Francisco Iglesias</span>
                        </li>

                        <li><strong>11:30 – Café / Networking</strong></li>

                        <li>
                            <strong>12:00 – Ponencia jurídica</strong><br>
                            <span class="talk">“Evolución jurisprudencial de la prueba del detective”</span><br>
                            <span class="speaker">Universidad de Murcia</span><br>
                            <span class="speaker">Jorge Salgueiro Rodríguez</span>
                        </li>

                        <li>
                            <strong>12:50 – Ponencia tecnológica / futuro</strong><br>
                            <span class="talk">“Blockchain, criptoactivos y prueba digital”</span><br>
                            <span class="speaker">José Hernández</span>
                        </li>

                        <li>
                            <strong>Ponencia técnica</strong><br>
                            <span class="talk">“La problemática de la ciberseguridad en los despachos de Detectives Privados”</span><br>
                            <span class="speaker">Manuel Gallego</span><br>
                            <span class="speaker">Jonathan Pazos Rivera</span>
                        </li>

                        <li>
                            <strong>13:40 – Ventana de innovación</strong><br>
                            <span class="talk">“El enigma de la servilleta: cuando la genética responde”</span><br>
                            <span class="speaker">Dra. Isabel Navarro</span><br>
                            <span class="speaker">Alicia Moré</span>
                        </li>

                        <li>
                            <strong>14:30 – Comida + Mesa especial</strong><br>
                            <span class="talk">“25 años de APDPE: memoria y evolución”</span><br>
                            <span class="speaker">Antonio Labrador</span><br>
                            <span class="speaker">Francisco Casado</span><br>
                            <span class="speaker">Jorge Salgueiro Rodríguez</span>
                        </li>

                        <li>
                            <strong>18:00 – Clausura oficial</strong><br>
                            <span class="speaker">Antonio Labrador Barquilla</span><br>
                            <span class="speaker">Julián Sánchez Melgar</span><br>
                            <span class="speaker">Francisco Casado</span>
                        </li>

                        <li>
                            <strong>21:30 – Cena de gala</strong><br>
                            <span class="speaker">Entrega de reconocimientos, anuncio del próximo congreso, música y networking</span>
                        </li>
                    </ul>
                </div>

                <div class="card day-card day-green" style="grid-column: 1 / -1;">
                    <div class="day-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                            <path d="M12 3v18M3 12h18"/>
                        </svg>
                        Sábado, 18 de abril de 2026
                    </div>
                    <p class="day-subtitle">Asamblea General Ordinaria APDPE</p>

                    <ul class="schedule">
                        <li><strong>10:00 – 14:00 Asamblea General APDPE</strong></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section card contact-box">
            <div class="title">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5.06 3h3a2 2 0 0 1 2 1.72l.34 2.27a2 2 0 0 1-.57 1.73l-1.3 1.3a16 16 0 0 0 6.17 6.17l1.3-1.3a2 2 0 0 1 1.73-.57l2.27.34A2 2 0 0 1 22 16.92Z"/>
                </svg>
                Contacto
            </div>

            <p>
                APDPE<br>
                Pasaje Dolores, 16 Oficina 3 – Madrid<br>
                917 581 399<br>
                info@apdpe.es<br>
                www.apdpe.es
            </p>
        </div>

        <div class="footer">
            © Congreso APDPE 2026
        </div>
    </div>
</body>

</html>