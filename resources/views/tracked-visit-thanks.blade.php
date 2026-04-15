<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit registered</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        h1 { margin-top: 0; }
        p { color: #555; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Visita registrada</h1>
        <p>Gracias. El acceso fue capturado correctamente.</p>
        <p><strong>Token:</strong> {{ $token }}</p>
    </div>
</body>
</html>