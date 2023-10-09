<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('register.css')}}">
     
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form action="{{ url('registeruser') }}" method="POST">
            @csrf
            <div class="input-form">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-form">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-form">
                <label for="pw">Password</label>
                <input type="password" name="password">
            </div>
            <div class="btn">
                <a href="{{ url('/login') }}">Already registered?</a>
                <button type="submit" >REGISTER</button>
            </div>
        </form>
    </div>
    
</body>
</html>