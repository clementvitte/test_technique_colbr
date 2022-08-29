<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>
    <body>
        <form action="/inscription" method="post">
            {{ csrf_field() }}
            <p><input type="text" name="first_name" placeholder="First_Name" value="{{ old('first_name') }}"></p>
            @if($errors->has('first_name'))
                <p>{{ $errors->first('first_name') }}</p>
            @endif

            <p><input type="text" name="last_name" placeholder="Last_Name" value="{{ old('last_name') }}"></p>
            @if($errors->has('last_name'))
                <p>{{ $errors->first('last_name') }}</p>
            @endif

            <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
            @if($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif

            <p><input type="password" name="password" placeholder="Password"></p>
            @if($errors->has('password'))
                <p>{{ $errors->first('password') }}</p>
            @endif

            <p><input type="password" name="password_confirmation" placeholder="Password_Confirmation"></p>
            @if($errors->has('password_confirmation'))
                <p>{{ $errors->first('password_confirmation') }}</p>
            @endif

            <p><input type="submit" value="login"></p>
        </form>
    </body>
</html>
