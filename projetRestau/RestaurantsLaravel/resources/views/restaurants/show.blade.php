<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="restaurants' list">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List</title>
    </head>

    <body>
        <h1>{{ $restaurant->name }}</h1>
        <h3>{{ $restaurant->address }}, {{ $restaurant->zipCode }} {{ $restaurant->town }}</h3>
        <p>{{ $restaurant->description }}</p>
        <p>Review : {{ $restaurant->review }}/5</p>
    </body>

</html>