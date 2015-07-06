<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/signin/signin.css"/>
</head>
<body>
    {!! Form::open(['class' => 'form-signin']) !!}
        <h2 class="form-signin-heading">Please sign in</h2>

        <!-- Email Form Textfield -->
        {!! Form::label('email', 'Email:', ['class' => 'sr-only']) !!}
        {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email address', 'autofocus']) !!}
        {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}

        <!-- Password Form Textfield -->
        {!! Form::label('password', 'Password:', ['class' => 'sr-only']) !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
        {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}

        <!-- Remember me Form Checkbox -->
        <div class="checkbox">
            <label for="remember_me">
                {!! Form::checkbox('remember') !!} Remember Me
            </label>
        </div>

        <!-- Sign in Submit Button -->
        {!! Form::submit('Sign in', ['class' => 'form-control btn btn-primary']) !!}
    {!! Form::close() !!}
</body>
</html>