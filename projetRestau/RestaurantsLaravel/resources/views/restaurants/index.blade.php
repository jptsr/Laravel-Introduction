<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="homepage">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HomePage</title>
    </head>

    <body>
        <h1>Restaurants</h1>

        @foreach($restaurants as $restaurant)
            <h3>{{ $restaurant->name }}</h3>
            <p>{{ $restaurant->address }}, {{ $restaurant->zipCode }} {{ $restaurant->town }}.</p>
            <p>{{ $restaurant->description }}</p>
            <p>Review : {{ $restaurant->review }}/5</p>
        @endforeach
    </body>

</html>