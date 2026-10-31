@extends('layout')
@section('title', 'user-login')
<style>
     body {
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .login-card {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .login-card input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            transition: all 0.3s ease;
        }

        .login-card input:focus {
            outline: none;
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 5px #fff;
        }


        .login-card button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            box-sizing: border-box;
            border: 2px solid rgb(251, 247, 247);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-card button:hover {
                        box-sizing: border-box;
            border: 2px solid rgb(63, 55, 108);
            background-color: rgb(63, 55, 108);
            transform: scale(1.05);
        }

        .login-card .links {
            margin-top: 15px;
            text-align: center;
        }

        .login-card .links a {
            color: #fff;
            text-decoration: underline;
            transition: 0.3s;
        }

        .login-card .links a:hover {
            color: #ff4b2b;
        }
    </style>
@section('main')
 <div class="login-card">
        <h2>Login</h2>
        @error('user') <p class="fs-6 text-danger">{{$message}}</p> @enderror
        <form method="post" action="/user-login">
            @csrf
            <input type="email" name="email" placeholder="Email Address">
            @error('email') <p class="fs-6 text-danger">{{$message}}</p> @enderror
            <input type="password" name="password" placeholder="Password">
            @error('password') <p class="fs-6 text-danger">{{$message}}</p> @enderror
            <button type="submit" class="text-dark">Log in</button>
        </form>
        <div class="links">
            <p class="text-white">Don't have an account? <a href="/user-signup">Sign Up</a></p>
            <p><a href="/forget-password">Forgot Password?</a></p>
        </div>
    </div>

@endsection