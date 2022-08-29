<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>
    <body>
        <form action="/connexion" method="post">
            {{ csrf_field() }}
            <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
            @if($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif

            <p><input type="password" name="password" placeholder="Password"></p>
            @if($errors->has('password'))
                <p>{{ $errors->first('password') }}</p>
            @endif

            <p><input type="submit" value="login"></p>
        </form>
    </body>
</html>
