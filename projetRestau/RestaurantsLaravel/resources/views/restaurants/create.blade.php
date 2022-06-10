<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="new restaurant">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add a restaurant</title>
    </head>

    <body>
        <h1>Create</h1>

        <form action="/restaurant/create" method="POST">
            @csrf <!-- OR {{ csrf_field() }} -->
            <label for="name">
                Nom
                <input type="text" name="name" id="name">
            </label>
            <label for="address">
                Adresse
                <input type="text" name="address" id="address">
            </label>
            <label for="zipCode">
                Code postal
                <input type="number" name="zipCode" id="zipCode">
            </label>
            <label for="town">
                Ville
                <input type="text" name="town" id="town">
            </label>
            <label for="country">
                Pays
                <input type="text" name="country" id="country">
            </label>
            <label for="description">
                Description
                <input type="text" name="description" id="description">
            </label>
            <label for="review">
                Cote
                <input type="number" name="review" id="review" min=0 max=5>
            </label>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>

</html>