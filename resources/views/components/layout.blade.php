<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')

</head>

<body>
    <x-navigation> </x-navigation>
    <main>

        <div class="mx-auto max-w-7xl pt-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>


    </main>
</body>

</html>
