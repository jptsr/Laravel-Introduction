<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="edit restaurant">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <h1>Edit</h1>

    <form action="/restaurant/edit/{{ $restaurant->id }}" method="post">
        @csrf
        @method('PATCH')

        <label for="name">
            Name
            <input type="text" name="name" value="{{ $restaurant->name }}">
        </label>
        <!-- @if($errors->has('title'))
        <small class="error">{{ $errors->first('title') }}</small>
        @endif -->
        <label for="address">
            Adresse
            <input type="text" name="address" value="{{ $restaurant->address }}">
        </label>
        <label for="zipCode">
            Code postale
            <input type="number" name="zipCode" value="{{ $restaurant->zipCode }}">
        </label>
        <label for="town">
            Ville
            <input type="text" name="town" value="{{ $restaurant->town }}">
        </label>
        <label for="country">
            Pays
            <input type="text" name="country" value="{{ $restaurant->country }}">
        </label>
        <label for="description">
            Description
            <textarea name="description">{{ $restaurant->description }}</textarea>
        </label>
        <label for="review">
            Cote
            <input type="number" min=0 max=5 name="review" value="{{ $restaurant->review }}">
        </label>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>