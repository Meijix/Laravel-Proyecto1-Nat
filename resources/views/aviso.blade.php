<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Aviso</title>
</head>
<body>
    <h1>Aviso de curso de inducción</h1>
    <p>Bienvenidos estudiantes de la generación 2025 a la Facultad de Contaduría y Administración de la UNAM.</p>

    <p>Se les convoca a asistir al curso de inducción, que se realizará durante la semana del  27 al 31 de enero de 2025 en el Auditorio Carlos Pérez del Toro a partir de las 9:00 am.</p>

    @if($estudiante_informatica = 1)
        <h2>Aviso conferencia</h2>
        <p>Se convoca a todos los estudiantes de informática de nuevo ingreso a participar en la conferencia</p>

        <p>-La informática como apoyo estratégico en las organizaciones- misma que se impartirá el 6 de febrero de 2025 en el Aula Magna de la Facultad a las 14:00 hrs</p>
    @endif
</body>
</html>