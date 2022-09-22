<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body class="antialiased">
        @foreach ($patients as $patient)
            <div>
                <h2>
                    {{ $patient->names }}
                </h2>
            </div>
        @endforeach
        {{$patients->links()}}
    </body>
</html>
