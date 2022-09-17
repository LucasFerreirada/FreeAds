<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<!-- css -->
<style>
    body {
        background-color: #f5f5f5;
        display: flex;
        align-content: center;
    }
</style>

<body>
    <h2>Profiles</h2>
    <p>Name : {{ auth()->user()->name}}</p>
    <p>Email : {{ auth()->user()->email}}</p>

    <h4>EDIT :</h4>
    <form method="POST" action="/profile/">
        {{ csrf_field() }}

        <div class="form-group mb-3">

            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Entrer your new name" name="name" value="">

        </div>

        <div class="form-group mb-3">

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Entrer your new email" name="email" value="">

        </div>

        <div class="form-group mb-3">

            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Entrer your new password or your actually password" name="password">

        </div>

        <button type="submit" class="btn btn-primary" name="update">Update</button>
        <h4>DELETE :</h4>
        <button type="submit" class="btn btn-primary" name="delete">Delete</button>
    </form>

</body>

</html>