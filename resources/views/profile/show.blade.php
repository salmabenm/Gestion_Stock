<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER ACCOUNT</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <style>
       body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    background-image: url("{{ asset('image/firstpage.jpg') }}");
    background-size: cover; 
    background-position: center center; 
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 20px;
}

.profile {
    text-align: center;
    margin-bottom: 30px;
}

.profile h1 {
    font-size: 32px;
    margin: 0;
    color: #333;
}

.profile p {
    font-size: 18px;
    color: #666;
}

.navigation ul {
    list-style: none;
    padding: 0;
}

.navigation li {
    margin-bottom: 15px;
}

.navigation a {
    display: flex;
    align-items: center;
    padding: 10px;
    text-decoration: none;
    color: #333;
    border-radius: 10px;
    transition: background-color 0.3s ease;
}

.navigation i {
    font-size: 24px;
    margin-right: 15px;
}

.navigation a:hover {
    background-color: #f2f2f2;
}

.content {
    display: none;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

.content h2 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #333;
}

.content p {
    font-size: 18px;
    color: #666;
}

form {
    margin-top: 20px;
}

form label {
    display: block;
    font-size: 18px;
    margin-bottom: 5px;
    color: #333;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
}

form button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: orange;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: wheat;
}

.container form .content {
    text-align: center;
}

    </style>
    <script>
        function logout() {
        // Send a POST request to the logout route using Laravel's CSRF token
        fetch('/logout', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => {
            if (response.ok) {
                // Successful logout, redirect to the desired page (e.g., login page)
                window.location.href = '/login'; // Replace '/login' with your desired URL
            } else {
                // Handle error, if any
                console.error('Logout failed');
            }
        })
        .catch(error => {
            console.error('Logout failed:', error);
        });
    }
    function showDashboard() {
    hideAllContent();
    document.getElementById("dashboard").style.display = "block";
}

function showUpdateInfo() {
    hideAllContent();
    document.getElementById("update-info").style.display = "block";
}

function showUpdatePassword() {
    hideAllContent();
    document.getElementById("update-password").style.display = "block";
}

function hideAllContent() {
    const contentElements = document.querySelectorAll(".content");
    contentElements.forEach((element) => {
        element.style.display = "none";
    });
}

    </script>
</head>
<body>
    <div class="container">
        <div class="profile">
            <img src="image/title2.png" alt="" style="width: 353px; height:60px">
            <h1>{{ Auth::user()->name }}</h1>
            <p>Email: {{ Auth::user()->email }}</p>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="#" onclick="showUpdateInfo()">Update Information</a></li>
                <li><a href="#" onclick="showUpdatePassword()">Update Password</a></li>
                <li><a href="#" onclick="logout()">Logout</a></li>
            </ul>
        </div>
        <div class="content" id="dashboard">
            <!-- Dashboard content here -->
            <h2>Dashboard</h2>
            <p>Welcome to your dashboard. You can display your data here.</p>
        </div>
        <div class="content" id="update-info" style="display: none;">
            <!-- Update Information content here -->
            <h2>Update Information</h2>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <p>user informations:</p>
                <input type="text" id="name" name="name" placeholder="Enter your name">
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <input type="text" id="telephone" name="telephone" placeholder="Enter your phone number">
                <input type="text" id="adresse" name="adresse" placeholder="Enter your adresse">
                <button type="submit">Update</button>
            </form>
            
            <form action="{{ route('poste.store') }}" method="POST">
                    @csrf
                    <p>Poste informations:</p>
                    <input type="text" id="poste" name="poste" placeholder="Enter your poste" required>
                    <input type="text" id="location" name="location" placeholder="Enter your location" required>
                    <button type="submit">Update</button>
            </form>
            <form action="{{ route('warehouse.store') }}" method="POST">
                @csrf
                <p>Warehouse informations:</p>
                <input type="text" id="warehouse" name="warehouse" placeholder="Enter your warehouse" required>
                <input type="text" id="warehouseadresse" name="warehouseadresse" placeholder="Enter your warehouse adresse" required>
                <input type="text" id="capacity" name="capacity" placeholder="Enter your warehouse capacity" required>
                <button type="submit">Update</button>
            </form>

            <form action="{{ route('company.store') }}" method="POST">
                @csrf
                <p>Company informations:</p>
                <input type="text" id="company" name="company" placeholder="Enter your company" required>
                <input type="text" id="addcompany" name="addcompany" placeholder="Enter your company adresse" required>
                <input type="email" id="emcompany" name="emcompany" placeholder="Enter your company email" required>
                <input type="text" id="phcompany" name="phcompany" placeholder="Enter your company phone" required>
            
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="content" id="update-password" style="display: none;">
            <!-- Update Password content here -->
            <h2>Update Password</h2>
            <form>
                <label for="current-password">Current Password:</label>
                <input type="password" id="current-password" name="current-password" placeholder="Enter current password">

                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" name="new-password" placeholder="Enter new password">

                <label for="confirm-new-password">Confirm New Password:</label>
                <input type="password" id="confirm-new-password" name="confirm-new-password" placeholder="Confirm new password">

                <button type="submit">Update Password</button>
            </form>
        </div>
    </div>
</body>
</html>
