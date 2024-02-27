<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @livewireStyles
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">
    </head>
    <body class="antialiased">
        <div class="container">
            <h1 class="text-center">SUPER SOLAR PANELS</h1>
            <h2 class="">Subscription van {{ $subscription->customer->name }}</h2>
            <div class="customer-data">
                <p>Naam: {{ $subscription->customer->name }}</p>
                <p>Adres: {{ $subscription->customer->address }}</p>
                <p>Postcode: {{ $subscription->customer->zip }}</p>
                <p>Stad: {{ $subscription->customer->city }}</p>
                <p>Telefoonnummer: {{ $subscription->customer->phone }}</p>
                <p>Email: {{ $subscription->customer->email }}</p>
                <p>Systeem: {{ $subscription->solarPanelSystem->name }}</p>

            </div>
            <h3>Zonne panelen</h3>
            @livewire('panel-switcher', ['subscription' => $subscription])

            {{-- @livewire('testje') --}}

        </div>



        @livewireScripts
    </body>
</html>
