<!DOCTYPE html>
<html>
<head>
    <title>USER PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Basic styling for form elements */
        body{
            background-image: url("{{ asset('image/firstpage.jpg') }}");
            background-size: cover; 
            background-position: center center; 
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #f0f0f0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Center h1 and p elements */
        h1, p {
            text-align: center;
        }
        
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }
        
        h1 i {
            font-size: 48px;
            color: wheat;
            margin-right: 10px;
        }
        
        p {
            font-size: 18px;
            color: #555;
        }
        
        p i {
            font-size: 24px;
            color: wheat;
            margin-right: 5px;
        }
        a i {
            font-size: 24px;
            color: wheat;
            margin-right: 5px;
        }
        
        h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #555;
            text-align: center;
        }
        
        form {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 97%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #f90;
        }
        
        button {
            padding: 12px 18px; /* Enlarge padding */
            background-color: #ff9900; /* Use a slightly different shade of orange */
            color: #fff;
            border: none;
            border-radius: 10px; /* Enlarge border radius */
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto; /* Center the button */
            width: 550px;
        }
        
        button:hover {
            background-color: #cc7700; /* Use a slightly darker shade of orange on hover */
        }
        
        /* Styling for alerts */
        .alert {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        a {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>        
</head>
<body>
    <div class="container">
        
        <h1> Welcome, {{ $user->name }}</h1>
        <p><i class="fas fa-envelope"></i> {{ $user->email }} </p>
        <a href="{{ route('dashboard') }}"> <i class="fas fa-tachometer-alt"></i> Your dashboard </a>
        <h2>Update Your Information</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('user.update') }}" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
            <br>
            <label for="telephone">Phone:</label>
            <input type="text" name="telephone" value="{{ old('telephone', $user->telephone) }}" required>
            <br>
            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" value="{{ old('adresse', $user->adresse) }}" required>
            <br><br>
            <button type="submit"><i class="fas fa-save"></i> Update</button>
        </form>
        <form action="{{ route('user.update') }}" method="post">
            @csrf
            <label for="poste">Poste:</label>
            <input type="text" name="poste" value="{{ old('poste', $user->poste) }}" required>
            <br>
            <label for="location">Location:</label>
            <input type="text" name="location" value="{{ old('location', $user->location) }}" required>
            <br>
            <button type="submit"><i class="fas fa-save"></i> Update</button>
        </form>
    <br><hr><br>
    <form action="{{ route('user.update') }}" method="post">
        @csrf
        <label for="warehouse">Warehouse:</label>
        <input type="text" name="warehouse" value="{{ old('warehouse', $user->warehouse) }}" required>
        <br>
        <label for="warehouseadresse">Warehouseadresse:</label>
        <input type="text" name="warehouseadresse" value="{{ old('warehouseadresse', $user->warehouseadresse) }}" required>
        <br>
        <label for="capacity">Capacity:</label>
        <input type="text" name="capacity" value="{{ old('capacity', $user->capacity) }}" required>
        <br>
        <button type="submit"><i class="fas fa-save"></i> Update</button>
    </form>
<br><hr><br>
<form action="{{ route('user.update') }}" method="post">
    @csrf
    <label for="company">Company:</label>
    <input type="text" name="company" value="{{ old('company', $user->company) }}" required>
    <br>
    <label for="addcompany">Addresse company:</label>
    <input type="text" name="addcompany" value="{{ old('addcompany', $user->addcompany) }}" required>
    <br>
    <label for="emcompany">Email company:</label>
    <input type="text" name="emcompany" value="{{ old('emcompany', $user->emcompany) }}" required>
    <br>
    <label for="phcompany">Phone company:</label>
    <input type="text" name="phcompany" value="{{ old('phcompany', $user->phcompany) }}" required>
    <br>
    <button type="submit"><i class="fas fa-save"></i> Update</button>
</form>

<br><hr><br>
        <h2>Change Your Password</h2>
        <form action="{{ route('user.change-password') }}" method="post">
            @csrf
            <label for="current_password">Current Password:</label>
            <input type="password" name="current_password" required>
            <br>
            <label for="password">New Password:</label>
            <input type="password" name="password" required>
            <br>
            <label for="password_confirmation">Confirm New Password:</label>
            <input type="password" name="password_confirmation" required>
            <br><br>
            <button type="submit"><i class="fas fa-key"></i> Change Password</button>
        </form>

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" ><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </div>
</body>
</html>
