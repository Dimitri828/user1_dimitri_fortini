<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cantata+One&family=Cinzel:wght@400..900&family=Lato:ital,wght@0,400;1,900&family=Lexend:wght@100..900&family=MedievalSharp&family=Miranda+Sans:ital,wght@0,400..700;1,400..700&family=Montserrat:wght@800&family=Orbitron:wght@400..900&family=Spline+Sans:wght@300..700&family=Zen+Dots&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">


    <x-navbar />
    <x-underNavbar />
<main class="flex-grow-1">
    {{ $slot }}

</main>


    <x-footer />
</body>

</html>
