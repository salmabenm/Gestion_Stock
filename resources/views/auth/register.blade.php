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
            text-align: center;
            max-width: 900px;
        }

        .form-container h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .form-container .input-box {
            width: 90%;
            border: none;
            border-bottom: 2px solid orange;
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
            margin-top: 2rem;
            transition: background-color 0.3s ease;
        }

        .form-container .login-button:hover {
            background-color: orange;
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

        /* Additional styles to arrange inputs */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-container img {
            display: block;
            margin: 0 auto;
        }

        .form-container .input-container {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .form-container .input-container .input-box {
            width: 100%;
            max-width: 300px;
        }

        .form-container .input-container:nth-child(2) {
            margin-top: 1.5rem;
        }

        .form-container .login-button {
            width: 100%;
            max-width: 300px;
            margin-left: 250px;
        }
    </style>
    <title>SIGN UP</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
</head>
<body>
    <section class="form-container">
        <x-slot name="logo">
            <img src="img/esregister.png" alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <img src="image/title.PNG" alt="" style="width: 370px; height:70px"><br><br>
            <br>
            <div class="input-container">
                <x-jet-input id="name" class="input-box" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                <x-jet-input id="email" class="input-box" type="email" name="email" :value="old('email')" required placeholder="Email" />
                <x-jet-input id="telephone" class="input-box" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" placeholder="  Phone" />
            </div>
            <div class="input-container">
                <x-jet-input id="adresse" class="input-box" type="adresse" name="adresse" :value="old('adresse')" required placeholder="Adresse"/>
                <x-jet-input id="password" class="input-box" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                <x-jet-input id="password_confirmation" class="input-box" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" />
            </div>
            <button class="login-button" type="submit">Sign up</button>
        </form>
        <p>
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
    </section>
</body>
</html>



