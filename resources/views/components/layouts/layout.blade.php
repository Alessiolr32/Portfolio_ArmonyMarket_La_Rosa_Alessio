<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}} - {{$title ?? '' }}</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Alessio, Biagio, Dario">
    <meta name="description" content="Progetto ArmonyMarket">
    <meta name="copyright" content="Aulab 2025">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">   
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body> 
    <section>
        <x-shared.navbar />
    </section>
    
    <main id="content" class="min-vh-100 page-transition-main">       
        <x-shared.flash-message />
        {{ $slot }}            
    </main>
    
    <section>
        <x-shared.footer />
    </section>
    
    <aside aria-label="Torna su">        
        <x-shared.top-button />
    </aside>
    
    <aside aria-label="Selettore lingua">
        <x-shared.lang-button />
    </aside>        
    
    <script src="https://kit.fontawesome.com/4148becaaa.js" crossorigin="anonymous" defer>
    </script>
</body>

</html>