<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>
    <body>
        <h1>Les users</h1>
        <ul>
            @foreach($users as $user)
                <li>{{$user->email}}</li>
            @endforeach
        </ul>
    </body>
</html>
