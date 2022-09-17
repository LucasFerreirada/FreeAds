<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Annonce</h1>
    @foreach ($annonce as $annonce) {
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $annonce->title }}</h5>
            <p class="card-text">{{ $annonce->description }}</p>
            <p class="card-picture">{{ $annonce->picture }}</p>
            <p class="card-price">{{ $annonce->price }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        @endforeach
    </div>
    <div class="title">
        <h1>Create Annonce</h1>

        <form method="POST" action="/annonce">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="form-group">
                <label for="picture">Picture:</label>
                <input type="file" class="form-control" id="picture" name="picture">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
            </div>
    </div>
</body>

</html>