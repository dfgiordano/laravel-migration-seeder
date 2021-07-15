<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel'Holidays</title>

    </head>
    <body>
        <header style="text-align: center;">
            <h1> Laravel's Holidays </h1>
        </header>
        <main>
            <div class="container-cards">
                @foreach ($holiday as $item)
                    <div class="card">
                        <img style="height: 200px;" src="{{ $item -> src }}" alt="">
                        <h3>{{ $item -> location }} </h3>
                        <h4>{{ $item -> ciao }}</h4>
                        <h5>{{ $item -> city }}</h5>
                        <h6>{{ $item -> country }}</h6>
                        <h6>{{ $item -> price }}€ a notte</h6>
                        <h6>{{ $item -> vote }}</h6>
                        <h6>{{ $item -> available }}</h6>
                        <h6>{{ $item -> email }}</h6>
                        <h6>{{ $item -> telephone }}</h6>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>
