<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Salvatore Pitanza' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('setLanguage', () => {
                // Aggiorna il tag html per la lingua
                const newLang = document.documentElement.lang === 'it' ? 'en' : 'it';
                document.documentElement.lang = newLang;
                // Ricarica i componenti senza refresh della pagina
                Livewire.navigate(window.location.href, { preserveScroll: true });
            });
        });
    </script>
</head>

<body class="antialiased">
    {{ $slot }}
</body>

</html>