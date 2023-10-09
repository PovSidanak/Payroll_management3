<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('login.css')}}">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ url('loginuser') }}" method="POST">
            @csrf    
            <div class="input-form">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-form">
                <label for="pw">Password</label>
                <input type="password" name="password">
            </div>
            <div class="btn">
                <a href="{{ url('/login') }}">Forgot your password?</a>
                <button type="submit">Login</button>
            </div>
        
        </form>
    </div>
    
</body>
</html>