<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">
    </head>
    <body class="antialiased">
        <div class="container">
            <h1 class="text-center">SUPER SOLAR PANELS</h1>
            <h2 class="">Subscriptions</h2>
            <ul>
                @forelse($subscriptions as $subscription)
                    <li>
                        <a href="{{route('subscription', $subscription->id)}}">
                            {{$subscription->customer->name}} {{ $subscription->customer->address }} <br>
                            type systeem: <b>{{ $subscription->solarPanelSystem->name }}</b> <br>
                            aantal panelen: <b>{{ $subscription->panels->count() }}</b>
                        </a>
                    </li>
                @empty
                    <li><i>Momenteel geen subscriptions</i></li>
                @endforelse
            </ul>

            @livewire('form')

        </div>
    </body>
</html>
