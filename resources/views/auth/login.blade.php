<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-image: url("{{ asset('image/firstpage.jpg') }}");
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size: cover; 
            background-position: center center; 
           
        }

        .form-container {
            background-color: #fff; /* White background */
            border-radius: .5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            width: 30rem;
            text-align: center;
            margin-right: 50%;
            
        }

        .form-container h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .form-container .input-box {
            width: 90%;
            border: none;
            border-bottom: 2px solid orange; /* Pink border bottom */
            padding: 0.8rem;
            font-size: 1.2rem;
            color: #333;
            margin: 1rem 0;
            background-color: transparent;
            transition: border-color 0.3s ease;
        }

        .form-container .input-box::placeholder {
            color: #999;
        }

        .form-container .input-box:focus {
            outline: none;
            border-color: orange; 
        }

        .form-container .login-button {
            display: block;
            width: 35%;
            background-color: orange; 
            border: none;
            border-radius: .5rem;
            padding: 1rem;
            font-size: 1.2rem;
            color: #fff;
            cursor: pointer;
            margin-left: 155px;
            transition: background-color 0.3s ease;
        }

        .form-container .login-button:hover {
            background-color: orange; /* Lighter pink on hover */
        }

        .form-container p {
            margin-top: 1.5rem;
            font-size: 1.6rem;
            color: #999;
        }

        .form-container p a {
            color: orange;
            text-decoration: underline;
        }

        .form-container p a:hover {
            text-decoration: none;
        }
    </style>
        <title>LOGIN</title>
        <link rel="icon" href="{{ asset('image/logo.png') }}">
   
</head>
<body>

<section class="form-container">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <img src="image/title.PNG" alt="" style="width: 370px; height:70px"><br><br>
        
        <br>
        <input id="email" class="input-box" type="email" name="email" :value="old('email')" placeholder="Enter your email" required autofocus />
        <br>
     
        <br>
        <input id="password" class="input-box" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password" /><br><br>
        <button class="login-button" type="submit">Log in</button>
    </form>
    <p>
        Don't have an account? <a href="{{ route('register') }}">Sign up</a>
    </p>
</section>

</body>
</html>





